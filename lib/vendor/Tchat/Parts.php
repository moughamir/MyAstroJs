<?php

namespace Tchat;

interface Parts
{
	const TABLE_INTRO = 'tchat_intro';
	const TABLE_CONTENT = 'tchat_content';
	const TABLE_CONCLUSION = 'tchat_conclusion';
	const TABLE_MESSAGES = 'tchat_messages';
	const TABLE_SCENARIO = 'tchat_scenario';
	const TABLE_GROUPS = 'tchat_groups';

	public function getForGroup($id_group);
	public function getTitle($id);
	public function countForGroup($id_group);
	public function getRandom();
}

?>