<?php
require 'db-login.php';
$result = mysql_query("SELECT * FROM `msglist` WHERE `to` = '" . $_GET['to'] . "'");
$count = 0;
while ($row = mysql_fetch_assoc($result)) {
	$count = $count + 1;
}
echo $count;
mysql_close($db);
?>