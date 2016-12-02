<?php
if(!($_COOKIE["authCookie"])) {
  header('Refresh: 0; /index');
  exit();
}
?>
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
        <li><a href="/main/">Новости</a></li>
        <li><a href="/artists">Художники</a></li>
        <li><a href="#">Обзоры</a></li>
        <li><a href="#">Рецензии</a></li>
        <li><a href="#">Аниме Релизы</a></li>
        <li><a href="#">Музыкальные релизы</a></li>
		<li><a href="/Chat1/index.php">Чат</a></li>
        <li><a href="/php/test.php">Test</a></li>
      </ul>
    </div>
    <div class="main-block">
        <?php
        $url = $_SERVER['PHP_SELF'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        require('controllers'.$url[0].'/'.$url[1]);
        $url = explode('.', $url[1]);
        $controller = new $url[0];
//        if(isset($url[2])){
//          $controller->$url[1]($url[2]);
//        } else {
//          if(isset($url[1])) {
//            $controller->$url[1]();
//          }
//        }
        ?>
    </div>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>