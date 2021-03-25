<?php 
/*
Heryani
203040169
Jum'at 13.00
*/
?>

<?php

// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");
// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040169");
// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM parfum");

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
            background-color: azure;
        }
    
    </style>
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">NO</th>
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
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="assets/img/<?= $row["picture"]; ?>"></td>
      <td><?= $row["name"] ?></td>
      <td><?= $row["brand"] ?></td>
      <td><?= $row["description"] ?></td>
      <td><?= $row["price"] ?></td>
      <td><?= $row["category"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
</body>
</html>