<?php
	include 'include/koneksi.php';

$berita = $_REQUEST['berita'];
$desk = $_REQUEST['desk'];

if ($berita !="") {

	$sql = mysql_query("INSERT INTO info (tanggal,judul,berita) 
      VALUES (sysdate(now),'$berita','$desk')");
      echo "<script>
      document.location.href='index.php?p=info/info.php'
      </script>";
} else {
      echo "<script>
      alert('inputan anda gagal');
      document.location.href='index.php?p=info/info.php'
      </script>";
}
?>