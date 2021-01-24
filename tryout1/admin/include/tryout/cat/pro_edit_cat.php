<?php
	include 'include/koneksi.php';

$id = $_REQUEST['id'];
$nama = $_REQUEST['nama'];

if ($nama !="") {
	$sql = mysql_query("UPDATE cat_try SET nama_catt='$nama'
											WHERE id_catt='$id' ") or die (mysql_error());
       echo "<script>
     
      document.location.href='?p=tryout/cat/tam_cat.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='?p=tryout/cat/tam_cat.php'
      </script>";
}
?>