<?php
	include '../koneksi.php';

$id = $_REQUEST['id'];
$id_siswa = $_REQUEST['id_siswa'];
$kantor = $_REQUEST['kantor'];
$nama_siswa = $_REQUEST['nama_siswa'];
$nama_paket = $_REQUEST['nama_paket'];
$biaya = $_REQUEST['biaya'];
$sisa = $_REQUEST['sisa'];
$bayar = $_REQUEST['bayar'];

if ($id !="") {

	$u=mysql_query("select * from pembayaran where id_siswa='$id_siswa'");
	$q=mysql_num_rows($u);
	$i=$q+1;
	
	$sql = mysql_query("INSERT INTO pembayaran (id_biaya,id_siswa, tgl_bayar,nominal, id_kantor,cicilan) VALUES ('$id','$id_siswa',sysdate(),'$bayar', '$kantor','cicilan ke $i')");

	$sql1=mysql_query("select * from biaya_kursus where id_siswa='$id_siswa'");
	$fet=mysql_fetch_array($sql1);
	$sisa=$fet['sisa'];
	$totalsisa=$sisa-$bayar;

	$sql2=mysql_query("update biaya_kursus set sisa='$totalsisa' where id_siswa='$id_siswa'");
	$sql4=mysql_query("update data_siswa set sisapembayaran='$totalsisa' where id_siswa='$id_siswa'");

      echo "<script>
     
     document.location.href='../../?p=bayar/tam_bayar.php'
      </script>";
} else {
      echo "<script>
      alert('Input anda gagal');
     document.location.href='../../index.php?p=bayar/tam_bayar.php'
      </script>";
}
?>