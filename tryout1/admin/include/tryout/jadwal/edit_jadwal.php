<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Edit Jadwal Tryout</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=tryout/jadwal/pro_edit_jadwal.php" enctype="multipart/form-data">
     <?php
        include 'include/koneksi.php';
        $tangkap = $_REQUEST['edit'];
        $sql = mysql_query("SELECT * FROM jadwaltry WHERE id_jadwaltry ='$tangkap' ");
        while ($ambil = mysql_fetch_array($sql)) {
          $id_jadwal = $ambil['id_jadwaltry'];
          $nama = $ambil['nama_jadwal'];
          $tgl = $ambil['tanggal'];
          $waktu = $ambil['waktu'];
     ?>
      <div class="box-body"> 
        <input type="hidden" name="id" value="<?php echo $id_jadwal; ?>">
        <div class="form-group">
          <label>Nama Tryout</label>
          <input required type="text" name="jadwal" class="form-control"  value="<?php echo $nama; ?>">
        </div>
         <div class="form-group">
          <label>Tanggal</label>
          <input required type="text" name="tgl" class="form-control datepicker"  value="<?php echo $tgl; ?>">
        </div>
         <div class="form-group">
          <label>Jam</label>
          <input required type="text" name="waktu" class="form-control"  value="<?php echo $waktu; ?>">
        </div>
      </div>
      <div class="box-footer">
        <button type="reset" class="btn btn-primary" onclick=self.history.back()>Kembali</button>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php } ?>
    </form>
  </div>
</div>