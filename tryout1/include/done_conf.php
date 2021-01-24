<?php session_start();
	include 'include/koneksi.php';
	$kd=$_REQUEST['reg'];
	$f=mysql_query("select * from confirmasi where kd_reg='$kd'");
	$t=mysql_fetch_array($f);
 ?>

<center><h2>Terima kasih <?php echo $t['nama']; ?></h2> Telah melakukan konfirmasi pembayaran. <br>Harap menunggu email balasan dari kami untuk akun username dan password anda. Terima kasih </center>
