<?php
error_reporting(E_ALL);
include("Includer.php");
session_start();
$name = $_SESSION['name'];
?>
<html>
<head>
<meta content="10; URL=Users.php?name=<?=$name;?>" http-equiv=Refresh>
	<link rel="stylesheet" href="../css/style.css">
<script language="JavaScript">
<!--
function netsend(dat) {
	window.parent.send.sendform.who.value += dat;
	window.parent.send.sendform.message.focus();
}
//-->
</script>
</head>
<body link="blue" alink="blue" vlink="blue" topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 rightmargin=0>
	<font face="georgia" size=3 color="black">
		<table width="100%">
			<tr>
				<td width="100%" align="center">
					<font color="white" face="Georgia" size=3>
						<b>Online:</b>
					</font>
				</td>
			</tr>
		<?php
			$dbname = "animehub.space";
			$db = mysqli_connect($myserver, $mylogin, $mypassword, "animehub.space");
			mysqli_select_db($db, $dbname);
			$sql = "SELECT * FROM `chat` WHERE `active` = '1'";
			$result = mysqli_query($db, $sql);
			$num_results = mysqli_num_rows($result);
			for($i=0;$i<$num_results;$i++) {
				$row = mysqli_fetch_array($result);
				echo "<tr><td>".($i+1)."&nbsp;&nbsp;<a href=\javascript:netsend('".stripslashes($row['$name'])."')\">".stripslashes($row['$name'])."</a></td></tr>";
			}
		?>
		</table>
	</font>
</body>
</html>
					