<?php 
/*
Heryani
203040169
Jum'at 13.00
*/
?>


<?php
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  
</head>
<body>
  <h1 style="color: tan; ">Halaman Login </h1>
  
  <div class=" container text-center mt-5" style="background-color: lavender; ">
    <div class="card mt-5">
      <div class="card-body">
        <?php if (isset($error)) : ?>
          <p style="color: red; font-style: italic; ">username / password salah</p>
        <?php endif; ?>

        <form action="" method="post" style="max-width:450px;margin:auto; background-color: ivory; ">
             <h1>Please Sign In</h1>
          <table>
            <tr>
              <td><label for="username">Username</label></td>
              <td>:</td>
              <td><input type="text" name="username"></td>
            </tr>
            <tr>
              <td><label for="password">Password</label></td>
              <td>:</td>
              <td><input type="password" name="password" ></td>
            </tr>
          </table>
          <div class="remember mt-3">
            <input type="checkbox" name="remember">
            <label for="remember">Remember Me</label>
          </div>
          <div class="registrasi mt-3">
            <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
          </div>
          <button type="submit" name="submit" class="row justify-content-center my-3" style="background-color: lavender;">Login</button>

        </form>
      </div>
    </div>
  </div>


























  


















