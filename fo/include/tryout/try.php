<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Soal</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="form-group">
        <a href="?p=tryout/soal/soal.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Nilai</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("select * from jwb_try j inner join data_siswa d on  j.id_siswa=d.id_siswa group by j.id_siswa");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_soal = $ambil['id_soaltry'];
            $nama = $ambil['nama'];
            $nilai = $ambil['nilai'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $nilai; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=tryout/soal/del_soal.php&del=$id_soal\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=tryout/soal/edit_soal.php&edit=$id_soal\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>