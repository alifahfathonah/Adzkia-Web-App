<?php
	include 'include/koneksi.php';


$soal = $_REQUEST['soal'];
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$kunci = $_REQUEST['kunci'];

if ($kunci !="") {


	$sql = mysql_query("INSERT INTO soal_try (soal,pilihan1,pilihan2,pilihan3,pilihan4,kunci) VALUES ('$soal','$a','$b','$c','$d','$kunci')") or die (mysql_error());
    echo "<script>
     
      document.location.href='?p=tryout/soal/soal.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='index.php'
      </script>";
}
?>