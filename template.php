<?php
require ("php/meta.php");
$dbcon = mysqli_connect($dbserver, $dblogin, $dbpass, $dbname);
$mainPost = "<div class=\"main-post\">
        <div class=\"main-title\">%main_title%</div>
        <div class=\"main-img-mini\"><img src=\"$imgPath\"></div>
        <div class=\"main-descr\">%small_descr%</div>
        <div class=\"main-timestamp\">%timestamp%</div>
      </div>";
//$getPosts = mysqli_query($dbcon, "SELECT * FROM main_news WHERE 1");
//$postsArray = mysqli_fetch_array($getPosts);

for($i=0; $i<100; $i++) {
    $getPosts = mysqli_query($dbcon, "SELECT id FROM main_news WHERE id = '".$i."'");
    $postsArray = mysqli_fetch_assoc($getPosts);
    if(empty($postsArray['id'])){} else {
        foreach ($postsArray as $key => $value) {
            $queryContent = mysqli_query($dbcon, "SELECT * FROM main_news WHERE id = '".$value."'");
            $resultContent = mysqli_fetch_assoc($queryContent);
            //echo $mainPost;
        }
    }
}
//for($i=0; $i<10; $i++) {
//    for ($idPost = 0; $idPost < 1000; $idPost++) {
//        return $postsArray['id'];
//    }
//    echo $postsArray['id'];
//}
//$queryContent = mysqli_query($dbcon, "SELECT * FROM main_news WHERE id = '".$postsArray['id']."'");
//$resultContent = mysqli_fetch_array($queryContent);
$titleData = $resultContent['title'];
$sDescrData = $resultContent['small_descr'];
$timeStampData = $resultContent['timestamp'];
class parse_class {
    var $vars = array();
    var $template;
    function get_tpl($tpl_name)
    {
        if (empty($tpl_name) || !file_exists($tpl_name)) {
            return false;
        } else {
        $this->template = file_get_contents($tpl_name);
        }
    }
    function set_tpl($key, $var) {
        $this->vars[$key] = $var;
    }
    function tpl_parse() {
        foreach ($this->vars as $find => $replace) {
            $this->template = str_replace($find, $replace, $this->template);
        }
    }
}
$parse = new parse_class;

?>
