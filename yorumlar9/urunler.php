<?php

class urunler{

	function urun_adi_al($urun_id){
		$result = mysql_query("SELECT ad FROM urunler WHERE urunler.id=\"$urun_id\"");
		$row = mysql_fetch_row($result);
		return $row[0];
	}

}