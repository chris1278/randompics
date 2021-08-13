<?php
/**
*
* Randompics Extension for the phpBB Forum Software package.
*
* @copyright (c) 2020 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\randompics\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $config;
	protected $template;
	protected $php_ext;

	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\config\config $config,
		\phpbb\template\template $template,
		$language,
		$php_ext
	)
	{
		$this->auth			= $auth;
		$this->config		= $config;
		$this->template		= $template;
		$this->php_ext		= $php_ext;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	*/

	public static  function getSubscribedEvents()
	{
		return array(
			'core.user_setup'				=>	'load_language_on_setup',
			'core.permissions'				=>	'permissions',
			'core.page_header_after'		=>	array(array('show_randompics'), array('add_randompics')),
		);
	}

	/**
	* Load language during user setup
	*
	* @param object $event The event object
	* @return null
	*/
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name'	=> 'chris1278/randompics',
			'lang_set'	=> 'randompics',
		);

			if (defined('ADMIN_START'))
			{
			$lang_set_ext[] = array(
				'ext_name'	=> 'chris1278/randompics',
				'lang_set' => 'info_acp_randompics',
			);
		}

		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	* Load permission event
	*/

	public function permissions($event)
	{
		$permissions = $event['permissions'];
		$permissions['u_view_randompics'] = array('lang' => 'ACL_U_VIEW_RANDOMPICS', 'cat' => 'misc');
		$event['permissions'] = $permissions;
	}

	/**
	* Settings or the Revolvermaps-Extension
	*/

	public function show_randompics()
	{
		if ($this->auth->acl_get('u_view_randompics'))
		{
			$random_function						= $this->config['random_function'];
			$slidertime								= $this->config['slidertime'];

			$this->template->assign_vars(array(
				'RANDOM_FUNCTION'					=> $random_function,
				'SLIDERTIME'						=> $slidertime,
			));
		}
	}

	public function add_randompics()
	{
		$files = array();
		$allowed_file_extensions = array();
		$allowed_file_extensions[] = 'gif';
		$allowed_file_extensions[] = 'bmp';
		$allowed_file_extensions[] = 'jpg';
		$allowed_file_extensions[] = 'jpeg';
		$allowed_file_extensions[] = 'png';
		$dir = dirname(__dir__).'/img/';
		$len = strlen(dirname(__dir__).'/img/');
		if (strlen($dir)-1 == '/')
		{
			$dir = substr($dir, 0, $len-1);
		}
		if (!is_dir($dir))
		{
			return false;
		}
		$open = @opendir($dir);

		if (! $open)
		{
			return false;
		}
		while ($file = readdir ($open))
		{
			if ( $file == "." || $file == "..")
			{
				continue;
			}
			if (is_dir($dir.'/'.$file))
			{
				getFiles($dir.'/'.$file);
			}
			$e = explode('.', $file);
			$ext = $e[count($e)-1];
			if ( is_file($dir.'/'.$file) && in_array($ext, $allowed_file_extensions) )
			{
				$files[] = generate_board_url()."/ext/chris1278/randompics/img/".$file;
			}
		}
		$this->template->assign_vars(array(
			'RANDOMPIC1'		=> $files)
		);
	}
}
