<?php
	include 'include/koneksi.php';


$nama = $_REQUEST['nama'];

if ($nama !="") {


	$sql = mysql_query("INSERT INTO cat_try (nama_catt) VALUES ('$nama')") or die (mysql_error());
       echo "<script>
     
      document.location.href='?p=tryout/cat/cat.php'
      </script>";
} else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='index.php'
      </script>";
}
?>