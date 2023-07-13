<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Transaksi</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
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
                    <a class="nav-link" href="../halaman.php#product">Products</a>
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
                        <a class="dropdown-item  " href="../halaman.php#about">About</a>
                        <a class="dropdown-item  " href="../halaman.php#contact">Contact</a>
                        <a class="dropdown-item  " href="#">Data Transaksi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item  " href="../logout.php"><i
                                class="fa-solid fa-right-from-bracket ml-3"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Tampilkan -->
    <div class="container pt-5">
        <h2 class="text-center pt-5 data">Data Transaksi</h2>
        <table class="table ">
            <thead class="thead  table-secondary text-center">
                <tr>
                    <th>Sepatu</th>
                    <th>Pembeli</th>
                    <th>Foto</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
        require('sql.php');
        $Lib = new Transaksi();
        $show = $Lib->menampilkan();
        while ($data = $show->fetch(PDO::FETCH_OBJ)) { ?>
            <tbody class="text-center">
                <tr>
                    <td><?= $data->nama_barang; ?></td>
                    <td><?= $data->pembeli; ?></td>
                    <td><img src="../asset/image/<?= $data->foto; ?>" alt="" width="150" height="150px"></td>
                    <td><?= $data->jumlah; ?></td>
                    <td><?= $data->harga; ?></td>
                    <td><?= $data->total; ?></td>
                    <td style="width:" 100%"><?= $data->alamat; ?></td>

                    <td><a class="btn btn-danger mr-3" href="menampilkan.php?delete=<?= $data->id; ?>"><i
                                class="fa-solid fa-trash"></i></a>
                        <a class="btn btn-info mr-3" href="edit.php?id=<?= $data->id; ?>"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa-solid fa-credit-card"></i>
                        </button>

                    </td>



                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>

    <!-- Modal -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Terima Kasih Atas Belanjanya Di Toko ShoeStyle🤗🤗
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer text-light text-center py-4 mt-5">
        <p>&copy; 2023 ShoeStyle. All rights reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../asset/style/main.js"></script>
</body>

</html>

<?php
if (isset($_GET['delete'])) {
    $del = $Lib->hapusBuku($_GET['delete']);
    return $del;
}