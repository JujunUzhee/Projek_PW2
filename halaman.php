<?php
session_start();

// Memeriksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Penjualan Sepatu</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald&family=PT+Serif:ital@1&family=Teko:wght@500&display=swap"
        rel="stylesheet">
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./crud/menampilkan.php">Transaksi</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu text-center">
                        <a class="dropdown-item  " href="#about">About</a>
                        <a class="dropdown-item  " href="#contact">Contact</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item  " href="logout.php"><i
                                class="fa-solid fa-right-from-bracket ml-3"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-carousel" src="./asset/image/image1.jpg" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-carousel" src="./asset/image/image2.jpg" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-carousel" src="./asset/image/image3.jpg" alt="Image 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Product -->
    <div class="container py-5">
        <h1 class=" text-center tentang" id="product">My Product</h1>
        <div class="wrapper">

            <div class="card" style="width: 18rem; ">
                <img src="./asset/image/Shoes1.jfif" class="card-img-top image-card" alt="..." id="card-img">
                <div class="card-body">
                    <h5 class="card-title text-center" id="card-title">Unisex Classic</h5>
                    <p class="card-text text-center">Sepatu ini memberikan kenyamanan maksimal saat digunakan berkat
                        teknologi
                        inovatif yang digunakan.</p>
                    <a href="./crud/transaksi.php?nama_barang=Unisex%20Classic&foto=Shoes1.jfif&harga=150000"
                        class="btn btn-warning"><i class="fa-solid fa-cart-shopping"></i></a><span class="harga"
                        id="card-price"><span>RP</span>150000<span>.-</span></span>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./asset/image/Shoes2.jfif" class="card-img-top image-card" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Sneakers</h5>
                    <p class="card-text text-center">Sepatu ini memberikan kenyamanan maksimal saat digunakan berkat
                        teknologi
                        inovatif yang digunakan.</p>
                    <a href="./crud/transaksi.php?nama_barang=Sneakers&foto=Shoes2.jfif&harga=130000"
                        class="btn btn-warning"><i class="fa-solid fa-cart-shopping"></i></a><span class="harga"
                        id="card-price"><span>RP</span>130000<span>.-</span></span>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./asset/image/Shoes3.jfif" class="card-img-top image-card" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">AirWalk Elite</h5>
                    <p class="card-text text-center">Sepatu ini memberikan kenyamanan maksimal saat digunakan berkat
                        teknologi
                        inovatif yang digunakan.</p>
                    <a href="./crud/transaksi.php?nama_barang=AirWalk%20Elite&foto=Shoes3.jfif&harga=110000"
                        class="btn btn-warning"><i class="fa-solid fa-cart-shopping"></i></a><span class="harga"
                        id="card-price"><span>RP</span>110000<span>.-</span></span>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="./asset/image/Shoes4.jfif" class="card-img-top image-card" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Vans Old Skool</h5>
                    <p class="card-text text-center">Sepatu ini memberikan kenyamanan maksimal saat digunakan berkat
                        teknologi
                        inovatif yang digunakan.</p>
                    <a href="./crud/transaksi.php?nama_barang=Vans%20Old%20Skool&foto=Shoes4.jfif&harga=170000"
                        class="btn btn-warning"><i class="fa-solid fa-cart-shopping"></i></a><span class="harga"
                        id="card-price"><span>RP</span>170000<span>.-</span></span>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./asset/image/Shoes5.jfif" class="card-img-top image-card" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Adidas</h5>
                    <p class="card-text text-center">Sepatu ini memberikan kenyamanan maksimal saat digunakan berkat
                        teknologi
                        inovatif yang digunakan.</p>
                    <a href="./crud/transaksi.php?nama_barang=Adidas&foto=Shoes5.jfif&harga=200000"
                        class="btn btn-warning"><i class="fa-solid fa-cart-shopping"></i></a><span class="harga"
                        id="card-price"><span>RP</span>200000<span>.-</span></span>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./asset/image/Shoes6.png" class="card-img-top image-card" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Converse All Star</h5>
                    <p class="card-text text-center">Sepatu ini memberikan kenyamanan maksimal saat digunakan berkat
                        teknologi
                        inovatif yang digunakan.</p>
                    <a href="./crud/transaksi.php?nama_barang=Converse%20All%20Star&foto=Shoes4.jfif&harga=80000"
                        class="btn btn-warning"><i class="fa-solid fa-cart-shopping"></i></a><span class="harga"
                        id="card-price"><span>RP</span>80000<span>.-</span></span>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <section id="about" class="about-section">

        <div class="wrapper wrapper-about text-light py-3">

            <div class="container px-5">
                <h2 class="section-title text-center text-white tentang" id="about">About</h2>
                <div class="row">

                    <div class="col">
                        <div class="wrapper ">
                            <img src="./asset/image/marketplace.png" alt="" class="img-about">
                        </div>
                    </div>
                    <div class="col">
                        <p class="section-description text-center teks-about mt-5">Selamat datang di Toko ShoeStyle,
                            tujuan utama kami
                            adalah menyediakan sepatu berkualitas tinggi dengan desain terbaru untuk Anda. Kami percaya
                            bahwa sepatu bukan hanya sekadar aksesori, tetapi juga merupakan cerminan gaya dan
                            kepribadian seseorang. Dengan berbagai pilihan sepatu dari merek-merek terkenal, kami
                            berkomitmen untuk memberikan pengalaman berbelanja yang menyenangkan dan memuaskan.


                        </p>
                    </div>

    </section>

    </div>


    <!-- Contact -->
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-6 back">
                <h2 class=" tentang text-center" id="contact">Keterangan Kontak</h2>
                <div class="container ">
                    <i class="fa-solid fa-location-dot">
                        <snap class="ml-3 contact text-dark">Alamat</snap>
                    </i>
                    <p>
                        Maleber,Kuningan,Jawa Barat</p>
                </div>
                <div class="container">
                    <i class="fa-solid fa-phone">
                        <snap class="ml-3 contact text-dark">Phone</snap>
                    </i>
                    <p>+62 857 9430 0733</p>
                </div>
                <div class="container">
                    <i class="fa-solid fa-envelope">
                        <snap class="ml-3 contact text-dark">Email</snap>
                    </i>
                    <p>jujunjunaedi@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="tentang text-center">Form Kontak</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email Anda">
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea class="form-control" id="message" rows="5"
                            placeholder="Masukkan pesan Anda"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <footer class="footer text-light text-center py-4 mt-5">
        <p>&copy; 2023 ShoeStyle. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="./asset/style/main.js"></script>
</body>

</html>