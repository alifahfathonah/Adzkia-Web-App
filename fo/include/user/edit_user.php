<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Edit User</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php 
      include 'include/koneksi.php';
      $id = $_REQUEST['edit'];
      $mysql = mysql_query("SELECT * FROM user where id_user='$id'");
      while ($ambil = mysql_fetch_array($mysql)) {
        $id_user = $ambil['id_user'];
        $username = $ambil['username'];
        $password = $ambil['password'];
    ?>
    <form role="form" method="post" action="?p=user/pro_user.php"> 
      <div class="box-body"> 
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $id_user; ?>">
          <label>Username</label>
          <input required type="text" name="username" class="form-control" autocomplete="off" placeholder="username" value="<?php echo "$username"; ?>">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input required type="password" name="password" class="form-control" autocomplete="off" placeholder="password" value="<?php echo $password; ?>">
        </div>
      </div>
      <div class="box-footer">
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
      </div>
    </form> 
    <?php } ?>
  </div>
</div>