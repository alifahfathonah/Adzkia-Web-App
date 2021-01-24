<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Konfirmasi</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Bank Asal</th>
            <th>No Rekening</th>
            <th>Nominal</th>
            <th>Tujuan</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM confirmasi INNER JOIN data_siswa ON confirmasi.kd_reg=data_siswa.kd_reg");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];
            $bank = $ambil['bank_asal'];
            $norek = $ambil['no_rek'];
            $nomi = $ambil['nominal'];
            $tujuan = $ambil['tujuan'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $bank; ?></td>
            <td><?php echo $norek; ?></td>
            <td><?php echo $nomi; ?></td>
            <td><?php echo $tujuan; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=siswa/del_siswa.php&del=$id_siswa\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
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