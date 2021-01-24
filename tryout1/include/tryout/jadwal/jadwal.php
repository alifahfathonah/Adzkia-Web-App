<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Jadwal Tryout</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=tryout/jadwal/pro_jadwal.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
        
       
        <div class="form-group">
          <label>Nama Tryout</label>
          <input required type="text" name="jadwal" class="form-control">
        </div>
         <div class="form-group">
          <label>Tanggal</label>
          <input required type="text" name="tgl" class="form-control">
        </div>
         <div class="form-group">
          <label>Jam</label>
          <input required type="text" name="waktu" class="form-control">
        </div>
      </div>
      <div class="box-footer">
        <button type="reset" class="btn btn-primary" onclick=self.history.back()>Kembali</button>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>