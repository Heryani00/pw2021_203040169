<?php
/*
Heryani
203040169
Jum'at 13.00
*/
?>

<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "
			<script>
				alert('Registrasi Berhasil');
        document.location.href = 'login.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('Registrasi Gagal');
			</script>
		";
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">


  <title>Registrasi</title>
  <style>
    body {
      background-image: url('../assets/bg/bg4.jpg');
      background-attachment: fixed;
      background-size: cover;
    }

    .container {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      padding: 20px 25px;
      width: 350px;
    }

    .card img {
      height: 190px;
      object-fit: cover;
      object-position: center;
    }

    .row .card:hover {
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
      transform: scale(1.02);
      background-color: aliceblue;
    }
  </style>
</head>

<body>
  <div class="container" style="background-color:papayawhip;">
    <div class="row justify-content-center">
      <div class="card my-auto">
        <h1 style="font-family: 'Pacifico', cursive; text-align: center;">Create Akun</h1>
        <div class="card-body">
        </div>
        <form method="post" action="">
          <table>
            <tr>
              <td><label for="username" style="font-family: 'Shadows Into Light', cursive;">Username</label></td>
              <td>:</td>
              <td><input type="text" name="username" autofocus autocomplete="off" required></td>
            </tr>
            <tr>
              <td><label for="password" style="font-family: 'Shadows Into Light', cursive;">Password</label></td>
              <td>:</td>
              <td><input type="password" name="password" required></td>
            </tr>
            <tr>
              <td><label for="password" style="font-family: 'Shadows Into Light', cursive;">Ulangi Password</label></td>
              <td>:</td>
              <td><input type="password" name="password" required></td>
            </tr>
          </table> <br>
          <button type="submit" name="register" class="row justify-content-center my-4" style="background-color: lightblue; font-family: 'Shadows Into Light', cursive">Register</button>
          <form>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>

</html>