<?php

namespace Tchat;

Class Conclusion implements Parts
{
	public $id;
	public $id_group;
	public $title;

	function __construct($bdd){
		if(!$bdd || !is_object($bdd)){
			return false;
		}
		$this->bdd = $bdd;
		$names = $this->bdd->query("SET NAMES 'utf8'");
	}

	public function getForGroup($id_group)
	{
		return $this->bdd->get_results('SELECT * FROM '.self::TABLE_CONCLUSION.' WHERE id_group='.$id_group);
	}

	public function getTitle($id)
	{
		return $this->bdd->get_var('SELECT title FROM '.self::TABLE_CONCLUSION.' WHERE id='.$id);
	}	

	public function countForGroup($id_group){
		$results = $this->bdd->get_results('SELECT id FROM '.self::TABLE_CONCLUSION.' WHERE id_group='.$id_group);
		return array(
			'total'		=> $this->bdd->num_rows,
			'results'	=> $results
		);
	}

	public function getRandom()
	{
		return $this->bdd->get_results('SELECT * FROM '.self::TABLE_CONCLUSION.' ORDER BY RAND() LIMIT 1');
	}
}
?>