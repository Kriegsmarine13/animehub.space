<?php
include("../php/meta.php");
$dbcon = mysqli_connect($dbserver, $dblogin, $dbpass, $dbname);
$getURI = $_SERVER['REQUEST_URI'];
$sql = mysqli_query($dbcon, "SELECT * FROM main_news WHERE link LIKE link = ".$getURI."");
$result = mysqli_fetch_result($sql);
echo $result;
?>
