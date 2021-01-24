<?php
session_start();
  include '../koneksi.php';
$kantor=$_SESSION['kantor'];
$kd = $_REQUEST['kd'];
$nama = $_REQUEST['nama'];
$email = $_REQUEST['email'];
$ttl = $_REQUEST['ttl'];
$ttl1 = $_REQUEST['ttl1'];
$jk = $_REQUEST['jk'];
$agama = $_REQUEST['agama'];
$anak = $_REQUEST['anak'];
$asal = $_REQUEST['asal'];
$alamat = $_REQUEST['alamat'];
$tlpn = $_REQUEST['tlpn'];
$fb = $_REQUEST['fb'];
$pin = $_REQUEST['pin'];
$nama_ortu = $_REQUEST['nama_ortu'];
//$alamat_ortu = $_REQUEST['alamat_ortu'];
$tlpn_ortu = $_REQUEST['tlpn_ortu'];
$pekerjaan = $_REQUEST['pekerjaan'];
//$almpeker = $_REQUEST['almpeker'];
$program = $_REQUEST['program'];
$kelas = $_REQUEST['kelas'];
$info = $_REQUEST['info_lain'];
$ta = $_REQUEST['ta'];

$ty=mysql_query("select * from tahun_ajaran where id_ta='$ta'");
$re=mysql_fetch_array($ty);
$de=$re['ta'];

$tahun= substr($de, 2,2);

$query1 = mysql_query("SELECT MAX(kd_reg) AS kd_reg FROM data_siswa");
        $kd1 = mysql_fetch_array($query1); //pecah data ke dalam array
        $newkode = $kd1['kd_reg'];
        $ao=1;
        $new=$newkode+$ao; //kode max ditambah 1 agar jadi kode baru
        $io=$new;
$query2 = mysql_query("SELECT email FROM data_siswa where email='$email'");
        $kd2 = mysql_fetch_array($query2);
        $email1 = $kd2['email']; 
   
if($nama!="")
{
    $sql = mysql_query("INSERT INTO data_siswa (id_kantor,kd_reg, nama, email, tgl, tempat_lahir, jk, agama, anak_ke, asal_sekolah, alamat, tlpon, fb, bbm, nama_ortu, tlpn_ortu, pekerjaan, pil_program, id_paket, info_lain,status,tgl_daftar,gambar,id_ta,tahun,nis,sisapembayaran) 
      VALUES ('$kantor','$io', '$nama', '$email', '$ttl', '$ttl1', '$jk', '$agama', '$anak', '$asal', '$alamat', '$tlpn', '$fb', '$pin', '$nama_ortu', '$tlpn_ortu', '$pekerjaan', '$program', '$kelas', '$info','new',sysdate(),'','$ta','$tahun','','')") or die (mysql_error());

      $my=mysql_insert_id();


echo "<script>
        
        document.location.href='../../index.php?p=siswa/inputbayar.php&id=$my'
      </script>";
}
?>