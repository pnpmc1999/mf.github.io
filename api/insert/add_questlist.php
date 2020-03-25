<?php
require('../connection/connection_test.php');

$id = $_POST['id'];
$minlevel = $_POST['minlevel'];
$name = $_POST['name'];
$active = $_POST['active'];
$step1 = $_POST['step1'];
$step2 = $_POST['step2'];
$step3 = $_POST['step3'];
$step4 = $_POST['step4'];
$acceptnpc = $_POST['acceptnpc'];
$accepttalk = $_POST['accepttalk'];
$pre = $_POST['pre'];
$reward1 = $_POST['reward1'];
$reward1num = $_POST['reward1num'];
$reward2 = $_POST['reward2'];
$reward2num = $_POST['reward2num'];
$reward3 = $_POST['reward3'];
$reward3num = $_POST['reward3num'];
$stepnum = $_POST['stepnum'];
$worknum = $_POST['worknum'];
$workstep = $_POST['workstep'];
$finishtext = $_POST['finishtext'];
$fnishreward = $_POST['finishreward'];
$relateitem = $_POST['relateitem'];


  $sql = "INSERT INTO mf_questlist VALUES('$id','$minlevel','$name','$active','$tep1','$step2','$step3',
    '$step4','$acceptnpc','$accepttalk','$pre','$reward1','$reward1num','$reward2','$reward2num',
    '$reward3','$reward3num','$stepnum','$worknum','$workstep','$finishtext','$fnishreward','$relateitem')";
  mysqli_query($connection,$sql) or die(mysqli_error($connection));


?>
