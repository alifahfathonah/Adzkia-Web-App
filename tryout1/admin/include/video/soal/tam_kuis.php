<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Soal</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kategori Video</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM video");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_video = $ambil['id_video'];
            $nama_video = $ambil['judul_video'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama_video; ?></td>
            
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=video/soal/tam_soal.php&lihat=$id_video\" data-toggle='tooltip' data-placement='top' title='Lihat'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>