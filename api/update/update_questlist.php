
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
$finishreward = $_POST['finishreward'];
$relateitem = $_POST['relateitem'];

$sql = "UPDATE mf_questlist SET QUEST_ID='$id',QUEST_MINLEVEL='$minlevel',QUEST_NAME='$name',QUEST_ACTIVE='$active',
QUEST_STEP1='$step1',QUEST_STEP2='$step2',QUEST_STEP3='$step3',QUEST_STEP4='$step4',QUEST_ACCEPTNPC='$acceptnpc',QUEST_ACCEPTTALK='$accepttalk',
QUEST_PRE='$pre',QUEST_REWARD1='$reward1',QUEST_REWARD1NUM='$reward1num',QUEST_REWARD2='$reward2',QUEST_REWARD2NUM='$reward2num',QUEST_REWARD3='$reward3',
QUEST_REWARD3NUM='$reward3num',QUEST_STEPNUM='$stepnum',QUEST_WORKNUM='$worknum',QUEST_WORKSTEP='$workstep',QUEST_FINISHTEXT='$finishtext',QUEST_FINISHREWARD='$finishreward',
QUEST_RELATEITEM='$relateitem' WHERE QUEST_ID='$id'";
mysqli_query($connection,$sql) or die(mysqli_error($connection));


?>
