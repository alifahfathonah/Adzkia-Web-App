<?php
	include '../koneksi.php';

$id = $_REQUEST['id'];
$paket = $_REQUEST['paket'];
$biaya = $_REQUEST['biaya'];

if ($paket !="") {
	$sql = mysql_query("update paket set nama_paket='$paket', biaya_paket='$biaya' where id_paket='$id'");
      echo "<script>
     
      document.location.href='../../?p=siswa/tam_paket.php'
      </script>";
} else {
      echo "<script>
      alert('Input anda gagal');
      document.location.href='../../index.php?p=siswa/tam_paket.php'
      </script>";
}
?>