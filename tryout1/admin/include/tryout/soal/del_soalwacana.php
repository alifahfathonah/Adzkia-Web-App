<?php
include 'include/koneksi.php';

$tangkap1 = $_REQUEST['del'];

$hapus = mysql_query("DELETE FROM soal_try WHERE id_soaltry = '$tangkap1' ");
if ($hapus == true) {
	echo "<script>alert('Soal Terhapus');
			document.location.href='?p=tryout/soal/tam_soalwacana.php'</script>";
} else {
	  echo "<script>
      alert('Soal Gagal Terhapus');
      document.location.href='?p=tryout/soal/tam_soalwacana.php'
      </script>";
}
?>