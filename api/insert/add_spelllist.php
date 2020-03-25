<?php
require('../connection/connection_test.php');

$name = $_POST['name'];
$desc = $_POST['desc'];
$rare = $_POST['rare'];
$side = $_POST['side'];
$price = $_POST['price'];
$ultimate = $_POST['ultimate'];
$type = $_POST['type'];
$shoporder = $_POST['shoporder'];
$enableuse = $_POST['enableuse'];
$enableexchange = $_POST['enableexchange'];
$iconname = $_POST['iconname'];


  $sql = "INSERT INTO mf_spelllist VALUES('','$name','$desc','$rare','$side','$price','$ultimate','$type','$shoporder','$enableuse','$enableexchange','$iconname')";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));


?>
