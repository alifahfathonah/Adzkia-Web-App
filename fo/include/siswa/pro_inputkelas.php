<?php
	include '../koneksi.php';

$n=mysql_query("select * from tahun_ajaran where status='aktif'");
$e=mysql_fetch_array($n);
$ta=$e['id_ta'];

$kelas = $_REQUEST['kelas'];
$kantor = $_REQUEST['kantor'];
$siswa = $_REQUEST['siswa'];

$sz=mysql_query("select * from data_siswa where id_siswa='$siswa'");
$wq=mysql_fetch_array($sz);
$pro=$wq['pil_program'];
$paket=$wq['id_paket'];
$pro=$wq['pil_program'];

if($pro=="reguler")
{
      $pil="1";
}
else
{
      $pil="2";
}


if ($kelas !="") {
      $ww=mysql_query("select count(id_setruang) as total from setruang where id_kelas='$kelas'");
      $ui=mysql_fetch_array($ww);
      $tot=$ui['total'];
      $to=$tot+1;
      
	$sql = mysql_query("INSERT INTO setruang (id_siswa, id_kelas,id_kantor,id_ta,nourut) VALUES ('$siswa','$kelas','$kantor','$ta','$to')");
      $p=mysql_query("select * from kelas where id_kelas='$kelas'");
      $x=mysql_fetch_array($p);
      $jumlah=$x['jumlah_siswa'];
      $nomorkelas=$x['nomorkelas'];
     
      $tambah=$jumlah+1;
      $sql1 = mysql_query("update kelas set jumlah_siswa='$tambah' where id_kelas='$kelas'");

      $na=mysql_query("select * from kantor where id_kantor='$kantor'");
      $xs=mysql_fetch_array($na);
      $id_k=$xs['id_kantor'];

      $kk=mysql_query("select * from paket where id_paket='$paket'");
      $h=mysql_fetch_array($kk);
      $nom=$h['nom'];

      //lokasi,program,kelas,urutankelas,nomorsiswa

      $hasil1=strlen($to);

      //echo $hasil1;

      if($hasil1==1)
      {
            $to1="0".$to;
      }
      else
      {
            $to1=$to;
      }

      $nis=$id_k.$pil.$nom.$nomorkelas.$to1;

      $upd=mysql_query("update data_siswa set nis='$nis' where id_siswa='$siswa'");
echo "<script>
     
      document.location.href='../../?p=siswa/tam_siswa.php'
      </script>";

    
} else {
     echo "<script>
      alert('Input anda gagal');
      document.location.href='../../index.php?p=siswa/tam_siswa.php'
      </script>";
}
?>