<!-- DATA SISWA -->
<div class="col-md-12 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Informasi</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=info/pro_info.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
        
        <div class="form-group">
          <label>Judul</label>
           <input required type="text" name="berita" class="form-control">
        </div>
      
        <div class="form-group">
          <label>Deskripsi</label>
           <textarea name="desk"></textarea>
        </div>

      </div>
      <div class="box-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>