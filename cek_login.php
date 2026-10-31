<?php
session_start();
require_once('koneksi.php');

// mendapatkan data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Mencegah sql injection
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

// cek username sudah ada atau belum
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        // simpan session
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['role']; 

        // remember me
        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() + (86400 * 30), "/");
        }

        // redirect sesuai role
        if ($row['role'] == 'pengelola') {
            header("Location: hal_admin.php"); 
        } else {
            header("Location: form_pemesanan.php");
        }
        exit();
    } else {
        echo "<script> alert('Password salah');
        window.location.href='login.php';</script>";
    }
} else {
    echo "<script> alert('Username tidak ditemukan');
    window.location.href='login.php';</script>";
}
