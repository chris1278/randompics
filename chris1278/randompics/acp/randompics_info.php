<?php
/**
*
* Randompics Extension for the phpBB Forum Software package.
*
* @copyright (c) 2020 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\randompics\acp;

class randompics_info
{
	function module()
	{
		return array(
			'filename'	=> '\chris1278\randompics\acp\randompics_module',
			'title'		=> 'ACP_RANDOMPICS',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'		=> array(
					'title'		=> 'ACP_RANDOMPICS_SETTINGS',
					'auth'		=> 'ext_chris1278/randompics && acl_a_board',
					'cat'		=> array('ACP_RANDOMPICS'),
				),
			),
		);
	}
}
