
<?php
require('../connection/connection_test.php');

$id = $_POST['id'];
$name  = $_POST['name'];
$desc = $_POST['desc'];
$consumable  = $_POST['consumable'];
$code  = $_POST['code'];
$isdropinvest  = $_POST['isdropinvest'];
$craftfrom1  = $_POST['craftfrom1'];
$craftfrom1qty = $_POST['craftfrom1qty'];
$craftfrom2  = $_POST['craftfrom2'];
$craftfrom2qty = $_POST['craftfrom2qty'];
$craftfrom3 = $_POST['craftfrom3'];
$craftfrom3qty = $_POST['craftfrom3qty'];
$crafttype = $_POST['crafttype'];

$sql = "UPDATE mf_itemlist SET ITEM_NAME='$name',ITEM_DESC='$desc',ITEM_CONSUMABLE='$consumable',ITEM_CODE='$code',
ITEM_ISDROPINVEST='$isdropinvest',ITEM_CRAFTFROM1='$craftfrom1',ITEM_CRAFTFROM1QTY='$craftfrom1qty',ITEM_CRAFTFROM2='$craftfrom2',ITEM_CRAFTFROM2QTY='$craftfrom2qty',ITEM_CRAFTFROM3='$craftfrom3',
ITEM_CRAFTFROM3QTY='$craftfrom3qty',ITEM_CRAFTTYPE='$crafttype' WHERE ITEM_ID='$id'";
mysqli_query($connection,$sql) or die(mysqli_error($connection));


?>
