<?php
date_default_timezone_set("Europe/istanbul");

$yazi="merhaba dünya";
setcookie("isim",$yazi, strtotime("+1 week"));

echo $_COOKIE["isim"];

?>  