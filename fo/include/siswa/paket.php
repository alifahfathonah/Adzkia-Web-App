<?php
  $kantor=$_SESSION['kantor'];
  
  include 'include/koneksi.php';
  
?>
<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Paket Kelas</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="include/siswa/pro_paket.php" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $kantor; ?>">
      <div class="box-body">        
        <div class="form-group">
          <label>Nama Paket</label>
          <input required type="text" name="paket" class="form-control">
        </div>
         <div class="form-group">
          <label>Biaya Paket</label>
          <input required type="text" name="biaya" class="form-control">
        </div>
         <div class="form-group">
          <label>Nomor Paket</label>
          <input required type="text" name="nomor" class="form-control">
        </div>

       
      </div>
      <div class="box-footer">
     
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>