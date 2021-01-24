<?php
	include '../koneksi.php';

$id = $_REQUEST['id'];
$id_paket = $_REQUEST['id_paket'];
$kantor = $_REQUEST['kantor'];
$diskon = $_REQUEST['diskon'];
$diskonuang = $_REQUEST['diskonuang'];
$totalbiaya = $_REQUEST['totalbiaya'];
$sisa = $_REQUEST['sisa'];
$bayar = $_REQUEST['bayar'];

if ($id_paket !="") {
	$sql = mysql_query("INSERT INTO biaya_kursus (id_paket, id_siswa, id_kantor, diskon, diskonuang, total_biaya, sisa) VALUES ('$id_paket','$id','$kantor','$diskon','$diskonuang','$totalbiaya','$sisa')");

	$my=mysql_insert_id();
	$sql1=mysql_query("INSERT INTO pembayaran(id_biaya,id_siswa,tgl_bayar,nominal,id_kantor,cicilan) 
		values ('$my','$id',sysdate(),'$bayar','$kantor','cicilan ke 1')");

      $sql2=mysql_query("update data_siswa set sisapembayaran='$sisa' where id_siswa='$id' ");
      echo "<script>
     
      document.location.href='../../?p=siswa/inputkelas.php&siswa=$id&paket=$id_paket'
      </script>";
} else {
      echo "<script>
      alert('Input anda gagal');
      document.location.href='../../index.php?p=siswa/inputbayar.php'
      </script>";
}
?>