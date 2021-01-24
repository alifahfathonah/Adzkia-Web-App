<?php 
$id=$_REQUEST['li'];
include "include/koneksi.php";
$sq=mysql_query("select * from wacana where id_wacana='$id'");
$tt=mysql_fetch_array($sq);
$jenis=$tt['jenis'];
?>
<div class="col-md-8 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Soal</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=tryout/soal/pro_soalwacana.php" enctype="multipart/form-data">
     
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
          <input required type="text" name="soal" class="form-control">
          <input type="hidden" name="id1" class="form-control" value="<?php echo $id; ?>">
          <input type="hidden" name="jenis" class="form-control" value="<?php echo $jenis; ?>">
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
          <label>Pilihan E</label>
          <input required type="text" name="e" class="form-control">
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