<?php
error_reporting(E_ALL);
session_start();
$name = $_SESSION['name'];
header("Location:Send.php?name="."$name");
$file = fopen("chat.txt", "a");
$filehis = fopen("history.txt", "a");
for($i=0;$i<8;$i++) {
	$message = ereg_replace("<".$i.">","<img src='".$i.".gif'>", $message);
}
$message = eregi_replace('([[:space:]()[{}])(http://.[-a-zA-Z0-9@:%_\+.~#?&//=]+)', '\\1<a href="http://\\2" target="_blank">\\2</a>', $message);
$message = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)', '\\1<a href="http://\\2" target="_blank">\\2</a>', $message);
$message = eregi_replace('([[:space:]()[{}])(http://.[-a-zA-Z0-9@:%_\+.~#?&//=]+)', '\\1<a href="\\2" target="_blank">\\2</a>', $message);
$message = eregi_replace("[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*","<a href=\"mailto:\\0\">\\0</a>",$message);

$message = $_POST['message'];

fwrite($file, "\n[".date("H:i:s")."]&nbsp;&nbsp;<b>".$name."=>".$who."</b> : ".$message);
fwrite($filehis,"\n[".date("H:i:s")."]&nbsp;&nbsp;<B>".$name." => ".$who."</B> : ".$message);


?>