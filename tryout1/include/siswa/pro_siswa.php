<?php
session_start();
	include 'include/koneksi.php';

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


$query1 = mysql_query("SELECT MAX(kd_reg) AS kd_reg FROM data_siswa");
        $kd1 = mysql_fetch_array($query1); //pecah data ke dalam array
        $newkode = $kd1['kd_reg'];
        $ao=1;
        $new=$newkode+$ao; //kode max ditambah 1 agar jadi kode baru
        $io=$new;
$query2 = mysql_query("SELECT email FROM data_siswa where email='$email'");
        $kd2 = mysql_fetch_array($query2);
        $email1 = $kd2['email']; 

if(isset($_POST['submit'])){
    if($email1==$email)
    {
       echo "<script>
        alert('Data anda sudah ada di database Adzkia, Mohon tunggu untuk aktivasi akun anda. Aktivasi akun kami kirim ke email anda. Terima kasih');
        document.location.href='index.php'
      </script>";
      
    }
    else
    {

		$sql = mysql_query("INSERT INTO data_siswa (tgl_daftar,kd_reg, nama, email, tgl, tempat_lahir, jk, agama, anak_ke, asal_sekolah, alamat, tlpon, fb, bbm, nama_ortu, tlpn_ortu, pekerjaan, pil_program, pil_kelas, info_lain,status) 
      VALUES (sysdate(),'$io', '$nama', '$email', '$ttl', '$ttl1', '$jk', '$agama', '$anak', '$asal', '$alamat', '$tlpn', '$fb', '$pin', '$nama_ortu', '$tlpn_ortu', '$pekerjaan', '$program', '$kelas', '$info','new')") or die (mysql_error());
$to=$email;
$subject="Terima Kasih";

$messages="
<font color=red size=6 >Nomor Registrasi Anda :".$kd."</font><h2>Terima kasih sudah mendaftar di Adzkia </h2>
<br>Silahkan melakukan pembayaran sebesar Rp.500.000,- ke rekening kami<br>
Bank: Mandiri<br>
Nomor Rekening: 106.001.1096.958<br>
Atas Nama: Widia Astuti<br>
Setelah melakukan pembayaran, mohon untuk lakukan konfirmasi ke link berikut ini 
http://adzkiastan.com/?psg=confirm.php<br><br>
Informasi lebih lanjut hubungi ADZKIA STAN<br>
Jl.Kangkung No.24 A-B<br>
Telp: (061)456-1280

";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Adzkia STAN <noreply@adzkiastan.com>'."\r\n" . 'Reply-To: '.$nama.' <'.$email.'>'."\r\n";
@mail($to,$subject,$messages,$headers);


//        jika kode captcha benar
      echo "<script>
          document.location.href='?psg=siswa/done.php&reg=$io'
        </script>";
}
   
} else {
    echo "<script>
        alert('Isi Form');
        document.location.href='index.php'
      </script>";
}
?>