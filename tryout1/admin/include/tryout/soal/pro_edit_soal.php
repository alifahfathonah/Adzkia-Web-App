<?php
	include 'include/koneksi.php';

$id = $_REQUEST['id'];
$jadwal=$_REQUEST['jadwal'];
$id_catt=$_REQUEST['id_catt'];
$soal = $_REQUEST['soal'];
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$kunci = $_REQUEST['kunci'];

if ($kunci !="") {
	$sql = mysql_query("UPDATE soal_try SET id_jadwaltry=$jadwal,id_catt ='$id_catt',
	 										soal ='$soal',
	 										pilihan1 ='$a',
	 										pilihan2 ='$b',
	 										pilihan3 ='$c',
	 										pilihan4 ='$d',
	 										kunci ='$kunci',status='biasa'
	 										WHERE id_soaltry='$id' ") or die (mysql_error());
    echo "<script>
     
      document.location.href='?p=tryout/soal/tam_soal.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='?p=tryout/soal/tam_soal.php&id=$id'
      </script>";
}
?>