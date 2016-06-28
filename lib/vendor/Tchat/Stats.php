<?php

namespace Tchat;

class Stats extends Tchat
{
	const TABLE_STATS = 'tchat_stats';
	public $bdd;

	public function __construct($bdd)
	{
		$this->bdd = $bdd;
	}

	public function addStats($scenario,$intro,$content,$conclusion,$id_user)
	{
		return $this->bdd->insert(
					self::TABLE_STATS,
					array(
						'date'          => date('Y-m-d H:i:s',time()),
						'id_scenario'   => $scenario,
						'id_intro'      => $intro->id,
						'id_content'    => $content->id,
						'id_conclusion' => $conclusion->id,
						'id_user'       => $id_user,
					)
			);
	}
}