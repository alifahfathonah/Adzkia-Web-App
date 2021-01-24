<?php
	include 'include/koneksi.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username !="") {


	$sql = mysql_query("INSERT INTO user (username,password,status) VALUES ('$username', '$password', 'admin')");
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