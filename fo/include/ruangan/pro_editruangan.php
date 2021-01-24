<?php
	include '../koneksi.php';

$id = $_REQUEST['id'];
$ruangan = $_REQUEST['ruangan'];
$jumlah = $_REQUEST['jumlah'];
$kantor = $_REQUEST['kantor'];

$prog = $_REQUEST['program'];

if ($ruangan !="") {
	$sql = mysql_query("update ruangan set nama_ruangan='$ruangan', jumlah_ruangan='$jumlah, program='$prog' and id_kantor='$kantor' where id_ruangan='$id'");
      echo "<script>
     
      document.location.href='../../?p=ruangan/tam_ruangan.php'
      </script>";
} else {
      echo "<script>
      alert('Input anda gagal');
      document.location.href='../../index.php?p=ruangan/tam_ruangan.php'
      </script>";
}
?>