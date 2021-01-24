<!-- DATA SISWA -->
<div class="col-md-8 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Kosakata</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=tryout/soal/kosakata_proses.php" enctype="multipart/form-data">
     
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
        <div class="form-group">
          <label>Category</label>
          <select class="form-control" name="id_catt">
          <?php 
          include "include/koneksi.php";
          $q=mysql_query("select * from cat_try");
          while($w=mysql_fetch_array($q))
          {

           ?>
            <option value="<?php echo $w['id_catt']; ?>"><?php echo $w['nama_catt']; ?></option>
            <?php  }  ?>
          </select>
        </div>
        <?php 
        $h=1;
        while($h<=5)
        { ?>
        <div class="form-group">
          <label><h2>Soal No. <?php echo $h; ?></h2></label>
          <input required type="text" name="soal<?php echo $q ?>" class="form-control">
        </div>
         <div class="form-group">
          <label>Pilihan A</label>
          <input required type="text" name="a<?php echo $q ?>" class="form-control">
        </div>
         <div class="form-group">
          <label>Pilihan B</label>
          <input required type="text" name="b<?php echo $q ?>" class="form-control">
        </div>
         <div class="form-group">
          <label>Pilihan C</label>
          <input required type="text" name="c<?php echo $q ?>" class="form-control">
        </div>
         <div class="form-group">
          <label>Pilihan D</label>
          <input required type="text" name="d<?php echo $q ?>" class="form-control">
        </div>
         <div class="form-group">
          <label>Kunci Jawaban</label>
          <input required type="text" name="kunci<?php echo $q ?>" class="form-control">
        </div>
         <?php $h++; } ?>
      </div>
     
      <div class="box-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>