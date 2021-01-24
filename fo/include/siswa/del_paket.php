<?php
	include 'include/koneksi.php';
	$id = $_REQUEST['del'];
	$my = mysql_query("DELETE FROM paket WHERE id_paket='$id' ");
	if ($my == true) {
		echo "<script>
			
			document.location.href='?p=siswa/tam_paket.php'
		</script>";
	} else {
		echo "<script>
			alert('Data Gagal Di Hapus');
			document.location.href='?p=siswa/tam_paket.php'
		</script>";
	}
?>