  <!DOCTYPE html>
  <html lang="en">

  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link rel="website icon" type="png" 
      href="img/ONLY-logovagos.png"> -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="custom.css" />
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>

  <body class="custom-btn">
    <!-- navbar begin -->
    <section class="navbar-shop">
      <div class="logo-vagos">
        <a href="index.html"><img src="./img/logovagos.png" alt="" /></a>
      </div>

      <div class="nav-shop-a">
        <div class="nav-shop-acc">
          <a href="login.html"><img src="img/acc logo.png" alt="" /></a>
          <h4>ACCOUNT</h4>
        </div>

        <div class="nav-shop-cart" onclick="tampilCart()">
          <img src="img/shopping-cart (2) 1.png" alt="" />
          <h4>CART(0)</h4>
        </div>
      </div>

          
    </section>
    <div class="navbar-sidebar">
      <div class="navbar-sidebar-header">
        <h1>CART</h1>
      </div>
      <div class="navbar-sidebar-content">
        <h1>YOUR CART IS EMPTY</h1>
      </div>
    </div>
    <!-- navbar end -->
    <!-- hero begin -->
    <section class="hero-shop">
      <div>
        <h1>VAGOS T-SHIRT</h1>
        <button class="button-to-shop">SHOP NOW</button>
      </div>

    </section>
    <section class="main-shop">
      <div class="all">

        <img src="img/Line 14.png" alt="" />
        <h1>ALL</h1>
        <img src="img/Line 14.png" alt="" />

      </div>
      <div class="shop-card">
        <div class="card">
          <a href="t-shirt-shop-page.html"></a>
          <img src="img/t-shirt white.png" alt="Avatar" />
          <div class="card-detil">
            <h4>VAGOS T-SHIRT V1.0</h4>
            <p>WHITE</p>
          </div>
        </div>
        <div class="card">
          <a href="t-shirt-shop-page.html"></a>
          <img src="img/t-shit blue.png" alt="Avatar" />
          <div class="card-detil">
            <h4>VAGOS T-SHIRT V1.0</h4>
            <p>BLUE</p>
          </div>
        </div>
        <div class="card">
          <a href="t-shirt-shop-page.html"></a>
          <img src="img/t-shirt black.png" alt="Avatar" />
          <div class="card-detil">
            <h4>VAGOS T-SHIRT V1.0</h4>
            <p>BLACK</p>
          </div>
        </div>
        <div class="card">
          <a href="t-shirt-shop-page.html"></a>
          <img src="img/accesoris.png" alt="Avatar" />
          <div class="card-detil">
            <h4>VAGOS ACCESORIES</h4>
              <p>ACRYLIC</p>
          </div>

        </div>
      </div>
      <aside><button class="view-more-shop">VIEW MORE</button></aside>

      <div></div>
      <div class="more-shop">
        <div class="more-shop-detil">
          <img src="img/oficial jersey.png" alt="" />
          <div>
            <h2>OFFICIAL JERSEY</h2>
            <button>SHOP NOW</button>
          </div>
        </div>
        <div class="more-shop-detil">
          <img src="img/basic.png" alt="" />
          <div>
            <h2>BASIC</h2>
            <button>SHOP NOW</button>
          </div>
        </div>
        <div class="more-shop-detil">
          <img src="img/accesories.png" alt="" />
          <div>
            <h2>ACCESORIES</h2>
            <button>SHOP NOW</button>
          </div>
        </div>
      </div>
      <div class="more-shop-none">
        <div class="more-shop-hp">
          <div class="more-shop-hp-slide">
            <img src="img/oficial jersey.png" alt="" />
            <div>
              <h2>BASIC</h2>
              <button>SHOP NOW</button>
            </div>
          </div>
          <div class="more-shop-hp-slide">
            <img src="img/basic.png" alt="" />
            <div>
              <h2>BASIC</h2>
              <button>SHOP NOW</button>
            </div>
          </div>
          <div class="more-shop-hp-slide">
            <img src="img/accesories.png" alt="" />
            <div>
              <h2>BASIC</h2>
              <button>SHOP NOW</button>
            </div>
          </div>

        </div>
      </div>
    </section>

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