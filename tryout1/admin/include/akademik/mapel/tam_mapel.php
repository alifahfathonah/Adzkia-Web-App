<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Kategori</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="form-group">
        <a href="?p=akademik/mapel/mapel.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kategory</th>
            <th>Nama Mata Pelajaran</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM mapel m, jenis_catt j where m.id_jeniscatt=j.id_jeniscatt");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_cat = $ambil['id_mapel'];
            $nama_jenis = $ambil['nama_jeniscatt'];
            $nama = $ambil['nama_mapel'];
          ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama_jenis; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=akademik/mapel/del_mapel.php&del=$id_mapel\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=akademik/mapel/edit_mapel.php&edit=$id_mapel\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>  