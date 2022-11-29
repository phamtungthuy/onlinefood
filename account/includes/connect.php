<?php
session_start();
// $servername = "localhost";
// $server_user = "root";
// $server_pass = "";
// $dbname = "food";
// $port = 3308;
$servername = "https://onlinefoodweb.herokuapp.com/";
$server_user = "bhbtmaggqotebo";
$server_pass = "437343278bc49ea8f4aa3a7d5cfa54993cf960c3e5cd735ed8615519f157e65f";
$dbname = "d6qdpvng36l4rb";
$port = 5432;
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname, $port);
?>