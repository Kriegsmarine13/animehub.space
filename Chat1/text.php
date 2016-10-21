<html>
<head>
	<meta content="5; URL=text.php" http-equiv=Refresh>
</head>

<body onload="scroll(0,100)" link="blue" alink="blue" vlink="blue">
	<font size=3 face="Georgia">
	    <style>
	        body {
	            background-color: black;
	            color: white;
	        }
	    </style>
<?php 
error_reporting(0);
$file = file("chat.txt");
$count=count($file);

$num = 30;
if($count > $num) {
	for($i=($count-$num); $i<$count; $i++) {
		$str= $str.$file[$i];
		$str= ereg_replace("\r\n","\n", $str);
	}
	
	$fp = fopen("chat.txt","w");
	fwrite($fp,$str);
}
	$file = file("chat.txt");
	$count = count($file);
	
	for($i=0;$i<$count;$i++) {
		echo $file[$i]."<br>";
	}
?>
	</font>
</body>
</html>