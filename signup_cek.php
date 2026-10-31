<?php
require_once('koneksi.php');

// mendapatkan data dari form
$email            = $_POST['email'];
$username         = $_POST['username'];
$password         = $_POST['password'];

// Cegah SQL Injection
$email            = $conn->real_escape_string($email);
$username         = $conn->real_escape_string($username);
$password         = $conn->real_escape_string($password);

// Validasi kosong
if (empty($email) || empty($username) || empty($password)) {
    echo "<script>alert('Semua field wajib diisi!');
    window.location.href='signup.php';</script>";
    exit();
}

// Validasi email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Format email tidak valid!');
    window.location.href='signup.php';</script>";
    exit();
}

// Cek email atau username udah dipake
$sql = "SELECT * FROM users WHERE email = '$email' OR username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Email atau Username sudah terdaftar!');
    window.location.href='signup.php';</script>";
    exit();
} else {
    // Hash password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user
    $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registrasi berhasil, silakan login!');
        window.location.href='login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>