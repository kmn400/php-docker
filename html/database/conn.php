<?php

$servername = "host.docker.internal";
$username = "kmn400";
$password = "1234";
$mysql_database = 'kmh';
$mysql_port = '52000';
$mysql_charset = 'UTF8';

// Create connection
$conn = new mysqli($servername, $username, $password,$mysql_database, $mysql_port, $mysql_charset);

?>