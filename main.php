<html>
  <head>
    <title> DOLLARS </title>
    <meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/style.css"/>
</head>
  <body>
    <div align="right">
    <a class="logo-menu" href="../board/index.php" style="text-decoration: none;">
    <img class="img-mini" width="110" src="../img/dollars_logo.jpg" alt="dollars_logo">
    </a>
    </div>
    <h1>Добро пожаловать в твоё убежище</h1>
    <div class="menu-block">
      Навигация
      <ul type="none">
        <li><a href="/temp.php">Новости</a></li>
        <li><a href="artists_tpl.php">Художники</a></li>
        <li><a href="php/droptables.php">Обзоры</a></li>
        <li><a href="#">Рецензии</a></li>
        <li><a href="#">Аниме Релизы</a></li>
        <li><a href="#">Музыкальные релизы</a></li>
		<li><a href="/Chat1/index.php">Чат</a></li>
      </ul>
    </div>
    <div class="main-block">
      <?php
      require ("php/meta.php");
      $dbcon = mysqli_connect($dbserver, $dblogin, $dbpass, $dbname);
      $query = mysqli_query($dbcon, "SELECT * FROM main_news ORDER BY id DESC");
      foreach($query as $post) {
	    $resultContent = $post;
	    $titleData = $resultContent['title'];
	    $sDescrData = $resultContent['small_descr'];
	    $timeStampData = $resultContent['timestamp'];
	    $mainPost = "<div class=\"main-post\">
	      <div class=\"main-title\">$titleData</div>
	      <div class=\"main-img-mini\"><img src=\"$imgPath\"></div>
	      <div class=\"main-descr\">$sDescrData</div>
	      <div class=\"main-timestamp\">$timeStampData</div>
	    </div>";
    echo $mainPost;
    }
      ?>
    </div>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
