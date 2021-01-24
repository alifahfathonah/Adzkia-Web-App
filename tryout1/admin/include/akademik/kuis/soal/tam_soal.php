<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Soal</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="form-group">
        <a href="?p=akademik/kuis/soal/soal.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul Soal</th>
            <th>Kategori Soal</th>
            <th>Pilihan A</th>
            <th>Pilihan B</th>
            <th>Pilihan C</th>
            <th>Pilihan D</th>
            <th>Kunci Jawaban</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM soal_kuis INNER JOIN mapel ON soal_kuis.id_mapel=mapel.id_mapel");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_soal = $ambil['id_soalkuis'];
            $nama_mapel = $ambil['nama_mapel'];
            $soal = $ambil['soal'];
            $pil1 = $ambil['pilihan1'];
            $pil2 = $ambil['pilihan2'];
            $pil3 = $ambil['pilihan3'];
            $pil4 = $ambil['pilihan4'];
            $kunci = $ambil['kunci'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $soal; ?></td>
            <td><?php echo $nama_mapel; ?></td>
            <td><?php echo $pil1; ?></td>
            <td><?php echo $pil2; ?></td>
            <td><?php echo $pil3; ?></td>
            <td><?php echo $pil4; ?></td>
            <td><?php echo $kunci; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=akademik/soal/del_soal.php&del=$id_soal\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=akademik/soal/edit_soal.php&edit=$id_soal\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>