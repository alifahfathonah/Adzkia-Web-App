<?php
	include 'include/koneksi.php';
$jadwal=$_REQUEST['jadwal'];
$id=$_REQUEST['id1'];
$id_catt=$_REQUEST['id_catt'];
$soal = $_REQUEST['soal'];
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$e = $_REQUEST['e'];
$kunci = $_REQUEST['kunci'];
$jenis = "gambar";

if ($kunci !="") {


	$sql = mysql_query("INSERT INTO soal_try (id_jadwaltry,id_catt,soal,pilihan1,pilihan2,pilihan3,pilihan4,pilihan5,kunci,status,id_wacana) VALUES ('$jadwal','$id_catt','$soal','$a','$b','$c','$d','$e','$kunci','$jenis','$id')") or die (mysql_error());
    echo "<script>
     
      document.location.href='?p=tryout/soal/soalwacana.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='?p=tryout/soal/soalwacana.php'
      </script>";
}
?>