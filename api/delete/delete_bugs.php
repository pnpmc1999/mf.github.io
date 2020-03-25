<?php
require('../connection/connect.php');

$id = $_POST['id'];

if(isset($id)){
  $sql = "DELETE FROM bugs WHERE BUG_ID='$id' ";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));
}
?>
