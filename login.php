<?php
session_start();

// Menghubungkan ke database
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'database_penjualan';

$koneksi = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header("Location: halaman.php");
} else {
    header("Location: index.php?error=true");
}

mysqli_close($koneksi);
?>