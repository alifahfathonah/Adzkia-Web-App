<?php
	include'../koneksi.php';
$id = $_REQUEST['id'];
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

if ($user!=="" && $pass!="") {
	$sql = mysql_query("INSERT INTO user (id_siswa,username,password,status) VALUES('$id','$user','$pass','siswa') ");
  $yy=mysql_query("select * from user order by id_user DESC");
	$uu=mysql_fetch_array($yy);
	$idd=$uu['id_user'];
	$w=mysql_query("select * from data_siswa d, user u where d.id_siswa=u.id_siswa and u.id_user='$idd'");
	$y=mysql_fetch_array($w);

	$email=$y['email'];
	$username=$y['username'];
	$password=$y['password'];
	$to=$email;
	$subject="Terima Kasih";

	$edit=mysql_query("update data_siswa set status='aktif' where id_siswa='$id'");

$messages="
<h2>Terima kasih sudah mendaftar di Adzkia. Berikut Username dan Password anda </h2>
Username :".$username."<br>
Password : ".$password."<br>
Gunakan username dan password anda untuk login ke aplikasi Adzkia Tryout Online.
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Adzkia STAN <noreply@adzkiastan.com>'."\r\n" . 'Reply-To: '.$nama.' <'.$email.'>'."\r\n";
@mail($to,$subject,$messages,$headers);
}
?>