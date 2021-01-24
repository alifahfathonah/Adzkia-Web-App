<?php
	include'../koneksi.php';
$id = $_REQUEST['id'];
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

if ($user!=="" && $pass!="") {
	$sql = mysql_query("INSERT INTO user (id_siswa,username,password,status) VALUES('$id','$user','$pass','siswa') ");
	$w=mysql_query("select * from data_siswa where id_siswa='$id'");
	$y=mysql_fetch_array($w);
	$email=$y['email'];
	echo $email;
}
?>