<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Kategori Soal</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=tryout/cat/pro_cat.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
        
       
        <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="tujuan">
            <option value="tpa">TPA</option>
            <option value="bi">Bahasa Inggris</option>
          </select>
        </div>
        <div class="form-group">
          <label>Nama Kategori</label>
          <input required type="text" name="nama" class="form-control">
        </div>
      </div>
      <div class="box-footer">
        <button type="reset" class="btn btn-primary" onclick=self.history.back()>Kembali</button>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>