<?php 
/*
Heryani
203040169
Jum'at 13.00
*/
?>

<?php 
$teks = [ [ "ada" => "ada","abel" => "abel","men" => "men","pung" => "pung","nilai" => "nilai"], 
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3a</title>
</head>
<body>

    <div class="container">
        <?php foreach( $teks as $a ) : ?>
            <p>Array <?= $a["ada"]; ?>lah suatu vari<?= $a["abel"]; ?> 
            yang dapat <?= $a["men"]; ?>am<?= $a["pung"]; ?> banyak <?= $a["nilai"]; ?></p>
        <?php endforeach; ?>
    </div>

    
    
</body>
</html>