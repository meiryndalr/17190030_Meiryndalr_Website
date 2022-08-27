<?php
include "koneksi.php";

$username = $_POST['uname'];
$massage = $_POST['massage'];


$sql = "INSERT INTO tb_komen ( user, komen) VALUES ('$username', '$massage')";
$baca = mysqli_query($db, $sql);

if ($baca) {
	echo "<script>
		alert('Ur Message Saved successfully^^');
		window.location='page3.php';
		</script>
		";		
}
else {
	echo "<script>
		alert('Ur massage Failed to Saved!');
		window.location='page3.php';
		</script>";	

}

?>
