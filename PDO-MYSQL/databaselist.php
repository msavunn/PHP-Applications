<?php
$bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
$bilgilerimsor->execute();
while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){
    echo $bilgilerimcek['bilgilerim_ad']."<br>";
}
?>