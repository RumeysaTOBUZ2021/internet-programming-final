<?php
	require_once '../../db.php';
	require_once '../header.php';
	
	if (isset($_POST['kategori_id'])) {
		
		$conn
		->prepare("UPDATE hizmetler SET kategori_id = ?, baslik = ?, icerik = ? WHERE id = ?")
		->execute([$_POST['kategori_id'], $_POST['baslik'], $_POST['icerik'], $_GET['id']]);
		
		echo "Hizmet başarıyla güncellendi";
	}

	$kategoriler = $conn->prepare("SELECT * FROM kategoriler ORDER BY isim ASC");
	$kategoriler->execute([]);
	
	$hizmet = $conn->prepare("SELECT * FROM hizmetler WHERE id = ?");
	$hizmet->execute([$_GET['id']]);
	
	$hizmet = $hizmet->fetchAll()[0];
	
?>
<h1>Hizmet Güncelle</h1>


<form method="post">
	<select name="kategori_id">
	<?php
		foreach ($kategoriler->fetchAll() as $kategori) {
			
			if ($hizmet['kategori_id'] === $kategori['id']) {
				$selected = "selected";
			} else {
				$selected = "";
			}
			
			echo '<option value="'.$kategori['id'].'" '.$selected.'>'.$kategori['isim'].'</option>
			';
		}
	?>
	</select>
	<br /><br />
	<input type="text" name="baslik" placeholder="Hizmet Başlığı" value="<?php echo $hizmet['baslik']; ?>"> <br /><br />
	<textarea name="icerik" placeholder="Hizmet İçeriği" style="height: 300px;"><?php echo $hizmet['icerik']; ?></textarea>
	<br /><br />
	<input type="submit" value="Hizmet Güncelle" />
</form>
<?php
	require_once '../footer.php';
?>