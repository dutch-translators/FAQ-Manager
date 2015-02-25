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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BACKUP_LOCATION_NO_WRITE'	=> 'Kan geen back-up bestand aanmaken. Controleer de rechten van de map: store/faq_backup/ en elke map en bestand dat erin staat.',
	'BAD_FAQ_FILE'				=> 'Het bestand dat je probeert te bewerken is geen FAQ-bestand',

	'CREATE_CATEGORY'			=> 'Creëer categorie ',
	'CREATE_FIELD'				=> 'Creëer onderwerp ',

	'DELETE_CAT'				=> 'Verwijder categorie',
	'DELETE_VAR'				=> 'Verwijder onderwerp',
	
	'FAQ_ANSWER'				=> 'FAQ antwoord',
	'FAQ_CAT_CAT'				=> 'Hier kan je een FAQ categorie bewerken.',
	'FAQ_CAT_EDIT'				=> 'Hier kan je een FAQ antwoord bewerken.',
	'FAQ_CAT_FAQ'				=> 'Hier kan je een onderwerp plaatsen in deze categorie.',
	'FAQ_CAT_FILES'				=> 'Selecteer de FAQ bestanden die je wilt bewerken.',
	'FAQ_CAT_LIST'				=> 'Hier kan je bestaande categorieën zien en wijzigen.<br /><br /><strong>Let op: een categorie naam -- is een sectie-einde op de FAQ-pagina.</strong>',
	'FAQ_EDIT_SUCCESS'			=> 'De FAQ is succesvol bijgewerkt.',
	'FAQ_CAT_QUESTION'			=> 'Hier kan je de FAQs van de geselecteerde categorieën beheren.',
	'FAQ_CAT_TOPIC'				=> 'Hier kan je een FAQ onderwerp plaatsen.',
	'FAQ_DELETE_SUCCESS'		=> 'De FAQ informatie is succesvol verwijerd.',
	'FAQ_EDIT_SUCCESS'			=> 'De FAQ is succesvol gewijzigd.',
	'FAQ_TOPIC_SUCCESS'			=> 'Het onderwerp is succesvol geplaatst.',
	'FAQ_FILE_NOT_EXIST'		=> 'Het bestand dat je probeert te wijzigen bestaat niet.',
	'FAQ_FILE_NO_WRITE'			=> 'Kan het bestand niet wijzigen. Controleer de bestandsrechten van het bestand dat je probeert te wijzigen.',
	'FAQ_FILE_SELECT'			=> 'Selecteer het bestand dat je wilt wijzigen.',
	'FAQ_LANGUAGE'				=> 'Taal',
	'FAQ_LOCATION'				=> 'Locatie',
	'FAQ_MANAGER'				=> 'FAQ Beheerder',
	'FAQ_MANAGE'				=> 'Beheer FAQs',
	'FAQ_NAME'					=> 'Naam',
	'FAQ_QUESTION'				=> 'FAQ',
	'FAQ_CAT_QUESTION'			=> 'FAQ categorie',
	'FAQ_SETTINGS'				=> 'Maak/bewerk FAQ item',
	'FAQ_CAT_SETTINGS'			=> 'Wijzig FAQ categorie',

	'LOAD_BACKUP'				=> 'Backup laden',

	'LOG_FAQ_ADD'				=> '<strong>FAQ item toegevoegd</strong>',
	'LOG_FAQ_DELETE'			=> '<strong>FAQ item verwijderd</strong>',
	'LOG_FAQ_EDIT'				=> '<strong>FAQ item gewijzigd</strong>',
	'LOG_FAQ_RESTORE'			=> '<strong>FAQ hersteld via een backup</strong>',

	'NOT_ALLOWED_OUT_OF_DIR'	=> 'Je bent niet bevoegd om de bestanden uit de language map te wijzigen.',
	'NO_FAQ_FILES'				=> 'Geen beschikbare FAQ bestanden.',
	'NO_FAQ_VARS'				=> 'Er zijn geen FAQs in deze categorie.',
	
	'ON_TO_NEXT'				=> 'Ga naar de volgende stap',

	'VAR_NOT_EXIST'				=> 'De opgevraagde variabel bestaat niet.',
));
