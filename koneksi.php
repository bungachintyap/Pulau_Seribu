<?php
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "pulauseribu";

$conn = new mysqli(
    $servername,
    $username_db,
    $password_db,
    $dbname
);

if ($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}