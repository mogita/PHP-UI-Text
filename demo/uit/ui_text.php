<?php
/**
 * This file is part of the PHP UI Text package.
 *
 * Usage:
 *
 * 1.	Include the language files with full translation. Incomplete translation
 * 		will cause the "*L10N ERROR".
 * 2.	Then require uit/ui_text.php at the very beginning of your web app pages.
 * 3.	Now you can call uit('some source text') when you need a translated string.
 * 4.	To change a language, post to the page which includes ui_text.php (e.g.
 * 		index.php) with the parameter "lang", then the new language setting will
 * 		take place within the same domain.
 *
 *
 * @copyright   2015 mogita <himogita@gmail.com>
 * @link        https://github.com/mogita/phpuitext
 * @license     GNU General Public License, version 2 (GPL-2.0)
 */

// include the translation files as needed
include 'languages/zh_cn.php';
include 'languages/en_us.php';

// Set the language
$default_lang = 'zh_cn';

// Set the error message. Set it to an empty string to output no error message but only the original text
$err_message = ' *L10N ERROR';

// No more settings from here
if(isset($_POST['lang']) and isset($_SERVER['HTTP_HOST']) and isset($_SERVER['REQUEST_URI'])) {
	$source = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$_SESSION['lang'] = $_POST['lang'];
	$_COOKIE['lang'] = $_POST['lang'];
	setcookie('lang', $_POST['lang']);
	header('Location: http://'.$source);
}

if(!isset($_COOKIE['lang'])) {
	$_SESSION['lang'] = $default_lang;
	setcookie('lang', $default_lang);
	$_COOKIE['lang'] = $default_lang;
} else {
	$_SESSION['lang'] = $_COOKIE['lang'];
}

function uit($string) {
	$lang = $_SESSION["lang"];

	if (isset($GLOBALS[$lang][$string])) {
		return $GLOBALS[$lang][$string];
	} else {
		return $string.$err_message;
	}
}