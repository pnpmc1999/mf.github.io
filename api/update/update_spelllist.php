
<?php
require('../connection/connection_test.php');

$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$rare = $_POST['rare'];
$side = $_POST['side'];
$price = $_POST['price'];
$ultimate = $_POST['ultimate'];
$type = $_POST['type'];
$shoporder = $_POST['shoporder'];
$enableuse = $_POST['enableuse'];
$enableexchange = $_POST['enableexchange'];
$iconname = $_POST['iconname'];

$sql = "UPDATE mf_spelllist SET SPELL_NAME='$name',SPELL_DESC='$desc',SPELL_RARE='$rare',SPELL_SIDE='$side',
SPELL_PRICE='$price',SPELL_ULTIMATE='$ultimate',SPELL_TYPE='$type',SPELL_SHOPORDER='$shoporder',SPELL_ENABLEUSE='$enableuse',SPELL_ENABLEEXCHANGE='$enableexchange',
SPELL_ICONNAME='$iconname' WHERE SPELL_ID='$id'";
mysqli_query($connection,$sql) or die(mysqli_error($connection));


?>
