<!-- DATA SISWA -->
<div class="col-md-12 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Materi Pelajaran</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=akademik/materi/pro_materi.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
              
        <div class="form-group">
          <label>Mata Pelajaran</label>
          <select class="form-control" name="mapel">
          <?php 
          include "include/koneksi.php";
          $q=mysql_query("select * from mapel");
          while($w=mysql_fetch_array($q))
          {

           ?>
            <option value="<?php echo $w['id_mapel']; ?>"><?php echo $w['nama_mapel']; ?></option>
            <?php  }  ?>
          </select>
        </div>
        <div class="form-group">
          <label>Nama Materi Pelajaran</label>
          <input required type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label>Video Materi Pelajaran</label>
          <input required type="file" name="video" >
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea name="isi"></textarea>
        </div>
      </div>
      <div class="box-footer">
        
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>