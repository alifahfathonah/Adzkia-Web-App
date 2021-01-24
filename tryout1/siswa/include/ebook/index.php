<div class="col-md-8 box-content">
  <div class="toptitle">
    <p>download ebook</p>
  </div>
  <div class="box-isi-content">
  <?php

  include "include/koneksi.php";
  $user=$_SESSION['id_user'];
  $status=$_SESSION['status'];

  $p=mysql_query("select *, u.status as st from user u, data_siswa d where u.id_siswa=d.id_siswa and u.id_user='$user' and u.status='$status'");
  $u=mysql_fetch_array($p);
  $siswa=$u['id_siswa'];
  //echo $siswa;

   $s=mysql_query("select * from ebook where stats='siswa'"); 
  $y=mysql_num_rows($s);

  function TanggalIndo($date){
  	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
   
  	$tahun = substr($date, 0, 4);
  	$bulan = substr($date, 5, 2);
  	$tgl   = substr($date, 8, 2);
   
  	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;		
  	return($result);
  }

  if($y<1)
  {
    echo "Maaf, Anda tidak memiliki Ebook untuk di Download";
  }
  else
  {


   ?><h2>Download Ebook</h2>
    <table id="example1" class="table table-bordered table-striped">
    <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Judul</th>
              <th>Download</th>
        </tr>
    <?php
  while($q=mysql_fetch_array($s))
  { $no++;

   ?>
   	 
  	<tr>
              <th><?php echo $no; ?></th>
               <th><?php echo TanggalIndo($q['tgl']); ?></th>
              <th><?php echo $q['judul']; ?></th>
              <th><a href="../admin/<?php echo $q['ebook']; ?>"><img src="../img/file.png" width="30px" height="30px"></th>
      </tr>

  <?php  
  } 

  ?>
   </table>
   <?php } ?>
  </div>
</div>