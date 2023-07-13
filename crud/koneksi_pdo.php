<?php
try {
    $koneksi = new PDO('mysql:host=localhost; dbname=database_penjualan', "root", "");
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Koneksi Gagal : " . $e->getMessage() . "<br>";
    die();
}