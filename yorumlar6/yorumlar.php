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
	require_once("yorumlar_template.php");
}

yorumlar_sayfasi();