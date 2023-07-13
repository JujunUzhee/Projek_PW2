<!DOCTYPE html>
<html>

<head>
    <title>Halaman Signup</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald&family=PT+Serif:ital@1&family=Teko:wght@500&display=swap"
        rel="stylesheet">
    <style>
    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }

    .bg-login {
        background: #f9e0bb;
        border-radius: 10px;
        box-shadow: 2px 0 2px 2px rgba(0, 0, 0, 0.3);
        font-family: "PT Serif", serif;
        font-size: 2opx;

    }

    .teks-login {
        font-family: "Teko", sans-serif;
    }

    .btn {
        width: 100%;
        background: #FFC26F;
        box-shadow: 2px 0 2px 2px rgba(0, 0, 0, 0.3);
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <img src="./asset/image/login-img.png" alt="" style="width:400px">
            </div>
            <div class="col-md-6 bg-login">
                <h2 class="text-center pt-4 teks-login">Silakan Daftar</h2>
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Daftar" class="btn text-white">
                    </div>
                    <?php
                    // Tampilkan pesan error jika ada
                    if (isset($_GET['error'])) {
                        echo '<div class="text-center error">Username sudah digunakan!</div>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>