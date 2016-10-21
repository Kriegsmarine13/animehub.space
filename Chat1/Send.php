<?php
	session_start();
?>

<html>
<head>
	<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
	<form name="sendform" action="Add.php" method="POST">
<?php
	error_reporting(0);
	$name=$_SESSION['name'];
?>
		<input type="hidden" value="<?=$name;?>" name="name">
	    <input type="text" class="reply" name="who" id="reply">
		<input type="text" class="your_message" name="message" id="message">
<?php
	$message = $_POST['message'];
	$who = $_POST['who'];
?>
<input type="submit" class="send" value="Отправить">
    </form>
		<form action="Del.php" method="GET" name="closeform" target="_parent">
			<input type="hidden" name="login" value="<?=$name?>">
			&nbsp;<input type="submit" class="exit" value="Покинуть комнату">
        </form>
</body>
</html>