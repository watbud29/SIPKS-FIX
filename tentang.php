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
                <li><a class="active" href="panduan.php">Panduan</a></li>
                <li><a class="" href="hotline.php">Hotline</a></li>
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
                <h1>Tentang</h1>  
              </div>

              <div class="anggota">
                <h2>Anggota satgas PPKS POLIBATAM</h2>
              </div>

              <div class="anggota_ppks">
                <img src="img/anggota_ppks.png" alt="">
              </div>

            <div class="anggota-satgas">
              <h2>Anggota Satgas</h2>
              <p class="text">A. Pendidik
                B. Kependidikan
                C. Mahasiswa
              </p>
            </div>

            <div class="tugas">
              <h2>Tugas Satgas PPKS Polibatam</h2>
              <p class="text">Membantu Pemimpin Perguruan Tinggi menyusun pedoman PPKS. Mensosialisasikan pendidikan kesetaraan gender, kesetaraan disabilitas, serta PPKS.
                Menindaklanjuti laporan Kekerasan Seksual serta melakukan koordinasi dengan unit instansi terkait dalam pemberian pelindungan kepada Korban dan saksi.</p>
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
