<?php
	include '../koneksi.php';

$id = $_REQUEST['id'];
$ruangan = $_REQUEST['ruangan'];
$jumlah = $_REQUEST['jumlah'];

if ($ruangan !="") {
	$sql = mysql_query("update ruangan set nama_ruangan='$ruangan', jumlah_ruangan='$jumlah' where id_ruangan='$id'");
      echo "<script>
     
      document.location.href='../../?p=ruangan/ruangan.php'
      </script>";
} else {
      echo "<script>
      alert('Input anda gagal');
      document.location.href='../../index.php?p=ruangan/ruangan.php'
      </script>";
}
?>