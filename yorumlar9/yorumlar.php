<?php

class yorumlar{

	function yorumlari_getir($urun_id){
		$result = mysql_query("SELECT yorumlar.*, urunler.ad FROM yorumlar, urunler 
							WHERE yorumlar.urun = urunler.id AND urunler.id=\"$urun_id\"");
		$yorumlar = array();
		while($yorum = mysql_fetch_array($result)){
			$yorumlar[] = $yorum;
		}
		return $yorumlar;
	}

}