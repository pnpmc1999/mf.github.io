<?php
  require('../../connection/connect.php');
  header("Access-Control-Allow-Origin: *");


  $sql3 = mysqli_query($connection,"SELECT COUNT(NEWS_ID) AS news_count FROM mf_news ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql3)){
    $val3 = $row['news_count'];
    $int = intval($val3);
  }

  $sql4_1 = mysqli_query($connection,"SELECT COUNT(BUG_ID) AS bug_count1 FROM bugs WHERE BUG_CHECK2 ='3' ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql4_1)){
    $val4_1 = $row['bug_count1'];
    $int4_1 = intval($val4_1);
  }

  $sql4_2 = mysqli_query($connection,"SELECT COUNT(BUG_ID) AS bug_count2 FROM bugs WHERE BUG_CHECK2 ='1' ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql4_2)){
    $val4_2 = $row['bug_count2'];
    $int4_2 = intval($val4_2);
  }

  $result['sum_news'] = $val3;
  $result['sum_bug'] = $val4_1+$val4_2;
  echo json_encode($result);

?>
