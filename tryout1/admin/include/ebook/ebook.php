<!-- DATA SISWA -->
<div class="col-md-12 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Ebook</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=ebook/pro_ebook.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
      
        
        <div class="form-group">
          <label>Judul</label>
           <input required type="text" name="judul" class="form-control">
        </div>
      

       <div class="form-group">
          <label>File</label>
           <input required type="file" name="fileToUpload" class="form-control">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
           <textarea name="berita"></textarea>
        </div>
         <div class="form-group">
          <label>Pilih Hari</label><br>
         
                  <input type="checkbox"  name="Days[]" value="siswa" id="fancy-checkbox-primary"> Siswa<br>
                  <input type="checkbox"  name="Days[]" value="siswaluar" id="fancy-checkbox-primary"> Siswa Luar<br>
                  <input type="checkbox"  name="Days[]" value="siswabaru" id="fancy-checkbox-primary"> Siswa Baru<br>
                
              
            </div>
      </div>
      <div class="box-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>