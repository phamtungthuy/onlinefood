<?php
session_start();
$servername = "db_heroku";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$port = 5432;
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname, $port);
?>