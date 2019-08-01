<?php
date_default_timezone_set('asia/istanbul');
$gunler=[
"pazar", "pazartesi", "salı", "çarşamba", "perşembe", "cuma", "cumartesi"
];
$aylar=[
"", "ocak", "şubat", "mart", "nisan", "mayıs", "haziran", "temmuz", "ağustos", "eylül", "ekim", "kasım", "aralık"
];

printf("Bu Gün: %s <br>",$gunler[date("w")]);
printf("Bu ay: %s <br> ",$aylar[date("n")]);

echo "<hr>";
 echo date("d ").$aylar[date("n")]. date(" Y "). $gunler[date("w")];

?>  