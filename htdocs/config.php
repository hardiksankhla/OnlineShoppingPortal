<?php

$localhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

$connect = mysql_connect($localhost, $dbuser ,$dbpass);
mysql_select_db("$dbname", $connect);



?>