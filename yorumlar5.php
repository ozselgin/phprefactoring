<?php
//Kutuphane fonksiyonlari basladi
function veritabani_ayarlarini_yap(){
	mysql_connect("localhost", "root", "") or die ("Veritabanına bağlanırken bir hata oluştu!" . mysql_error());
	mysql_select_db("site") or die("Veritanında bir hata oluştu!" . mysql_error());
	mysql_query("SET NAMES UTF8");
}
function urun_adi_al($urun_id){
	$result = mysql_query("SELECT ad FROM urunler WHERE urunler.id=\"$urun_id\"");
	$row = mysql_fetch_row($result);
	return $row[0];
}
function yorumlari_getir($urun_id){
	$result = mysql_query("SELECT yorumlar.*, urunler.ad FROM yorumlar, urunler 
						WHERE yorumlar.urun = urunler.id AND urunler.id=\"$urun_id\"");
	$yorumlar = array();
	while($yorum = mysql_fetch_array($result)){
		$yorumlar[] = $yorum;
	}
	return $yorumlar;
}
//Kutuphane fonksiyonlari bitti

//template icerisinde kullanilacak degiskenler buraya atilacak.
$degerler = array();

//sayfayi olusturan ana fonksiyon
function yorumlar_sayfasi(){
	global $degerler;

	veritabani_ayarlarini_yap();
	$urun_id = $_GET['id'];
	$degerler["urun_adi"] = urun_adi_al($urun_id);
	$degerler["yorumlar"] = yorumlari_getir($urun_id);
}

yorumlar_sayfasi();
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
	echo "<h1>{$degerler["urun_adi"]}</h1>";
	?>
	<table class="table table-striped">
		<tr><th>No</th><th>Başlık</th><th>Yorum</th></tr>
		<?php 
		foreach($degerler["yorumlar"] as $yorum){
			echo "<tr><td>{$yorum['id']}</td><td>{$yorum['baslik']}</td><td>{$yorum['icerik']}</td></tr>";
		}
		?>
	</table>
</div>
</body>
</html>