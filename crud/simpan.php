<?php
require('sql.php');

extract($_POST);
$Lib = new Transaksi();
$add = $Lib->transaksi($nama_barang, $pembeli, $foto, $jumlah, $harga, $total, $alamat);

if ($add) {
   header('Location:menampilkan.php');
} else {
    echo "Data Gagal";
}