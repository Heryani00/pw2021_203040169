<?php
/*
Heryani
203040169
Jum'at 13.00
*/
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$p = query("SELECT * FROM parfum WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "  <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "  <script>
                    alert('Data Gagal Diubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
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
    <div class="page">
        <h2>Form Ubah Data Parfum</h2>
        <form action="" method="post">
            <ul>
                <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
                <li>
                    <label for="picture">Picture :</label><br>
                    <input type="file" name="picture" id="picture" required value="<?= $p['picture'] ?>"><br><br>
                </li>
                <li>
                    <label for="name">Name :</label><br>
                    <input type="text" name="name" id="name" autocomplete="off" required value="<?= $p['name']; ?>"><br><br>
                </li>
                <li>
                    <label for="brand">Brand :</label><br>
                    <input type="text" name="brand" id="brand" autocomplete="off" required value="<?= $p['brand'] ?>"><br><br>
                </li>
                <li>
                    <label for="description">Description :</label><br>
                    <input type="text" name="description" id="description" autocomplete="off" required value="<?= $p['description'] ?>"><br><br>
                </li>
                <li>
                    <label for="price">Price :</label><br>
                    <input type="text" name="price" id="price" autocomplete="off" required value="<?= $p['price'] ?>"><br><br>
                </li>
                <li>
                    <label for="category">Category :</label><br>
                    <input type="text" name="category" id="category" autocomplete="off" required value="<?= $p['category'] ?>"><br><br>
                </li>
                <br>
                <button type="submit" name="ubah">Ubah Data!</button>
                <button type="submit">
                    <a href="admin.php" style="text-decoration: none; color: black">Kembali</a>
                </button>
            </ul>
        </form>
    </div>
</body>

</html>