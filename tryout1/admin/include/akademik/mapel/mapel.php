<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Mata Pelajaran</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=akademik/mapel/pro_mapel.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
              
        <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="catt">
          <?php 
          include "include/koneksi.php";
          $q=mysql_query("select * from jenis_catt");
          while($w=mysql_fetch_array($q))
          {

           ?>
            <option value="<?php echo $w['id_jeniscatt']; ?>"><?php echo $w['nama_jeniscatt']; ?></option>
            <?php  }  ?>
          </select>
        </div>
        <div class="form-group">
          <label>Nama Mata Pelajaran</label>
          <input required type="text" name="nama" class="form-control">
        </div>
      </div>
      <div class="box-footer">
        
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>