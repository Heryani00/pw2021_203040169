<?php 
/*
Heryani
203040169
https://github.com/Heryani00/pw2021_203040169.git
Pertemuan 7 - 04 Maret 2021
Mempelajari mengenai Get & Post
*/
?>
<?php 
// SUPERGLOBALS
// variable global milik php
// merupakan Array Associative
// $_GET
// var_dump($_GET);
// bisa menambahkan melalui link URL
// jika lebih dari satu variable tambahkan &
$mahasiswa = [
    [
              "nrp" => "203040169",
              "nama" => "Heryani",
              "email" => "heryanishyt1105@gmail.com",
              "jurusan" => "Teknik Informatika",
              "gambar" => "Heryani.png"
    ],
    [
              "nama" => "Indah",
              "nrp" => "19203040168",
              "email" => "indah5421@gmail.com",
              "jurusan" => "Teknik Informatika",
              "gambar" => "Indah.png"
    ]
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?=$mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"];?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
 <?php endforeach; ?>
 </ul>  


</body>
</html>








