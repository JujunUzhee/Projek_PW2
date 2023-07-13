<?php
require('sql.php');

extract($_POST);
$Lib = new Transaksi();
$upd = $Lib->updateTransaksi($nama_barang, $pembeli, $foto, $jumlah, $harga, $total, $alamat);

if ($upd) {
     header('Location:menampilkan.php');
} else {
    echo "Data Gagal Disimpan";
}