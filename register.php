<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: var(--bg);" class="login-body">
    <!-- NAVBAR SECTION -->
    <div class="hero-navbar">
        <div class="hero-navbar-logo">
            <a href="index.html" class="hero-navbar-logo-img"><img src="image/logo.png" alt=""></a>
        </div>
        <div class="hero-navbar-nav">
            <ul class="ul-navbar">
                <a href="news.html">
                    <li class="news-start">News</li>
                </a>
                <a href="teampage1.html">
                    <li>Teams</li>
                </a>
                <a href="partners1.html">
                    <li>Partners</li>
                </a>
                <a href="about.html">
                    <li>About</li>
                </a>

            </ul>
        </div>

        <div class="hero-navbar-feature">
            <div class="hero-navbar-shop">
                <a href="SHOP.html">
                    <li>VAGOS OFFICIAL SHOP</li>
                </a>
            </div>
            <div class="hero-navbar-menu" onclick="tampilNavbar()">
                <img src="./image/menu.png" alt="">
            </div>
        </div>

    </div>
    <!-- NAVBAR SECTION SELESAI -->
    <section class="register-all">
        <section class="register-main">
            <header class="register-header">
                <img src="image/user (1).png" alt="">
                <h1>REGISTER</h1>
            </header>

            <main class="register-content">
                <form action="" method="get">
                    <div class="register-content-form">
                        <label for="firstName">First Name</label>
                        <input type="text" name="fName" id="fName" placeholder="First Name">
                    </div>
    
                    <div class="register-content-form">
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lName" id="lName" placeholder="Last Name">
                    </div>
    
                    <div class="register-content-form">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
    
                    <div class="register-content-form">
                        <label for="password">Password</label>
                        <input type="text" name="pass" id="pass" placeholder="Password">
                    </div>
                </form>
            </main>

            <div class="register-main-feature">
                <button>SUBMIT</button>
                <a href="login.html">Already Have An Account?</a>
            </div>
        </section>
    </section>
    <!-- FOOTER SECTION -->
    <section class="footer">
        <div class="footer-logo">
            <a href="index.html"><img src="image/logo.png" alt="" class="footer-logo-img" /></a>
        </div>
        <div class="footer-info">
            <h1>TEAM <span>VAGOS</span></h1>
            <ul>
                <a href="news.html">
                    <li>News</li>
                </a>
                <a href="">
                    <li>Teams</li>
                </a>
                <a href="partners1.html">
                    <li>Partners</li>
                </a>
                <a href="about.html">
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