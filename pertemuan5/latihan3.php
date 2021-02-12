<?php 
/*
Heryani
203040169
https://github.com/Heryani00/pw2021_203040169.git
Pertemuan 5 - 12 Februari 2021
Mempelajari mengenai Array
*/
?>

<?php 
$mahasiswa = [["Heryani", "203040169", "Teknik Informatika", "heryanishyt1105@gmail.com"],
 ["Indah", "193040168", "Teknik Informatika", "indah5421@gmail.com"], ["Meli", "183040134", "Teknik Informatika", "meli8905@gmail.com"]
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
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>