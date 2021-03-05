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
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li>Teknik Informatika</li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>