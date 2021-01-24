<?php
	include 'include/koneksi.php';

$id_mapel = $_REQUEST['mapel'];
$nama = $_REQUEST['nama'];
$video = $_REQUEST['video'];
$desk = $_REQUEST['desk'];

if ($nama !="") {


	$sql = mysql_query("INSERT INTO materi (nama_materi, video, id_mapel,desk) VALUES ('$nama','$video','$id_mapel','$desk')") or die (mysql_error());
       echo "<script>
     
      document.location.href='?p=akademik/materi/materi.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='index.php'
      </script>";
}
?>