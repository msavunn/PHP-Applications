<?php 

try{
    $db=new PDO("mysql:host=localhost;dbname=udemy;charset=utf8",'root','12341234');
    echo "veritabanı baglantısı <b style=' color:green; '>BAŞARILI</b>";
}catch(PDOException $e){
    /*echo $e->getMessage();*/
    echo "Veritabanı baglantı <b style='color:red;'>HATASI</b>";

}

?>