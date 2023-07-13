<?php

class Transaksi
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost; dbname=database_penjualan', "root", "");
    }

    public function transaksi($nama_barang, $pembeli, $foto, $jumlah, $harga, $total, $alamat)
    {
        $sql  = "INSERT INTO transaksi (nama_barang, pembeli, foto, jumlah, harga, total, alamat) VALUES ('$nama_barang', '$pembeli', '$foto', '$jumlah', '$harga', '$total', '$alamat')";
        $query = $this->db->query($sql);

        if (!$query) {
            return "Gagal";
        } else {
            return "Sukses";
        }
    }

    public function editTransaksi($id)
    {
        $sql = "SELECT * FROM transaksi WHERE id = '$id'";
        $query = $this->db->query($sql);
        return $query;
    }

    public function UpdateTransaksi($nama_barang, $pembeli, $foto, $jumlah, $harga, $total, $alamat)
    {
        $sql  = "UPDATE transaksi SET pembeli = '$pembeli', foto ='$foto', jumlah = '$jumlah', harga = '$harga', total = '$total', alamat = '$alamat' WHERE nama_barang = '$nama_barang'";
        $query = $this->db->query($sql);

        if (!$query) {
            return "Gagal";
        } else {
            return "Sukses";
        }
    }

    public function menampilkan()
    {
        $sql = "SELECT * FROM transaksi";
        $query = $this->db->query($sql);
        return $query;
    }

    public function hapusBuku($id)
    {
        $sql = "DELETE FROM transaksi WHERE id = '$id'";
        $query = $this->db->query($sql);
        // return $query;
    }
}