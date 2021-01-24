<?php
  $kantor=$_SESSION['kantor'];
  
  include 'include/koneksi.php';
  
?>
<!-- DATA ruangan -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Ruangan Kelas</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="include/ruangan/pro_ruangan.php" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $kantor; ?>">
      <div class="box-body">   
      <div class="form-group">
          <label>PILIHAN PROGRAM</label>
          <div class="radio">
            <label>
              <input type="radio" name="program" id="optionsRadios1" value="reguler" checked>
              Reguler &nbsp;
            </label>
            <label>
              <input type="radio" name="program" id="optionsRadios1" value="intensif">
              Intensif &nbsp; 
            </label>
          </div>
        </div>     
        <div class="form-group">
          <label>Nama ruangan</label>
          <input required type="text" name="ruangan" class="form-control">
        </div>
         <div class="form-group">
          <label>Jumlah Tampung</label>
          <input required type="text" name="jumlah" class="form-control">
        </div>

       
      </div>
      <div class="box-footer">
     
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>