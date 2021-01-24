<?php
  
  include 'include/koneksi.php';
 
?>
<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">KONFIRMASI PEMBAYARAN</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?psg=pro_confirm.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
        <div class="form-group">
          <label>Nomor Registrasi</label>
          <input required type="text" name="kd" class="form-control" autocomplete="off" placeholder="Nomor Registrasi" >
        </div>
        <div class="form-group">
          <label>Bank Asal Anda</label>
          <input required type="text" name="bank" class="form-control" autocomplete="off" placeholder="Bank">
        </div>
        <div class="form-group">
          <label>No Rekening Anda</label>
          <input required type="text" name="no_rek" class="form-control" autocomplete="off" placeholder="Nomor Rekening">
        </div>
        <div class="form-group">
          <label>Nominal</label>
          <input type="text" name="nominal" class="form-control" autocomplete="off" placeholder="Nominal">
        </div>
        <div class="form-group">
          <label>Tujuan</label>
          <select class="form-control" name="tujuan">
          <option value="Mandiri">Mandiri 106.001.1096.958 a.n Widia Astuti</option>
          </select>
        </div>
      </div>
      <div class="box-footer">
        
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>