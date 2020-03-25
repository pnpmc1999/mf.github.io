<?php
require('../connection/connect.php');

$username = mysqli_real_escape_string($connection,$_POST['username']);
$pass = mysqli_real_escape_string($connection,$_POST['pass']);
$fname =  mysqli_real_escape_string($connection,$_POST['fname']);
$lname = mysqli_real_escape_string($connection,$_POST['lname']);
$position = mysqli_real_escape_string($connection,$_POST['position']);
$status = mysqli_real_escape_string($connection,$_POST['status']);

$mdpass = md5($pass);

if(isset($username) && isset($fname) && isset($lname) && isset($position) && isset($status)){
  $sql = "INSERT INTO users VALUES('','$username','$mdpass','$fname','$lname','$position','$status')";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));
}
?>
