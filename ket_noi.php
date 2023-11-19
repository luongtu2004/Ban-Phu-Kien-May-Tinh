<?php
$servername = "localhost";
$dbname = "ban_hang";
$username = "root";
$password =  "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
