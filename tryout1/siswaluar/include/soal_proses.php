<?php
include "koneksi.php";

$o=mysql_query("select * from soal_try");
$e=mysql_num_rows($o);

$siswa=$_REQUEST['siswa'];
$jadwal=$_REQUEST['jadwal'];

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


if($kunci==$jawab)
{
	$nilai="4";

}
else
{
	$nilai="-1";
}


if($siswa!="") {

	$sql=mysql_query("insert into jwb_try(id_siswa,id_jadwaltry,id_soaltry,jawaban,nilai) values('$siswa','$jadwal','$soal','$jawab','$nilai')") or die (mysql_error());


 ?><script language="javascript">
  	<!--
     	    alert('Berhasil')
			window.location = "../index.php?p=include/hasil.php&j=1&s=1";
			
   	--></script>

    <?php 
}
else
{
	?><script language="javascript">
  	<!--
     	    alert('Gagal')
			window.location = "../index.php?p=include/soal.php";
			
   	--></script>
	<?php 
}
$i++;
}
?>
