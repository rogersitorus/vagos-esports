<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="news-detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Poppins:wght@100;300;400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php 
        include 'db.php';
        $db = "SELECT * FROM news";
        $catch = $koneksi->query($db);
    ?>
    <!-- HERO SECTION -->
    <!-- NAVBAR SECTION -->
    <div class="hero-navbar">
        <div class="hero-navbar-logo">
            <a href="index.php" class="hero-navbar-logo-img"><img src="image/logo.png" alt=""></a>
        </div>
        <div class="hero-navbar-nav">
            <ul class="ul-navbar">
                <a href="news.php">
                    <li class="news-start">News</li>
                </a>
                <a href="teampage1.php">
                    <li>Teams</li>
                </a>
                <a href="partners1.php">
                    <li>Partners</li>
                </a>
                <a href="about.php">
                    <li>About</li>
                </a>

            </ul>
        </div>

        <div class="hero-navbar-feature">
            <div class="hero-navbar-shop">
                <a href="SHOP.php">
                    <li>VAGOS OFFICIAL SHOP</li>
                </a>
            </div>
            <div class="hero-navbar-menu" onclick="tampilNavbar()">
                <img src="./image/menu.png" alt="">
            </div>
        </div>

    </div>
    <!-- NAVBAR SECTION SELESAI -->

    <!-- CONTENT SECTION -->
    <section class="news-detail-section">
        <div class="news-detail-section-content">
            <?php $lol = mysqli_fetch_assoc($catch)
                ?> 
            <h1><?php echo $lol["news_judul"]; ?></h1>
            <div class="news-detail-section-content-image">
                <img src="./foto/<?php echo $lol["news_gambar"]; ?> " alt="">
            </div>
            <div class="news-detail-section-content-paragraf">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque iure exercitationem a obcaecati tempore,
                    nihil accusamus optio reiciendis unde labore perspiciatis voluptate dolore est eum reprehenderit maxime,
                    temporibus eius repellendus?</p>
                    <br><br><br><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque iure exercitationem a obcaecati tempore,
                    nihil accusamus optio reiciendis unde labore perspiciatis voluptate dolore est eum reprehenderit maxime,
                    temporibus eius repellendus?</p>
                    <br><br><br><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque iure exercitationem a obcaecati tempore,
                    nihil accusamus optio reiciendis unde labore perspiciatis voluptate dolore est eum reprehenderit maxime,
                    temporibus eius repellendus?</p>
            </div>
        </div>
        <div class="news-detail-section-latest">
            <div class="news-detail-section-latest-header">
                <div class="news-detail-section-latest-header-left">
                    <h1>Latest News</h1>
                </div>
                <div class="news-detail-section-latest-header-right">
                    <h1>ALL NEWS</h1>
                </div>
            </div>
            <div class="news-detail-section-latest-list">
                <div class="news-main-container">
                    <?php while ($lol = mysqli_fetch_assoc($catch)) {
                        ?> 
                    <div class="news-main-card">
                        <img src="./foto/<?php echo $lol["news_gambar"]; ?> " alt="">
                        <div class="news-header">
                            <div class="news-game">
                                <p><?php echo $lol["news_game"]; ?></p>
                            </div>
                            <div class="news-date">
                                <p><?php echo $lol["news_tanggal"]; ?></p>
                            </div>
                        </div>
                        <div class="news-card-title">
                            <h3><?php echo $lol["news_judul"]; ?></h3>
                        </div>
                    </div>
                    <?php }?>
                </div>

            </div>
        </div>
    </section>
    <!-- CONTENT SECTION SELESAI -->
    <!-- FOOTER SECTION -->
    <section class="footer">
        <a href="index.php" class="footer-logo"><img src="image/logo.png" alt="" class="footer-logo-img" /></a>
        <div class="footer-info">
            <h1>TEAM <span>VAGOS</span></h1>
            <ul>
                <a href="news.php">
                    <li>News</li>
                </a>
                <a href="teampage1.php">
                    <li>Teams</li>
                </a>
                <a href="partners1.php">
                    <li>Partners</li>
                </a>
                <a href="about.php">
                    <li>About</li>
                </a>
            </ul>
        </div>
        <div class="footer-sosmed">
            <img src="image/youtube.png" alt="" />
            <img src="image/tiktok.png" alt="" />
            <img src="image/instagram.png" alt="" /><br />
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.studiokami.vagos">
                <h2>DOWNLOAD APP</h2>
            </a>
        </div>
        <div class="footer-copyright">
            <h2>Copyright TEAM VAGOS ID 2023</h2>
        </div>
    </section>
    <!-- FOOTER SECTION SELESAI -->
    <script src="./script.js"></script>
</body>