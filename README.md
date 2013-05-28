##Refactoring, Spagetti Koddan Nasıl Kurtulurum?

Burada farazi bir e-ticaret sitesi için ürün yorum sayfası kodları bulunuyor. 8 adımda (versiyon) bu sayfayı yazılım prensiplerine uygun bir yapıya getiriyoruz. Kodlar phpgunleri (phpgunler.org) sunumu için hazırlanmıştı, sunum pdf olarak "sunum dosyasi" klasörünün altında bulunuyor. Versiyonlar arası farkları daha iyi anlamak için sunum dosyası incelenebilir.

###Veritabani Kurulumu

veritabani_kurulum klasörünün altında yorumlar.sql dosyası bulunuyor. Herhangi bir mysql yönetim programıyla -phpmyadmin gibi- proje veritabanı oluşturulabilir.

###Versiyonlar arası URL yapısı farklılıkları

İyileştirmeler yaptıkça URL yapımız değişiyor. Aşağıdaki açıklamalar versiyonlar arası URL farklarını belirtiyor.

* 1. versiyon: yorumlar.php dosyası bizim iyileştireceğimiz proje kodunu içeriyor. http://localhost/yorumlar.php?id=1 şeklinde çağırılarak sayfa görülebilir. 
* 2-5 arasındaki versiyonlar: yorumlar2.php ve yorumlar5.php arasındaki versiyonlar benzer şekilde http://localhost/yorumlar2.php?id=1 şeklinde çağırılabilir.
* 6-7 arasındaki versiyonlar: http://localhost/yorumlar6/yorumlar.php?id=1 şeklinde ulaşılabilir.
* 8-9 arasındaki versiyonlar: http://localhost/yorumlar8/index.php?sayfa=yorumlar&id=1 şeklinde ulaşılabilir.
