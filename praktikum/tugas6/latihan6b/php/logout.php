<?php 
/*
Heryani
203040169
Jum'at 13.00
*/
?>

<?php
session_start();
session_destroy();
header("Location: ../index.php");
die;
?>