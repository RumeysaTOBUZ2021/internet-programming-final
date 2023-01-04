<?php
	require_once '../../db.php';
	require_once '../header.php';
	
	if (isset($_POST['kategori_id'])) {
		
		$conn
		->prepare("INSERT INTO hizmetler (kategori_id, baslik, icerik) VALUES (?, ?, ?)")
		->execute([$_POST['kategori_id'], $_POST['baslik'], $_POST['icerik']]);
		
		echo "Hizmet başarıyla eklendi";
	}

	$kategoriler = $conn->prepare("SELECT * FROM kategoriler ORDER BY isim ASC");
	$kategoriler->execute([]);
?>
<h1>Hizmet Ekle</h1>


<form method="post">
	<select name="kategori_id">
	<?php
		foreach ($kategoriler->fetchAll() as $kategori) {
			echo '<option value="'.$kategori['id'].'">'.$kategori['isim'].'</option>
			';
		}
	?>
	</select>
	<br /><br />
	<input type="text" name="baslik" placeholder="Hizmet Başlığı"> <br /><br />
	<textarea name="icerik" placeholder="Hizmet İçeriği" style="height: 300px;"></textarea>
	<br /><br />
	<input type="submit" value="Hizmet Ekle" />
</form>
<?php
	require_once '../footer.php';
?>