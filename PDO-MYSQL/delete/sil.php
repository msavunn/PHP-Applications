<?php
include 'baglan.php';
/*butonun link kısmına eklenmesi gereken kodlar
"sil.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id']?>&bilgilerimsil=ok"
*/
/*------------------------------------*/
if($_GET['bilgilerimsil']==ok){
  $sil=$db->prepare("DELETE from bilgilerim where bilgilerim_id=:id ");
  $kontrol=$sil->execute(array(
    'id'=>$_GET['bilgilerim_id']));
    if($kontrol){
        header("Location:index.php?durum=ok");
        exit();
    }else{
        header("Location:index.php?durum=no");
        exit();
    }
}
?>
