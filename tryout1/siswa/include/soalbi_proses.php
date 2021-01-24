<?php
	include 'koneksi.php';
	$soal=$_REQUEST['soal'];
	$siswa=$_REQUEST['siswa'];
	$jadwal=$_REQUEST['jadwal'];
	
	
	$q=1;
	//$jawab=1;
	
	while($q<=180)
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
	

//echo $tj;

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


//B.Inggris
	$oq=mysql_query("select count(nilai) as benar from jwb_soal j, jadwaltry jd, data_siswa d where  j.id_siswa=d.id_siswa and j.id_siswa='$siswa' and jd.id_jadwaltry='$jadwal' and j.nilai='4' and j.nomor>='121' and j.nomor<='180'");
	$mq=mysql_fetch_array($oq);
	$benar1=$mq['benar'];
	

	$o2q=mysql_query("select count(nilai) as kosong from jwb_soal j, jadwaltry jd, data_siswa d where  j.id_siswa=d.id_siswa and j.id_siswa='$siswa' and jd.id_jadwaltry='$jadwal' and j.nilai='0' and j.nomor>='121' and j.nomor<='180'");
	$m2q=mysql_fetch_array($o2q);
	$kosong1=$m2q['kosong'];

	$o1q=mysql_query("select count(nilai) as salah from jwb_soal j, jadwaltry jd, data_siswa d where  j.id_siswa=d.id_siswa and j.id_siswa='$siswa' and jd.id_jadwaltry='$jadwal' and j.nilai='-1' and j.nomor>='121' and j.nomor<='180'");
	$m1q=mysql_fetch_array($o1q);
	$salah1=$m1q['salah'];

	$jawab2=(60-$kosong1);
	$nilbenar1=($benar1*4);
	$nilsalah1=($salah1*(-1));

	$nilai2=($nilbenar1+$nilsalah1);
	
	if($nilai2<=79)
	{
		$ket1="TL";
	}
	else
	{
		$ket1="L";
	}
	
	$totnilai=$nilai1+$nilai2;

	if($ket=="L" && $ket1=="L")
	{
		$totket='Lulus Nilai Mati';
	}
	else
	{
		$totket='Nilai Mati';
	}

$nm=mysql_query("select * from hasil where id_siswa='$siswa' and id_jadwaltry='$jadwal'");
$hg=mysql_fetch_array($nm);
$tj=$hg['id_hasil'];
	$s=mysql_query("update hasil set bi_jawab='$jawab2' ,bi_benar='$benar1' ,
bi_salah='$salah1',
bi_kosong='$kosong1',
bi_nilai='$nilai2',
bi_ket='$ket1',
total_nilai='$totnilai',
total_ket='$totket' where id_hasil='$tj'");

	?>
	<script>
     
     document.location.href='index.php?p=nilai.php&siswa=<?php echo $siswa; ?>&jadwal=<?php echo $jadwal; ?>'
     </script>