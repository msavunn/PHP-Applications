



<?php
include 'baglan.php';
/*UPDATE*/
if(isset($_POST['updateislemi'])) {
  $bilgilerim_id=$_POST['bilgilerim_id'];
    $kaydet = $db ->prepare("UPDATE bilgilerim set
    bilgilerim_ad=:bilgilerim_ad,
    bilgilerim_soyad=:bilgilerim_soyad,
    bilgilerim_mail=:bilgilerim_mail,
    bilgilerim_kurs=:bilgilerim_kurs,
    bilgilerim_yas=:bilgilerim_yas,
    bilgilerim_zaman=:bilgilerim_zaman
    where bilgilerim_id={$_POST['bilgilerim_id']}
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

if($insert){
    header("Location:duzenle.php?durum=ok&bilgilerim_id=$bilgilerim_id");
    exit();
}else{
    header("Location:duzenle.php?durum=no&bilgilerim_id=$bilgilerim_id");
    exit();
}
?>
