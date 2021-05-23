<?php
/*
Heryani
203040169
https://github.com/Heryani00/pw2021_203040169.git
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
