<?php
	include 'include/koneksi.php';

$id = $_REQUEST['id'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username !="") {
	$sql = mysql_query("UPDATE user SET username='$username',
										password='$password'
										WHERE id_user = '$id' ");
      echo "
      	<script>
	      document.location.href='?p=user/tam_user.php'
	    </script>
      ";
} else {
      echo "
	      <script>
		      alert('Gagal');
		      document.location.href='?p=user/user.php'
	      </script>
      ";
}

?>