<?php 
/*
Heryani
203040169
https://github.com/Heryani00/pw2021_203040169.git
Pertemuan 6 - 18 Februari 2021
Mempelajari mengenai Associative Array
*/
?>


<?php 
// $mahasiswa = [
//    ["Heryani", "203040169", "heryanishyt1105@gmail.com"
//        , "Teknik Informatika"],
//    ["Indah", "193040168", "indah5421@gmail.com"
//        , "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["nrp"]; ?></li> 
        <li>Email :<?=$mhs["email"]; ?></li>
        <li>Jurusan :<?=$mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
