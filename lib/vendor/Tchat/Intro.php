<?php

namespace Tchat;

class Intro implements Parts
{
	public $id;
	public $id_group;
	public $title;

	function __construct($bdd)
	{
		if(!$bdd || !is_object($bdd)){
			return false;
		}
		$this->bdd = $bdd;
		$names = $this->bdd->query("SET NAMES 'utf8'");
	}

	public function countForGroup($id_group){
		$results = $this->bdd->get_results('SELECT id FROM '.self::TABLE_INTRO.' WHERE id_group='.$id_group);
		return array(
			'total'		=> $this->bdd->num_rows,
			'results'	=> $results
		);
	}

	public function getForGroup($id_group)
	{
		return $this->bdd->get_results('SELECT * FROM '.self::TABLE_INTRO.' WHERE id_group='.$id_group);
	}

	public function getTitle($id)
	{
		return $this->bdd->get_var('SELECT title FROM '.self::TABLE_INTRO.' WHERE id='.$id);
	}

	public function getRandom()
	{
		return $this->bdd->get_results('SELECT * FROM '.self::TABLE_INTRO.' ORDER BY RAND() LIMIT 1');
	}
}