<?php
include 'include/koneksi.php';

$tangkap = $_REQUEST['del'];

$hapus = mysql_query("DELETE FROM jadwaltry WHERE id_jadwaltry ='$tangkap' ") or die(mysql_error());
if ($hapus==true) {
	  echo "<script>
     	alert('Jadwal Terhapus');
      document.location.href='?p=tryout/jadwal/tam_jadwal.php'
      </script>";
} else {
	  echo "<script>
      alert('Jadwal Gagal Terhapus');
      document.location.href='?p=tryout/jadwal/jadwal.php'
      </script>";
}
?>