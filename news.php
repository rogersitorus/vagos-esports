<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="news.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Poppins:wght@100;300;400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php 
        include 'db.php';
        $db = "SELECT * FROM news ORDER BY news_id DESC";
        $catch = $koneksi->query($db);
    ?>
    <!-- HERO SECTION -->
    <section class="news-main-hero">
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
    </section>
    <!-- HERO SECTION SELESAI -->

    <!-- CONTENT SECTION -->
    <section class="news-main-content">
        <h1 class="news-main-title">NEWS</h1>
        <section class="news-main-section">
            <div class="news-main-container">
                <?php
                $count = 0;
                while ($lol = mysqli_fetch_assoc($catch)) {
                ;?>
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
                <br><br><br><br><br><br><br><br><br><br><br>
                <?php
                $count++;
                if($count>9){
                    break;
                }
                ?>
                <?php };?> 
            </div>
            <div class="news-page">
                <button>Prev</button>
                <button>1</button>
                <button>2</button>
                <button>3</button>
                <button>...</button>
                <button>10</button>
                <button>Next>></button>
            </div>
        </section>
    </section>
    <!-- CONTENT SECTION SELESAI-->

    <!-- HIRING SECTION -->
    <section class="news-hiring">
        <h1 class="news-hiring-title">HIRING & TRIALS</h1>
        <div class="news-hiring-section">
            <div class="news-hiring-container">
                <div class="news-hiring-card">
                    <img src="image/hiring1.jpg" alt="">
                    <h2>Videographer</h2>
                    <h3>1 Juli 2023</h3>
                </div>
                <div class="news-hiring-card">
                    <img src="image/hiring2.jpg" alt="">
                    <h2>Social Media Specialist</h2>
                    <h3>10 Juli 2023</h3>
                </div>
                <div class="news-hiring-card">
                    <img src="image/hiring3.jpg" alt="">
                    <h2>Senior Back-End Dev</h2>
                    <h3>15 Juli 2023</h3>
                </div>
            </div>

        </div>
        <div class="view-button">
            <a href="https://www.instagram.com/studiokamimandiri/">
                <h2>View More</h2>
            </a>
        </div>

    </section>
    <!-- HIRING SECTION SELESAI-->

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