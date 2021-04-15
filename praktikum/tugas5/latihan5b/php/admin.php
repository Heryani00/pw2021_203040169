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

// melakukan query
$products = query("SELECT * FROM parfum");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div class="float-md-start">
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
    <?php $i = 1 ?>
    <?php foreach ($products as $p) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td>
            <a href=""><button>Ubah</button></a>
            <a href=""><button>Hapus</button></a>
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
    <div class="add">
      <a href="tambah.php">Tambah Data</a>
    </div>
  </tbody>
</table>
</div>
</body>
</html>