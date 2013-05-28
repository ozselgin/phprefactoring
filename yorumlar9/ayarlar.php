<?php

class ayarlar{

	function veritabani_ayarlarini_yap(){
		mysql_connect("localhost", "root", "") or die ("Veritabanına bağlanırken bir hata oluştu!" . mysql_error());
		mysql_select_db("site") or die("Veritanında bir hata oluştu!" . mysql_error());
		mysql_query("SET NAMES UTF8");
	}
}