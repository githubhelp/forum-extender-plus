<?php
require 'db-login.php';
$result = mysql_query('INSERT INTO msglist VALUES("' . mysql_real_escape_string($_POST['msgto']) . '", "' . mysql_real_escape_string($_POST['msgfrom']) . '", "' . mysql_real_escape_string(htmlspecialchars($_POST['msgtext'])) . '")');
mysql_close($db);
if ($_POST['referrer'] && $_POST['referrer'] == 'compose') {
	echo 'Message sent';
} else {
	header('Location: ' . $_POST['returnto']);
}
?>