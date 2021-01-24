<?php
include "../koneksi.php";

$siswa=$_REQUEST['siswa']; 
$video=$_REQUEST['video']; 
$o=mysql_query("select * from soal_kuis where id_video='$video'");
$e=mysql_num_rows($o);

$kunci=1;
$nilai=1;
$soal=1;
$jawab=1;
$i=1;

while ($i<=$e)
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
	

		$sql=mysql_query("insert into jwb_kuis(id_siswa,id_soalkuis,jawaban,nilai) values('$siswa','$soal','$jawab','$nilai')") or die (mysql_error());
	

}
 ?><script language="javascript">
  	<!--
     	  //  alert('Terima Kasih')
			window.location = "../../index.php?p=include/video/hasil.php&siswa=<?php echo $siswa ?>&video=<?php echo $video; ?>";
			
   	--></script>

   
	<?php 

$i++;
}
?>
