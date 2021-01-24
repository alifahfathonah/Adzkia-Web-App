<?php
include "koneksi.php";

$o=mysql_query("select * from soal_try where status='4'");
$e=mysql_num_rows($o);

$siswa=$_REQUEST['siswa'];
$jadwal=$_REQUEST['jadwal'];
$edit=$_REQUEST['edit'];

$kunci=1;
$nilai=1;
$soal=1;
$jawab=1;
$i=1;

while ($siswa!="")
{

$kunci="kunci$i";
$kunci=$_REQUEST[$kunci];

$jawab="jawab$i";
$jawab=$_REQUEST[$jawab];

$soal="soal$i";
$soal=$_REQUEST[$soal];

$idd="idd$i";
$idd=$_REQUEST[$idd];


		if($kunci==$jawab)
		{
			$nilai="4";

		}
		else
		{
			$nilai="-1";
		}

if($i<=$e)
{
	if($edit==1)
	{
		$sql=mysql_query("update jwb_try set id_siswa='$siswa', id_jadwaltry='$jadwal', id_soaltry='$soal' ,jawaban='$jawab' ,nilai='$nilai' where id_jwbtry='$idd' ");
	}
	else
	{

		$sql=mysql_query("insert into jwb_try(id_siswa,id_jadwaltry,id_soaltry,jawaban,nilai) values('$siswa','$jadwal','$soal','$jawab','$nilai')") or die (mysql_error());
	}

}
 ?><script language="javascript">
  	<!--
     	  //  alert('Terima Kasih')
			window.location = "../index.php?p=include/wacana.php&jadwal=<?php echo $jadwal; ?>&siswa=<?php echo $siswa ?>";
			
   	--></script>

   
	<?php 

$i++;
}
?>
