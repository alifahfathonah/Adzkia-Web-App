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
			$nilai="-1";
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
		$s=mysql_query("insert into jwb_soal(id_soalbaru,id_siswa,nomor,jwb,kunci,nilai) values ('$soal','$siswa','$nomor','$kunci','$jawab','$nilai')") or die (mysql_error());
	$q++;
	}

// echo "<script>
     
  //    document.location.href='?p=tryout/soal/nilai.php'
  //    </script>";
	?>