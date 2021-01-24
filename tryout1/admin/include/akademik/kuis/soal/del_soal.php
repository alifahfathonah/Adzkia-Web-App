<?php
include 'include/koneksi.php';

$tangkap1 = $_REQUEST['del'];

$hapus = mysql_query("DELETE FROM soal_kuis WHERE id_soalkuis = '$tangkap1' ");
if ($hapus == true) {
	echo "<script>alert('Soal Terhapus');
			document.location.href='?p=akademik/soal/tam_soal.php'</script>";
} else {
	  echo "<script>
      alert('Soal Gagal Terhapus');
      document.location.href='?p=akademik/soal/tam_soal.php'
      </script>";
}
?>