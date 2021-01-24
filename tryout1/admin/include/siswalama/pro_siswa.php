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
$alamat_ortu = $_REQUEST['alamat_ortu'];
$tlpn_ortu = $_REQUEST['tlpn_ortu'];
$pekerjaan = $_REQUEST['pekerjaan'];
$almpeker = $_REQUEST['almpeker'];
$program = $_REQUEST['program'];
$kelas = $_REQUEST['kelas'];
$info = $_REQUEST['info_lain'];

$to=$email;
$subject="Terima Kasih";

$messages="
<h2>Terima kasih <?php echo $nama; ?>  sudah mendaftar di Adzkia </h2>
Nomor Registrasi Anda : <?php echo $kd ?><br>
Silahkan melakukan pembayaran sebesar Rp.500.000,- ke rekening mandiri kami<br>
Nomor Rekening: 854689754522<br>
Atas Nama: Dhani<br>
Setelah melakukan pembayaran, mohon untuk lakukan konfirmasi ke link berikut ini.
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Adzkia STAN <noreply@adzkiastan.com>'."\r\n" . 'Reply-To: '.$nama.' <'.$email.'>'."\r\n";
@mail($to,$subject,$messages,$headers);


if(isset($_POST['submit'])){
    if($_SESSION['captcha']===$_POST['captcha']){

		$sql = mysql_query("INSERT INTO data_siswa (kd_reg, nama, email, tgl, tempat_lahir, jk, agama, anak_ke, asal_sekolah, alamat, tlpon, fb, bbm, nama_ortu, alamat_ortu, tlpn_ortu, pekerjaan, alamat_pekerjaan, pil_program, pil_kelas, info_lain) 
      VALUES ('$kd', '$nama', '$email', '$ttl', '$ttl1', '$jk', '$agama', '$anak', '$asal', '$alamat', '$tlpn', '$fb', '$pin', '$nama_ortu', '$alamat_ortu', '$tlpn_ortu', '$pekerjaan', '$almpeker', '$program', '$kelas', '$info')") or die (mysql_error());
//        jika kode captcha benar
      echo "<script>
          document.location.href='?psg=done.php&reg=$kd'
        </script>";
    }else{
//        jika kode captcha salah
      echo "<script>
          alert('Pendaftaran Anda Gagal');
          document.location.href='index.php'
        </script>";
    }
} else {
    echo "<script>
        alert('Isi Form');
        document.location.href='../../'
      </script>";
}
?>