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
            <th>Status</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $id=$_REQUEST['edit'];
          $mysql = mysql_query("select *, sum(nilai) as ni from jwb_try j, data_siswa d where  j.id_siswa=d.id_siswa and j.id_jadwaltry='$id' group by j.id_siswa");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];
            $nilai = $ambil['ni'];
            if($nilai<6)
            {
              $status="Gagal";
            }
            else
            {
              $status="Lulus";
            }
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $nilai; ?></td>
            <td><?php echo $status; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=tryout/nilai/lihat.php&lihat=$id_siswa&jd=$id\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>