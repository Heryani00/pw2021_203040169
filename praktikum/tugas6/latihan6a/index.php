<?php 
/*
Heryani
203040169
Jum'at 13.00
*/
?>

<?php

// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$products = query("SELECT * FROM parfum")

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FARM</title>
</head>
<body>
  <a href="php/login.php">
          <button type="">Masuk ke halaman admin</button>
  <div class="container">
    <?php foreach ($products as $p) : ?>
      <p class="name">
         <a href="php/detail.php?id=<?= $p['id'] ?>">
            <?= $p["name"] ?>
        </a>
      </p>
      <?php endforeach; ?>
  </div>
</body>
</html>