<?php
	include 'include/koneksi.php';
$video=$_REQUEST['video'];
$soal = $_REQUEST['soal'];
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$e = $_REQUEST['e'];
$kunci = $_REQUEST['kunci'];
$jenis = $_REQUEST['jenis'];

if ($kunci !="") {


	$sql = mysql_query("INSERT INTO soal_kuis (id_video,soal,pilihan1,pilihan2,pilihan3,pilihan4,pilihan5,kunci) VALUES ('$video','$soal','$a','$b','$c','$d','$e','$kunci')") or die (mysql_error());
    echo "<script>
     
      document.location.href='?p=video/soal/soal.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='index.php'
      </script>";
}
?>