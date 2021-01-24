<?php
include "include/koneksi.php";
   $siswa=$_REQUEST['siswa'];
$video=$_REQUEST['video'];

$o=mysql_query("select *, sum(nilai) as nilai1 from jwb_kuis j, soal_kuis s, data_siswa d, video v where j.id_soalkuis=s.id_soalkuis and j.id_siswa=d.id_siswa and s.id_video=v.id_video and j.id_siswa='$siswa' GROUP BY d.id_siswa");
	$e=mysql_fetch_array($o);

	$a=$e['nilai1'];
	$q=40;

	$hasil=$a/$q;
	$total=($hasil/4)*100;

	if($total<=12)
	{
		$lulus="Tidak Lulus";
	}
	else
	{
		$lulus="Lulus";
	}

	$s=mysql_query("insert into hasilkuis(id_siswa,id_video,total,status) values('$siswa','$video','$total','$lulus')");



?>

<div class="box-isi-content">
    <div class="waktu">
    <h2>
      Terima kasih sudah menjawab
    </h2>
  </div>
  <h3><?php
	echo "Nilai Anda adalah <font color=red>".$total."</font><br>Anda dinyatakan <font color=red>".$lulus."</font>";
?></h3>
  <br>
  <div class="isi_soal">
   
    
       
      
  
    
  </div>
  
</div>