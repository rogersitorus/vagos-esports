<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
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
    <section class="hero-section">
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

        <!-- HERO CONTENT -->
        <div class="hero-content">
            <h1>WELCOME TO<br><span>THE BEST E-SPORTS TEAM IN BALI</span></h1>
            <h2>Rise to Victory: Knights of the Digital Arena!</h2>
            <a href="teampage1.php">
                <img src="image/ourteamnew.png" alt="">
            </a>
        </div>
        <!-- HERO CONTENT SELESAI -->
    </section>
    <!-- HERO SECTION SELESAI -->

    <!-- ABOUT SECTION -->
    <section class="about-section">
        <div class="about-content">
            <div class="about-left">
                <div class="about-rotate">
                    <h1>ABOUT</h1>
                </div>
                <div class="about-best">
                    <h1>THE BEST E-SPORTS TEAM IN BALI</h1>
                </div>
            </div>
            <div class="about-right">
                <p>Founded on a shared passion for gaming in , Team Vagos is a formidable presence in the esports
                    world. With a commitment to excellence and a motto of "United in Diversity, Driven by Victory," we
                    thrive in various gaming genres.
                    <br><br>
                    Our achievements reflect our dedication, and our inclusive community
                    approach sets us apart. With a talented roster and dedicated support staff, we're poised to leave an
                    indelible mark on esports.
                    <br><br>
                    Join us on our journey towards continued success and innovation in the
                    competitive gaming landscape.
                    <br><br>
                </p>

            </div>
        </div>
        <!-- ABOUT SECTION SELESAI -->
    </section>

    <!-- DIVISION SECTION -->
    <section class="division-section">
        <div class="division-container">

            <h1 class="division-title">TEAM VAGOS</h1>
            <h2 class="division-subtitle">DIVISIONS</h2>
            <section class="carousel" aria-label="Gallery">
                <ol class="carousel__viewport">
                    <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                        <img src="./image/pubg team.png" alt="">
                        <div class="carousel__snapper">
                            <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                            <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                        </div>
                    </li>
                    <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                        <img src="./image/ff team.png" alt="">
                        <div class="carousel__snapper"></div>
                        <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                        <img src="./image/ml team.png" alt="">
                        <div class="carousel__snapper"></div>
                        <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                        <img src="./image/ff team.png" alt="">
                        <div class="carousel__snapper"></div>
                        <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
                    </li>
                </ol>
                <aside class="carousel__navigation">
                    <ol class="carousel__navigation-list">
                        <li class="carousel__navigation-item">
                            <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
                        </li>
                        <li class="carousel__navigation-item">
                            <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                        </li>
                        <li class="carousel__navigation-item">
                            <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                        </li>
                        <li class="carousel__navigation-item">
                            <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                        </li>
                    </ol>
                </aside>
            </section>
            <div class="division-teams">
                <div class="teams">
                    <img src="image/ff team.png" alt="">
                </div>
                <div class="teams">
                    <img src="image/ml team.png" alt="">
                </div>
                <div class="teams">
                    <img src="image/pubg team.png" alt="">
                </div>
                <div class="teams">
                    <img src="image/ff team.png" alt="">
                </div>
                <div class="teams">
                    <img src="image/ml team.png" alt="">
                </div>
                <div class="teams">
                    <img src="image/pubg team.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- DIVISION SECTION SELESAI -->

    <!-- NEWS SECTION -->
    <section class="news-section">
        <div class="news-title-container">
            <img src="./image/garis.png" alt="">
            <h2 class="news-title">NEWS</h2>
            <img src="./image/garis.png" alt="">
        </div>

        <div class="news-container">
            
            <!-- COBA PHP KE NEWS-->
            <?php 
            $count = 0;
            while ($lol = mysqli_fetch_assoc($catch)) { 
            ?>
            <div class="news-card">
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
            <?php 
                $count++;
                if ($count >= 3) {
                    break;
                }
            }
            ?>
        </div>
        <a href="news.php">
            <div class="view-button">
                <h2>View More</h2>
            </div>
        </a>

    </section>
    <!-- NEWS SECTION SELESAI -->

    <!-- HIGHLIGHT SECTION -->
    <section class="highlight-section">
        <div class="highlight-title-container">
            <img src="./image/garis.png" alt="">
            <h2 class="highlight-title">HIGHLIGHT VIDEOS</h2>
            <img src="./image/garis.png" alt="">
        </div>

        <div class="highlight-container">
            <div class="highlight-card">
                <img src="image/video1.jpg" alt="">
                <div class="highlight-card-desc">
                    <div>
                        <p class="desc-views">1k Views&nbsp;</p>
                    </div>
                    <div class="highlight-card-desc-end">
                        <p class="desc-recent">5 hour ago</p>
                    </div>

                </div>

            </div>
            <div class="highlight-card">
                <img src="image/video2.jpg" alt="">
                <div class="highlight-card-desc">
                    <div>
                        <p class="desc-views">1k Views&nbsp;</p>
                    </div>
                    <div class="highlight-card-desc-end">
                        <p class="desc-recent">5 hour ago</p>
                    </div>
                </div>
            </div>
            <div class="highlight-card">
                <img src="image/video3.jpg" alt="">
                <div class="highlight-card-desc">
                    <div>
                        <p class="desc-views">1k Views&nbsp;</p>
                    </div>
                    <div class="highlight-card-desc-end">
                        <p class="desc-recent">5 hour ago</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="https://www.youtube.com/@teamvagosesports772">
            <div class="view-button">
                <h2>View More</h2>
            </div>
        </a>
    </section>
    <!-- HIGHLIGHT SECTION SELESAI -->

    <!-- SHOP SECTION -->
    <section class="shop-section">
        <div class="shop-title-container">
            <img src="./image/garis.png" alt="">
            <h2 class="shop-title">OUR SHOP</h2>
            <img src="./image/garis.png" alt="">
        </div>

        <div class="shop-container">
            <div class="shop-card">
                <img src="image/produk/baju biru.jpg" alt="">
                <div class="shop-card-desc">

                </div>

            </div>
            <div class="shop-card">
                <img src="image/produk/baju putih.jpg" alt="">
                <div class="shop-card-desc">

                </div>
            </div>
            <div class="shop-card">
                <img src="image/produk/baju hitam.jpg" alt="">
                <div class="shop-card-desc">

                </div>
            </div>

            <div class="shop-card">
                <img src="image/produk/kunci.jpeg" alt="">
                <div class="shop-card-desc">

                </div>
            </div>
        </div>
        <a href="SHOP.php">
            <div class="view-button">
                <h2>View More</h2>
            </div>
        </a>
    </section>
    <!-- SHOP SECTION SELESAI-->

    <!-- FOOTER SECTION -->
    <section class="footer">
        <div class="footer-logo">
            <a href="index.php"><img src="image/logo.png" alt="" class="footer-logo-img" /></a>
        </div>
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
            <a href="https://www.youtube.com/@teamvagosesports772"><img src="image/youtube.png" alt="" /></a>
            <a href="https://www.tiktok.com/@teamvagos.id"><img src="image/tiktok.png" alt="" /></a>
            <a href="https://www.instagram.com/teamvagos.id/"><img src="image/instagram.png" alt="" /><br /></a>
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

</html>