<?php
	include 'include/koneksi.php';
$video = $_REQUEST['fileToUpload'];
$judul = $_REQUEST['judul'];
$cat = $_REQUEST['cat'];
$desk = $_REQUEST['berita'];
$now = date("Y-m-d");
 
$target_dir = "video/";
 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

 if($judul !="") {

      if($target_dir)
      {
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
       
            if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
            {
                echo "File Format Not Suppoted";
            } 

             
            else
            {
             
            $video_path=$_FILES['fileToUpload']['name'];
             
            $s=mysql_query("INSERT INTO video (id_cat,tgl,judul_video,video,deskripsi) 
                  VALUES ('$cat','$now','$judul','$target_file','$desk')") or die (mysql_error());
             
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
             
             echo "<script>
                  document.location.href='index.php?p=video/video.php'
                  </script>";
             
            }
      }
}
 
 else {
      echo "<script>
      alert('inputan anda gagal');
      document.location.href='index.php?p=video/video.php'
      </script>";
} ?>