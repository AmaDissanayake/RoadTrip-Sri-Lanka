<?php

$host="localhost";
$user="root";
$password="";
$db="php1";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>