<h1>Jadwal Tryout</h1>
<br>
<?php include "include/koneksi.php";
$now = date("Y-m-d");

$s=mysql_query("select * from jadwaltry");
$w=mysql_fetch_array($s);
$tgl=$w['tanggal'];

//$date = date('Y-m-d', strtotime('+30 day', $tgl));
$o=mysql_query("select * from jadwaltry where tanggal>='$now' and tanggal<='$tgl'");
$z=mysql_fetch_array($o);
$t=mysql_num_rows($o);
$nama=$z['nama_jadwal'];
$id=$z['id_jadwaltry'];

if($t<1)
{
	echo "Maaf Tidak Ada Jadwal Tryout Dalam Waktu Dekat Ini";
}
else
{
	echo "Jadwal Tryout yang akan datang<br>
	<form action=?p=include/daftar.php&id=$id method=POST>
	<input type=submit value=Daftar></form>
	";
	
}


?>