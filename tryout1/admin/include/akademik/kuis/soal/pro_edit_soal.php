<?php
	include 'include/koneksi.php';

$id = $_REQUEST['id'];
$id_mapel=$_REQUEST['mapel'];
$soal = $_REQUEST['soal'];
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$kunci = $_REQUEST['kunci'];

if ($kunci !="") {
	$sql = mysql_query("UPDATE soal_try SET id_mapel ='$id_mapel',
	 										soal ='$soal',
	 										pilihan1 ='$a',
	 										pilihan2 ='$b',
	 										pilihan3 ='$c',
	 										pilihan4 ='$d',
	 										kunci ='$kunci'
	 										WHERE id_soalkuis='$id' ") or die (mysql_error());
    echo "<script>
     
      document.location.href='?p=akademik/kuis/soal/tam_soal.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='?p=akademik/kuis/soal/tam_soal.php&id=$id'
      </script>";
}
?>