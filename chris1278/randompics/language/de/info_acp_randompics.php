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
	'ACL_U_VIEW_RANDOMPICS'						=>	'Kann Randompics sehen',
	'ACP_RANDOMPICS'							=>	'Randompics',
	'ACP_RANDOMPICS_SETTINGS'					=>	'Randompics Einstellungen',
	'ACP_RANDOMPICS_PAGE_TITLE'					=>  'Einstellungen für Randompics',
	'ACP_RANDOMPICS_PAGE_TITLE_EXPLAIN'			=>  'Hier können die Einstellungen zu der Erweiterung vorgenommen werden.',
	'ACP_RANDOMPICS_PERM_TITLE'					=>	'Einstellen der Berechtigungen:',
	'ACP_RANDOMPICS_PERMISSION_BEFORE'			=>	'Mit dem <b>phpbb eigenem Berechtigungssystem</b> kann über die Einstellungen der  ',
	'ACP_RANDOMPICS_USERS_PERMISSIONS'			=>	'Benutzerrechte',
	'ACP_RANDOMPICS_ANDOR'						=>	' und bzw. oder den ',
	'ACP_RANDOMPICS_GROUPS_PERMISSIONS'			=>	' Gruppenrechten ',
	'ACP_RANDOMPICS_PERMISSION_AFTER'			=>	' unter <b>Diverses</b> eingestellt werden, wer die Randompics sehen darf.',
	'ACP_RANDOMPICS_IMAGE_INFO'					=>	'Um auch Bilder benutzen zu können, müsst ihr diese in den Ordner <b>/ext/chris1278/randompics/img</b> mit auf eurem Webspace speichern. Die namen der Bilder sind da absolut egal.',
	'ACP_RANDOMPICS_SET_TITLE'					=>	'Einstellungen:',
	'SLIDERTIME'								=>	'Zeitintervall-Einstellung',
	'SLIDERTIME_EXPLAIN'						=>	'Hier wird die Zeit in Sekunden eingestellt für die Bilder Funktionen mit Zeitvorgabe.<br><br><b>Bitte unbedingtr eine Zeit eintragen da wenn dies leer bleibt, die Bilder direkt hintereinander ohne Pause geladen werden.</b>',
	'RANDOM_FUNCTION'							=>	'Bild-Funktions-Type',
	'RANDOM_FUNCTION_EXPLAIN'					=>	'Hier kann ausgewählt werden welche funktionsart für die Benutzung gewünscht wird.',
	'RANDOM_FUNCTION_1'							=>	'Bei jedem "refresh" ein zufällig wechselndes Hintergrundbild',
	'RANDOM_FUNCTION_2'							=>	'Bei jedem "refresh" ein nach Reihenfolge im Image-Ordner rotierend wechselndes Hintergrundbild.',
	'RANDOM_FUNCTION_3'							=>	'Bei jedem "refresh" und nach Zeit-Intervall ein zufällig wechselndes Hintergrundbild',
	'RANDOM_FUNCTION_4'							=>	'Bei jedem "refresh" und nach Zeit-Intervall ein nach Reihenfolge im Image-Ordner rotierend wechselndes Hintergrundbild',
	'RANDOMPICS_UPDATE'							=>	'Die Einstellungen zur Extension Randompics wurden erfolgreich übernommen!',
]);
