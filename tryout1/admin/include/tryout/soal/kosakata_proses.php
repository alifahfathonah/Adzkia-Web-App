<?php
	include 'include/koneksi.php';

	$q=1;
	
	$id_jadwal=$_REQUEST['jadwal'];
	$id_catt=$_REQUEST['id_catt'];
	
	$soal="soal$q";
	$soal = $_REQUEST['soal'];

	$a="a$q";
	$a = $_REQUEST['a'];

	$b="b$q";
	$b = $_REQUEST['b'];

	$c="c$q";
	$c = $_REQUEST['c'];

	$d="d$q";
	$d = $_REQUEST['d'];

	$kunci="kunci$q";
	$kunci = $_REQUEST['kunci'];

	while($q<=5)
	{
		$s=mysql_query("insert into soal_try(id_jadwaltry, id_catt,soal,pilihan1,pilihan2,pilihan3,pilihan4) values ('$id_jadwal','$id_catt','$soal','$a','$b','$c','$d','$kunci')");
	}

	?>