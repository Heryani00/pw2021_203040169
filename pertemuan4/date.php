<?php 
/*
Heryani
203040169
https://github.com/Heryani00/pw2021_203040169.git
Pertemuan 4 - 12 Februari 2021
Mempelajari mengenai Function
*/
?>

<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,12,11,2001));


// strtotime
echo date("l", strtotime("11 des 2001"));
?>