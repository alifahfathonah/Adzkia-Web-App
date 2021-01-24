<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Informasi</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
     <div class="form-group">
        <a href="?p=info/info.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Deskripsi</th>

            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM info");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_info = $ambil['id_info'];
            $tgl = $ambil['tanggal'];
            $judul = $ambil['judul'];
            $deskripsi = $ambil['Deskripsi'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo date('d-m-Y', strtotime($tgl)); ?></td>
            <td><?php echo $judul; ?></td>
            <td><?php echo $deskripsi; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=info/del_info.php&del=$id_info\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=info/edit.php&edit=$id_info\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>