<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Edit Soal</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=tryout/soal/pro_edit_soalwacana.php" enctype="multipart/form-data">
     <?php
        include 'include/koneksi.php';
        $tangkap = $_REQUEST['edit'];
        $sql = mysql_query("SELECT * FROM soal_try WHERE id_soaltry ='$tangkap' ");
        while ($ambil = mysql_fetch_array($sql)) {
          $jadwal = $ambil['id_jadwaltry'];
          $id_soal = $ambil['id_soaltry'];
          $nama_catt = $ambil['nama_catt'];
          $soal = $ambil['soal'];
          $pil1 = $ambil['pilihan1'];
          $pil2 = $ambil['pilihan2'];
          $pil3 = $ambil['pilihan3'];
          $pil4 = $ambil['pilihan4'];
          $kunci = $ambil['kunci'];
     ?>
      <div class="box-body"> 
        <input required type="text" name="id" value="<?php echo $id_soal; ?>">
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
        <div class="form-group">
          <label>Soal</label>
          <input required type="text" name="soal" class="form-control" value="<?php echo $soal; ?>">
        </div>
         <div class="form-group">
          <label>Pilihan A</label>
          <input required type="text" name="a" class="form-control" value="<?php echo $pil1; ?>">
        </div>
         <div class="form-group">
          <label>Pilihan B</label>
          <input required type="text" name="b" class="form-control" value="<?php echo $pil2; ?>">
        </div>
         <div class="form-group">
          <label>Pilihan C</label>
          <input required type="text" name="c" class="form-control" value="<?php echo $pil3; ?>">
        </div>
         <div class="form-group">
          <label>Pilihan D</label>
          <input required type="text" name="d" class="form-control" value="<?php echo $pil4; ?>">
        </div>
         <div class="form-group">
          <label>Kunci Jawaban</label>
          <input required type="text" name="kunci" class="form-control" value="<?php echo $kunci; ?>">
        </div>

      </div>
      <div class="box-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    <?php } ?>
    </form>
  </div>
</div>