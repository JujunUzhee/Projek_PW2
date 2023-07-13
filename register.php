<?php
// Menghubungkan ke database
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'database_penjualan';

$koneksi = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Mendapatkan input dari form pendaftaran
$username = $_POST['username'];
$password = $_POST['password'];

// Mengecek apakah username sudah digunakan
$query = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) == 0) {

    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    mysqli_query($koneksi, $query);


    header("Location: index.php");
} else {

    header("Location: signup.php");
}

mysqli_close($koneksi);
?>