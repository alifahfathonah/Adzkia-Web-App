<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Soal</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="form-group">
        <a href="?p=tryout/soal/soalgambar.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Jadwal Tryout</th>
            <th>Judul Soal</th>
            <th>Kategori Soal</th>
            <th>Pilihan A</th>
            <th>Pilihan B</th>
            <th>Pilihan C</th>
            <th>Pilihan D</th>
            <th>Pilihan E</th>
            <th>Kunci Jawaban</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM soal_try s, cat_try c, jadwaltry j where s.id_catt=c.id_catt and s.id_jadwaltry=j.id_jadwaltry and s.status='gambar'");
          while ($ambil = mysql_fetch_array($mysql)) {
            $jadwal = $ambil['id_jadwaltry'];
            $id_soal = $ambil['id_soaltry'];
            $nama_catt = $ambil['nama_catt'];
            $soal = $ambil['soal'];
            $pil1 = $ambil['pilihan1'];
            $pil2 = $ambil['pilihan2'];
            $pil3 = $ambil['pilihan3'];
            $pil4 = $ambil['pilihan4'];
            $pil5 = $ambil['pilihan5'];
            $kunci = $ambil['kunci'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $jadwal; ?></td>
            <td><?php echo $soal; ?></td>
            <td><?php echo $nama_catt; ?></td>
            <td><?php echo $pil1; ?></td>
            <td><?php echo $pil2; ?></td>
            <td><?php echo $pil3; ?></td>
            <td><?php echo $pil4; ?></td>
            <td><?php echo $pil5; ?></td>
            <td><?php echo $kunci; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=tryout/soal/del_soalgambar.php&del=$id_soal\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=tryout/soal/edit_soalgambar.php&edit=$id_soal\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>