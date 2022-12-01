<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$port = 3308;
// $servername = "sql.freedb.tech";
// $server_user = "freedb_phamtungthuy";
// $server_pass = "g#6#fXWeRdT4UJQ";
// $dbname = "freedb_onlinefood";
// $port = 3306;
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname, $port);
?>