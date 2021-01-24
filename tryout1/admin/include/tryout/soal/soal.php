<!-- DATA SISWA -->
<div class="col-md-8 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Soal</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=tryout/soal/pro_soal.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
        
        <div class="form-group">
          <label>Jadwal Tryout</label>
          <select class="form-control" name="jadwal">
          <?php 
          include "include/koneksi.php";
          $q=mysql_query("select * from jadwaltry");
          while($w=mysql_fetch_array($q))
          {

           ?>
            <option value="<?php echo $w['id_jadwaltry']; ?>"><?php echo $w['nama_jadwal']; ?></option>
            <?php  }  ?>
          </select>
        </div>

      <?php
      $g=1; 
      while($g<=16){

        ?>
      <div class="form-group">
       <label>Upload</label>
       <input type="file" name="fileToUpload<?php echo $g; ?>">
      </div>
      <?php $g++; 
      }  ?>
      </div>
      <div class="box-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>