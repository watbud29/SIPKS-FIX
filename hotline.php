<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Dan Pelayanan PPKS</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="assets/dist/img/sippkss.png">
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="./img/shape.png" alt="" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
              <img src="./img/logosippks.png" alt="Logo" />
              <h3>SIPPKS</h3>
            </div>

            <div class="links">
              <ul>
                <li><a class="" href="dashboard.php">Dashboard</a></li>
                <li><a class="" href="tentang.php">Tentang</a></li>
                <li><a class="" href="panduan.php">Panduan</a></li>
                <li><a class="active" href="hotline.php">Hotline</a></li>
                <li><a href="login.php" class="btn">Login</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Hotline </h1>
                <h1>[Layanan Pengaduan]</h1>
              </div>
              <p class="text">
                Hotline 1 - Pak Winanda <a href="https://api.whatsapp.com/send/?phone=6282227319712&text&type=phone_number&app_absent=0" target="_blank"> [Klik Disini]</a>
              </p>
              <p class="text">
                Hotline 2 - Pak Salmu <a href="https://api.whatsapp.com/send/?phone=62895376522751&text&type=phone_number&app_absent=0" target="_blank"> [Klik Disini]</a>
              </p>
              <p class="text">
                Hotline 3 - Kak Rosiana <a href="https://api.whatsapp.com/send/?phone=6281338849898&text&type=phone_number&app_absent=0" target="_blank"> [Klik Disini]</a>
              </p>
              <p class="text">
                Hotline 4 - Kak Adilah <a href="https://api.whatsapp.com/send/?phone=62895600538191&text&type=phone_number&app_absent=0" target="_blank"> [Klik Disini]</a>
              </p>
              <p class="text">
                Hotline 5 - Kak Indah <a href="https://api.whatsapp.com/send/?phone=6287784400998&text&type=phone_number&app_absent=0" target="_blank"> [Klik Disini]</a>
              </p>
              <p class="text">
                Hotline 6 - Kak Sri <a href="https://api.whatsapp.com/send/?phone=6285783819931&text&type=phone_number&app_absent=0" target="_blank"> [Klik Disini]</a>
              </p>
              
            </div>

            <div class="right">
              <img src="./img/hotline.png" alt="Person Image" class="person" />
            </div>
          </div>
        </div>


        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
            <footer class="main-footer">
              <strong>Copyright &copy; 2023 All rights reserved. <b>SIPPKS</b> 
              <div class="float-right d-none d-sm-inline-block">
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./app.js"></script>
  </footer>
  </body>
</html>
