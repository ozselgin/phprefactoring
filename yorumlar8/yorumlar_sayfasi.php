<?php
class yorumlar_sayfasi{
	//Kutuphane fonksiyonlari basladi
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

	//sayfayi olusturan ana fonksiyon
	function olustur(){
		global $degerler;
		$urun_id = $_GET['id'];
		$degerler["urun_adi"] = $this->urun_adi_al($urun_id);
		$degerler["yorumlar"] = $this->yorumlari_getir($urun_id);
		require_once("yorumlar_template.php");
	}
}