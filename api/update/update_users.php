<?php
require('../connection/connect.php');

$id = $_POST['id'];
$username = $_POST['username'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$position = $_POST['position'];
$status = $_POST['status'];

$sql = "UPDATE users SET USERNAME='$username',USER_FNAME='$fname',USER_LNAME='$lname',USER_POSITION='$position',USER_TYPE='$status' WHERE USER_NO='$id'";
mysqli_query($connection,$sql) or die(mysqli_error($connection));


?>
