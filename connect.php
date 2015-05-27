<?php
$MySqlHostname = "localhost"; //the name of your host - if its local leave it as is.
$MySqlUsername = "phpsites_demodou"; //the username to your database.
$MySqlPassword = "id]_L=(1VW]cqV-H}3"; //the password to your database.
$MySqlDatabase = "phpsites_demodoubler"; //the name of your database.
$dblink=MYSQL_CONNECT($MySqlHostname, $MySqlUsername, $MySqlPassword) or die("Could not connect to database");
@mysql_select_db("$MySqlDatabase") or die( "Could not select database");
?>