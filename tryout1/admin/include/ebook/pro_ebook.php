<?php
	include 'include/koneksi.php';
$judul = $_REQUEST['judul'];
$desk = $_REQUEST['berita'];
$checkBox = $_POST['Days'];
$now = date("Y-m-d");
 
$target_dir = "upload/";
 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

 if($judul !="") {

      if($target_dir)
      {
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
       
            if($imageFileType != "pdf")
            {
                echo "File Format Not Suppoted";
            } 

             
            else
            {
              for ($i=0; $i<sizeof($checkBox); $i++)
             {
                  $video_path=$_FILES['fileToUpload']['name'];
                   
                  $s=mysql_query("INSERT INTO ebook (tgl, judul, ebook, deskripsi, stats) 
                        VALUES ('$now','$judul','$target_file','$desk','$checkBox[$i]')") or die (mysql_error());
                   
                  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
                   
                   echo "<script>
                        document.location.href='index.php?p=ebook/tam_ebook.php'
                        </script>";
            }
             
            }
      }
}
 
 else {
      echo "<script>
      alert('inputan anda gagal');
      document.location.href='index.php?p=ebook/tam_ebook.php'
      </script>";
} ?>