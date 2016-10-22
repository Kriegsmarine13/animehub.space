<?php
if(!($_COOKIE["authCookie"])) {
    header('Refresh: 5;../');
    exit("You're not logged in<br>You will be redirected to login page in 5 seconds...");
}
require ('template.php');
$parse->get_tpl('main.tpl');
$parse->set_tpl('%main_post%', $mainPost);
$parse->set_tpl('%outputScript%', $outputScript);
$parse->set_tpl('%main_title%', $titleData);
$parse->set_tpl('%small_descr%', $sDescrData);
$parse->set_tpl('%timestamp%', $timeStampData);
$parse->tpl_parse();
print $parse->template;
?>