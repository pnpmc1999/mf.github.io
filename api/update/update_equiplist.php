
<?php
require('../connection/connection_test.php');

$id = $_POST['id'];
$servername = $_POST['servername'];
$level = $_POST['level'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$atk = $_POST['atk'];
$def = $_POST['def'];
$hp = $_POST['hp'];
$sp  = $_POST['sp'];
$pre  = $_POST['pre'];
$luk = $_POST['luk'];
$addgold = $_POST['addgold'];
$addexp = $_POST['addexp'];
$special = $_POST['special'];

$sql = "UPDATE mf_equiplist SET EQUIP_SERVERNAME='$servername',EQUIP_LEVEL='$level',EQUIP_NAME='$name',EQUIP_DESC='$desc',
EQUIP_ATK='$atk',EQUIP_DEF='$def',EQUIP_HP='$hp',EQUIP_SP='$sp',EQUIP_PRE='$pre',EQUIP_LUK='$luk',
EQUIP_ADDGOLD='$addgold',EQUIP_ADDEXP='$addexp',EQUIP_SPECIAL='$special' WHERE EQUIP_ID='$id'";
mysqli_query($connection,$sql) or die(mysqli_error($connection));


?>
