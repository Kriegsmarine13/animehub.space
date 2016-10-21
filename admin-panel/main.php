<?php
    session_start();
?>
<html>
<head>
    <title>Dollars Admin Panel</title>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
<h1><?php echo ("Success! Welcome, ").$_SESSION['name']; ?></h1>
<div class="left-menu">
    <ul>
        <li><a href="add_news.php">Добавление новости</a></li>
        <li>Вариант 2</li>
        <li>Вариант 3</li>
    </ul>
</div>
<div class="main-menu">
<h2>Здесь будет выводиться всякая бытовая хуйня, не знаю зачем</h2>
    <?php
    require_once("../php/meta.php");
        $dbcon = mysqli_connect($dbserver, $dblogin, $dbpass, $dbname);
        echo("Php Version: ".phpversion()."<br>");
        if($dbcon) {
            echo("MySQL Version: ".mysqli_get_server_info($dbcon));
        } else {
            echo ("no connection");
        }

    ?>
</div>
<div class="options-menu">
    <ul>
        <?php
        for($i=0; $i<10; $i++){
            echo("<li>Option ".$i."</li><br>");
        }
        ?>
    </ul>
</div>
</body>
</html>
