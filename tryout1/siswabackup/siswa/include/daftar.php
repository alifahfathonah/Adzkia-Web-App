<?php 
session_start();
 include "include/koneksi.php";
 $user=$_SESSION['id_user'];

$siswa=$_REQUEST['siswa'];
$jadwal=$_REQUEST['jadwal'];

//echo $jadwal;

$sql=mysql_query("select * from daftar_try where id_siswa='$siswa' and id_jadwaltry='$jadwal'");
$w=mysql_num_rows($sql);
//echo $w;

if($w>=1)
{
	
	echo "Anda sudah terdaftar";
	
}
else{
	echo "ok";
	$s=mysql_query("insert into daftar_try(id_siswa,id_jadwaltry,status) values('$siswa',$jadwal,'daftar')");
}



?>