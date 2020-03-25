<?php
require('../connection/connect.php');

$md = $_POST['pass'];

$user = $_POST['user'];
$pass = md5($md);

$sql = mysqli_query($connection,"SELECT * FROM users WHERE USERNAME='$user' AND USERPASS='$pass' ") or die(mysqli_error($connection));

if($result = mysqli_fetch_assoc($sql)){
   $result['check'] = 1;
   echo json_encode($result);
}else{
  $result['check'] = 0;
  echo json_encode($result);
}

?>
