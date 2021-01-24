<?php
	include 'include/koneksi.php';

$catt = $_REQUEST['catt'];
$nama = $_REQUEST['nama'];

if ($nama !="") {


	$sql = mysql_query("INSERT INTO mapel (id_jeniscatt,nama_jeniscatt) VALUES ('$catt','$nama')") or die (mysql_error());
       echo "<script>
     
      document.location.href='?p=akademik/mapel/mapel.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='index.php'
      </script>";
}
?>