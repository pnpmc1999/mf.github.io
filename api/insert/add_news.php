<?php
require('../connection/connect.php');
date_default_timezone_set("Asia/Bangkok");

$datetime = date("Y-m-d H:i:s");
$title = $_POST['title'];
$body = $_POST['body'];
$short =  $_POST['short'];
$type = $_POST['type'];

  $sql = "INSERT INTO mf_news VALUES('','$datetime','$title','$body','$short','$type')";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));

?>
