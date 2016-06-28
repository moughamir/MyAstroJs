<?php

namespace Tchat;

Class Tchat{

	const TABLE_GROUPS   = 'tchat_groups';
	const TABLE_MESSAGES = 'tchat_messages';
	const TABLE_SCENARIO = 'tchat_scenario';
	const ENABLE         = 1;
	const DISABLE        = 0;
	const DRAFT          = 2;


	public $intro;
	public $content;
	public $conclusion;
	public $bdd;
	public $support;
	public $trigger;
	public $scenario;
	public $stats;

	public function __construct($bdd){
		$this->bdd        = $bdd;
		$this->intro      = new Intro($bdd);
		$this->content    = new Content($bdd); 
		$this->conclusion = new Conclusion($bdd);
		$this->stats 	  = new Stats($bdd);
	}

	public function getRandomForGroup($id_group, $type)
	{

		if (!$id_group)
			return false;

		$all = $this->$type->countForGroup($id_group);
		if (!$all) {
			return false;
		}

		if ($all['total'] == 0) {
			// Here we need content
			$obj = $this->$type->getRandom()[0];
			$this->$type = $obj;
		} else {
			$obj = $all['results'][rand(0,$all['total']-1)];
			$this->$type = $obj;
		}

		return $obj->id;
	}

	public function setSupport($support, $affiliation_id)
	{
		$this->support = $support;
		$this->scenario   = $this->getScenario($affiliation_id);
	}

	public function getGroup($support_only = false)
	{
		if ($support_only) {
			return $this->bdd->get_var('SELECT id FROM '.self::TABLE_GROUPS.' WHERE support ="'.$this->support.'" AND `trigger` = "ALL"');
		} else {
			return $this->bdd->get_var('SELECT id FROM '.self::TABLE_GROUPS.' WHERE support ="'.$this->support.'" AND `trigger` ="'.$this->trigger.'"');
		}
	}

	public function getConversation($data)
	{
		$messages =  array();
		$messages['intro'] = $this->getMessages($this->getRandomForGroup($this->getGroup(true),'intro'),'intro');
		$messages['content'] = $this->getMessages($this->getRandomForGroup($this->getGroup(),'content'),'content');
		$messages['conclusion'] = $this->getMessages($this->getRandomForGroup($this->getGroup(true),'conclusion'),'conclusion');

		foreach ($messages['intro'] as $intro) {
			$this->substitute($intro->text,$data);
		}
		foreach ($messages['content'] as $content) {
			$this->substitute($content->text,$data);
		}
		foreach ($messages['conclusion'] as $conclusion) {
			$this->substitute($conclusion->text,$data);
		}

		return $messages;
	}

	public function getMessages($id_content, $type)
	{	
		return $this->bdd->get_results('SELECT * FROM '.self::TABLE_MESSAGES.' WHERE id_content='.$id_content.' AND `type`="'.$type.'"');
	}

	public function getScenario($affiliation_id = 0)
	{
		return $this->bdd->get_results('SELECT * FROM '.self::TABLE_SCENARIO.' WHERE status='.self::ENABLE. ' AND `support` = "'.$this->support . '" AND affiliation = '.$affiliation_id . ' ORDER BY RAND()');
	}

	public function substitute(&$message,$data)
	{

		$tarots = array(
			1 => 'Le bateleur',
			2 => 'Le charlot',
			3 => 'L\'empereur',
			4 => 'La force',
			5 => 'L\'imperatrice',
			6 => 'La roue de la fortune',
			7 => 'Le soleil',
			8 => 'La justice',
			9 => 'L\'Amoureux',
			10 => 'Le Monde',
			11 => 'Le Fou',
			12 => 'Tempérance'
		);

		$form_rappel = '<form action="" id="rappel">
							<div class="col-lg-6">
						    <div class="input-group">
						      <input type="text" class="form-control" name="phone" value="'.$data['user']['phone'].'" pattern="(\+?\d[- .]*){10,18}" required />
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="submit">Rappel Gratuit !</button>
						      </span>
						    </div><!-- /input-group -->
						  </div><!-- /.col-lg-6 -->
						</div><!-- /.row -->
						<input type="hidden" name="data" value="'.htmlentities(serialize($data)).'" />
						<input type="hidden" name="voyant" value="'.$this->scenario[0]->seer_name.'" />
						</form>';

		$message = str_replace('[SEER]',ucfirst($this->scenario[0]->seer_name),$message);
		$message = str_replace('[TARIF]',$this->scenario[0]->price . ' &euro;',$message);
		$message = str_replace('[NAME]',ucfirst($data['user']['name']),$message);
		$message = str_replace('[DATE]',ucfirst($data['user']['birthdate']),$message);
		$message = str_replace('[SPECIALITY]',$this->scenario[0]->speciality,$message);
		$message = str_replace('[NAME2]',ucfirst($data['user']['firstnameJoint']),$message);
		$message = str_replace('[TAROT1]',$tarots[substr($data['cartes'][0],0,-4)],$message);
		$message = str_replace('[TAROT2]',$tarots[substr($data['cartes'][1],0,-4)],$message);
		$message = str_replace('[TAROT3]',$tarots[substr($data['cartes'][2],0,-4)],$message);
		$message = str_replace('[TAROT4]',$tarots[substr($data['cartes'][3],0,-4)],$message);
		$message = str_replace('[TAROT5]',$tarots[substr($data['cartes'][4],0,-4)],$message);
		$message = str_replace('[TEL]',$this->scenario[0]->tel,$message);
		$message = str_replace('[CODE]','<b style="color:red;">'.$data['user']['code'].'</b><br /> Faites attention aux majuscules et minuscules !',$message);
		$message = str_replace('[RAPPEL]',$form_rappel,$message);
		$message = ($this->scenario[0]->seer_sexe == 'M') ? preg_replace("#\[s\[([\w'?’?\s?]+)\|([\w'?’?\s?]+)\]s\]#u",'$1',$message) : preg_replace("#\[s\[([\w'?’?\s?]+)\|([\w'?’?\s?]+)\]s\]#u",'$2',$message) ;
		$message = ($data['user']['sexe'] == 'M') ? preg_replace("#\[u\[([\w'?’?\s?]+)\|([\w'?’?\s?]+)\]u\]#u",'$1',$message) : preg_replace("#\[u\[([\w'?’?\s?]+)\|([\w'?’?\s?]+)\]u\]#u",'$2',$message) ;
		$message = ($data['user']['sexe'] == 'M') ? preg_replace("#\[c\[([\w'?’?\s?]+)\|([\w'?’?\s?]+)\]c\]#u",'$2',$message) : preg_replace("#\[c\[([\w'?’?\s?]+)\|([\w'?’?\s?]+)\]c\]#u",'$1',$message) ;

		return $message;
	
	}

	public function flattenConversation($conversation)
	{
		$messages = array();
		foreach ($conversation['intro'] as $intro) {
			$messages[] = $intro->text;
		}
		foreach ($conversation['content'] as $content) {
			$messages[] = $content->text;
		}
		foreach ($conversation['conclusion'] as $conclusion) {
			$messages[] = $conclusion->text;
		}

		return $messages;
	}

	public function setCookie()
	{
		if (!isset($_COOKIE['tchat']) || $_COOKIE['tchat'] != 1) {
			setcookie('tchat','1',time()+1209600); // 14j
		}
	}

	public function canStart()
	{
		if (!isset($_COOKIE['tchat']) || $_COOKIE['tchat'] != 1) {
			return true;
		} else { 
			return false;
		}
	}

	public function getImageName(){
		$name = strtolower($this->scenario[0]->seer_name);
		$name = str_replace('&eacute;', 'e', $name);
		return $name;
	}

	public function printAllMsg(){

		$this->setSupport('voyance');
		$this->getScenario();

		$user = 	array(
				'ID'             => $_SESSION['user_id'],
				'name'           => $_SESSION['firstname'],
				'email'          => $_SESSION['email'],
				'phone'          => $_SESSION['phone'],
				'sexe'           => ( $_SESSION['sexe'] == 'homme' ) ? 'M' : 'F',
				'code'           => base_convert($_SESSION['user_id'], 10,32),
				'firstnameJoint' => $_SESSION['firstnameJoint'],
				'pays'           => $_SESSION['pays'],
				'birthdate'      => $_SESSION['birthdate'],
				'birthdatejoint' => $_SESSION['birthdateJoint'],
			    );
		$infos = 	array(
				'user' => $user,
				'cartes' => $_SESSION['cards']
			);
		$msgs = $this->bdd->get_results('SELECT * FROM '.self::TABLE_MESSAGES);
		foreach($msgs as $msg){
			echo $this->substitute($msg->text, $infos) . '<br />';
		}
	}

}

?>