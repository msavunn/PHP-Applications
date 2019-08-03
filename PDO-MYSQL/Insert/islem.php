<?php 
include 'baglan.php';

if(isset($_POST['insertislemi'])) {
    $kaydet = $db ->prepare("INSERT into bilgilerim set
    bilgilerim_ad=:bilgilerim_ad,
    bilgilerim_soyad=:bilgilerim_soyad,
    bilgilerim_mail=:bilgilerim_mail,
    bilgilerim_kurs=:bilgilerim_kurs,
    bilgilerim_yas=:bilgilerim_yas,
    bilgilerim_zaman=:bilgilerim_zaman
");
    $insert=$kaydet->execute(array(
        'bilgilerim_ad' => $_POST['bilgilerim_ad'],
        'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
        'bilgilerim_mail' => $_POST['bilgilerim_mail'],
        'bilgilerim_kurs' => $_POST['bilgilerim_kurs'],
        'bilgilerim_yas' => $_POST['bilgilerim_yas'],
        'bilgilerim_zaman' => $_POST['bilgilerim_zaman']
    ));
}
?>