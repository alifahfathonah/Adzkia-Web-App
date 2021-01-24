<?php
include '../koneksi.php';
if(isset($_POST["submit"]))
{
	 $file = $_FILES['file']['tmp_name'];
	 $handle = fopen($file, "r");
	 $c = 0;
	 while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
	 {
		 $nis = $filesop[0];
		 $tgl = $filesop[1];
		 $nama_kuis = $filesop[2];
		 $nilai_kuis = $filesop[3];

		 
		 $sql = mysql_query("INSERT INTO kuis (nis, tgl_kuis, nama_kuis, nilai_kuis) VALUES ('$nis','$tgl','$nama_kuis','$nilai_kuis')");
	 }
	 
	 if($sql){
 echo "<script>
     
     document.location.href='../../?p=nilai/tam_kuis.php'
      </script>";
 }
 else{
 
 echo "<script>
     alert('Sorry! There is some problem.');
     document.location.href='../../?p=nilai/tam_kuis.php'
      </script>";
 }
}
?>