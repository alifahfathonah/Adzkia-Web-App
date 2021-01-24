<?php
include "koneksi.php";

$s=mysql_query("select * from cat_try c, jenis_catt j where c.id_jeniscatt=j.id_jeniscatt order by j.id_jeniscatt ASC") or die (mysql_error());

while($t=mysql_fetch_array($s))
{
	$id=$t['id_catt'];

	echo $t['nama_catt']."<br>";
	$y=mysql_query("select * from soal_try s, cat_try c where s.id_catt=c.id_catt and c.id_catt='$id' ");
	while($r=mysql_fetch_array($y))
	{
		echo $r['soal'];
	}
}
?>