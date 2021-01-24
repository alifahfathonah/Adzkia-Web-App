<?php session_start();
	include 'include/koneksi.php';
	$kd=$_REQUEST['reg'];
	$f=mysql_query("select * from data_siswa where kd_reg='$kd'");
	$t=mysql_fetch_array($f);
 ?>

<h2>Terima kasih <?php echo $t['nama']; ?> sudah mendaftar di Adzkia <h2>
Nomor Registrasi Anda : <?php echo $kd; ?><br>
Silahkan melakukan pembayaran sebesar Rp.500.000,- ke rekening mandiri kami<br>
Nomor Rekening: 854689754522<br>
Atas Nama: Dhani<br>
Setelah melakukan pembayaran, mohon untuk lakukan konfirmasi ke link berikut ini.