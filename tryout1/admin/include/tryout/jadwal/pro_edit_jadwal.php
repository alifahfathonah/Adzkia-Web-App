<?php
	include 'include/koneksi.php';

$id = $_REQUEST['id'];
$jadwal = $_REQUEST['jadwal'];
$tgl = $_REQUEST['tgl'];
$waktu = $_REQUEST['waktu'];

if ($jadwal !="") {
	$sql = mysql_query("UPDATE jadwaltry SET nama_jadwal = '$jadwal',
	 										 tanggal ='$tgl',
	 										 waktu ='$waktu'
	 										 WHERE id_jadwaltry='$id' ") or die(mysql_error());
    echo "<script>
     	
      document.location.href='?p=tryout/jadwal/tam_jadwal.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='?p=tryout/jadwal/tam_jadwal.php'
      </script>";
}
?>