<?php
include "koneksi2.php";

$judul = $_POST['judul'];
$berita = $_POST['berita'];
$tanggal = $_POST['tanggal'];

$sql = "INSERT INTO tb_news ( judul, isi, tanggal) VALUES ('$judul', '$berita', '$tanggal')";
$baca = mysqli_query($db, $sql);

if ($baca) {
	echo "<script>
		alert('Ur Message Saved successfully^^');
		window.location='admin.php';
		</script>
		";		
}
else {
	echo "<script>
		alert('Ur massage Failed to Saved!');
		window.location='admin.php';
		</script>";	

}

?>
