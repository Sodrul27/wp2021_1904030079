<?php

$host = "localhost";
$userName = "root";
$password = "";
$db = "wpsmt5";

$conn = mysqli_connect($host, $userName, $password, $db);

$result = mysqli_query($conn, 'SELECT * FROM calon_mhs');
// $camaba = mysqli_fetch_row($result);
// $camaba = mysqli_fetch_assoc($result);
