<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	'RECAPTCHA_LANG'				=> 'nl', 	// Find the language/country code on https://developers.google.com/recaptcha/docs/language - If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Om gebruik te kunnen maken van reCaptcha, moet je een account aanmaken op <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'De oplossing die je hebt ingevoerd is onjuist',
	'RECAPTCHA_NOSCRIPT'			=> 'Schakel JavaScript in om de uitdaging te kunnen laden.',

	'RECAPTCHA_PUBLIC'				=> 'Site sleutel',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Uw site reCAPTCHA-sleutel. Sleutels kunnen worden verkregen op <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Gebruik alstublieft reCAPTCHA v2 &gt; Onzichtbaar reCAPTCHA badge type.',
	'RECAPTCHA_PRIVATE'				=> 'Geheime sleutel',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Uw geheime reCAPTCHA- sleutel. Sleutels kunnen worden verkregen op <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Gebruik alstublieft reCAPTCHA v2 &gt; Onzichtbaar reCAPTCHA badge type.',

	'RECAPTCHA_INVISIBLE'			=> 'Deze CAPTCHA is eigenlijk onzichtbaar. Om te controleren of het werkt, moet een klein pictogram in de rechteronderhoek van deze pagina verschijnen.',
));
