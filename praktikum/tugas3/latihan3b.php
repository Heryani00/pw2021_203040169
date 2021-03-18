<?php 
/*
Heryani
203040169
Jum'at 13.00
*/
?>

<?php 
$terkenal = [   [   "lama1" => "Mohammad Salah",
                    "lama2" => "Cristiano Ronaldo",
                    "lama3" => "Lionel Messi",
                    "lama4" => "Zlatan Ibrahimovic",
                    "lama5" => "Neymar J"],
            ];

    $baru = [ [ "baru1" => "Cristiano Ronaldo",
                "baru2" => "Lionel Messi",
                "baru3" => "Luca Modric",
                "baru4" => "Mohammad Salah",
                "baru5" => "Neymar Jr",
                "baru6" => "Sadio Mane",
                "baru7" => "Zlatan Ibrahimovic"],  

            ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<body>

    <h1>Daftar pemain bola terkenal</h1>

    <?php foreach( $terkenal as $a ) : ?>
        <ol>
            <li><?= $a["lama1"]; ?></li>
            <li><?= $a["lama2"]; ?></li>
            <li><?= $a["lama3"]; ?></li>
            <li><?= $a["lama4"]; ?></li>
            <li><?= $a["lama5"]; ?></li>
        </ol>
        <div class="clear"></div>
    <?php endforeach; ?>    

    <h1>Daftar pemain bola terkenal baru</h1>

    <?php foreach( $baru as $a ) : ?>
        <ol>
            <li><?= $a["baru1"]; ?></li>
            <li><?= $a["baru2"]; ?></li>
            <li><?= $a["baru3"]; ?></li>
            <li><?= $a["baru4"]; ?></li>
            <li><?= $a["baru5"]; ?></li>
            <li><?= $a["baru6"]; ?></li>
            <li><?= $a["baru7"]; ?></li>
        </ol>
        <div class="clear"></div>
    <?php endforeach; ?>   



</body>
</html>