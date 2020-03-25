<?php
require('../connection/connect.php');
date_default_timezone_set("Asia/Bangkok");

$datetime = date("Y-m-d H:i:s");
$title = $_POST['title'];
$body = $_POST['body'];
$type = $_POST['type'];
$check1 =  $_POST['check1'];
$check2 =  $_POST['check2'];

  $sql = "INSERT INTO bugs VALUES('','$datetime','$title','$body','$type','$check1','$check2')";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));

?>
