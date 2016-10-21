<?php
error_reporting(0);
include("Includer.php");
$name = $_SESSION['name'];
$db = mysql_connect($myserver, $mylogin, $mypassword);
mysql_select_db("chat");
$sql = "SELECT * FROM `chat` WHERE `name` = '".$name."'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$id = $row["id"];
$password = $row["password"];
$private = $row["private"];
$sql = "DELETE FROM `chat` WHERE `id` = ".$id;
$result = mysql_query($sql);
$sql = "INSERT INTO `chat` VALUES('','".$name."','".$password."','".$private."', '0')";
$result = mysql_query($sql);
Header("Location:index.php");
?>