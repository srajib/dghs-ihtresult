<?php
$host='10.10.10.5';
$database='result_iht';
$db_user='root';
$db_pswd='M1$DB@2012';

$dbh=MYSQL_CONNECT($host, $db_user, $db_pswd) OR DIE("Can not connected to database.");
@mysql_select_db($database) or die("Can not select database.");
mysql_query("SET CHARACTER SET 'utf8'", $dbh); 
?>