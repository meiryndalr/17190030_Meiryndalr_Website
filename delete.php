<?php
    include "koneksi2.php";
    $id = $_GET['id'];
    $ambilData = mysqli_query($db, "DELETE FROM tb_news WHERE id='$id'");
    echo "<script>
        alert('Ur Deleted Saved successfully^^');
        window.location='admin.php';
        </script>";
?>