<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["logout"])) {
    $_SESSION = [];
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css
">

<body>
    <nav class="navbar navbar-expand-lg bg-info bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="upload-news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="upload-shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="upload-admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Pelanggan</a>
                    </li>
                </ul>
                <form action="" method="post">
                    <button class="btn btn-outline-success" type="submit">
                        <a href="index.php">HOME</a>
                    </button>
                    <button class="btn btn-outline-success ms-2" type="submit" name="logout">
                        LOGOUT
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container p-5">
        <p class="h3 text-center">INPUT SHOP</p>
        <div class="container-lg col-md-6 p-2">
            <form action="action.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                    <input type="text" name="game" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                    <input type="number" name="tanggal" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipe Barang</label>
                    <input type="text" name="judul" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <div class="mb-3 text-end">
                    <button class="btn btn-success">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js
"></script>
</body>

</html>