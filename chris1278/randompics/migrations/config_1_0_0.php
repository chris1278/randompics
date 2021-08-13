<?php
/**
*
* Randompics for the phpBB Forum Software package.
*
* @copyright (c) 2020 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\randompics\migrations;

class config_1_0_0 extends \phpbb\db\migration\migration
	{
	public static function depends_on()
	{
		return array('\chris1278\randompics\migrations\permission');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('random_function', 1)),
			array('config.add', array('slidertime', 30)),
		);
	}
	public function revert_schema()
	{
		return array(
			array('config.remove', array('random_function')),
			array('config.remove', array('slidertime', '')),
		);
	}
}
