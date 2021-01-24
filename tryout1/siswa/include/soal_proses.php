<?php
	include 'koneksi.php';
	$soal=$_REQUEST['soal'];
	$siswa=$_REQUEST['siswa'];
	$jadwal=$_REQUEST['jadwal'];
	
	$q=1;
	//$jawab=1;
	
	while($q<=120)
	{
		$jawab="jawab$q";
		$jawab = $_REQUEST[$jawab];

		$kunci="kunci$q";
		$kunci=$_REQUEST[$kunci];

		$nomor="nomor$q";
		$nomor=$_REQUEST[$nomor];

		if($jawab=="")
		{
			$nilai="0";
		}
		elseif($kunci==$jawab)
		{
			$nilai="4";

		}		
		else
		{
			$nilai="-1";
		}
		
		//echo $nomor."<br>".$jawab."<br>".$kunci."<br>".$nilai."<br>";
		$s=mysql_query("insert into jwb_soal(id_jadwaltry,id_siswa,nomor,jwb,kunci,nilai) values ('$jadwal','$siswa','$nomor','$kunci','$jawab','$nilai')") or die (mysql_error());
	$q++;
	}


//TPA
	$o=mysql_query("select count(nilai) as benar from jwb_soal j, jadwaltry jd, data_siswa d where j.id_siswa=d.id_siswa and j.id_siswa='$siswa' and jd.id_jadwaltry='$jadwal' and j.nilai='4' and j.nomor>='1' and j.nomor<='120'");
	$m=mysql_fetch_array($o);
	$benar=$m['benar'];
	

	$o2=mysql_query("select count(nilai) as kosong from jwb_soal j, jadwaltry jd, data_siswa d where j.id_siswa=d.id_siswa and j.id_siswa='$siswa' and jd.id_jadwaltry='$jadwal' and j.nilai='0' and j.nomor>='1' and j.nomor<='120'");
	$m2=mysql_fetch_array($o2);
	$kosong=$m2['kosong'];

	$o1=mysql_query("select count(nilai) as salah from jwb_soal j, jadwaltry jd, data_siswa d where j.id_siswa=d.id_siswa and j.id_siswa='$siswa' and jd.id_jadwaltry='$jadwal' and j.nilai='-1' and j.nomor>='1' and j.nomor<='120'");
	$m1=mysql_fetch_array($o1);
	$salah=$m1['salah'];

	
	$jawab1=(120-$kosong);
	$nilbenar=($benar*4);
	$nilsalah=($salah*(-1));

	$nilai1=($nilbenar+$nilsalah);
	
	if($nilai1<=159)
	{
		$ket="TL";
	}
	else
	{
		$ket="L";
	}


	$s=mysql_query("INSERT INTO hasil (
`id_siswa` ,
`id_jadwaltry` ,
`tpa_jawab` ,
`tpa_benar` ,
`tpa_salah` ,
`tpa_kosong` ,
`tpa_nilai` ,
`tpa_ket` )
VALUES ('$siswa', '$jadwal', '$jawab1', '$benar', '$salah', '$kosong', '$nilai1', '$ket')");

	?>
	<script>
     
     document.location.href='index.php?p=startbi.php&siswa=<?php echo $siswa; ?>&jadwal=<?php echo $jadwal; ?>'
    </script>