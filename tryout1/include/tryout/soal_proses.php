<?php
include "../../include/koneksi.php";

$o=mysql_query("select * from soal_try");
$e=mysql_num_rows($o);

$siswa=$_REQUEST['siswa'];
$jadwal=$_REQUEST['jadwal'];

$kunci=1;
$soal=1;
$i=1;

while ($i<=$e)
{

$kunci="kunci$i";
$kunci=$_REQUEST[$kunci];

$soal="soal$i";
$soal=$_REQUEST[$soal];

if($siswa!="") {

	$sql=mysql_query("insert into jwb_try(id_siswa,id_jadwaltry,id_soaltry,jawaban) values('$siswa','$jadwal','$soal','$kunci')") or die (mysql_error());

 ?>
<script language="javascript">
  	<!--
     	    alert('Message Anda telah di proses, terima kasih')
			window.location = "index.php?p=soal.php";
			
   	--></script>
	
    <?php 
}
else
{
	?><script language="javascript">
  	<!--
     	    alert('Gagal')
			window.location = "index.php?p=soal.php";
			
   	--></script>
	<?php 
}
$i++;
}
?>
