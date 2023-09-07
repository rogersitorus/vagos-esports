<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submitAdmin'])) {
        global $koneksi; // Assuming $koneksi is defined in 'db.php'

    $foto = $_FILES['fotoAdmin']['name'];
    $file_tmp = $_FILES['fotoAdmin']['tmp_name'];
    $nama = $_POST['namaAdmin'];
    $email = $_POST['emailAdmin'];
    $password = $_POST['passwordAdmin'];
    $alamat = $_POST['alamatAdmin'];

    $target_dir = 'fotoAdmin/';
    $target_file = $target_dir . basename($foto);

    // Move the uploaded file to the target directory
    if (move_uploaded_file($file_tmp, $target_file)) {
        $query = "INSERT INTO admin (admin_nama, admin_email, admin_password, admin_alamat, admin_gambar) 
                  VALUES ('$nama', '$email', '$password', '$alamat', '$foto')";

        if (mysqli_query($koneksi, $query)) {
            popSuccessInsert();
            header('location: upload-admin.php');
        } else {
            die("SQL ERROR: " . mysqli_error($koneksi));
        }
    } else {
        echo "File upload failed.";
    }
    } elseif (isset($_POST['submitNews'])) {
        global $koneksi; // Assuming $koneksi is defined in 'db.php'

    $foto = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $judul = $_POST['judul'];
    $game = $_POST['game'];
    $berita = $_POST['berita'];
    $tanggal = $_POST['tanggal'];

    $target_dir = 'foto/';
    $target_file = $target_dir . basename($foto);

    // Move the uploaded file to the target directory
    if (move_uploaded_file($file_tmp, $target_file)) {
        $query = "INSERT INTO news (news_game, news_tanggal, news_judul, news_isi, news_gambar) 
                  VALUES ('$game', '$tanggal', '$judul', '$berita', '$foto')";

        if (mysqli_query($koneksi, $query)) {
            header('location:upload-news.php');

        } else {
            die("SQL ERROR: " . mysqli_error($koneksi));
        }
    } else {
        echo "File upload failed.";
    }
    }
}

// Check the URL parameter to determine which form to display
if (isset($_GET['form'])) {
    $selectedForm = $_GET['form'];
} else {
    $selectedForm = 'admin'; // Default to admin form
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
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
                        <a class="nav-link active" aria-current="page" >News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" >Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" >Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" >Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <button class="btn btn-outline-success" type="submit" style="width: 10vmax;">
                        <a href="./index.php" style="color: black; text-decoration: none;">HOME</a>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container p-5">
        <p class="h3 text-center">INPUT <?php echo ucfirst($selectedForm); ?></p>
        <div class="container-lg col-md-6 p-2">
            <form action="action.php<?php echo "?form=$selectedForm"; ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" name="namaAdmin" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="emailAdmin" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="passwordAdmin" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" name="alamatAdmin" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Foto</label>
                    <input type="file" name="fotoAdmin" class="form-control">
                </div>

                <div class="mb-3 text-end">
                    <button class="btn btn-success" name="submit<?php echo ucfirst($selectedForm); ?>">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

    <?php 
        include 'db.php';
        $db = "SELECT * FROM admin";
        $catch = $koneksi->query($db);
    ?>

    <table border="5px" width=100%>

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Alamat</th>
            <th>Gambar</th>
        </tr>
        <?php while ($lol = mysqli_fetch_assoc($catch)) {
            ?>
        <tr>
        <td><?php echo $lol["admin_id"]; ?></td>
        <td><?php echo $lol["admin_nama"]; ?></td>
        <td><?php echo $lol["admin_email"]; ?></td>
        <td><?php echo $lol["admin_password"]; ?></td>
        <td><?php echo $lol["admin_alamat"]; ?></td>
        <td><?php echo $lol["admin_gambar"]; ?></td>
        </tr>

        <?php }?>

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
