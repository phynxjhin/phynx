<?php
$db_host = "localhost";
$db_name = "MyDB";
$db_username  = "root";
$db_password = "";
@mysql_connect("{$db_host}", "{db_username}", "{$db_password}") or die("Can't connect to database");
@mysql_select_db("{$db_name}") or die("Can't connect to database");
?>