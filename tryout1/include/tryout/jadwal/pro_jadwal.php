<?php
	include 'include/koneksi.php';


$jadwal = $_REQUEST['jadwal'];
$tgl = $_REQUEST['tgl'];
$waktu = $_REQUEST['waktu'];

if ($jadwal !="") {


	$sql = mysql_query("INSERT INTO jadwaltry (nama_jadwal,tgl,waktu) VALUES ('$jadwal','$tgl','$waktu')") or die (mysql_error());
    echo "<script>
     
      document.location.href='?p=tryout/jadwal/jadwal.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='index.php'
      </script>";
}
?>