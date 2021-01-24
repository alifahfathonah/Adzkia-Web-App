<?php
  $regis = $_REQUEST['reg'];
  include 'include/koneksi.php';
  $mysql = mysql_query("SELECT * FROM data_siswa WHERE kd_reg = '$regis' ");
  $sql = mysql_fetch_array($mysql);
  $nama = $sql['nama'];
?>
<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">KONFIRMASI PEMBAYARAN</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?psg=confirm/pro_confirm.php" enctype="multipart/form-data">
      <input type="hidden" name="kd" value="<?php echo $regis; ?>">
      <div class="box-body"> 
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input required type="text" name="nama" class="form-control" autocomplete="off" value="<?php echo $nama; ?>" disabled>
        </div>
        <div class="form-group">
          <label>Bank Asal</label>
          <input required type="text" name="bank" class="form-control" autocomplete="off" placeholder="Bank">
        </div>
        <div class="form-group">
          <label>No Rekening</label>
          <input required type="text" name="no_rek" class="form-control" autocomplete="off" placeholder="Nomor Rekening">
        </div>
        <div class="form-group">
          <label>Nominal</label>
          <input type="text" name="nominal" class="form-control" autocomplete="off" placeholder="Nominal">
        </div>
        <div class="form-group">
          <label>Tujuan</label>
          <select class="form-control" name="tujuan">
            <option value="Tujuan 1">Tujuan 1</option>
            <option value="Tujuan 2">Tujuan 2</option>
            <option value="Tujuan 3">Tujuan 3</option>
            <option value="Tujuan 4">Tujuan 4</option>
            <option value="Tujuan 5">Tujuan 5</option>
          </select>
        </div>
      </div>
      <div class="box-footer">
        <button type="reset" class="btn btn-primary" onclick=self.history.back()>Kembali</button>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>