<?php
session_start();
$name = $_SESSION['name'];
?>
<header>
    <title>Chat</title>
</header>
<FRAMESET COLS="*,150,200" border=1 frameborder=1 framespacing=0 ONUNLOAD="window.location.href='Del.php?name=<?=$name;?>'">
<FRAMESET ROWS="*,160">
<FRAME NAME='text' src='text.php?name=<?=$name;?>'>
<FRAME NAME='send' src='Send.php?name=<?=$name;?>'>
</FRAMESET>
<FRAME NAME='smiles' src='smiles.html'>
<FRAMESET ROWS="*">
<FRAME NAME='users' src='Users.php?=<?=$name;?>'>
</FRAMESET>
</FRAMESET>