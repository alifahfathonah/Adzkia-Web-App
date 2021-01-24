<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data User</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
    <div class="form-group">
        <a href="?p=user/user.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Username</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM user where status='admin'");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_user = $ambil['id_user'];
            $username = $ambil['username'];
            $password = $ambil['password'];
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $username; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=user/del_user.php&del=$id_user\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=user/edit_user.php&edit=$id_user\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>