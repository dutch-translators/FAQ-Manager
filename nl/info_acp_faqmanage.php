<?php
/**
*
* @package FAQ Manager
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
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

$lang = array_merge($lang, array(
	'BACKUP_LOCATION_NO_WRITE'	=> 'Kan geen back-up bestand aanmaken. Controleer de rechten van de map: store/faq_backup/ en elke map en bestand die erin staat.',
	'BAD_FAQ_FILE'				=> 'Het bestand dat je probeert te bewerken is geen FAQ-bestand',

	'CREATE_CATEGORY'			=> 'Creëer categorie ',
	'CREATE_FIELD'				=> 'Creëer onderwerp ',

	'DELETE_CAT'				=> 'Verwijder categorie',
	'DELETE_VAR'				=> 'Verwijder onderwerp',

	'FAQ_CAT_LIST'				=> 'Hier kan je bestaande categorieën zien en wijzigen.<br /><br /><strong>Note that a category named -- is the section break for the FAQ display page.</strong>',
	'FAQ_EDIT_SUCCESS'			=> 'De FAQ is succesvol bijgewerkt.',
	'FAQ_FILE_NOT_EXIST'		=> 'Het bestand dat je probeert te wijzigen bestaat niet.',
	'FAQ_FILE_NO_WRITE'			=> 'Kan het bestand niet wijzigen. Controleer de bestandsrechten van het bestand dat je probeert te wijzigen.',
	'FAQ_FILE_SELECT'			=> 'Selecteer het bestand dat je wilt wijzigen.',
	'FAQ_MANAGER'				=> 'FAQ Beheerder',
	'FAQ_MANAGE'				=> 'Beheer FAQs',

	'LOAD_BACKUP'				=> 'Backup laden',

	'LOG_FAQ_ADD'				=> '<strong>FAQ item toegevoegd</strong>',
	'LOG_FAQ_DELETE'			=> '<strong>FAQ item verwijderd</strong>',
	'LOG_FAQ_EDIT'				=> '<strong>FAQ item gewijzigd</strong>',
	'LOG_FAQ_RESTORE'			=> '<strong>FAQ hersteld via een backup</strong>',

	'NOT_ALLOWED_OUT_OF_DIR'	=> 'Je bent niet bevoegd om de bestanden uit de language directory te wijzigen.',
	'NO_FAQ_FILES'				=> 'Geen beschikbare FAQ bestanden.',
	'NO_FAQ_VARS'				=> 'Er zijn geen FAQs in deze categorie.',

	'VAR_NOT_EXIST'				=> 'The requested variable does not exist.',
));
