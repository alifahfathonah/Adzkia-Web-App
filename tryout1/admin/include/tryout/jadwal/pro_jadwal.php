<?php
include '../../../../include/koneksi.php';

$nama = $_REQUEST['nama'];
$tanggal = $_REQUEST['tanggal'];

if ($nama !="") {
	$sql = mysql_query("INSERT INTO jadwaltry SET 
                      nama_jadwal = '$nama',
	 										tanggal ='$tanggal'") or die(mysql_error());
  if ($sql) {
    echo "sukses";
  }
}