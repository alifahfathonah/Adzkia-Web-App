<!-- DATA SISWA -->
<?php
$jadwal=$_REQUEST['jadwal'];
$id_catt=$_REQUEST['id_catt'];
$jenis=$_REQUEST['jenis'];
$wacana=$_REQUEST['wacana'];

?>

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