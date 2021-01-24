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
		 $nama_hasil = $filesop[2];
		 $tpa_jawab = $filesop[3];
		 $tpa_benar = $filesop[4];
		 $tpa_salah = $filesop[5];
		 $tpa_kosong = $filesop[6];
		 $tpa_nilai = $filesop[7];
		 $tpa_ket = $filesop[8];
		 $bi_jawab = $filesop[9];
		 $bi_benar = $filesop[10];
		 $bi_salah = $filesop[11];
		 $bi_kosong = $filesop[12];
		 $bi_nilai = $filesop[13];
		 $bi_ket = $filesop[14];
		 $total_nilai = $filesop[15];
		 $total_ket = $filesop[16];

		 
		 $sql = mysql_query("INSERT INTO hasil (
nis ,
tgl_hasil ,
nama_hasil ,
tpa_jawab ,
tpa_benar ,
tpa_salah ,
tpa_kosong ,
tpa_nilai ,
tpa_ket ,
bi_jawab ,
bi_benar ,
bi_salah ,
bi_kosong ,
bi_nilai ,
bi_ket ,
total_nilai ,
total_ket ) VALUES ('$nis','$tgl','$nama_hasil','$tpa_jawab' ,'$tpa_benar','$tpa_salah','$tpa_kosong','$tpa_nilai','$tpa_ket','$bi_jawab','$bi_benar','$bi_salah','$bi_kosong','$bi_nilai','$bi_ket','$total_nilai','$total_ket' )");
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