<?php
include "include/koneksi.php";

$j=$_REQUEST['j'];
$s=$_REQUEST['s'];

$s1=mysql_query("select * from jwb_try j, soal_try s, data_siswa d, jadwaltry t where j.id_jadwaltry=t.id_jadwaltry and j.id_siswa=d.id_siswa and j.id_soaltry=s.id_soaltry and j.id_jadwaltry='$j' and j.id_siswa='$s'");
$y=mysql_fetch_array($s1);

$r=mysql_query("select sum(nilai) as ni from jwb_try where id_jadwaltry='$j' and id_siswa='$s'");
$t=mysql_fetch_array($r);

$r1=mysql_query("select count(id_soaltry) as soal from jwb_try where id_jadwaltry='$j' and id_siswa='$s' and nilai='4'");
$t1=mysql_fetch_array($r1);


?>
<h1>Terima kasih <?php echo $y['nama']; ?><br>
Nilai Anda : <?php echo $t['ni']; ?><br>
Anda <?php
$g=$t1['soal'];
$e=$g/4;

if($e>0.3)
{
	echo "Lulus"; 
}
else
{
	echo "Gagal";
}
?>
</h1>