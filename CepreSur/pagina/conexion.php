<?php

$host     = "aa1cwnwl5g21ift.cjklxuhibpql.us-east-1.rds.amazonaws.com";
$port     = 3306;
$socket   = "";
$user     = "admin";
$password = "admin123";
$dbname   = "academiadb";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('No se puede conectar a la base de datos' . mysqli_connect_error());

?>