<?php
/**
 * This file is part of the PHP UI Text project.
 *
 * @copyright	2015 mogita <himogita@gmail.com>
 * @link        https://github.com/mogita/phpuitext
 * @license		GNU General Public License, version 2 (GPL-2.0)
 */

require 'uit/ui_text.php';
?>

<html>
<head>
	<title><?php echo uit('Example for PHP UI Text'); ?></title>
</head>
<body>

<?php
echo '<h1>'.uit('Welcome to PHP UI Text!').'</h1>';
echo '<p>'.uit('This script gives the ability to easily localize your web app.').'</p>';

$count_one = 1;
$count_two = 2;
echo '<p>'.($count_one == 1 ? uit('One question') : $count_two.' '.uit('questions')).uit('? ')
	.($count_two == 1 ? uit('One question') : $count_two.' '.uit('questions'))
	.uit('? Not a problem (almost)!').'</p>';

echo '<form method="POST" action="" style="margin: 0; padding: 0;">'
	.'<label>'.uit('You can use a simple form as language switcher').' '.'</label>'
	.'<select style="display: inline;" name="lang" onchange="this.form.submit();">'
	.'<option disabled selected="selected">Languages</option><option value="zh_cn">简体中文</option>'
	.'<option value="en_us">English</option></select></form>';
?>

</body>
</html>