<?php
session_start();
include "include/koneksi.php";

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

if($username && $password)
{
	$query=mysql_query("select * from user where username='$username' AND password='$password'");
	$data=mysql_fetch_array($query);
	$id_user=$data["id_user"];
	$namauser=$data["nama_user"];
	$user=$data["username"];
	$passw=$data["password"];
	$status=$data["status"];
	
	if($username==$user && $password==$passw)
	{
		$_SESSION['id_user']=$id_user;
		$_SESSION['nama_user']=$namauser;
		$_SESSION['status']=$status;
		$_SESSION['login']="login";
		if($status=="siswa")
		{
			header("location:siswa/index.php");
		}
		elseif($status=="admin"){
			header("location:admin/index.php");
		}
		else{
			header("location:siswaluar/index.php");
		}
	}
	else
	{
		header("location:index.php?mess=Username dan Pasword tidak cocok");
	}
}
else
{
	header("location:index.php?mess=isi username dan password");
}


?>