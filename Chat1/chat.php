<?php
session_start();
if(isset($_COOKIE["authCookie"])) {
	setcookie("chatCookie", $_SESSION['id'], time()+ 3600, "/", "animehub.space");
	include("Chat.inc.php");
	if(!($_COOKIE["chatCookie"])) {
		exit("chatCookie was not sent!");
	}
} else {
header('Refresh: 1;../index.php');
}
include("Includer.php");
include("style1.css");
$db = mysqli_connect($myserver, $mylogin, $mypassword, "animehub.space");
$id = $_SESSION['id'];
$name = $_SESSION['name'];
if($_COOKIE["chatCookie"]){
	$sqlActive = "INSERT INTO `chat`(`id`, `name`, `private`, `active`) VALUES ('".$id."','".$name."','','1')";
	$result = mysqli_query($db, $sqlActive);
	}

//вот это вот не ебу, зачем, все равно нихуя не изменилось
//тут, кстати, какой-то буллщит
//полагаю, что надо сделать сначала ИНСЕРТ вошедших с данными из базы users
//...а потом что? инсерт с 0  и апдейт до 1? пока не ясно
error_reporting(0);
$sql = "SELECT * FROM `chat` WHERE `name`='".$name."'";
$resultNew = mysqli_query($db, $sql);
$num_resultsNew = mysqli_num_rows($resultNew);
$row = mysqli_fetch_array($resultNew);
$id = $row["id"];
$sql = "DELETE FROM `chat` WHERE `id` ='".$id."'";
$result = mysqli_query($db, $sql);
$sql = "INSERT INTO `chat` VALUES ('".$id."','".$name."', '', '1')";
$result = mysqli_query($db, $sql);
?> 
<html>
	<head>
		<title> DOLLARS Chat </title>
	</head>
</html>