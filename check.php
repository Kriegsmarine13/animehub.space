<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
//setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');
//session_start();
//require("index.php");
//if (isset($_POST['password'])) {
//	$password = $_POST['password'];
//	if ($password == '') {
//		unset($password);
//		}
//	}
//if(empty($password)) {
//	exit ("<body><div align='center'<br/><br/><br/><h3>Incorrect password" . "<a href='index.php'> <b>Back</b> </a></h3></div></body>");
//	}
//$password = stripslashes($password);
//$password = htmlspecialchars($password);
//$dbname = "animehub.space";
//
////подключаемся к базе данных
//$dbcon = mysqli_connect("localhost", "root", "", "animehub.space");
//mysqli_select_db($dbcon, $dbname);
//	if (!$dbcon)
//		{
//			echo "<p>Error connecting to MySQL!</p>".mysqli_error($dbcon); exit();
//		} else {
//			if (!mysqli_select_db($dbcon, $dbname)) {
//				echo("<p>Selected database doesn't exist!</p>");
//			}
//		}
//
//	//Извлечение всей информации о пользователе с данным паролем
//		$result = mysqli_query($dbcon, "SELECT * FROM users WHERE password='$password'");
//		$myrow = mysqli_fetch_array($result);
//		if(empty($myrow["password"]))
//		{
//			exit("<body><div align='center'><br><br><br>
//				<h3>User does not exist!<a href='index.php'> <b>Back!</b> </a></h3></div></body>");
//		} else {
//		if ($myrow["password"]==$password) {
//			$_SESSION['name']=$myrow["name"];
//			$_SESSION['id']=$myrow["id_user"];
//			setcookie("testCookie", $_SESSION['id'], time()+ 3600, "/", "animehub.space"); //sending ID cookie to establish persistent connection for 1 HOUR
//			header('Refresh: 1; main.php');
//		} else {
//			exit("<body><div align='center'><br/>There is no such password</div></body>");
//			}
//		}


// VARIANT 2 ///////////////////////////////////////////////////////////////////

//error_reporting(E_ALL);  //otladka
//session_start();
//include("php/meta.php");
//$hide = password_hash($_POST['password'], PASSWORD_DEFAULT);
//$passInput = $_POST['password'];
//$dbname = "animehub.space";
////Проверка соответствия пароля хеш-паролю
//if(password_verify($_POST['password'], $hide)){
//    //отправка куки с хешем
//    setcookie("authCookie", $hide, time() + 3600, "/", "animehub.space");
//    $dbcon = mysqli_connect("localhost", "root", "", "animehub.space");
//    mysqli_select_db($dbcon, $dbname);
//    //выбор профиля с соответствующим паролем
//    $result = mysqli_query($dbcon, "SELECT * FROM users WHERE password='$passInput'");
//    $myrow = mysqli_fetch_array($result);
//    /* Сверка паролей с паролями из БД */
//    if ($myrow["password"]==$passInput) {
//        $_SESSION['name']=$myrow["name"];
//        $_SESSION['id']=$myrow["id_user"];
//    } else {
//        exit("You're not logged in!");
//    }
//    /* Убираем ИД сессии и Имя Сессии в переменные для обращения */
//    $sessionId = $_SESSION['id'];
//    $sessionName = $_SESSION['name'];
//    //Заносим хеш пароля в БД
//    $result = mysqli_query($dbcon, "UPDATE users SET hash='".$hide."' WHERE password='".$passInput."'");
//    /* сверка хешей */
//    $cookieHash = $_COOKIE['authCookie'];
//    $result = mysqli_query($dbcon, "SELECT * FROM users WHERE hash='".$cookieHash."'");
//    if($result) {
//        header("Refresh: 1, main.php");
//    }
//    /* Результаты занесения переменных */
//    echo "<br><p>Session ID: ".$sessionId."</p><br>"; // otladka
//    echo "<br><p>Session NAME: ".$sessionName."</p><br>"; //otladka
//    echo "<br><p>Session HASH: ".$hide."</p>"; //otladka
//} else {
//    exit("NEEHOOYA"); //otladka
//}

//////////////////////////////////////VARIANT 3_WORKING_SHORT/////////////////////////////////////////////////////
error_reporting(E_ALL);  //otladka
session_start();
include("php/meta.php");
$dbcon = mysqli_connect($dbserver, $dblogin, $dbpass, $dbname);
$result = mysqli_query($dbcon, "SELECT * FROM users WHERE 1");
$myrow = mysqli_fetch_array($result);
$stringHash = $myrow['hash'];
if(password_verify($passInput, $stringHash)) {
//    echo "Verified. My hash is: ".$stringHash;
    setcookie("authCookie", $stringHash, time() + 3600, "/", "animehub.space");
    $_SESSION['name'] = $myrow['name']; // ОПАСНО! ЗАДАВАТЬ ЗНАЧЕНИЕ $_SESSION['name'] ЭССЕНЦИАЛЬНО НЕБХОДИМО ДЛЯ РАБОТЫ ЧАТА, А ИМЕННО ADD.PHP
    header("Location: main/");
} else {
    echo "Not Verified. My Hash is: ".$stringHash;
}
//?>