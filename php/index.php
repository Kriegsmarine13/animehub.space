<?php 

	session_start();
	header('Content-Type: text/html; charset=utf-8')
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> DOLLARS </title>
  </head>

  <body>
    <div align="center">
    <img src="http://dollars-bbs.org/images/dollars_logo.jpg" alt="dollars_logo">
    </div>
    <form action="check.php" method="post">
      <label for="pass-field">
        PASSWORD: <input class="input1" type="password" name="password" id="pass-field">
      </label>
      <br>
      <input class="input2" type="submit" value="ENTER">
    </form>
	<?php
		//$password = $_SESSION['pass'];
		//$user = "";
		$dbcon = mysql_connect("localhost", "user", "password");
		mysql_select_db("ru-dollars.org", $dbcon);
			if (!$dbcon)
			{
				echo "<p>Error connecting to MySQL!</p>".mysql_error(); exit();			
			} else {
				if (!mysql_select_db("ru-dollars.org", $dbcon)) {
					echo("<p>Selected database doesn't exist!</p>");
				}
			}
		$sqlCart = mysql_query("SELECT pass FROM users WHERE pass = '$password'", $dbcon);
			while($row = mysql_fetch_array($sqlCart))
			{
				$name = $row["name"];
			}
			mysql_close($dbcon);
			//здесь короче какие-то команды на редирект на другую страницу
	?>
  </body>
  
</html>