<?php
  require('../../connection/connect.php');
  header("Access-Control-Allow-Origin: *");


  $sql = mysqli_query($connection,"SELECT COUNT(EQUIP_ID) AS equip FROM mf_equiplist WHERE EQUIP_ATK='0' ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql)){
      $val = $row['equip'];
      $int = intval($val);
      $result['sum_equip'] = $int;
  }


  $sql = mysqli_query($connection,"SELECT COUNT(ITEM_ID) AS item FROM mf_itemlist ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql)){
      $val = $row['item'];
      $int = intval($val);
      $result['sum_item'] = $int;
  }

  $sql = mysqli_query($connection,"SELECT COUNT(QUEST_ID) AS quest FROM mf_questlist ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql)){
      $val = $row['quest'];
      $int = intval($val);
      $result['sum_quest'] = $int;
  }

  $sql = mysqli_query($connection,"SELECT COUNT(SPELL_ID) AS spell FROM mf_spelllist ") or die(mysqli_error($connection));
  if($row = mysqli_fetch_assoc($sql)){
      $val = $row['spell'];
      $int = intval($val);
      $result['sum_spell'] = $int;
  }

  echo json_encode($result);

?>
