<?php
//$hash = '$2y$10$IKTHXw08OrE745FGNBwAFeEoA6GySSDsYG3q.9IA2f6hOJPRtYYBW';
//$hide = password_hash($_POST['password'], PASSWORD_DEFAULT);
//WZ1XI5m0I6b^Wt6HDC      wordpress password
$passInput = $_POST['password'];
$setHash = password_hash($passInput, PASSWORD_DEFAULT);
$dblogin = 'root';
$dbpass = '';
$dbserver = 'localhost';
$dbname = 'animehub.space';
//$dbcon = mysqli_connect($dbserver, $dblogin, $dbpass, $dbname);
//mysqli_select_db($dbcon, $dbname);
//$sql = mysqli_query($dbcon, "SELECT * FROM users WHERE hash = '".$setHash."'");
//$result = mysqli_fetch_array($sql);
//$hash = implode("", $result);
?>