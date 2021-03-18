<?php 
/*
Heryani
203040169
Jum'at 13.00
*/
?>

<?php
$products = [

    [
        "picture" => "1.jpg",
        "name" => "Blue White",
        "brand" => "FARM",
        "description" => "Terbuat dari rempah-rempah",
        "category" => "Spray", 
        "price" => "Rp. 145.000"
    ],
    [
        "picture" => "2.jpg",
        "name" => "Light Blue",
        "brand" => "FARM",
        "description" => "Beraroma bunga jasmine",
        "category" => "Spray",
        "price" => "Rp. 100.000"
    ],
    [
        "picture" => "3.jpg",
        "name" => "Light Yellow",
        "brand" => "FARM",
        "description" => "Harum bunga, yang beraroma manis dan lembut",
        "category" => "Spray",
        "price" => "160.000"
    ],
    [
        "picture" => "4.jpg",
        "name" => "White Light Yellow",
        "brand" => "FARM",
        "description" => "Beraroma citrus",
        "category" => "Spray",
        "price" => "120.00"
    ],
    [
        "picture" => "5.jpg",
        "name" => "Orange White",
        "brand" => "FARM",
        "description" => "Beraroma menyegarkan dan menenangkan",
        "category" => "Spray",
        "price" => "100.00"
    ],
    [
        "picture" => "6.jpg",
        "name" => "Green Flower",
        "brand" => "FARM",
        "description" => "Beraroma manis bunga mawar yang menyegarkan dan menenangkan",
        "category" => "Spray",
        "price" => "135.00"
    ],
    [
        "picture" => "7.jpg",
        "name" => "Pink Flower",
        "brand" => "FARM",
        "description" => "Beraroma bunga lavender yang menyegarkan",
        "category" => "Spray",
        "price" => "130.00" 
    ],
    [
        "picture" => "8.jpg",
        "name" => "Pink White",
        "brand" => "FARM",
        "description" => "Beraroma wangi musk yang soft",
        "category" => "Spray",
        "price" => "100.00"
    ],
    [
        "picture" => "9.jpg",
        "name" => "With Ash",
        "brand" => "FARM",
        "description" => "Beraroma wangi vanilla yang manisa tapi tidak terlalu menyengat",
        "category" => "Spray",
        "price" => "90.00"
    ],
    [
        "picture" => "10.jpg",
        "name" => "Violet",
        "brand" => "FARM",
        "description" => "Wanginya tidak terlalu tajam seperti citrus dan tidak powdery layaknya floral notes",
        "category" => "Spray",
        "price" => "160.00" 
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($products as $p) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="img/<?= $p["picture"]; ?>"></td>
      <td><?= $p["name"] ?></td>
      <td><?= $p["brand"] ?></td>
      <td><?= $p["description"] ?></td>
      <td><?= $p["price"] ?></td>
      <td><?= $p["category"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>