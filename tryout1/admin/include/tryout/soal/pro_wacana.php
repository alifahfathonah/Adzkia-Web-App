<?php
	include 'include/koneksi.php';
$wacana = $_REQUEST['wacana'];
$jenis = $_REQUEST['jenis'];

if ($wacana !="") {


	$sql = mysql_query("INSERT INTO wacana (nama_wacana,jenis) VALUES ('$wacana','$jenis')") or die (mysql_error());
    echo "<script>
     
      document.location.href='?p=tryout/soal/tam_wacana.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='?p=tryout/soal/tam_wacana.php'
      </script>";
}
?>