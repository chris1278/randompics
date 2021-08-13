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

class randompics_module
{
	var $u_action;
	public function main()
	{
		global $user, $cache, $request, $template, $config, $phpbb_root_path, $phpbb_admin_path, $phpbb_container, $phpbb_ext_manager, $phpEx, $language;

		$language	= $phpbb_container->get('language');

		$this->root_path = $phpbb_root_path . 'ext/chris1278/randompics/';
		$this->user = $user;
		$this->cache = $cache;
		$this->template = $template;
		$this->config = $config;
		$this->request = $request;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->phpbb_admin_path = $phpbb_admin_path;
		$this->php_ext = $phpEx;
		$this->phpbb_ext_manager = $phpbb_ext_manager;

		//Randompics Settings
		add_form_key('acp_randompics');
		$this->tpl_name = 'acp_randompics_settings';
		$this->page_title = $this->user->lang['ACP_RANDOMPICS_SETTINGS'];
		$submit					= $this->request->is_set_post('submit');

		if ($submit)
		{
			if (!check_form_key('acp_randompics'))
			{
			trigger_error($this->user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}
			$this->config->set('random_function', $this->request->variable('random_function', ''));
			$this->config->set('slidertime', $this->request->variable('slidertime', ''));
			trigger_error($this->user->lang['RANDOMPICS_UPDATE'] . adm_back_link($this->u_action));
		}

			$template->assign_vars(array(
				'RANDOM_FUNCTION'					=> $this->config['random_function'],
				'SLIDERTIME'						=> $this->config['slidertime'],

				'U_USER_PERMISSIONS'				=> append_sid("{$phpbb_admin_path}index.$this->php_ext" ,'i=permissions&amp;mode=setting_user_global'),
				'U_GROUP_PERMISSIONS'				=> append_sid("{$phpbb_admin_path}index.$this->php_ext" ,'i=permissions&amp;mode=setting_group_global'),
				'U_ACTION'							=> $this->u_action,
			));
	}
}
