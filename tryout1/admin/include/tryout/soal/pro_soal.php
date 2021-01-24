<?php
include 'include/koneksi.php';
$jadwal=$_REQUEST['jadwal'];
$uploaded=$_REQUEST['uploaded'];
$target_dir = "upload/";
 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if(isset($_POST['submit']))
{
  $t=1;
  while($t<=16)
  {
  $fileToUpload="fileToUpload$t";

  $target_dir = "upload/"; 
  $target_file = $target_dir . basename($_FILES[$fileToUpload]["name"]);
   if($target_dir)
      {
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
       
            if($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png")
            {
                echo "File Format Not Suppoted";
            } 
            else
            {
             
            $video_path=$_FILES[$fileToUpload]['name'];
                       
            $sql = mysql_query("INSERT INTO soalbaru (id_jadwaltry,soal,nomor) VALUES ('$jadwal','$target_file','$t')") or die (mysql_error());
            
             move_uploaded_file($_FILES[$fileToUpload]["tmp_name"],$target_file);

            
            }
     }
     $t++;
  }
  
                echo "<script>
                  document.location.href='?p=tryout/soal/kunci.php&jadwal=$jadwal'
                  </script>";
} 

else {
      echo "<script>
      alert('Inputan anda gagal');
      document.location.href='?p=tryout/soal/soal.php'
      </script>";
}

?>
