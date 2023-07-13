<?php 
    $nama_barang = $_GET['nama_barang'];
    $foto = $_GET['foto'];
    $harga =  $_GET['harga'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Transaksi</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="navbar">
        <a class="navbar-brand judul" href="#">ShoeStyle</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../halaman.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../halaman.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Transaksi</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu text-center">
                        <a class="dropdown-item  " href="#">About</a>
                        <a class="dropdown-item  " href="#contact">Contact</a>
                        <a class="dropdown-item  " href="menampilkan.php">Data Transaksi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item  " href="../logout.php"><i
                                class="fa-solid fa-right-from-bracket ml-3"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Form Transaksi -->



    <div class="container pt-5">
        <form action="simpan.php" method="POST">
            <h3 class="text-center mt-5 data">FORM TRANSAKSI</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form-nama-barang">Nama Sepatu</label>
                        <input type="text" id="form-nama-barang" name="nama_barang" class="form-control"
                            value="<?php echo $nama_barang; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="form-pembeli">Pembeli</label>
                        <input type="text" id="form-pembeli" name="pembeli" class="form-control" required>
                    </div>

                    <div class="form-foto">
                        <label for="form-foto">Foto</label>
                        <input type="text" id="form-foto" name="foto" class="form-control-file"
                            value="<?php echo $foto; ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form-jumlah">Jumlah</label>
                        <input type="number" id="form-jumlah" name="jumlah" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="form-harga">Harga</label>
                        <input type="number" id="total-harga" name="harga" class="form-control"
                            value="<?php echo $harga; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="form-total">Total</label>
                        <input type="text" id="form-total" name="total" class="form-control" value="" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" class="form-control" required></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" name="submit">Submit</button>
                <input class="btn btn-danger" type="reset" name="" value="Reset">
            </div>
        </form>
    </div>


    <!-- footer -->
    <footer class="footer text-light text-center py-4 mt-5">
        <p>&copy; 2023 ShoeStyle. All rights reserved.</p>
    </footer>
    <script>

    </script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../asset/style/main.js"></script>
</body>

</html>

<?php
require('sql.php');
if (isset($_POST['submit'])) {
    $pembeli =  $_POST['pembeli'];
    $nama_barang = $_POST['nama_barang'];
    $foto = $_POST['foto'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $total = $_POST['total'];
      $alamat = $_POST['alamat'];
}