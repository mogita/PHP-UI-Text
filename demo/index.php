<?php
/**
 * This file is part of the PHP UI Text project.
 *
 * @copyright	2015 mogita <himogita@gmail.com>
 * @link        https://github.com/mogita/PHP-UI-Text
 * @license		GNU General Public License, version 2 (GPL-2.0)
 */

require 'uit/ui_text.php';
?>

<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo uit('Example for PHP UI Text'); ?></title>
	<style>ul, label {line-height: 150%;}</style>
</head>
<body style="font-family: sans-serif; font-size: 1.5em;">
<div style="width: 950px; margin: 0 auto; padding: 0;">
<div style="margin-top: 70px;">

<?php
echo '<h1>'.uit('Welcome to PHP UI Text!').'</h1>';
echo '<h3>'.uit('Easily localize your web app').'</h3>';
?>

<hr />

<form method="POST" action="" style="margin: 0; padding: 0;">
	<label style="font-size: 0.8em;"><?php echo uit('You can choose a different language! '); ?> </label>
	<select style="font-size: 1em;" name="lang" onchange="this.form.submit();">
		<option disabled selected="selected">Change me!</option>
		<option value="zh_cn">简体中文</option>
		<option value="en_us">English</option>
	</select>
</form>

<p style="font-size: 0.8em;"><?php echo uit('Current language: ').uit($_COOKIE['lang']); ?></p>
<p style="font-size: 0.8em; line-height: 1%;">

<?php
echo uit('Available languages: ');
$i = 1;
foreach (glob("uit/languages/*") as $filename) {
	if ($i > 1) echo uit(', ');
	$path = pathinfo($filename);
	echo uit($path['filename']);
	$i++;
}
?>
</p>

<hr />

<ul>
<li><p><?php echo uit('Integrating to your project in just one step.'); ?></p></li>
<li><p><?php echo uit('No more painful configurations, just concentrate on localizing your content.'); ?></p></li>

<?php
$count_one = 1;
$count_two = 2;
echo '<li><p>'
	.($count_one == 1 ? uit('One question') : $count_two.' '.uit('questions')).uit('? ')
	.($count_two == 1 ? uit('One question') : $count_two.' '.uit('questions')).uit('? ')
	.uit('Plural is not a problem (almost)!')
	.'</p></li>';
?>

<li><p style="font-weight: bold;"><?php echo uit('For more information and download, please go to <a href="https://github.com/mogita/PHP-UI-Text">GitHub</a> page'); ?></p></li>
</ul>

<hr />
<p style="font-size: 0.7em;">Copyright 2015 mogita</p>
</div>
</div>
</body>
</html>