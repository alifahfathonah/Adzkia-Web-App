<?php
	include 'include/koneksi.php';

$id = $_REQUEST['id'];
$nama = $_REQUEST['nama'];

if ($nama !="") {
	$sql = mysql_query("UPDATE mapel SET nama_mapel='$nama'
											WHERE id_mapel='$id' ") or die (mysql_error());
       echo "<script>
     
      document.location.href='?p=akademik/mapel/tam_mapel.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='?p=akademik/mapel/tam_mapel.php'
      </script>";
}
?>