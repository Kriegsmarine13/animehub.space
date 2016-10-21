<?php
$dbcon = mysqli_connect("localhost", "root","");
mysqli_select_db($dbcon, "animehub.space");
$query = mysqli_query($dbcon,"SELECT * LIKE `mm7k2%`");
$result = mysqli_fetch_array($query);
while($result) {
	$delete = "DROP TABLE"."`.$query[i].`";
	return $delete;
}
?>