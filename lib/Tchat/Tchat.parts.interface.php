<?php

interface Parts
{

	const TABLE_GROUPS     = 'tchat_groups';
	const TABLE_INTRO      = 'tchat_intro';
	const TABLE_CONTENT    = 'tchat_content';
	const TABLE_CONCLUSION = 'tchat_conclusion';
	const TABLE_MESSAGE    = 'tchat_messages';
	const TABLE_SCENARIO   = 'tchat_scenario';

	public function getForGroup($id_group);
	public function getTitle($id);
	

	
}

?>