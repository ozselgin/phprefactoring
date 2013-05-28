<?php
require_once("ayarlar.php");

//tum istekleri karsilayacak sinif
class baslatici{

	private $ayarlar = null;

	function __construct(){
		$this->ayarlar = new ayarlar();
		$this->ayarlar->veritabani_ayarlarini_yap();
	}
	
	function yonlendir(){
		$sayfa = $_GET["sayfa"] . "_sayfasi";
		require_once($sayfa . ".php");
		$sayfa = new $sayfa();
		$sayfa->olustur();
	}
}

$baslatici = new baslatici();
$baslatici->yonlendir();

//template icerisinde kullanilacak degiskenler buraya atilacak.
$degerler = array();