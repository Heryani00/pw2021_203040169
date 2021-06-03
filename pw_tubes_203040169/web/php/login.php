<?php
// Heryani
// 203040169
// Jum'at 13.00


session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

//login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  //mencocokan USERNAME dan Password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

  <title>Hello, world!</title>
  <style>
    body {
      background-image: url('../assets/login/login.jpg');
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
        <h1 style="font-family: 'Pacifico', cursive;">Please Sign In</h1>
        <div class="card-body">
          <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic; ">username / password salah</p>
          <?php endif; ?>
        </div>

        <form action="" method="post" class="needs-validation" novalidate>
          <div class="form-group">
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
            </table>
          </div>
          <div class="remember mt-3">
            <input type="checkbox" name="remember">
            <label for="remember" style="font-family: 'Shadows Into Light', cursive;">Remember Me</label>
          </div>
          <div class="registrasi mt-3">
            <p style="font-family: 'Shadows Into Light', cursive;">Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
          </div>
          <button type="submit" name="submit" class="row justify-content-center my-4" style="background-color: lightblue; font-family: 'Shadows Into Light', cursive;">Login</button>

        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


</body>

</html>