<?php
/**
*
* Randompics Extension for the phpBB Forum Software package.
*
* @copyright (c) 2020 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\randompics\migrations;

class initial_install extends \phpbb\db\migration\migration
	{
	public function effectively_installed()
	{
		return;
	}

	public static function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('randompics_version', '1.0.0')),
		);
	}

	public function revert_schema()
	{
		return array(
			array('config.remove', array('randompics_version', '1.0.0')),
		);
	}
}
