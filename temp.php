<?php
require ("php/meta.php");
$dbcon = mysqli_connect($dbserver, $dblogin, $dbpass, $dbname);
for($i=1; $i<1000; $i++) {
    $getPosts = mysqli_query($dbcon, "SELECT id FROM main_news WHERE id = '".$i."'");
    $postsArray = mysqli_fetch_assoc($getPosts);
    if(empty($postsArray['id'])){} else {
        foreach ($postsArray as $key => $value) {
            echo $value;
        }
    }
}
?>



<?php
//require ("php/meta.php");
//$dbcon = mysqli_connect($dbserver, $dblogin, $dbpass, $dbname);
//for($i=1; $i<1000; $i++) {
//    $getPosts = mysqli_query($dbcon, "SELECT * FROM main_news WHERE id = '".$i."'");
//    $postsArray = mysqli_fetch_assoc($getPosts);
//    if(empty($postsArray['id'])){} else {
//        foreach ($postsArray as $key => $value) {
//            echo $postsArray['id'];
//        }
//    }
//}
//?>
