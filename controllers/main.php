<?php
class Main {
    public function __construct()
    {

        $page = $_GET['page'];
        if($page<1) {$page= $page + 1;}
        $pageLimit = 5;
        $limit = $pageLimit * $page;
        require '/php/meta.php';
        $dbcon = mysqli_connect($dbserver, $dblogin, $dbpass, $dbname);
        //Считаем общее количество постов в базе
        $totalPosts = mysqli_query ($dbcon, "SELECT * FROM main_news WHERE 1");
        $postsCount = 0;
        foreach($totalPosts as $totalPostCount) {
            $postsCount++;
        }
        $num_pages = ceil($postsCount/5);
        $fromLimit = $limit - 5;
        $query = mysqli_query($dbcon, "SELECT * FROM main_news ORDER BY id DESC LIMIT $fromLimit, $limit");
        foreach($query as $post) {
            $imgPath = $post['img_mini'];
            $titleData = $post['title'];
            $sDescrData = $post['small_descr'];
            $timeStampData = $post['timestamp'];
            $linkData = $post['link'];
            $mainPost = "<div class=\"main-post\">
              <div class=\"main-img-mini\"><img src=\"$imgPath\"></div>
              <div class=\"main-title\">$titleData</div>
              <div class=\"main-descr\">$sDescrData</div>
              <a class='main-link' href=".$linkData.">Читать далее</a>
              <div class=\"main-timestamp\">$timeStampData</div>
              </div><br>";
            echo $mainPost;
        }
        for($i=1;$i<=$num_pages;$i++) {
            echo '<a href="?page='.$i.'">'.$i."</a>\n";
        }
    }
}
?>