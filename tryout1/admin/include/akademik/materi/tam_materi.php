<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Kategori</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="form-group">
        <a href="?p=akademik/materi/materi.php">
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
          $mysql = mysql_query("SELECT * FROM materi m, mapel j where m.id_mapel=j.id_mapel");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_cat = $ambil['id_materi'];
            $nama_mapel = $ambil['nama_mapel'];
            $nama = $ambil['nama_materi'];
          ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama_mapel; ?></td>
            <td><?php echo $nama; ?></td>
            
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=akademik/materi/del_materi.php&del=$id_materi\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=akademik/materi/edit_materi.php&edit=$id_materi\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>  