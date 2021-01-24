<?php
	include 'include/koneksi.php';
	$tangkap = $_REQUEST['del'];
	$my = mysql_query("DELETE FROM data_siswa WHERE id_siswa='$tangkap' ");
	if ($my == true) {
		echo "<script>
			alert('Data Kelas Berhasil Di Hapus');
			document.location.href='?p=jadwal/tam_lihat.php'
		</script>";
	} else {
		echo "<script>
			alert('Data Kelas Gagal Di Hapus');
			document.location.href='?p=jadwal/tam_jadwal.php'
		</script>";
	}
?>