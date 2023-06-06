<?php
/**
 * using mysqli_connect for database connection
 */

$server = "localhost";
$user = "root";
$pass = "";
$database = "telkom";

 
$mysqli = mysqli_connect($server, $user, $pass, $database);
?>