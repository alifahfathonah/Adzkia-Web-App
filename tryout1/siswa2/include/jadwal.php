<h1>Jadwal Tryout</h1>
<br>
<?php session_start();
 include "include/koneksi.php";
 $user=$_SESSION['id_user'];

$now = date("Y-m-d");
$p=mysql_query("select * from user u, data_siswa d where u.id_siswa=d.id_siswa and u.id_user='$user'");
$u=mysql_fetch_array($p);
$siswa=$u['id_siswa'];


$s=mysql_query("select * from jadwaltry");
$w=mysql_fetch_array($s);
$tgl=$w['tanggal'];



//$date = date('Y-m-d', strtotime('+30 day', $tgl));
$o=mysql_query("select * from jadwaltry where tanggal>='$now' and tanggal<='$tgl'");
$z=mysql_fetch_array($o);
$t=mysql_num_rows($o);
$nama=$z['nama_jadwal'];
$jadwal=$w['id_jadwaltry'];

if($t<1)
{
	echo "Maaf Tidak Ada Jadwal Tryout Dalam Waktu Dekat Ini";
}
else
{
	$o1=mysql_query("select * from jadwaltry where tanggal>='$now' and tanggal<='$tgl'");
	$z1=mysql_fetch_array($o1);
	$t1=mysql_num_rows($o1);
	if($now!=$tgl)
	{
	echo "Jadwal Tryout yang akan datang<br>
	<form action=?p=include/daftar.php&jadwal=$jadwal&siswa=$siswa method=POST>
	<input type=submit value=Daftar></form>
	";
	}
	else
	{
		echo "Mulai Tryout?<br>
	<form action=?p=include/start.php&jadwal=$jadwal&siswa=$siswa method=POST>
	<input type=submit value=Mulai></form>
	";
	}
	
}


?>