<?php
	include 'include/koneksi.php';

$kd = $_REQUEST['kd'];
$nama = $_REQUEST['nama'];
$bank = $_REQUEST['bank'];
$no_rek = $_REQUEST['no_rek'];
$nomi = $_REQUEST['nominal'];
$tujuan = $_REQUEST['tujuan'];

if ($kd !="") {

	$siswa = mysql_query("SELECT * FROM data_siswa WHERE kd_reg='$kd' ");
	$cek = mysql_fetch_array($siswa);
	$namsis = $cek['nama'];
	$sql = mysql_query("INSERT INTO confirmasi (kd_reg, nama, bank_asal, no_rek, nominal, tujuan) VALUES ('$kd', '$namsis', '$bank', '$no_rek', '$nomi', '$tujuan')");
      echo "<script>
      alert('Terima kasih anda telah melakukan konfirmasi pembayaran');
      document.location.href='?psg=done_conf.php&reg=$kd'
      </script>";
} else {
      echo "<script>
      alert('konfirmasi anda gagal');
      document.location.href='index.php'
      </script>";
}
?>