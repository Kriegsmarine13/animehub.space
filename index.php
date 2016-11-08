<?php 
	if($_COOKIE["authCookie"]) {
		header('Refresh: 0; main');
		exit();
	}
?>

<html>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title> DOLLARS </title>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
  </head>

  <body>

    <div align="center">
    <img src="img/dollars_logo.jpg" alt="dollars_logo">
    </div>
    <form action="check.php" method="post">
      <label for="password">
        PASSWORD: <input class="input1" type="password" name="password" id="password">
      </label>
      <br>
      <input class="input2" type="submit" value="ENTER">
    </form>
<!-- <?php
//		$password = $_SESSION['password'];
//		$dbcon = mysqli_connect("localhost", "root", "", "animehub.space");
//		$dbname = "animehub.space";
//		mysqli_select_db($dbcon, $dbname);
//			if (!$dbcon)
//			{
//				echo "<p>Error connecting to mysqli!</p>".mysqli_error($dbcon); exit();
//			} else {
//				if (!mysqli_select_db($dbcon, "animehub.space")) {
//					echo("<p>Selected database doesn't exist!</p>");
//				}
//			}
//		$sqlCart = mysqli_query($dbcon, "SELECT password FROM users WHERE password = '$password'");
//			while($row = mysqli_fetch_array($sqlCart))
//			{
//				$name = $row["name"];
//			}
//			mysqli_close($dbcon);
//    $options = [
//        'cost' => 12,
//    ];
//    $hide = password_hash($password, PASSWORD_DEFAULT, $options);
//	?> -->
  </body>
</html>