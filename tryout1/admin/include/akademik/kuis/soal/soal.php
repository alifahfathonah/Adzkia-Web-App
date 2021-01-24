<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Soal</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=akademik/kuis/soal/pro_soal.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
        
       
        <div class="form-group">
          <label>Category</label>
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
          <label>Soal</label>
          <input required type="text" name="soal" class="form-control">
        </div>
         <div class="form-group">
          <label>Pilihan A</label>
          <input required type="text" name="a" class="form-control">
        </div>
         <div class="form-group">
          <label>Pilihan B</label>
          <input required type="text" name="b" class="form-control">
        </div>
         <div class="form-group">
          <label>Pilihan C</label>
          <input required type="text" name="c" class="form-control">
        </div>
         <div class="form-group">
          <label>Pilihan D</label>
          <input required type="text" name="d" class="form-control">
        </div>
         <div class="form-group">
          <label>Kunci Jawaban</label>
          <input required type="text" name="kunci" class="form-control">
        </div>

      </div>
      <div class="box-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>