<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Jadwal Tryout</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
     
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Tryout</th>
            <th>Jam</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM jadwaltry");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id = $ambil['id_jadwaltry'];
            $nama = $ambil['nama_jadwal'];
            $jam = $ambil['waktu'];
            $tgl = $ambil['tanggal'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo date('d-m-Y', strtotime($tgl)); ?></td>
            <td><?php echo $nama ?></td>
            <td><?php echo $jam; ?></td>
            
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=tryout/nilai/tam_nilai.php&id=$id\" data-toggle='tooltip' data-placement='top' title='Lihat'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>