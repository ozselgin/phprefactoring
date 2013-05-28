<?php
function veritabani_ayarlarini_yap(){
	mysql_connect("localhost", "root", "") or die ("Veritabanına bağlanırken bir hata oluştu!" . mysql_error());
	mysql_select_db("site") or die("Veritanında bir hata oluştu!" . mysql_error());
	mysql_query("SET NAMES UTF8");
}

veritabani_ayarlarini_yap();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="bootstrap.min.css" rel="stylesheet">
	<title>Ürün Yorumları</title>
</head>
<body>
<div class="container">
	<?php
	$urun_id = $_GET['id'];
	$result = mysql_query("SELECT ad FROM urunler WHERE urunler.id=\"$urun_id\"");
	$row = mysql_fetch_row($result);
	echo "<h1>{$row[0]}</h1>";
	?>
	<table class="table table-striped">
		<tr><th>No</th><th>Başlık</th><th>Yorum</th></tr>
		<?php
		$result = mysql_query("SELECT yorumlar.*, urunler.ad FROM yorumlar, urunler 
							WHERE yorumlar.urun = urunler.id AND urunler.id=\"$urun_id\"");
		while($arr = mysql_fetch_array($result))
		{
			echo "<tr><td>{$arr['id']}</td><td>{$arr['baslik']}</td><td>{$arr['icerik']}</td></tr>";
		}
		?>
	</table>
</div>
</body>
</html>
