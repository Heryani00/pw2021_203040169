<?php
// Heryani
// 203040169
// Jum'at 13.00


// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$products = query("SELECT * FROM parfum")

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/105baf2792.js" crossorigin="anonymous"></script>

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

  <title>FARM</title>
  <style>
    body {
      background-color: #faedf0;
    }

    .paral {
      min-height: 600px;
      background-attachment: fixed;
      background-size: cover;
      background-position: 50% 50%;
    }

    .paral p {
      font-size: 24px;
      color: #f5f5f5;
      text-align: center;
      line-height: 60px;
    }

    .paral h1 {
      color: rgba(255, 255, 255, 0.8);
      font-size: 60px;
      text-align: center;
      padding-top: 60px;
      line-height: 100px;
    }


    .paralsec2 {
      background-image: url("assets/parallax/parallax1.jpg");
    }

    .jumbotron {
      margin-bottom: 0;
    }

    .card img {
      height: 190px;
      object-fit: cover;
      object-position: center;
    }

    .row .card:hover {
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
      transform: scale(1.02);
      background-color: #f3e3ec;
    }

    .inner {
      overflow: hidden;
    }

    .inner img {
      transition: all 1.5s ease;
    }

    .inner:hover img {
      transform: scale(1.5);
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #5F9EA0">
    <div class="container">
      <a class="navbar-brand" href="#" style="font-family: 'Satisfy', cursive;"><i class="fas fa-cart-plus"></i>FARM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#produk">Produk</a>
        </div>
      </div>
      <div class="icon mt-2 mr-5">
        <h5>
          <i class="fas fa-cart-plus ml-3 mr-3" data-toggle="tooltip" title="Keranjang Belanja"></i>
          <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Kotak Masuk"></i>
          <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
        </h5>
      </div>
      <ul class="navbar-nav mb-2 mb-lg-0 mr-6">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="php/login.php"><i class="fas fa-user-lock mr-4"></i>Admin</a>
        </li>
      </ul>
    </div>
    </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Parallax -->
  <div class="jumbotron paral paralsec2">
    <div class="row">
      <div class="col-6">
        <img src="" class="img-fluid">
      </div>
      <div class="col-6 ">
        <h1 class="display-3 text-left">FARM</h1>
      </div>
    </div>
  </div>

  <!-- Akhir Parallax -->

  <section id="produk" style="font-family: 'Kaushan Script', cursive;">
    <h4 class="text-center font-weight-bold-m-5">PRODUK</h4>
    <div class="row">
      <?php $i = 1;
      foreach ($products as $p) : ?>
        <div class="col-md-3">
          <div class="card mt-4 m-4">
            <div class="product align-items-center p-5 text-center">
              <div class="inner">
                <img src="assets/img/<?= $p['picture']; ?>" class="rounded" width="100px" style="position: relative; width:100%; display: flex; justify-content: center; align-items: center;"><br>
              </div>
              <span style="color: black;"><?= $p['name']; ?></span> <br><br>
              <!-- button -->
              <a href="php/detail.php?id=<?= $p['id']; ?>" class="btn btn-primary" style="border-radius: 5px;">Detail</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-black p-5" style="background-color: #d3dde6; font-family: 'Handlee', cursive;">
    <div class="row">
      <div class="col-md-3">
        <h5>LAYANAN PELANGGAN</h5>
        <ul>
          <li>Pusat Bantuan</li>
          <li>Cara Pembelian</li>
          <li>Pengiriman</li>
          <li>Cara Pengembalian</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Tentang Kami</h5>
        <p>FARM merupakan toko parfum online terpercaya yang menyediakan pilihan parfum terbaru dan terbaik.</p>
      </div>
      <div class="col-md-3">
        <h5>MITRA KERJASAMA</h5>
        <ul>
          <li><img src="assets/mitra kerjasama/gojek.png" style="width: 45px;" alt=""></li>
          <li><img src="assets/mitra kerjasama/grab.png" style="width: 45px;" alt=""></li>
          <li><img src="assets/mitra kerjasama/pos.png" style="width: 45px;" alt=""></li>
          <li><img src="assets/mitra kerjasama/j-t.png" style="width: 45px;" alt=""></li>
          <li><img src="assets/mitra kerjasama/bca.png" style="width: 45px;" alt=""></li>
          <li><img src="assets/mitra kerjasama/dana.png" style="width: 45px;" alt=""></li>
        </ul>
      </div>
      <div class="col-md-3">
        <H5>HUBUNGI KAMI</H5>
        <a href="https://instagram.com/heryan11"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </footer>
  <!-- Akhir Footer -->

  <div class="copyright text-center text-black font-weight-bold p-4" style="font-family: 'Handlee', cursive;">
    <p>FARM Copyright <i class="far fa-copyright">2021</i></p>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>