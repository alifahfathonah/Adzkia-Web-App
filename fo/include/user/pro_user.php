<?php
	include 'include/koneksi.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$status = $_REQUEST['status'];
$kantor = $_REQUEST['kantor'];

if ($username !="") {


	$sql = mysql_query("INSERT INTO user (id_kantor,username,password,status) VALUES ('$kantor','$username', '$password', 'admin')");
      echo "<script>
     
      document.location.href='?p=user/tam_user.php'
      </script>";
} else {
      echo "<script>
      alert('Gagal');
      document.location.href='?p=user/user.php'
      </script>";
}
?>