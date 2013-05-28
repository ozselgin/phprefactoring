<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="../bootstrap.min.css" rel="stylesheet">
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