<?php
include '../../../../include/koneksi.php';

$nama = $_REQUEST['nama'];
$tanggal = $_REQUEST['tanggal'];
$waktu = $_REQUEST['waktu'];

if ($nama !="") {
	$sql = mysql_query("INSERT INTO jadwaltry SET 
                      nama_jadwal = '$nama',
	 										tanggal ='$tanggal',
	 										waktu ='$waktu'") or die(mysql_error());
  if ($sql) {
    echo "sukses";
  }
}