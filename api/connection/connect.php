<?php
$host = "178.62.35.51";
$user = "mf-dbteam";
$pass = "dbteam2019";
$db   = "mf";

$connection = mysqli_connect($host,$user,$pass) or die(mysqli_error($connection));
mysqli_select_db($connection,$db) or die(mysqli_error($connection));
mysqli_query($connection,"SET NAMES UTF8")or die(mysqli_error($connection));
?>
