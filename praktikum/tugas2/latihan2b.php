<?php 
/*
Heryani
203040169
Jum'at 13.00
*/
?>
<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Latihan 2B</title>
     <style>
         .kotak {
             border: 2px solid black;
             padding: 10px;
         }
     </style>
 </head>
 <body>

     <?php

     $jawabanIsset = "Fungsi Isset = Berfungsi untuk menyatakan variable sudah diset atau tidak, jika sudah variable akan mengembalikan nilai true atau sebaliknya. <br><br>";
     $jawabanEmpty = "Empty adalah = Berfungsi untuk memeriksa apakah suatu variable form tidak berisi data alias kosong atau tidak dikirim.";

     function soal($style)
     {
         global $jawabanIsset, $jawabanEmpty;
         echo $jawabanIsset, $jawabanEmpty;
         return $style;
     }

     ?>

     <div class="kotak">
         <?= soal("  "); ?>
     </div>

 </body>

 </html>