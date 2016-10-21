<?php 
	$link = mysql_connect('localhost', '<dbname>', '');
	if (!$link) {
		die('Connection error!' . mysql_error());
	}
	echo 'Connection successful';
	mysql_close($link);
?>