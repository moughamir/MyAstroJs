<?php
	class Tchat
	{
		public $id;
		public $title;
		public $seer;
		public $messages = array();
		protected $bdd;
		const TABLE_SCENARIO = 'tchat_scenario';
		const TABLE_MESSAGES = 'tchat_messages';

		function __construct($bdd, $id=null){
			if(!$bdd || !is_object($bdd)){
				return false;
			}
			$this->bdd = $bdd;
			$this->id  = ($id !== null) ? $id : 1 ;
			$names = $this->bdd->query("SET NAMES 'utf8'");
			$data = $this->bdd->get_row('SELECT * FROM '.self::TABLE_SCENARIO.' WHERE id="'.$this->id.'"');

			if($data){
				$this->title 	= $data->title;
				$this->seer 	= $data->seer_name;
				$this->getMessages();
			}

		}

		public function getTitle(){
			return $this->bdd->get_var('SELECT `title` FROM '.self::TABLE_SCENARIO.' WHERE id="'.$this->id.'"');
		}

		public function getSeer(){
			return $this->bdd->get_var('SELECT `seer_name` FROM '.self::TABLE_SCENARIO.' WHERE id="'.$this->id.'"');
		}

		public function getMessages(){
			$messages = $this->bdd->get_results('SELECT * FROM '.self::TABLE_MESSAGES.' WHERE id_scenario="'.$this->id.'" ORDER BY `order`');
			if($messages){
				foreach($messages as $message){
					$this->messages[] = array("text" => $message->text, "delta" => $message->delta);
				}
			}
		}
	}
?>