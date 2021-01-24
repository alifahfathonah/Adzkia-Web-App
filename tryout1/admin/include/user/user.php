<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Daftar User Baru</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=user/pro_user.php">
    
      <div class="box-body"> 
        <div class="form-group">
          <label>Username</label>
          <input required type="text" name="username" class="form-control" autocomplete="off" placeholder="username">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input required type="text" name="password" class="form-control" autocomplete="off" placeholder="password">
        </div>
      </div>
      <div class="box-footer">
        
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
      </div>
    </form>
  </div>
</div>