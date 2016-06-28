<?php
	ini_set('memory_limit', '512M');
	ini_set('max_execution_time', 2000);
	class Tracker{
		public 	  $tracker;    // $_GET['r'] dans l'URL (string)
		public 	  $tracker_id; // id de la campagne (integer)
		public 	  $source;     // nom de la source (string)
		public    $campain;    // nom de la campagne (string)
		public 	  $website;    // nom du site (string)
		protected $bdd;        // Connexion BDD (object)
		const TABLE_TRACKING         = 'tracking_trackers';
		const TABLE_TRACKING_USERS   = 'tracking_users';
		const TABLE_TRACKING_SOURCES = 'tracking_sources';
		const TABLE_TRACKING_WEBSITE = 'tracking_website';
		const TABLE_TRACKING_RDV     = 'tracking_rdv';
		const TABLE_TRACKING_GROUPS  = 'tracking_groups';
		const TABLE_TRACKING_DISPLAY = 'tracking_displays';
		const TABLE_TRACKING_CAMPAIGN = 'tracking_campaign';
		const TABLE_TRACKING_PAYMENT = 'tracking_payment';
		const DUPLICATES_RANGE		 = 1200; // Time between 2 tracks for same user to avoid duplicates ( 20mn )

		function __construct($bdd){
			$this->bdd = $bdd;
			$this->tracker = (isset($_REQUEST['r']) && !empty($_REQUEST['r'])) ? $_REQUEST['r'] : null;
		}
                
		/**
		 * Give informations for current visitor
		 * @return void
		 */
		public function getInfos()
		{
                    $this->source  = $this->getSourceName();
                    $this->campain = $this->getCampain();
                    $this->website = $this->getWebsitefromURL($_SERVER['HTTP_HOST']);
//                    if ($this->getSourceIDFromUrl() != NULL) {
//                        $this->website = $this->getWebsite($this->getSourceIDFromUrl());
//                    } else {
//                        $this->website = NULL;
//                        if($this->campain !== null ) {
//                            $error = "SOURCE NON TROUVEE > Tracker : ".$this->tracker." | Campagne : ".$this->campain." | URL : ".$this->getCanonicalUrl();
//                            $this->addLog($error);
//                        }
//                    }
                    
                    $this->tracker_id = $this->getID();

                    // Si jamais on a pas d'id_tracker mais une source de googleads : ERREUR => Log
                    if( $this->tracker_id == null && isset($_SERVER['HTTP_REFERER']) && preg_match('#googleads#',$_SERVER['HTTP_REFERER']) && $this->source!== NULL ){
                        $error = "TRACKER NON TROUVE > Source : ".$this->source." | Tracker : ".$this->tracker." | URL : ".$_SERVER['REQUEST_URI'];
                        $this->addLog($error);
                    }
                }

		/**
		 * Get canonical tag
		 * @return string 
		 */
		public function getCanonical()
		{
			return '<link rel="canonical" href="'.$this->getCanonicalUrl(true).'">';
		}

		/**
		 * Get canonical url
		 * @param  boolean $prefixHttp need http::/ ?
		 * @return string              
		 */
		public function getCanonicalUrl($prefixHttp = false)
		{
                    if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
                        return ($prefixHttp ? 'http://' : '').str_replace('?'.$_SERVER['QUERY_STRING'],'',$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
                    }
                    else {
                        return ($prefixHttp ? 'http://' : '').$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                    }
			
		}

		public function getID()
		{
                    $id = $this->bdd->get_var('SELECT id FROM '.self::TABLE_TRACKING.' WHERE tracker="'.$this->tracker.'"');
                    
                    return $id;
		}

		public function getCampain()
		{
			return $this->bdd->get_var('SELECT campain FROM '.self::TABLE_TRACKING.' WHERE tracker="'.$this->tracker.'"');
		}

		public function getStartDate()
		{
			return $this->bdd->get_var('SELECT startDate FROM '.self::TABLE_TRACKING.' WHERE tracker="'.$this->tracker.'"');
		}

		public function isEnable()
		{
			$enable = $this->bdd->get_var('SELECT enable FROM '.self::TABLE_TRACKING.' WHERE tracker="'.$this->tracker.'"');
			return ($enable == 1) ? true : false ;
		}

		public function getSourceIDFromUrl()
		{
			return $this->bdd->get_var('SELECT id FROM '.self::TABLE_TRACKING_SOURCES.' WHERE url="'.$this->getCanonicalUrl().'"');
		}

		public function getSourceIDFromName($source=null)
		{
			$where = ($source == null) ? $this->source : $source;
			return $this->bdd->get_var('SELECT id FROM '.self::TABLE_TRACKING_SOURCES.' WHERE source="'.$where.'"');
		}

		public function getSourceName()
		{
			return $this->bdd->get_var('SELECT source FROM '.self::TABLE_TRACKING_SOURCES.' WHERE url="'.$this->getCanonicalUrl().'"');
		}

		public function isSourceEnable()
		{
			$enable = $this->bdd->get_var('SELECT enable FROM '.self::TABLE_TRACKING_SOURCES.' WHERE url="'.$this->getCanonicalUrl().'"');
			return ($enable == 1) ? true : false ;
		}

		public function getWebsite($sourceID)
		{
                    return $this->bdd->get_var('SELECT website.name FROM `'.self::TABLE_TRACKING_WEBSITE.'` AS website INNER JOIN `'.self::TABLE_TRACKING_SOURCES.'` AS source ON source.id_website = website.id WHERE source.id = '.$sourceID);
		}
		
                public function getWebsitefromURL($host)
		{
                    return $this->bdd->get_var('SELECT website.name FROM `'.self::TABLE_TRACKING_WEBSITE."` AS website WHERE website.url = '".$host."'");
		}

		public function getWebsitename($websiteID)
		{
                    return $this->bdd->get_var('SELECT website.name FROM `'.self::TABLE_TRACKING_WEBSITE.'` AS website WHERE website.id="'.$websiteID.'"');
		}

		public function getGroups()
		{
			return $this->bdd->get_results('SELECT * FROM '.self::TABLE_TRACKING_GROUPS);
		}

		public function getGroupNameFromTrackerId($id_tracker)
		{
			$id_group = $this->bdd->get_var('SELECT tracker.group FROM '.self::TABLE_TRACKING.' WHERE id="'.$id_tracker.'"');
			return $this->bdd->get_var('SELECT group.name FROM `'.self::TABLE_TRACKING_GROUPS.'` AS group WHERE group.id="'.$id_group.'"');
		}

		public function getGroupNameFromId($id_group)
		{
			return $this->bdd->get_var('SELECT name FROM '.self::TABLE_TRACKING_GROUPS.' WHERE id="'.$id_group.'"');
		}

		public function addGroup($infos)
		{
			return $this->bdd->insert(
					self::TABLE_TRACKING_GROUPS,
					$infos // name, id_user
				);
		}

		/**
		 * Log function // only used to check if there's untracked campain (modifiée par laurène le 8/10/14 pour pouvoir tous logger)
		 */
		public function addLog($error)
		{
			$handle = fopen(realpath(dirname(__FILE__)).'/trackers.log','a+');
//			if(filesize($handle) > 10240){ // On truncate au dessus de 10Ko.
//				ftruncate($handle,0);
//			}
			$error ="[".date('Y-m-d H:i:s')."] - ".$error."\r\n";
			$write = fwrite($handle,$error);
			fclose($handle);
		}

		public function getGroupSelect($id_selected = null, $class = 'form-control')
		{
			$select = '<select name="tracking_group" class='.$class.'>';
			$select .= '<option value="0">Aucun groupe</option>';
			foreach($this->bdd->get_results('SELECT * FROM '.self::TABLE_TRACKING_GROUPS) as $group){
				$selected = ($group->id == $id_selected) ? 'selected' : '';
				$select .= '<option value="'.$group->id.'" '.$selected.'>'.$group->name.'</option>';
			}
			$select .= '</select>';
			return $select;
		}

		/**
		 * Insert tracking in database.
		 * @param int $id_user 
		 * @param int $tracker 
		 */
		public function addTrackingUser($id_user, $tracker=null)
		{
			if (!$id_user)
				return;

			$this->duplicates($id_user);

			if ($tracker==null) {
				return $this->bdd->insert(
					self::TABLE_TRACKING_USERS,
					array(
						'id_tracker' => $this->getID(),
						'id_user'    => $id_user,
						'id_source'  => $this->getSourceIDFromUrl(),
						'id_website' => $this->website,
						'date'       => date('Y-m-d H:i:s'),
						'SSID'		 => session_id()
					)
				);
			} else {
//                            if($_SERVER['REMOTE_ADDR']=='80.15.60.147') {
//                                var_dump($tracker); return;
//                            }
				return $this->bdd->insert(
					self::TABLE_TRACKING_USERS,
					array(
						'id_tracker' => $tracker['tracker']->tracker_id,
						'id_user'    => $id_user,
						'id_source'  => $this->getSourceIDFromName($tracker['tracker']->source),
                                                'id_website' => $this->website,
						'date'       => date('Y-m-d H:i:s'),
						'SSID'		 => session_id()
					)
				);
			}
		}

		/**
		 * Avoid duplicate insert in Database ( with range of time DUPLICATES_RANGE )
		 * @param  int $id_user 
		 * @return void          
		 */
		public function duplicates($id_user)
		{
			$lowDate = date('Y-m-d H:i:s',time() - self::DUPLICATES_RANGE);
			$highDate= date('Y-m-d H:i:s');
			$query = 'DELETE FROM `'.self::TABLE_TRACKING_USERS.'` 
						WHERE id_user = "'.$id_user.'"
						AND date > "'.$lowDate.'"
						AND date < "'.$highDate.'"';
			$this->bdd->query($query);
		}

		/**
		 * Save all data in php session
		 * @return void 
		 */
		public function saveInSession()
		{
			$this->getInfos();
                        // si on trouve une source à tracker, on enregistre le display
			if($this->getSourceIDFromName($this->source) != NULL){
				$this->addDisplay($this->tracker_id,$this->getSourceIDFromName($this->source));
			}
			$_SESSION['tracker'] = $this;
		}

		public function getStatsByCampain($startDate = null, $endDate = null)
		{
			$where    = (isset($startDate) 	&& !empty($startDate)) 	? ' AND user.date > "'.$startDate.'"' 	: '';
			$where    .= (isset($endDate) 	&& !empty($endDate)) 	? ' AND user.date < "'.$endDate.'"' 	: '' ;
			$where    .= (isset($this->website) && !empty($this->website)) ? ' AND website.id ='.$this->website : '';
			$jointure = (isset($this->website) && !empty($this->website)) ? ' LEFT OUTER JOIN '.self::TABLE_TRACKING_WEBSITE.' AS website ON source.id_website = website.id' : '';

			$query = 'SELECT tracker.tracker, tracker.campain, COUNT(*) AS many
					  FROM '.self::TABLE_TRACKING_USERS.' AS user
                      LEFT OUTER JOIN '.self::TABLE_TRACKING.' AS tracker ON user.id_tracker = tracker.id
					  LEFT OUTER JOIN '.self::TABLE_TRACKING_SOURCES.' AS source ON user.id_source = source.id
					  '.$jointure.'
					  WHERE 1 '.$where.'
					  GROUP BY tracker.campain';
			return $this->bdd->get_results($query);
		}

		public function getWebsiteCampain($identifiant)
		{
			if (substr($identifiant,0,1) != '0' && substr($identifiant,0,1) != 'w') { // Si c'est différent d'une campagne générale
				$explode = explode('-',$identifiant);
				$idwebsite = $explode[0];
				$idtracker = $explode[1];
				$siteName = $this->bdd->get_var('SELECT name FROM '.self::TABLE_TRACKING_WEBSITE.' WHERE id ="'.$idwebsite.'"');
				$campain = $this->bdd->get_var('SELECT campain FROM '.self::TABLE_TRACKING.' WHERE id ="'.$idtracker.'"');
				return $siteName.'-'.$campain;
			} else {
				if (substr($identifiant,0,1) == '0') {
					$idtracker = substr($identifiant,2);
					return 'Tous sites confondus : '.$this->bdd->get_var('SELECT campain FROM '.self::TABLE_TRACKING.' WHERE id ="'.$idtracker.'"');
				}
				if (substr($identifiant,0,1) == 'w') {
					$idtracker = substr($identifiant,2);
					return 'Toutes les campagnes : '.$this->bdd->get_var('SELECT name FROM '.self::TABLE_TRACKING_WEBSITE.' WHERE id ="'.$idtracker.'"');
				}
			}
		}

		public function getStatsByCampainFilters($filters, $startDate = null, $endDate = null)
		{
                    $where = (isset($startDate) && !empty($startDate)) ? ' AND user.date > "'.$startDate.'"' : '';
                    $where .= (isset($endDate) && !empty($endDate)) ? ' AND user.date < "'.$endDate.'"' : '';
                    
                    $resultsCampainsArray = array();
                    $resultsWebsitesArray = array();
                    $return = array();
                    
                    foreach ($filters as $filter) {
                        if (substr($filter,0,1) != '0' && substr($filter,0,1) != 'w') { // Si c'est différent d'une campagne générale
                            $explode = explode('-',$filter);
                            $idwebsite = $explode[0];
                            $idtracker = $explode[1];
                            
                            // WEBSITES
                            $queryWebsites = 'SELECT user.id AS userID , website.name AS siteName FROM '.self::TABLE_TRACKING_USERS.' AS user
                                INNER JOIN '.self::TABLE_TRACKING_SOURCES.' AS source ON source.id = user.id_source
                                INNER JOIN '.self::TABLE_TRACKING_WEBSITE.' AS website ON source.id_website = website.id
                                WHERE website.id = '.$idwebsite .$where;
                            $res = $this->bdd->get_results($queryWebsites);
                            
                            if (!empty($res)){
                                $resultsWebsitesArray[$idwebsite] = array();
                                foreach ($res as $r){
                                    $resultsWebsitesArray[$idwebsite][] = $r->userID;
                                }
                            } else {
                                $resultsWebsitesArray[$idwebsite] = 0;
                            }
                            
                            if (is_array($resultsWebsitesArray[$idwebsite]) && !empty($resultsWebsitesArray[$idwebsite])) {
                                //CAMPAINS
                                $queryCampains = 'SELECT COUNT(*) AS many, tracker.campain '
                                    . 'FROM '.self::TABLE_TRACKING_USERS.' AS user '
                                    . 'INNER JOIN  '.self::TABLE_TRACKING.' AS tracker ON user.id_tracker = tracker.id '
                                    . 'WHERE tracker.id = "'.$idtracker.'"
                                        AND user.id IN ('.implode(',',$resultsWebsitesArray[$idwebsite]).')
					GROUP BY tracker.id';
                                $res = $this->bdd->get_results($queryCampains);
                                
                                if($res && !empty($res)){
                                    $return[$idwebsite.'-'.$idtracker] = $res[0]->many;
                                } else {
                                    $return[$idwebsite.'-'.$idtracker] = 0;
                                }
                            } else {
                                $return[$idwebsite.'-'.$idtracker] = 0;
                            }
                        } else {
                            if (substr($filter,0,1) == '0') { // Auncun site choisi
                                $tracker = substr($filter,2);
                                $query = 'SELECT COUNT(*) AS nombre FROM '.self::TABLE_TRACKING_USERS.' AS user
                                    INNER JOIN '.self::TABLE_TRACKING.' AS tracker ON tracker.id = user.id_tracker
                                    WHERE tracker.id = "'.$tracker.'"';
                                $return[$filter] = $this->bdd->get_var($query);
                            }
                            
                            if (substr($filter,0,1) == 'w') {
                                $tracker = substr($filter,2);
                                $query = 'SELECT COUNT( * )'
                                        . ' FROM '.self::TABLE_TRACKING_USERS.' AS user'
                                        . ' INNER JOIN '.self::TABLE_TRACKING_SOURCES.' AS source ON user.id_source = source.id'
                                        . ' INNER JOIN '.self::TABLE_TRACKING_WEBSITE.' AS website ON website.id = source.id_website'
                                        . ' WHERE website.id = "'.$tracker.'"';
                                $return[$filter] = $this->bdd->get_var($query);
                            }
                        }
                    } // End foreach filter
                    
                    
                    return $return;
		}

		public function getStatsBySources($startDate=null, $endDate = null, $filters = array())
		{
			$where    = (isset($startDate) && !empty($startDate)) ? ' AND user.date > "'.$startDate.'"' : '';
			$where    .= (isset($endDate) && !empty($endDate)) ? ' AND user.date < "'.$endDate.'"' : '' ;
			$where    .= (isset($this->website) && !empty($this->website)) ? ' AND website.id ='.$this->website : '';
			$where    .= (!empty($filters)) ? ' AND source.id IN ( '.implode(',',$filters).' )' : '' ;
			$jointure = (isset($this->website) && !empty($this->website)) ? ' LEFT OUTER JOIN '.self::TABLE_TRACKING_WEBSITE.' AS website ON source.id_website = website.id' : '';
			
			$query = 'SELECT tracker.tracker, tracker.campain, source.source,COUNT(*) AS many
						FROM '.self::TABLE_TRACKING_USERS.' AS user
						LEFT OUTER JOIN '.self::TABLE_TRACKING.' AS tracker ON user.id_tracker = tracker.id
						LEFT OUTER JOIN '.self::TABLE_TRACKING_SOURCES.' AS source ON user.id_source = source.id
						'.$jointure.'
						WHERE 1 '.$where.'
						GROUP BY source.source';
			return $this->bdd->get_results($query);	
		}

		public function getSelectFilterCampains($campains = array())
		{
                    $campainsFromBdd = $this->bdd->get_results('SELECT * FROM '.self::TABLE_TRACKING);
                    $websites = $this->bdd->get_results('SELECT * FROM '.self::TABLE_TRACKING_WEBSITE);
                    
                    $select = '
			<select class="form-control chosen-select" data-placeholder="Choisir une ou plusieurs campagnes" name="campains[]" multiple="multiple" id="campainsSelector" >';

			$select .= '<optgroup label="Tous sites confondus" >';
			foreach ($campainsFromBdd as $camp) {
				$selected = (in_array('0-'.$camp->id, $campains)) ? 'selected="selected"' : '';
				$select .= '<option value="0-'.$camp->id.'"  '.$selected.'>'.$camp->campain.'</option>';
			}
			$select .= '</optgroup>';
			foreach ($websites as $site) {
				$select .= '<optgroup label="'.$site->name.'" >';
					$selected = (in_array('w-'.$site->id, $campains)) ? 'selected="selected"' : '';
					$select .= '<option value="w-'.$site->id.'" '.$selected.'>Toutes les campagnes sur '.$site->name.'</option>';
					foreach ($campainsFromBdd as $camp) {
						$selected = (in_array($site->id.'-'.$camp->id, $campains)) ? 'selected="selected"' : '';
						$select .= '<option value="'.$site->id.'-'.$camp->id.'" '.$selected.'>'.$site->name.'-'.$camp->campain.'</option>';
					}
				$select .= '</optgroup>';
			}
			$select .='</select>';

			return $select;
		}

		public function getSelectFilterSources($sources = array())
		{

			$datas = $this->bdd->get_results('SELECT website.name as siteName, website.id as websiteID, source.source as sourceName,source.id as sourceID FROM `'.self::TABLE_TRACKING_SOURCES.'` AS source
				INNER JOIN '.self::TABLE_TRACKING_WEBSITE.' AS website ON website.id = source.id_website
				ORDER BY website.name');
			$optgroup = '';
			$i = 0;
			$select = '
			<select class="form-control chosen-select" data-placeholder="Choisir une ou plusieurs sources" name="sources[]" multiple="multiple" id="sourcesSelector" >';
			
			foreach ($datas as $data) {
				if (!empty($optgroup) && ( $optgroup != $data->siteName || $i+1 == count($datas))) {
					$select .= '</optgroup>';
				}
				if (empty($optgroup) || $optgroup != $data->siteName) {
					$select .= '<optgroup label="'.$data->siteName.'" >';
				}
				
				$selected = (in_array($data->sourceID, $sources)) ? 'selected="selected"' : '';
				$select .= '<option value="'.$data->sourceID.'" '.$selected.'>'.$data->siteName.'-'.$data->sourceName.'</option>';
				$optgroup = $data->siteName;
				$i++;
			}
			
			$select .='</select>';

			return $select;
		}

		public function getCampainList()
		{
			$query = 'SELECT * FROM '.self::TABLE_TRACKING;
			return $this->bdd->get_results($query);
		}
                
                public function getCampainById($id){
                    $query = 'SELECT * FROM '.self::TABLE_TRACKING.' WHERE id = %d';
                    $campain = $this->bdd->get_row(
                        $this->bdd->prepare($query, $id)
                    );
                    return $campain;
                }

		public function addTracker($tracker, $campain, $idcampain, $group = 0)
		{
			return $this->bdd->insert(
				self::TABLE_TRACKING,
				array(
					'tracker'   => $tracker,
					'campain'   => $campain,
                                        'idcampain' => $idcampain,
					'startDate' => date('Y-m-d H:i:s'),
					'enable'    => 1,
					'group'		=> $group
				)
			);
		}
                
		public function updateTracker($id, $tracker, $campain, $idcampain, $enable)
		{
                    return $this->bdd->update( 
                        self::TABLE_TRACKING, // table
                        array( // data
                            'tracker' => $tracker,	
                            'idcampain' => $idcampain,
                            'campain' => $campain,
                            'enable' => $enable
                        ), 
                        array('id' => $id) // where
                    );
		}

		public function getWebsiteList()
		{
			$query = 'SELECT * FROM '.self::TABLE_TRACKING_WEBSITE;
			return $this->bdd->get_results($query);
		}

		public function getSourcesList()
		{
			$query = 'SELECT source.*, website.name as sitename FROM '.self::TABLE_TRACKING_SOURCES.' AS source 
			INNER JOIN '.self::TABLE_TRACKING_WEBSITE . ' as website ON website.id = source.id_website' ;
			return $this->bdd->get_results($query);
		}

		public function addSource($websiteID,$source,$url)
		{
			return $this->bdd->insert(
				self::TABLE_TRACKING_SOURCES,
				array(
					'id_website' => $websiteID,
					'source' => $source,
					'url' => $url,
					'enable' => 1
				)
			);
		}

		public function addWebsite($name, $url)
		{
			return $this->bdd->insert(
				self::TABLE_TRACKING_WEBSITE,
				array(
					'name' => $name,
					'url' => $url,
				)
			);
		}

		public function addRdv($data, $apiCall = false)
		{
			$champs = array(
							'id_user' => $data['id'],
							'amount'  => $data['price'],
							'date'    => $data['date'] ?: date('Y-m-d')
						);

			if($data['code_promo']){

				// GET CODE PROMO ID
				$query = 'SELECT campaign.id FROM '.self::TABLE_TRACKING_CAMPAIGN.' AS campaign WHERE campaign.code_promo ="'.$data['code_promo'].'"';
				$results = $this->bdd->get_row($query);
				$msg_id = $results->id;
				if($msg_id){
					
					$champs['id_msg'] = $msg_id;
				}
				
			}

			$insert = $this->bdd->insert(self::TABLE_TRACKING_RDV, $champs);
				

			if (!$insert) {
				return false;
			} else {
				$query = 'SELECT source.source AS sourcename, source.url AS url, website.name AS sitename, tracker.campain AS campain
				FROM '.self::TABLE_TRACKING_USERS.' AS user 
				LEFT OUTER JOIN '.self::TABLE_TRACKING_SOURCES.' AS source ON user.id_source = source.id 
				LEFT OUTER JOIN '.self::TABLE_TRACKING_WEBSITE.' AS website ON source.id_website = website.id
				LEFT OUTER JOIN '.self::TABLE_TRACKING.' AS tracker ON tracker.id = user.id_tracker 
				WHERE user.id_user = "'.$data['id'].'"
				ORDER BY user.date DESC LIMIT 1';

				if (!$apiCall) {
					return $this->bdd->get_row($query);
				} else {
					return  $this->bdd->insert_id;
				}
				
			}
		}

		//ajout encaissement
		public function addCheckout($data, $apiCall = false)
		{
                    $champs = array(
                        'id_rdv' => $data['id_rdv'],
                        'date'    => $data['date'] ?: date('Y-m-d'),
                        'price'  => $data['price']
                    );

                    $insert = $this->bdd->insert(self::TABLE_TRACKING_PAYMENT, $champs);

                    if (!$insert) {
                        return false;
                    } else {
                        return  $this->bdd->insert_id;
                    }
		}

		public function getStatsByCampainPerWebsite($website, $startDate=null, $endDate=null)
		{
			$where    = (isset($startDate) && !empty($startDate)) ? ' AND user.date > "'.$startDate.'"' : '';
			$where    .= (isset($endDate) && !empty($endDate)) ? ' AND user.date < "'.$endDate.'"' : '' ;

			$query = 'SELECT source.id FROM '.self::TABLE_TRACKING_SOURCES.' AS source WHERE source.id_website ="'.$website.'"';
			$res = $this->bdd->get_results($query);
			$sourcesArray = array();
			foreach ($res as $source) {
				$sourcesArray[] = $source->id;
			}

			$query = 'SELECT user.id_user FROM '.self::TABLE_TRACKING_USERS.' AS user WHERE user.id_source IN ('.implode(',',$sourcesArray).')';
			$results = $this->bdd->get_results($query);
                        
			$userArray = array();
			foreach ($results as $user) {
                            $userArray[] = $user->id_user;
			}
                        
			$query = 'SELECT COUNT(user.id) AS total, tracker.campain FROM '.self::TABLE_TRACKING_USERS.' AS user
			LEFT OUTER JOIN '.self::TABLE_TRACKING.' AS tracker ON user.id_tracker = tracker.id 
			WHERE user.id_user IN ('.implode(',',$userArray).') ' . $where .' 
			GROUP BY tracker.campain';
                        
			return $this->bdd->get_results($query);
		}

		public function getAmountPerWebsite($website, $startDate=null, $endDate=null)
		{
			$where    = (isset($startDate) && !empty($startDate)) ? ' AND user.date > "'.$startDate.'"' : '';
			$where    .= (isset($endDate) && !empty($endDate)) ? ' AND user.date < "'.$endDate.'"' : '' ;

			// GET ALL SOURCES FOR WEBSITE
			$query = 'SELECT source.id FROM '.self::TABLE_TRACKING_SOURCES.' AS source WHERE source.id_website ="'.$website.'"';
			$res = $this->bdd->get_results($query);
			$sourcesArray = array();
			foreach ($res as $source) {
				$sourcesArray[] = $source->id;
			}

			// GET ALL USERS FOR THOSE SOURCES
			$query = 'SELECT user.id_user FROM '.self::TABLE_TRACKING_USERS.' AS user WHERE user.id_source IN ('.implode(',',$sourcesArray).') ' . $where;
			$results = $this->bdd->get_results($query);
			$userArray = array();
			$results = $this->bdd->get_results($query);
			foreach ($results as $user) {
				$userArray[] = $user->id_user;
			}

			// GET ALL SOURCE FOR THE WEBSITE || BAM LA REQUETE !
			// Par contre : Si le résultat de la jointure donne user.date = NULL le résultat ne sera pas compté.
			$query = 'SELECT tracker.campain, SUM(rdv.amount) AS total, COUNT(user.id_user) as totalUser FROM `'.self::TABLE_TRACKING_USERS.'` AS user 
						RIGHT JOIN '.self::TABLE_TRACKING.' AS tracker 
						    ON user.id_tracker = tracker.id
						RIGHT JOIN '.self::TABLE_TRACKING_RDV.' AS rdv 
						    ON user.id_user= rdv.id_user
						WHERE 1
							AND user.id_user IN ('.implode(',',$userArray).')
						GROUP BY tracker.campain';

			return $this->bdd->get_results($query);
		}

		public function getStatsForLeadManager($id_lead_manager, $startDate = null, $endDate = null)
		{
			if ($id_lead_manager != null) {
				// First : Get all groups of trackers for that user
				$groups = $this->bdd->get_results('SELECT * FROM '.self::TABLE_TRACKING_GROUPS.' WHERE id_user='.$id_lead_manager);
				if ($groups) {
					$groupsArray = array();
					foreach ($groups as $group) {
						$groupsArray[$group->id] = $group->name;
					}

					$trackersArray = array();
					foreach ($groupsArray as $id => $name) {
						$trackers = $this->bdd->get_results('SELECT * FROM '.self::TABLE_TRACKING.' WHERE `group` ="'.$id.'"');
						if ($trackers) {
							$trackersArray[$name] = array();
							foreach ($trackers as $track) {
								$trackersArray[$name][] = $track->id;
							}
						}
					}
				}
			}

			$tracker_group = array();
			// $list is an Array
			foreach ($trackersArray as $name => $list) {
				$query = 'SELECT display.SSID, display.id_source as source FROM '.self::TABLE_TRACKING_DISPLAY.' AS display WHERE 1 ';
				$query .= ' AND id_tracker IN ('.implode(',',$list).')';
				if ($startDate) {
					$query .= ' AND display.date > "'.$startDate.'"';
				}
				if ($endDate) {
					$query .= ' AND display.date < "'.$endDate.'"';
				}

				$display_SSID = $this->bdd->get_results($query);
				$array_SSID = array();
				foreach ($display_SSID as $SSID) {
					$array_SSID[$SSID->source][] = '"'.$SSID->SSID.'"';
				}

				$tracker_group[$name]['displays'] = array( 'total' => $this->bdd->num_rows, 'SSID' => $array_SSID );
			}

			// Foreach group of tracker, get Total Leads
			foreach ($tracker_group as $group_name => $data) {

				foreach ($data['displays']['SSID'] as $key => $SSID_source) {
					$query_leads = 'SELECT * FROM '.self::TABLE_TRACKING_USERS.' WHERE SSID IN ('.implode(',',$SSID_source).')';
					$result_leads = $this->bdd->get_results($query_leads);
					$tracker_group[$group_name]['leads'][$key] = array('total' => $this->bdd->num_rows);

					foreach ($result_leads as $lead) {
						$tracker_group[$group_name]['leads'][$key]['id_user'][] = $lead->id_user;
					}
				}
			}

			// Foreach group of trackers, get Total Appointement
			foreach ($tracker_group as $group_name => $data) {
				foreach ($data['leads'] as $id_source => $users) {
					$total = $users['total'];
					if ($users['total'] > 0) {
						$query_appointement = 'SELECT * FROM '.self::TABLE_TRACKING_RDV.' WHERE id_user IN ('.implode(',',$users['id_user']).')';
						$results_appointement = $this->bdd->get_results($query_appointement);
						$total = $this->bdd->num_rows;
					}
					$tracker_group[$group_name]['appointement'][$id_source] = array('total' => $total );

					if ($users['total'] > 0){
						foreach ($results_appointement as $appointement) {
							$tracker_group[$group_name]['appointement'][$id_source]['amount'] += $appointement->amount;
						}

						$tracker_group[$group_name]['appointement'][$id_source]['average'] = ceil($tracker_group[$group_name]['appointement'][$id_source]['amount'] / $tracker_group[$group_name]['appointement'][$id_source]['total']);

					} else {
						$tracker_group[$group_name]['appointement'][$id_source]['amount'] = 0;
						$tracker_group[$group_name]['appointement'][$id_source]['average'] = 0;
					}
				}
			}

			return $tracker_group;
		}

		/**
		 * The main method to display statistics. It may be a bit unreadable ! Be sure to check it well, since it renders the document eploited by the person who carries the adwords account
		 * @param  string $startDate 
		 * @param  string $endDate   
		 * @return array    return a really big array that contains more or less the whole DB tracking infos.
		 */
		public function getStatsForWeeklyReport($startDate = null, $endDate = null)
		{			
                    // --- RECUPERATION DES TRACKERS
                    $trackers = $this->bdd->get_results('SELECT * FROM '.self::TABLE_TRACKING.' WHERE enable = 1 ORDER BY campain');
                    $trackersArray['Globale'] = array();
                    foreach ($trackers as $track) {
                        $trackersArray['Globale'][] = array(
                            'ID' => $track->id,
                            'id_campain' => $track->idcampain,
                            'campain' => $track->campain,
                            'report' => 0,
                            'reportpayment' => 0
                        );
                    }
                    
                    // sélectionne tous les rdv de la semaine
                    $sql = 'SELECT * FROM '.self::TABLE_TRACKING_RDV.' WHERE id_user != 0 AND `date` >= "'.$startDate.'" AND `date` <= "'.$endDate.'"';
                    $weeklyAppointement = $this->bdd->get_results($sql, OBJECT_K);
                    $forgottenAppointement = $weeklyAppointement;
                    // sélectionne tous les encaissements de la semaine
                    $sql = 'SELECT * FROM '.self::TABLE_TRACKING_PAYMENT.' WHERE `date` >= "'.$startDate.'" AND `date` <= "'.$endDate.'"';
                    $weeklyPayments = $this->bdd->get_results($sql, OBJECT_K);
                    $forgottenPayments = $weeklyPayments;
                    
                    // ##### RECUPERATION DES STATS POUR CHAQUE TRACKER #####
                    
                    for ($i=0;$i<count($trackersArray['Globale']);$i++) {
                        // - DISPLAYS (affichages d'une page du site trackée) -
                        $sql = 'SELECT * FROM '.self::TABLE_TRACKING_DISPLAY.' WHERE id_tracker = '.$trackersArray['Globale'][$i]['ID'].' AND `date` >= "'.$startDate.'" AND `date` <= "'.$endDate.'"';
                        $displays = $this->bdd->get_results($sql);
                        $trackersArray['Globale'][$i]['displays']['total'] = $this->bdd->num_rows; // nombre de displays ("Visiteurs")
						
                        if (count($displays) > 0) { // on garde les SSID
                            foreach ($displays as $display) {
                                $trackersArray['Globale'][$i]['displays']['SSID'][] = '"'.$display->SSID.'"';
                            }
                        } else { 
                            $trackersArray['Globale'][$i]['displays']['SSID'] = array();
                        }

                        // - LEADS FOR EACH DISPLAYS (inscriptions) -
//                        // Sélection des inscriptions en fonction des affichages
//                        $sql = 'SELECT * FROM '.self::TABLE_TRACKING_USERS.' WHERE SSID IN ('.implode(',',$trackersArray['Globale'][$i]['displays']['SSID']).')';
                        // Sélection des inscriptions seulement à partir de la date
                        $sql = 'SELECT * FROM '.self::TABLE_TRACKING_USERS.' WHERE id_tracker = '.$trackersArray['Globale'][$i]['ID'].' AND `date` >= "'.$startDate.'" AND `date` <= "'.$endDate.'"';
                        $leads = $this->bdd->get_results($sql);
                        $trackersArray['Globale'][$i]['leads']['total'] = $this->bdd->num_rows; // nombre d'inscriptions ("Leads")
                        if (count($leads) > 0) { // on garde les id myastro des inscrits
                            foreach ($leads as $lead) {
                                $trackersArray['Globale'][$i]['leads']['id_user'][] = $lead->id_user;
                            }
                        } else {
                            $trackersArray['Globale'][$i]['leads']['id_user'] = array();
                        }
						
						

                        // - APPOINTEMENT AND PAYMENT FOR EACH LEAD 
                        // (consultations effectives suite à inscription + chiffre réellement encaissé le jour même de la consultation) -
                        $sql = 'SELECT id, amount, date FROM '.self::TABLE_TRACKING_RDV.' WHERE id_user IN ('.implode(',',$trackersArray['Globale'][$i]['leads']['id_user']).')';
                        $appointements = $this->bdd->get_results($sql);
                        $trackersArray['Globale'][$i]['appointement']['total'] = $this->bdd->num_rows; // nombre de consult ("Clients")
                        $trackersArray['Globale'][$i]['appointement']['amount'] = 0; // montant dû ("Chiffre d'affaire")
                        $trackersArray['Globale'][$i]['payment']['amount'] = 0; // montant encaissé ("Chiffre réel")
                        foreach($appointements as $appointement){
                            $trackersArray['Globale'][$i]['appointement']['ID'][] = $appointement->id;
                            $trackersArray['Globale'][$i]['appointement']['amount'] += $appointement->amount;
                            // on retire le rdv des oubliés de la semaine
                            unset($forgottenAppointement[$appointement->id]);
                            // sélection des encaissements liés
                            $sql = 'SELECT id, price, date FROM '.self::TABLE_TRACKING_PAYMENT.' WHERE id_rdv = '.$appointement->id;
                            $payments = $this->bdd->get_results($sql);
                            foreach($payments as $payment){
                                if($payment->date == $appointement->date){
                                    $trackersArray['Globale'][$i]['payment']['amount'] += $payment->price;
                                    // on retire l'encaissement du chiffre encaissé cette semaine
                                    unset($forgottenPayments[$payment->id]);
                                }
                            }
                        }
						
                        
                    }
                    // - TRAITEMENT DU REPORT

                    $reverseArray = array();
                    foreach ($forgottenAppointement as $ap) {
                        $reverseArray[$ap->id] = array('id_user' => $ap->id_user,'amount' => $ap->amount);
                    }
                    $reversePaymentArray = array();
                    foreach ($forgottenPayments as $p){
                        $reversePaymentArray[$p->id] = array('id_rdv'=> $p->id_rdv, 'price' => $p->price);
                    }
                    
                    // retrouve le tracker des consults
                    foreach ($reverseArray as $id_appointement => $data) {
                        $sql = 'SELECT id_tracker FROM '.self::TABLE_TRACKING_USERS.' WHERE id_user ='.$data['id_user']
                                . ' AND `date` < "'.$startDate.'" ORDER BY `date` DESC LIMIT 1';
                        $reverseArray[$id_appointement]['id_tracker'] = $this->bdd->get_var($sql);
                    }
                    // retrouve le tracker des encaissements
                    foreach ($reversePaymentArray as $id_payment => $data){
                        $sql = 'SELECT id_tracker FROM '.self::TABLE_TRACKING_USERS.' u WHERE u.`date` < "'.$startDate
                                . '" AND u.id_user = ( SELECT id_user FROM '.self::TABLE_TRACKING_RDV.' r'
                                . ' WHERE r.id = '.$data['id_rdv']
                                . ' ) ORDER BY u.`date` DESC LIMIT 1';
                        $reversePaymentArray[$id_payment]['id_tracker'] = $this->bdd->get_var($sql);
                    }
                    // ajoute les reports aux campagnes
                    foreach ($trackersArray['Globale'] as $k => $campain) {
                        foreach ($reverseArray as $id_appointement => $data) {
                            if($data['id_tracker'] == $campain['ID']){
                                $trackersArray['Globale'][$k]['report'] += $data['amount'];
                            }
                        }
                        foreach ($reversePaymentArray as $id_payment => $data) {
                            if($data['id_tracker'] == $campain['ID']){
                                $trackersArray['Globale'][$k]['reportpayment'] += $data['price'];
                            }
                        }
                    }
                        
                    // ##### RETOUR #####
                    return $trackersArray;
		}


		public function addDisplay($id_tracker, $id_source){
                    return $this->bdd->insert(
                        self::TABLE_TRACKING_DISPLAY,
                        array(
                            'id_tracker' => $id_tracker,
                            'id_source'  => $id_source,
                            'date'       => date('Y-m-d H:i:s'),
                            'SSID'       => session_id(),
                            'referer'    => (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : NULL
                        )
                    );
		}
	}
?>