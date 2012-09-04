<?php

$host = "localhost";
$db_name = "webtext";
$username = "root";
$password = "";

mysql_connect("$host","$username","$password")or die("Cannot Connect");
mysql_select_db("$db_name")or die("Cannot select DB");

?>
