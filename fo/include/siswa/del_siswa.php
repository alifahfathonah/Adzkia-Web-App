<?php
	include 'include/koneksi.php';
	$tangkap = $_REQUEST['del'];
	$my = mysql_query("DELETE FROM data_siswa WHERE id_siswa='$tangkap' ");
	if ($my == true) {
		echo "<script>
			alert('Data Berhasil Di Hapus');
			document.location.href='?p=siswa/tam_siswa.php'
		</script>";
	} else {
		echo "<script>
			alert('Data Gagal Di Hapus');
			document.location.href='?p=siswa/tam_siswa.php'
		</script>";
	}
?>