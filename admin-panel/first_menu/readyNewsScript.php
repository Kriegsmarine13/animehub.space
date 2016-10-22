<?php
error_reporting(E_ALL);
require ("../include/connector.php");
require("../include/post_data.php");
$uploadDir = '../img/';
$dbcon = mysqli_connect($dbserver, $dblogin, $dbpassword, $dbname);
$postQuery = mysqli_query($dbcon, "INSERT INTO main_news(`id`, `img_mini`, `img_main`, `title`, `small_descr`, `descr`, `timestamp`) VALUES ('', '".$img_miniPath."','".$img_MainPath."','".$titlePost."','".$sDescrPost."','".$descrPost."','".$timestampPost."')");
header("Refresh: 2, ../main.php");
echo("News posted, redirecting to a main page");