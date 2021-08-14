<?php
/**
*
* Randompics Extension for the phpBB Forum Software package.
*
* @copyright (c) 2020 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/
/**
* DO NOT CHANGE
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	//Permission Translation
	'ACL_U_VIEW_RANDOMPICS'						=>	'Can Randompics see',
	'ACP_RANDOMPICS'							=>	'Randompics',
	'ACP_RANDOMPICS_SETTINGS'					=>	'Randompics Settings',
	'ACP_RANDOMPICS_PAGE_TITLE'					=>  'Settings for Randompics',
	'ACP_RANDOMPICS_PAGE_TITLE_EXPLAIN'			=>  'The settings for the extension can be made here.',
	'ACP_RANDOMPICS_PERM_TITLE'					=>	'Setting the permissions:',
	'ACP_RANDOMPICS_PERMISSION_BEFORE'			=>	'With phpbb´s own authorization system, you can use the settings for  ',
	'ACP_RANDOMPICS_USERS_PERMISSIONS'			=>	'user rights ',
	'ACP_RANDOMPICS_ANDOR'						=>	' and / or ',
	'ACP_RANDOMPICS_GROUPS_PERMISSIONS'			=>	' group rights ',
	'ACP_RANDOMPICS_PERMISSION_AFTER'			=>	' under <b>Miscellaneous</b> to set who is allowed to see the revolver maps.',
	'ACP_RANDOMPICS_IMAGE_INFO'					=>	'In order to be able to use pictures, you have to save them in the folder <b>/ ext/chris1278/randompics/img</b> on your web space. The names of the pictures are absolutely irrelevant.',
	'ACP_RANDOMPICS_SET_TITLE'					=>	'Settings:',
	'SLIDERTIME'								=>	'Time interval-Settings',
	'SLIDERTIME_EXPLAIN'						=>	'Here the time is set in seconds for the picture functions with a preset time.<br><br><b>Please be sure to enter a time because if this remains empty, the images will be loaded one after the other without a break.</b>',
	'RANDOM_FUNCTION'							=>	'Image function type',
	'RANDOM_FUNCTION_EXPLAIN'					=>	'Here you can select which type of function is required for use.',
	'RANDOM_FUNCTION_1'							=>	'Funktion 1',
	'RANDOM_FUNCTION_2'							=>	'Funktion 2',
	'RANDOM_FUNCTION_3'							=>	'Funktion 3',
	'RANDOM_FUNCTION_4'							=>	'Funktion 4',
	'RANDOMPICS_UPDATE'							=>	'The settings for the extension Randompics were successfully adopted!',
]);
