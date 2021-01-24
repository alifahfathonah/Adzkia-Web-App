<!-- DATA SISWA -->
<div class="col-md-12 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Video</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=video/pro_video.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
      <div class="form-group">
          <label>Kategori</label>
          <select class="form-control" name="cat">
          <?php 
          include "include/koneksi.php";
          $a=mysql_query("select * from cat");
          while($q=mysql_fetch_array($a))

          { ?>
          <option value="<?php echo $q['id_cat']; ?>"><?php echo $q['nama_cat']; ?></option>
          <?php }
          ?>
            
          </select>
        </div>
        
        <div class="form-group">
          <label>Judul</label>
           <input required type="text" name="judul" class="form-control">
        </div>
      

       <div class="form-group">
          <label>File Video</label>
           <input required type="file" name="fileToUpload" class="form-control">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
           <textarea name="berita"></textarea>
        </div>

      </div>
      <div class="box-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>