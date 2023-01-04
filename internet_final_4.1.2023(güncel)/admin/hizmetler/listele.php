<?php
	require_once '../../db.php';
	require_once '../header.php';
	
	$haberler = $conn->prepare("
	SELECT hizmetler.*, kategoriler.isim AS kategori FROM hizmetler
		LEFT JOIN kategoriler
			ON hizmetler.kategori_id = kategoriler.id
	
	");
	$hizmetler->execute();
?>
<h1>Hizmetler</h1>

<table border="1" width="600">
	<tr>
		<td>ID</td>
		<td>Kategori</td>
		<td>Başlık</td>
		<td>İşlem</td>
	</tr>
	<?php
		foreach($hizmetler->fetchAll() as $hizmet) {
			echo '
			<tr>
				<td>'.$hizmet['id'].'</td>
				<td>'.$hizmet['kategori'].'</td>
				<td>'.$hizmet['baslik'].'</td>
				<td>
					<a href="duzenle.php?id='.$hizmet['id'].'">Düzenle</a> | 
					<a href="sil.php?id='.$hizmet['id'].'">Sil</a>
				</td>
			</tr>
			';
		}
	?>
	
</table>
<?php
	require_once '../footer.php';
?>