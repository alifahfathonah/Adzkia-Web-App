<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Kelas</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
     <div class="form-group">
        <a href="?p=jadwal/jadwal.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Paket</th>
            <th>Jadwal Hari</th>
            <th>Nama Kelas</th>
            <th>Nama Ruangan</th>
            <th>Gelombang</th>
            <th>Kapasitas</th>
            <th>Jumlah Siswa</th>
            <th>Tahun Ajaran</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'include/koneksi.php';
            $no++;
            $mysql = mysql_query("SELECT * FROM kelas k inner join ruangan r on k.id_ruangan=r.id_ruangan inner join gelombang g on k.id_gel=g.id_gel inner join paket p on k.id_paket=p.id_paket inner join tahun_ajaran ta on k.id_ta=ta.id_ta where ta.status='aktif' GROUP BY k.id_paket ");
            while ($ambil = mysql_fetch_array($mysql)) {
              $id_siswa = $ambil['id_siswa'];
              $id_kelas = $ambil['id_kelas'];
              $id_paket = $ambil['id_paket'];
              $id_ruangan = $ambil['id_ruangan'];
              $nama_kelas = $ambil['nama_kelas'];
               $nama_hari = $ambil['nama_hari'];
              $nama_paket = $ambil['nama_paket'];
              $nama_gelombang = $ambil['nama_gel'];
              $nama_ruangan = $ambil['nama_ruangan'];
              $jumlah_ruangan = $ambil['jumlah_ruangan'];
              $ta = $ambil['ta'];
              $jumlah_siswa = $ambil['jumlah_siswa'];
              $totsis = $ambil['totsis'];
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama_paket; ?></td>
            <td><?php echo $nama_hari; ?></td>
            <td><?php echo $nama_kelas; ?></td>
            <td><?php echo $nama_ruangan; ?></td>
            <td><?php echo $nama_gelombang; ?></td>
            <td><?php echo $jumlah_ruangan; ?></td>
            <td><?php echo $jumlah_siswa; ?></td>
          <td><?php echo $ta; ?></td>
         
           
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=jadwal/lihat.php&kelas=$id_kelas\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>