<?php
	if(!($_COOKIE["authCookie"])) {
      header('Refresh: 5;../');
      exit("You're not logged in<br>You will be redirected to login page in 5 seconds...");
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
    <h1>Добро пожаловать в убежище</h1>
    <div class="menu-block">
      Навигация
      <ul type="none">
        <li><a href="temp.php">Новости</a></li>
        <li><a href="artists_tpl.php">Художники</a></li>
        <li><a href="php/droptables.php">Грядущие встречи</a></li>
        <li><a href="#">Прошлые встречи</a></li>
        <li><a href="#">Альбом</a></li>
        <li><a href="#">Трек-листы</a></li>
		<li><a href="/Chat1/index.php">Чат</a></li>
      </ul>
    </div>
    <div class="main-block">
      <div class="main-post">asdawd asdahdioahwd ioad aoiwhd oahwdo awodhaiodhoa oo dhaiowhdoaihw dawdoa hwodihaowdhoaiwhd oahdoahwod a ajwdnoawndoiajwo dwjd poawjdpoawpojdpoawj dpaowjd ajpawpodjajwdajwdp apoawjdpoajwpdojap  lkfnlksdnklx lxnvok xndlkvnxklnvj bkjdoifwj poefjowjfpslkcxnvlkxndlf nxz</div>
      <div class="main-post">New test new test new test</div>
    </div>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>