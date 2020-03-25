<?php
require('../connection/connect.php');

$id = $_POST['id'];
$title = $_POST['title'];
$body = $_POST['body'];
$short = $_POST['short'];
$type = $_POST['type'];

$sql = "UPDATE mf_news SET NEWS_TITLE='$title',NEWS_BODY='$body',NEWS_BODYSHORT='$short',NEWS_TYPE='$type' WHERE NEWS_ID='$id'";
mysqli_query($connection,$sql) or die(mysqli_error($connection));


?>
