<?php
  require('../connection/connection_test.php');
  header("Access-Control-Allow-Origin: *");
  $id = $_POST['id'];

  $sql = mysqli_query($connection,"SELECT * FROM mf_questlist WHERE QUEST_ID ='$id'") or die(mysqli_error($connection));
  if($res = mysqli_fetch_assoc($sql)){
  }

  $result["col"] = $res;
  echo json_encode($result);

?>
