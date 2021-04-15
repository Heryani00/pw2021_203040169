<?php 
/*
Heryani
203040169
Jum'at 13.00
*/
?>

<?php
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <title>FARM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- using fontawseome ----->
    <script src="https://kit.fontawesome.com/0fc708ed1b.js" crossorigin="anonymous"></script>
    <style>
        .table {
            background-color: beige;
        }
    
    </style>
</head>
<body>
<div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="display-4">FARM</h1>

                <div class="add mb-3 btn btn-online-primary rounded-pill" style="width: 170px;">
                    <a href="tambah.php" style="text-decoration:none; color:#000;">Tambah Data</a>
                </div>
                <form action="" method="get" style="float: right;">
                    <input type="text" name="keyword" size="30" placeholder="Cari Di Sini!" autofocus>
                    <button type="submit" name="cari" class="btn"><span>Cari!</span></button><br><br>
                </form>


<table class="table table-bordered table-striped table-hover">
  <thead>
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
            <a href="ubah.php?id=<?= $p['id'] ?>"><button class="btn">Ubah</button></a>
            <a href="hapus.php?id=<?= $p["id"]; ?>" onclick="return confirm('Hapus Data??')"><button class="btn">Hapus</button></a>
        </td>
      <td><img src="../assets/img/<?= $p["picture"]; ?>"></td>
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
</body>
</html>