<?php
	class Tchat
	{
		public $id;
		public $title;
		public $seer;
		public $messages      = array();
		protected $bdd;
		const TABLE_SCENARIO  = 'tchat_scenario';
		const TABLE_MESSAGES  = 'tchat_messages';
		const ENABLED         = 1;
		const DISABLED        = 0;
		const DRAFT           = 2;
		public $numericStatus = array('draft' => 2,'enable' => 1,'disable' => 0);

		function __construct($bdd){
			if(!$bdd || !is_object($bdd)){
				return false;
			}
			$this->bdd = $bdd;
			$names = $this->bdd->query("SET NAMES 'utf8'");
		}
		
		/**
		 * Function to get a tchat scenario. With by id if given, random either.
		 * @param  [int] $id [default null]
		 * @return [void]
		 */
		public function get($id=null){
			if(!$id){
				$listeOnline = $this->bdd->get_results('SELECT id FROM '.self::TABLE_SCENARIO.' WHERE enable='.self::ENABLED );
				$randomArray = array();
				foreach ($listeOnline as $value) {
					$randomArray[] = $value;
				}
				shuffle($randomArray);
				$this->id  = array_shift($randomArray)->id ;
			}
			else{
				$this->id = $id;
			}
			
			$data = $this->bdd->get_row('SELECT * FROM '.self::TABLE_SCENARIO.' WHERE id="'.$this->id.'"');

			if($data){
				$this->title 	= $data->title;
				$this->seer 	= $data->seer_name;
				$this->getMessages();
			}
		}
		/**
		 * Load scenario depending to the question asked by user
		 * @param  [string] $trigger
		 * @return [void]
		 */
		public function getByTrigger($trigger){
			$listeOnline = $this->bdd->get_results('SELECT id FROM '.self::TABLE_SCENARIO.' WHERE enable='.self::ENABLED .' AND `trigger`="'.$trigger.'"' );
			if(!$listeOnline || empty($listeOnline)){
				$this->get();
			}else{
				$randomArray = array();
				foreach ($listeOnline as $value) {
					$randomArray[] = $value;
				}
				shuffle($randomArray);
				$this->id  = array_shift($randomArray)->id;
				$this->get($this->id);
			}
		}

		/**
		 * getAll function : Return all scenario for status if asked, all either
		 * @param  [string] $status
		 * @return [array] array of scenario
		 */
		public function getAll($status = null){
			$where = ($status != null) ? 'AND enable="'.$this->getNumericStatus($status).'"' : '';
			return $this->bdd->get_results('SELECT * FROM '.self::TABLE_SCENARIO.' WHERE 1 '.$where);
		}

		public function getNumericStatus($status){
			switch($status){
				case 'draft':
					return self::DRAFT;
				break;
				case 'disable':
					return self::DISABLED;
				break;
				case 'enable':
					return self::ENABLED;
				break;
				default:
					return self::DRAFT;
				break;
			}
		}

		/**
		 * getTitle function
		 * @return [string] 
		 */
		public function getTitle(){
			return $this->bdd->get_var('SELECT `title` FROM '.self::TABLE_SCENARIO.' WHERE id="'.$this->id.'"');
		}

		/**
		 * [getSeer function]
		 * @return [string] 
		 */
		public function getSeer(){
			return $this->bdd->get_var('SELECT `seer_name` FROM '.self::TABLE_SCENARIO.' WHERE id="'.$this->id.'"');
		}

		/**
		 * getMessages function : Set all messages for the scenario
		 * @return [void]
		 */
		public function getMessages(){
			$messages = $this->bdd->get_results('SELECT * FROM '.self::TABLE_MESSAGES.' WHERE id_scenario="'.$this->id.'" ORDER BY `order`');
			if($messages){
				foreach($messages as $message){
					$this->messages[] = array("text" => $message->text, "delta" => $message->delta);
				}
			}
		}

		/**
		 * disable function
		 * @param  [int] $id
		 * @return [void]
		 */
		public function disable($id=null){
			$this->bdd->update(self::TABLE_SCENARIO,
					array('enable' => self::DISABLED),
					array('id'     => ($id==null) ? $this->id : $id)
				);
		}

		/**
		 * enable function
		 * @param  [int] $id
		 * @return [void]
		 */
		public function enable($id=null){
			$this->bdd->update(self::TABLE_SCENARIO,
					array('enable' => self::ENABLED),
					array('id'     => ($id==null) ? $this->id : $id)
				);
		}

		/**
		 * [draft function]
		 * @param  [int] $id 
		 * @return [void]
		 */
		public function draft($id=null){
			$this->bdd->update(self::TABLE_SCENARIO,
					array('enable' => self::DRAFT),
					array('id'     => ($id==null) ? $this->id : $id)
				);
		}

		/**
		 * save function : save scenario and messages in DB.
		 * @param  [array] $infos [name + seer]
		 * @return [boolean]
		 */
		public function save($infos){
			if(!$infos){
				return false;
			}

			$insert = $this->bdd->insert(self::TABLE_SCENARIO,
				array(
					'title'     => $infos['name'],
					'seer_name' => $infos['seer'],
					'trigger'   => $infos['trigger'],
					'enable'    => self::DRAFT,
					'created'   => date('Y-m-d H:i:s'),
					'updated'   => date('Y-m-d H:i:s')
				)
			);

			if($insert){
				$msgs = array();
				foreach($infos['messages'] as $key => $value){
					$msgs[$key] = array('text' => $value, 'id_scenario' => $this->bdd->insert_id, 'delta' => NULL, 'order' => $key + 1);
				}
				foreach($msgs as $msg){
					$this->bdd->insert(self::TABLE_MESSAGES,$msg);
				}
				return true;
			}else{
				return false;
			}
		}

		/**
		 * update function : Delete all messages and reinsert them with $infos['messages'] content
		 * @param  [array] $infos [ID + messages]
		 * @return [boolean]
		 */
		public function update($infos){
			if(!$infos){
				return false;
			}
			$this->bdd->query('DELETE FROM '.self::TABLE_MESSAGES.' WHERE `id_scenario` = "'.$infos['ID'].'" ');

			$msgs = array();
			foreach($infos['messages'] as $key => $value){
				$msgs[$key] = array('text' => $value, 'id_scenario' => $infos['ID'], 'delta' => NULL, 'order' => $key + 1);
			}
			foreach($msgs as $msg){
				$updated = $this->bdd->insert(self::TABLE_MESSAGES,$msg);
				if(!$updated){
					return false;
				}
			}
			return true;
		}
	}
?>