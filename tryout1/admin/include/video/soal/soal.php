<!-- DATA SISWA -->
<div class="col-md-8 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Soal</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=video/soal/pro_soal.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
        
       <input type="hidden" name="video" value="<?php $id=$_REQUEST['id']; echo $id; ?>">
      
         <div class="form-group">
          <label>Soal</label>
           <textarea name="soal"></textarea>
        </div>
         <div class="form-group">
          <label>Pilihan A</label>
          <textarea name="a" ></textarea>
        </div>
         <div class="form-group">
          <label>Pilihan B</label>
          <textarea name="b" ></textarea>
        </div>
         <div class="form-group">
          <label>Pilihan C</label>
          <textarea name="c" ></textarea>
        </div>
         <div class="form-group">
          <label>Pilihan D</label>
          <textarea name="d" ></textarea>
        </div>
         <div class="form-group">
          <label>Pilihan E</label>
         <textarea name="e" ></textarea>
        </div>
         <div class="form-group">
          <label>Kunci Jawaban</label>
          <input required type="text" name="kunci" class="form-control">
        </div>

      </div>
      <div class="box-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>