<?php
/*
    Heryani
    203040169
    Jum'at, 13:00
*/
?>

<?php 
$club = [  [ "juventus" => "Juventus", 
            "barcelona" => "Barcelona", 
            "real madrid" => "Real Madrid", 
            "liverpool" => "Liverpool", 
            "paris saint germain" => "Paris Saint Germain", 
            "liverpool" => "Liverpool",
            "ac milan" => "Ac Milan"],
        ];
?>


<!DOCTYPE html>
<html lang="en">
    <title>Daftar pemain bola terkenal dan clubnya</title>
    <style> 
    
        .container {
            border: 2px black solid;
            padding-left: 20px;
            margin-right: 40%;
            margin-left: 30%;
        }   
        ul {  
            list-style: none; 
        }
        li {
            margin-left: -40px;
        }
    </style> 
</head>

<body>
    <div class ="container">
        <p><b>Daftar pemain bola terkenal dan clubnya</b></p>

        <?php foreach ( $club as $cl ) : ?>
            <ul>
                <li><b>Cristiano Ronaldo : </b><?= $cl["juventus"]; ?></li>
                <li><b>Lionel Messi :  </b><?= $cl["barcelona"]; ?></li>
                <li><b>Luca Modric : </b><?= $cl["real madrid"]; ?></li>
                <li><b>Mohammad Salah : </b><?= $cl["liverpool"]; ?></li>
                <li><b>Neymar Jr : </b><?= $cl["paris saint germain"]; ?></li>
                <li><b>Sadio Mane : </b><?= $cl["liverpool"]; ?></li>
                <li><b>Zlatan Ibrahimovic : </b><?= $cl[ "ac milan"]; ?></li> 
            </ul>
        <?php endforeach; ?> 
    </div>
    


</body>
</html>