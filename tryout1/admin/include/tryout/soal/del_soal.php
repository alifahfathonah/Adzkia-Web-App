<?php
include 'include/koneksi.php';

$tangkap1 = $_REQUEST['del'];

$hapus = mysql_query("DELETE FROM soalbaru WHERE id_soalbaru = '$tangkap1' ");
if ($hapus == true) {
	echo "<script>alert('Soal Terhapus');
			document.location.href='?p=tryout/soal/tam_soal.php'</script>";
} else {
	  echo "<script>
      alert('Soal Gagal Terhapus');
      document.location.href='?p=tryout/soal/tam_soal.php'
      </script>";
}
?>