<?php
require_once("urunler.php");
require_once("yorumlar.php");
class yorumlar_sayfasi{

	//sayfayi olusturan ana fonksiyon
	function olustur(){
		global $degerler;
		$urun_id = $_GET['id'];
		$degerler["urun_adi"] = urunler::urun_adi_al($urun_id);
		$degerler["yorumlar"] = yorumlar::yorumlari_getir($urun_id);
		require_once("yorumlar_template.php");
	}
}