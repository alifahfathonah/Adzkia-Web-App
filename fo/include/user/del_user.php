<?php
	include 'include/koneksi.php';
	$id = $_REQUEST['del'];
	$my = mysql_query("DELETE FROM user WHERE id_user='$id' ");
	if ($my == true) {
		echo "<script>
			
			document.location.href='?p=user/tam_user.php'
		</script>";
	} else {
		echo "<script>
			alert('Data Gagal Di Hapus');
			document.location.href='?p=user/tam_user.php'
		</script>";
	}
?>