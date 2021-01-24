<?php
	include '../koneksi.php';
	$id = $_REQUEST['id'];
	$my = mysql_query("DELETE FROM ruangan WHERE id_ruangan='$id' ");
	if ($my == true) {
		echo "<script>
			
			document.location.href='../../?p=ruangan/ruangan.php'
		</script>";
	} else {
		echo "<script>
			alert('Data Gagal Di Hapus');
			document.location.href='../../?p=ruangan/ruangan.php'
		</script>";
	}
?>