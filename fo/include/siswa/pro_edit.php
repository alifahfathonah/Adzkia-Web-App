<?php 
session_start();
	include'include/koneksi.php';
$id_siswa = $_REQUEST['id'];
$nama = $_REQUEST['nama'];
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

if(isset($_POST['submit'])){
    if($_SESSION['captcha']===$_POST['captcha']){
	$sup = mysql_query("UPDATE data_siswa SET nama = '$nama',
											email = '$email',
											tgl = '$ttl',
											tempat_lahir = '$ttl1',
											jk = '$jk',
											agama = '$agama',
											anak_ke = '$anak',
											asal_sekolah = '$asal',
											alamat = '$alamat',
											tlpon = '$tlpn',
											fb = '$fb',
											bbm = '$pin',
											nama_ortu = '$nama_ortu',
											tlpn_ortu = '$tlpn_ortu',
											pekerjaan = '$pekerjaan',
											pil_program = '$program',
											info_lain = '$info'
											WHERE id_siswa ='$id_siswa' ");
		echo "<script>
			alert('Data Berhasil Di Edit');
			document.location.href='?p=siswa/tam_siswa.php'
		</script>";
	} else {
		echo "<script>
			alert('Data Gagal Di Edit');
			document.location.href='?p=siswa/edit.php&edit=$id_siswa'
		</script>";
	}
} else {
	echo "<script>
		alert('Data Kosong');
		document.location.href='?p=siswa/edit.php&edit=$id_siswa'
	</script>";
}

?>