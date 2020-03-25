<?php
require('../connection/connection_test.php');

$name = $_POST['name'];
$desc = $_POST['desc'];
$consumable = $_POST['consumable'];
$code = $_POST['code'];
$isdropinvest = $_POST['isdropinvest'];
$craftfrom1 = $_POST['craftfrom1'];
$craftfrom1qty = $_POST['craftfrom1qty'];
$craftfrom2 = $_POST['craftfrom2'];
$craftfrom2qty = $_POST['craftfrom2qty'];
$craftfrom3 = $_POST['craftfrom3'];
$craftfrom3qty = $_POST['craftfrom3qty'];
$crafttype = $_POST['crafttype'];


  $sql = "INSERT INTO mf_itemlist VALUES('','$name','$desc','$consumable','$code','$isdropinvest','$craftfrom1','$craftfrom1qty','$craftfrom2','$craftfrom2qty','$craftfrom3','$craftfrom3qty','$crafttype')";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));


?>
