<?php
	include '../koneksi.php';

$n=mysql_query("select * from tahun_ajaran where status='aktif'");
$e=mysql_fetch_array($n);
$g=$e['id_ta'];

$kelas = $_REQUEST['kelas'];
$kantor = $_REQUEST['kantor'];
$ruangan = $_REQUEST['ruangan'];
$paket = $_REQUEST['paket'];
$gelombang = $_REQUEST['gelombang'];
$hari = $_REQUEST['hari'];
$nomor = $_REQUEST['nomor'];
$prog = $_REQUEST['prog'];
$checkBox = $_POST['Days'];
$hasil1=strlen($nomor);

if($hasil1==1)
      {
            $to1="0".$nomor;
      }
      else
      {
            $to1=$nomor;
      }


if ($paket !="") {

  $sql = mysql_query("INSERT INTO kelas (id_paket, id_ruangan, id_gel, nama_kelas,jumlah_siswa, id_kantor, id_ta,nomorkelas) VALUES ('$paket','$ruangan','$gelombang','$kelas','0','$kantor','$g','$to1')");
	 for ($i=0; $i<sizeof($checkBox); $i++)
     {
	// $sql = mysql_query("INSERT INTO kelas (id_paket, id_hari, id_ruangan, id_gel, nama_kelas,jumlah_siswa, id_kantor, id_ta,nomorkelas) VALUES ('$paket','$checkBox[$i]','$ruangan','$gelombang','$kelas','0','$kantor','$g','$to1')");

   $my=mysql_insert_id();
   $sql1 = mysql_query("INSERT INTO setkelas (id_kelas,id_hari,prog) VALUES ('$my','$checkBox[$i]','$prog')");
     	//echo $checkBox[$i];
 	 }
     echo "<script>
     
     document.location.href='../../?p=jadwal/tam_jadwal.php'
   </script>";
} else {  
      echo "< script>
  alert('Input anda gagal');
  document.location.href='../../index.php?p=jadwal/tam_jadwal.php'
   </script>";
}
?>