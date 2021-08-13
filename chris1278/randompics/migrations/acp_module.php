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

class acp_module extends \phpbb\db\migration\migration
	{
	public static function depends_on()
	{
		return array('\chris1278\randompics\migrations\initial_install');
	}

	public function update_data()
	{
		return array(
		array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_RANDOMPICS'
			)),

			array('module.add', array(
				'acp',
				'ACP_RANDOMPICS',
				array(
					'module_basename'	=> '\chris1278\randompics\acp\randompics_module',
				),
			)),
		);
	}

	public function revert_schema()
	{
		return array(
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_RANDOMPICS'
			)),

			array('module.remove', array(
				'acp',
				'ACP_RANDOMPICSM',
				array(
					'module_basename'	=> '\chris1278\randompics\acp\randompics_module',
				),
			)),
		);
	}
}
