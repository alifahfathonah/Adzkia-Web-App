<?php
include "include/koneksi.php";
   $siswa=$_REQUEST['siswa'];
$jadwal=$_REQUEST['jadwal'];

$o=mysql_query("select *, sum(nilai) as nilai1 from jwb_try j, soal_try s, jadwaltry jd, data_siswa d where j.id_soaltry=s.id_soaltry and j.id_jadwaltry=jd.id_jadwaltry and j.id_siswa=d.id_siswa and j.id_siswa='$siswa' and j.id_jadwaltry='$jadwal' GROUP BY j.id_jadwaltry and d.id_siswa");
	$e=mysql_fetch_array($o);

	$a=$e['nilai1'];
	$q=180;

	$hasil=$a/$q;
	$total=($hasil/4)*100;

	if($total<=30)
	{
		$lulus="Tidak Lulus";
	}
	else
	{
		$lulus="Lulus";
	}

	$s=mysql_query("insert into hasil(id_siswa,id_jadwaltry,total,status) values('$siswa','$jadwal','$total','$lulus')");



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