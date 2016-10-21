<?php
function getTemplate($name) {
    ob_start();
    include ($name.".tpl");
    $text = ob_get_clean();
    return $text;
}
$smallUpperLogo = "<div align=\"right\">
    <img class=\"img-mini\" width=\"110\" src=\"img/dollars_logo.jpg\" alt=\"dollars_logo\">
    </div>";
$artists = str_replace(array(
    "%smallUpperLogo"
    ), array(
        $smallUpperLogo
    ), getTemplate("artists")
);
echo $artists;
?>