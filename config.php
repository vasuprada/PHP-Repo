<?php
$hostname_conn = "127.0.0.1";
$database_conn = "gatsocntwk";
$username_conn = "root";
$password_conn = "root";
$conn = mysql_connect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_conn, $conn) or die("could not".mysql_error());
?>
