<?php
/**
 * Created on : 1 juin 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */

namespace TchatGratuit;

class Intro extends ScenarioPart
{
    
    function __construct($bdd, Decorator $decorator, $scenario, $reserve_scenario)
    {
        parent::__construct($bdd, $decorator, $scenario, $reserve_scenario, parent::TABLE_INTRO);
    }
    
    
    
/*
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
 * 
 */
}