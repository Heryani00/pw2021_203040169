<?php
// Heryani
// 203040169
// Jum'at 13.00


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


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

    <title>Detail Produk</title>
    <style>
        body {
            background-color: #d8e8e4;
            background-attachment: fixed;
            background-size: cover;
        }

        .card {
            margin: 0 auto;
        }


        .card img {
            object-fit: cover;
            object-position: center;
        }

        .card:hover {
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
            transform: scale(1.02);
            color: #c6cebe;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="../assets/img/<?= $products["picture"]; ?>" style="height: 17rem;" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="col-md-3 m-3">
                <div class="card shadow" style="width: 420px; height:38px; font-family: 'Rancho', cursive; font-size: 16px;">
                    <div class="card-body text-center">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <p class="card-text">Nama : <br><?= $products["name"]; ?></p>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text"> Brand : <br><?= $products["brand"]; ?></p>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text"> Description : <br><?= $products["description"]; ?></p>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text"> Price : <br><?= $products["price"]; ?></p>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text"> Category : <br><?= $products["category"]; ?></p>
                            </li>
                            <a href="../index.php" class="btn btn-primary">Kembali</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>

</html>