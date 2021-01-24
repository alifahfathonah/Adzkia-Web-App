<?php session_start();
	include 'include/koneksi.php';
	$kd=$_REQUEST['reg'];
	//echo $kd;
	$f=mysql_query("select * from data_siswa where kd_reg='$kd'");
	$t=mysql_fetch_array($f);
 ?>

<center><font color="red" size="6" >Nomor Registrasi Anda : <?php echo $kd; ?></font><h2>Terima kasih sudah mendaftar di Adzkia </h2>
<br>Silahkan melakukan pembayaran sebesar Rp.500.000,- ke rekening  kami<br>
<img src="img/mandiri.jpg" width="400px" height="200px"><br>
Nomor Rekening: 106.001.1096.958<br>
Atas Nama: Widia Astuti<br>
Setelah melakukan pembayaran, mohon untuk lakukan konfirmasi ke link berikut ini. <a href="http://adzkiastan.com/?psg=confirm.php">Konfirmasi</a>
<br><br>
Informasi lebih lanjut hubungi ADZKIA STAN<br>
Jl.Kangkung No.24 A-B<br>
Telp: (061)456-1280
</center>