<?php
	include 'include/koneksi.php';
	$jadwal=$_REQUEST['jadwal'];
	$q=1;
	//$jawab=1;
	
	while($q<=180)
	{
		$jawab="jawab$q";
		$jawab = $_REQUEST[$jawab];

		if($q>=1 && $q<=120)
		{
			$stat="tpa";
		}
		else
		{
			$stat="bi";
		}

		$s=mysql_query("insert into kunci(id_jadwaltry,nomor, kunci,status_soal) values ('$jadwal','$q','$jawab','$stat')");
	$q++;
	}

 echo "<script>
     
      document.location.href='?p=tryout/soal/soal.php'
      </script>";
	?>