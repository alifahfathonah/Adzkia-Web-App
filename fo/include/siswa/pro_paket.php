<?php
	include '../koneksi.php';

$id = $_REQUEST['id'];
$paket = $_REQUEST['paket'];
$biaya = $_REQUEST['biaya'];
$nomor = $_REQUEST['nomor'];

if ($paket !="") {
	$sql = mysql_query("INSERT INTO paket (nama_paket, biaya_paket, nom) VALUES ('$paket','$biaya','$nomor')");
      echo "<script>
     
      document.location.href='../../?p=siswa/paket.php'
      </script>";
} else {
      echo "<script>
      alert('Input anda gagal');
      document.location.href='../../index.php?p=siswa/paket.php'
      </script>";
}
?>