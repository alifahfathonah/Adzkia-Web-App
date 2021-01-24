<?php
session_start();
  include '../koneksi.php';

  $id=$_REQUEST['id']; 
$nama_file = $_FILES['gambar']['name'];
//echo $nama_file;
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "../../images/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png")
{ 
	if($ukuran_file <= 1000000)
	{ 
	  
		if(move_uploaded_file($tmp_file, $path))
		{ 
		      
			$query =mysql_query("update data_siswa set  gambar='$nama_file' where id_siswa='$id'");   
			echo "<script>
		     
		      document.location.href='../../index.php?p=siswa/siswa.php'
		      </script>";    		            
			 
		}
		else
		{           
			
			echo "<script>
		     alert('Maaf, Gambar gagal untuk diupload.');
		      document.location.href='../../index.php?p=siswa/siswa.php'
		      </script>";    
		}  
	}
	else
	{    // Jika ukuran file lebih dari 1MB, lakukan :    
		echo "<script>
		     alert('Ukuran Gambar tidak boleh dari 1mb');
		      document.location.href='../../index.php?p=siswa/siswa.php'
		      </script>"; 
	}
}
else
{  
	echo "<script>
		     alert('Maaf, Gambar yang di upload harus format jpeg atau png.');
		      document.location.href='../../index.php?p=siswa/siswa.php'
		      </script>"; 
}
?>