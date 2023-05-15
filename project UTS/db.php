<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "dbonlineshop";

// Create connection
$con = mysql_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_connect_error());
}


?>
