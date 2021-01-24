<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Paket</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
    <div class="form-group">
        <a href="?p=siswa/paket.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Paket</th>
            <th>Biaya Paket</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'include/koneksi.php';
            $no++;
            $mysql = mysql_query("SELECT * FROM paket ");
            while ($ambil = mysql_fetch_array($mysql)) {
              $id_paket = $ambil['id_paket'];
              $nama_paket = $ambil['nama_paket'];
              $biaya_paket = $ambil['biaya_paket'];
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama_paket; ?></td>
            <td><?php echo $biaya_paket; ?></td>
            
            <td><?php echo "
                      <a class='glyphicon glyphicon-file' href=\"include/siswa/print_cetak.php?deta=$id_paket\" data-toggle='tooltip'></a>
                "; ?>
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=siswa/del_paket.php&del=$id_paket\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=siswa/edit_paket.php&edit=$id_paket\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>