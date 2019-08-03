<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD İŞLEMLERİ</title>
</head>
<body>
<h1>VERİTABANI İŞLEMLERİ</h1>
<hr>
	<form action="islem.php" method="POST">
		<input type="text" name="bilgilerim_ad">
		<input type="text" name="bilgilerim_soyad">
		<input type="email" name="bilgilerim_mail">
		<input type="text" name="bilgilerim_kurs">
		<input type="text" name="bilgilerim_yas">
		<input type="text" name="bilgilerim_zaman">
		<input type="submit" name="insertislemi" value="Gönder">
	</form>
	
</body>
</html>