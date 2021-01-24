<?php
	include '../koneksi.php';

$tgl = $_REQUEST['tgl'];
$kantor = $_REQUEST['kantor'];
$kelas = $_REQUEST['kelas'];
$namakuis = $_REQUEST['namakuis'];
$siswa=1;
$kuis=1;

$sql=mysql_query("SELECT * FROM data_siswa d inner join setruang s on d.id_siswa=s.id_siswa inner join kelas k on s.id_kelas=k.id_kelas where k.id_kelas='$kelas'");
$u=mysql_num_rows($sql);
//echo $u;

	$i=1;
	while($i<=$u)
	{
		$siswa="siswa$i";
		$siswa=$_REQUEST[$siswa];

		$kuis="kuis$i";
		$kuis=$_REQUEST[$kuis];

		//echo $i;
	$sql = mysql_query("INSERT INTO kuis (id_siswa, tgl_kuis, nama_kuis, nilai_kuis) VALUES ('$siswa','$tgl','$namakuis','$kuis')");
		$i++;
	}
      echo "<script>
     
     // document.location.href='../../?p=nilai/tam_kuis.php'
      </script>";

?>