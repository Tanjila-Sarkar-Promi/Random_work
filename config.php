<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "project_management_system_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>