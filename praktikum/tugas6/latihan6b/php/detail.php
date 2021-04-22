<?php 
/*
Heryani
203040169
Jum'at 13.00
*/
?>

<?php
    // Mengecek apakah ada id yang dikirimkan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $products = query("SELECT * FROM parfum WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $products["picture"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $products["name"]; ?></p>
            <p><?= $products["brand"]; ?></p>
            <p><?= $products["description"]; ?></p>
            <p><?= $products["price"]; ?></p>
            <p><?= $products["category"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>