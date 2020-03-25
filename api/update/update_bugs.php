<?php
require('../connection/connect.php');

$pos = $_POST['pos'];
$id = $_POST['id'];
$title = $_POST['title'];
$body = $_POST['body'];
$type = $_POST['type'];
$check1 = $_POST['check1'];
$check2 = $_POST['check2'];

if($pos == "Programmer"){
  $sql = "UPDATE bugs SET BUG_CHECK1='$check1' WHERE BUG_ID='$id'";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));

}else if($pos =="Tester"){
  $sql = "UPDATE bugs SET BUG_CHECK2='$check2' WHERE BUG_ID='$id'";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));

}else if($pos =="Support"){
  $sql = "UPDATE bugs SET BUG_TITLE='$title',BUG_BODY='$body',BUG_TYPE='$type' WHERE BUG_ID='$id'";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));

}else if($pos =="Admin"){
  $sql = "UPDATE bugs SET BUG_TITLE='$title',BUG_BODY='$body',BUG_TYPE='$type',BUG_CHECK1='$check1',BUG_CHECK2='$check2' WHERE BUG_ID='$id'";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));
}


?>
