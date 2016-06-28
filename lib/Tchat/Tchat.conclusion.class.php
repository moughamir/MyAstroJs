<?php

namespace lib\Tchat\Conclusion;

Class Conclusion implements lib\Tchat\Parts{
	public id;
	public id_group;
	public title;

	function __construct($bdd){
		if(!$bdd || !is_object($bdd)){
			return false;
		}
		$this->bdd = $bdd;
		$names = $this->bdd->query("SET NAMES 'utf8'");
	}

	public function getForGroup($id_group){
		return $this->bdd->get_results('SELECT * FROM '.self::TABLE_CONCLUSION.' WHERE id_group='.$id_group);
	}

	public function getTitle($id){
		return $this->bdd->get_var('SELECT title FROM '.self::TABLE_CONCLUSION.' WHERE id='.$id);
	}	
}
?>