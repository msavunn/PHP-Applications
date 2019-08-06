<?php require_once 'baglan.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD İŞLEMLERİ</title>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Opsiyonel tema -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<!-- En son derlenmiş ve minimize edilmiş JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<h1>VERİTABANI İŞLEMLERİ</h1>
<hr>
<?php
if ($_GET['durum']==ok){

    echo "BAŞARILI";
}elseif ($_GET['durum']==no){
    echo "KAYIT BAŞARISIZ";
}
?>

	<form action="islem.php" method="POST">
		<input type="text" name="bilgilerim_ad">
		<input type="text" name="bilgilerim_soyad">
		<input type="email" name="bilgilerim_mail">
		<input type="text" name="bilgilerim_kurs">
		<input type="text" name="bilgilerim_yas">
		<input type="text" name="bilgilerim_zaman">
		<input type="hidden" name="bilgilerim_id" value="<?php echo $bilgilerimcek['bilgilerim_id'] ?>">
		<input type="submit" name="insertislemi" value="Gönder">
	</form>

<hr>
<h1>KAYIT LİSTESİ</h1>

<?php
$bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
$bilgilerimsor->execute();
while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){
    /*echo $bilgilerimcek['bilgilerim_ad']."<br>";*/
}
?>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
  <table class="table border">
    <thead>
      <tr>
				<th>NO</th>
				<th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
				<th>İşlemler</th>
      </tr>
    </thead>
    <tbody>
    	<?php
$bilgilerimsor=$db->prepare("SELECT * from bilgilerim ");
$bilgilerimsor->execute();
$say=0;
while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){ $say++; ?>

      <tr>
				<td><?php echo $say; ?></td>
				<td><?php echo $bilgilerimcek['bilgilerim_id']; ?></td>
        <td><?php echo $bilgilerimcek['bilgilerim_ad']; ?></td>
        <td><?php echo $bilgilerimcek['bilgilerim_soyad']; ?></td>
        <td><?php echo $bilgilerimcek['bilgilerim_mail']; ?></td>
				<td>

					<a href="duzenle.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id']; ?>"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit aria-label" aria-hidden="false"></span></button></a>
					<a href="sil.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id']?>&bilgilerimsil=ok"><button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove aria-label" aria-hidden="false"></span></button></a>
				</td>

      </tr>
  <?php } ?>

    </tbody>
  </table>
</div>




</body>
</html>
