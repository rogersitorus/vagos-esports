<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Poppins:wght@100;300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

</head>

<body>
    <!-- HERO SECTION -->
    <section class="about-hero-section">
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
    <section class="about-main-section">
        <div class="about-container">
            <h2>ABOUT US</h2>
            <p>United by an unbreakable bond, we are more than a team;
                <br>we are a collective of like-minded individuals
                who eat, sleep, and breathe esports.
                <br>Our journey is one of growth, resilience, and the unwavering
                pursuit of excellence.
                <br>Every victory is a testament to our dedication; every challenge, a stepping stone toward mastery.
                <br><br><br>
                <span>This is Team Vagos Esport
                    <br>authentically Bali
                    <br>undeniably formidable.</span>
            </p>
        </div>
        <div class="about-visimisi">
            <img src="./image/garis-about.png" alt="">
            <div class="container-visi">
                <h1 class="about-visi-title">VISI</h1>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nemo quidem, iure tempore perferendis
                    numquam quod id itaque rerum laboriosam laudantium voluptatem voluptas a quae explicabo vel.
                    Accusantium, ipsum reprehenderit?</h2>
            </div>

            <div class="container-misi">
                <h1 class="about-misi-title">MISI</h1>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi distinctio fugiat, quas
                    exercitationem possimus nam id suscipit, voluptas, quidem eligendi at. Voluptatibus deserunt ex
                    dignissimos, quis totam placeat fugiat nemo?</h2>
            </div>
            <img src="./image/garis-about.png" alt="">
        </div>
    </section>
    <!-- CONTENT SECTION SELESAI -->

    <section class="about-achievement">
        <h1 class="achievement-title">ACHIEVEMENT</h1>
        <!-- Flickity HTML init -->
        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            <div class="gallery-cell">
                <img src="./image/achievement/achieve 1.jpg" alt="">
            </div>
            <div class="gallery-cell">
                <img src="./image/achievement/achieve 2.jpg" alt="">
            </div>
            <div class="gallery-cell">
                <img src="./image/achievement/achieve 3.jpg" alt="">
            </div>
            <div class="gallery-cell">
                <img src="./image/achievement/achieve 1.jpg" alt="">
            </div>
            <div class="gallery-cell">
                <img src="./image/achievement/achieve 2.jpg" alt="">
            </div>
        </div>
    </section>

    <div class="match-count">
        <h1><span>10</span> champions</h1>
        <img src="image/about-garis.png" alt="">
        <div class="match-count-container">
            <div>
                <h3><span>230+</span></h3>
                <h3>MATCH</h3>
            </div>
            <div>
                <h3><span>70+</span>
                    <h3>2nd/3rd</h3>
            </div>
            <div>
                <h3><span>150+</span>
                    <h3>UNKNOWN</h3>
            </div>
        </div>
                
    </div>

    <section class="contact-section" id="contact">
        <header>
            <div class="contact-header-left">
                <img src="image/logo.png" alt="">
            </div>
            <div class="contact-header-right">
                <h1>CONTACT US</h1>
                <h3>have any question?</h3>
            </div>
        </header>
        <div class="contact-form">
            <div class="contact-form-input">
                <form action="">
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" ><br>
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="email" ><br>
                    <label for="email">Phone Number</label><br>
                    <input type="text" id="pnumber" name="pnumber"><br><br>
                    <label for="email">Question</label><br>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Text a message"></textarea>
                    <button class="contact-button">Send Message</button>
                </form>
            </div>

            <div class="contact-socmed">
                <h1>REACH US AT:</h1>
                <img src="./image/garis.png" alt="" class="contact-garis">
                <div class="container-socmed">
                    <a href="https://www.instagram.com/teamvagos.id/">
                        <img src="image/instagram.png" alt="">
                        <p>@teamvagos.id</p>
                    </a>
                </div>
                <div class="container-socmed">
                    <a href="https://web.facebook.com/profile.php?id=100083361519984">
                        <img src="image/facebook.png" alt="">
                        <p>team vagos</p>
                    </a>
                </div>
                <div class="container-socmed">
                    <a href="https://www.tiktok.com/@teamvagos.id">
                        <img src="image/tiktok.png" alt="">
                        <p>@teamvagos.id</p>
                    </a>
                </div>
                <h3>or check our players social media</h3>
            </div>
        </div>
    </section>
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
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>