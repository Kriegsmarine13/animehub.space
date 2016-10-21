<?php
error_reporting(E_ALL);
include ("../php/meta.php");
$sessLogin = $_POST['login'];
$dbcon = mysqli_connect($dbserver, $dblogin, $dbpass, $dbname);
$query = mysqli_query($dbcon, "SELECT * FROM admin_panel WHERE 1");
$result = mysqli_fetch_array($query);
$sessHash = $result['hash'];
if($result['login']==$sessLogin) {
    if(password_verify($passInput, $sessHash)){
        session_start();
        setcookie("adm_access", $sessHash, time() + 3600, "/", "animehub.space");
        $_SESSION['name'] = $result['login'];
        header("Location: main.php");
    } else {
        echo ("Try again");
    }
} else {
    echo("Chot poshlo ne tak");
}

?>