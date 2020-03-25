<?php
require('../connection/connection_test.php');

$id = $_POST['id'];

if(isset($id)){
  $sql = "DELETE FROM mf_equiplist WHERE EQUIP_ID='$id' ";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));
}
?>
