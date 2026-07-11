<?php
$host = "localhost";
$user = "root";
$password = "priya@2007";
$database = "industrial_training";
$conn = mysqli_connect($host, $user, $password,
$database);

if (!$conn) {
die("Connection Failed:".
mysqli_connect_error());
}

?>