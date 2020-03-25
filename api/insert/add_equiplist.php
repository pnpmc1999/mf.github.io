<?php
require('../connection/connection_test.php');
$servername = $_POST['servername'];
$level = $_POST['level'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$atk = $_POST['atk'];
$def = $_POST['def'];
$hp = $_POST['hp'];
$sp  = $_POST['sp'];
$pre  = $_POST['pre'];
$luk = $_POST['luk'];
$addgold = $_POST['addgold'];
$addexp = $_POST['addexp'];
$special = $_POST['special'];



  $sql = "INSERT INTO mf_equiplist VALUES('','$servername','$level','$name','$desc','$atk','$def','$hp','$sp','$pre','$luk','$addgold','$addexp','$special')";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));

?>
