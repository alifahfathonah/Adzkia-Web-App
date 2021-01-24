<?php
	include '../koneksi.php';

$id = $_REQUEST['id'];
$ruangan = $_REQUEST['ruangan'];
$jumlah = $_REQUEST['jumlah'];

if ($ruangan !="") {
	$sql = mysql_query("INSERT INTO ruangan (nama_ruangan, jumlah_ruangan, id_kantor) VALUES ('$ruangan','$jumlah','$id')");
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