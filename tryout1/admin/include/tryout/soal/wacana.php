<!-- DATA SISWA -->
<div class="col-md-8 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Wacana/Penalaran</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=tryout/soal/pro_wacana.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
        
         <div class="form-group">
          <label>Jenis Soal</label>
          <select class="form-control" name="jenis">
         <option value="8">Wacana</option>
         <option value="9">Penalaran</option>
          </select>
        </div>
        <div class="form-group">
          <label>Nama Soal</label>
          <textarea name="wacana"></textarea>
        </div>
        

      </div>
      <div class="box-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>