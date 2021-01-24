<?php session_start();
	include 'include/koneksi.php';
	$kd=$_REQUEST['reg'];
	$f=mysql_query("select * from confirmasi where kd_reg='$kd'");
	$t=mysql_fetch_array($f);
 ?>

<h2>Terima kasih <?php echo $t['nama']; ?> sudah melakukan konfirmasi pembayaran. Tunggu email balasan kami untuk akun username dan password anda. Terima kasih <h2>
