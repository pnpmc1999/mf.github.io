<?php
  require('../../connection/connect.php');
  header("Access-Control-Allow-Origin: *");

  //ยังไม่ได้ตรวจ
  $sql1 = mysqli_query($connection,"SELECT COUNT(BUG_ID) AS bug_nocheck FROM bugs WHERE BUG_CHECK2 ='1' ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql1)){
      $val = $row['bug_nocheck'];
      $int = intval($val);
      $result['nocheck'] = $int;
  }
//ตรวจผ่านแล้ว
  $sql2 = mysqli_query($connection,"SELECT COUNT(BUG_ID) AS bug_passcheck FROM bugs WHERE BUG_CHECK2 ='2' ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql2)){
    $val = $row['bug_passcheck'];
    $int = intval($val);
    $result['passcheck'] = $int;
  }
//ตรวจแล้วไม่ผ่าน
  $sql3 = mysqli_query($connection,"SELECT COUNT(BUG_ID) AS bug_nopasscheck FROM bugs WHERE BUG_CHECK2 ='3' ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql3)){
    $val = $row['bug_nopasscheck'];
    $int = intval($val);
    $result['nopasscheck'] = $int;
  }


//แก้ไขแล้ว
  $sql4 = mysqli_query($connection,"SELECT COUNT(BUG_ID) AS bug_edited FROM bugs WHERE BUG_CHECK1 ='3' ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql4)){
    $val = $row['bug_edited'];
    $int = intval($val);
    $result['edited'] = $int;
  }

//ประเภทบัค1
  $sql5 = mysqli_query($connection,"SELECT COUNT(BUG_ID) AS bug_type1 FROM bugs WHERE BUG_TYPE ='1' ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql5)){
    $val = $row['bug_type1'];
    $int = intval($val);
    $result['type1'] = $int;
  }

  //ประเภทบัค2
  $sql6 = mysqli_query($connection,"SELECT COUNT(BUG_ID) AS bug_type2 FROM bugs WHERE BUG_TYPE ='2' ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql6)){
    $val = $row['bug_type2'];
    $int = intval($val);
    $result['type2'] = $int;
  }


  echo json_encode($result);

?>
