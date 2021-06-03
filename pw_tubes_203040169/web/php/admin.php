<?php
// Heryani
// 203040169
// Jum'at 13.00

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $parfum = query("SELECT * FROM parfum WHERE
                name LIKE '%$keyword%' OR
                brand LIKE '%keyword%' OR
                description LIKE '%$keyword%' OR
                price LIKE '%keyword%' OR
                category LIKE '%keyword%' ");
} else {
  $parfum = query("SELECT * FROM parfum");
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/105baf2792.js" crossorigin="anonymous"></script>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
  <title>Admin</title>

  <style>
    body {
      background-color: #faf8f0;
    }

    .page {
      width: 350px;
      background-color: #5F9EA0;
      margin: 80px auto;
      padding: 30px 20px;
      border-radius: 8px;
    }

    .form {
      box-sizing: border-box;
      width: 100%;
      padding: 10px;
      font-size: 16pt;
      margin-bottom: 20px;
      border-radius: 4px;
    }

    .btn {
      display: inline-block;
      border-radius: 6px;
      background-color: #a7e9e1;
      border: none;
      text-align: center;
      font-size: 14px;
      padding: 6px;
      width: 100px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }

    .btn span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .btn span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    .btn:hover span {
      padding-right: 25px;
    }

    .btn:hover span:after {
      opacity: 1;
      right: 0;
    }

    thead {
      background-color: #5F9EA0;
    }
  </style>
</head>

<body>

  <div class="container" style=" background-color: ghostwhite;">
    <div class="card mt-5">
      <div class="card-body">
        <h1 class="display-4" style="font-family: 'Pacifico', cursive;">FARM</h1>

        <div class="add mb-3 btn btn-online-primary rounded-pill" style="width: 170px; font-family: 'Shadows Into Light', cursive;">
          <a href="tambah.php" style="text-decoration:none; color:#000;"><i class="far fa-plus-square"></i>Tambah Data</a>
        </div>
        <form action="" method="get" style="float: right; font-family: 'Shadows Into Light', cursive;">
          <input type="text" name="keyword" size="30" placeholder="Cari Di Sini!" autocomplete="off" autofocus>
          <button type="submit" name="cari" class="btn"><span>Cari!</span></button><br><br>
        </form>

        <div class="logout">
          <a href="logout.php" style="color: slategray; font-family: 'Shadows Into Light', cursive;"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>

        <table class="table table-bordered table-striped table-hover" style="background-color:beige; font-family: 'Kaushan Script', cursive;">
          <thead class="text-center">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Opsi</th>
              <th scope="col">Picture</th>
              <th scope="col">Name</th>
              <th scope="col">Brand</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Category</th>
            </tr>
          </thead>
          <tbody>
            <?php if (empty($parfum)) : ?>
              <tr>
                <td colspan="9">
                  <h1>Data tidak ditemukan</h1>
                </td>
              </tr>
            <?php else : ?>
              <?php $i = 1 ?>
              <?php foreach ($parfum as $p) : ?>
                <tr>
                  <th scope="row"><?= $i ?></th>
                  <td>
                    <a href="ubah.php?id=<?= $p['id']; ?>"><button class="btn"> <i class="far fa-edit"></i>Ubah</button></a>
                    <a href="hapus.php?id=<?= $p["id"]; ?>" onclick="return confirm('Hapus Data??')"><button class="btn"><i class="far fa-trash-alt"></i>Hapus</button></a>
                  </td>
                  <td><img src="../assets/img/<?= $p["picture"]; ?>" style="width: 150px;"></td>
                  <td><?= $p["name"] ?></td>
                  <td><?= $p["brand"] ?></td>
                  <td><?= $p["description"] ?></td>
                  <td><?= $p["price"] ?></td>
                  <td><?= $p["category"] ?></td>
                </tr>
                <?php $i++ ?>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


</body>

</html>