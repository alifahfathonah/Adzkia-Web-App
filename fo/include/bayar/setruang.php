<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar Siswa Yang Belum Dapat Ruangan</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>No.HP</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM data_siswa ");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];
            $jk = $ambil['jk'];
            $telp = $ambil['tlpon'];
            $status = $ambil['status'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $jk; ?></td>
            <td><?php echo $telp; ?></td>
                     
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=siswa/edit.php&edit=$id_siswa\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
