<?php
  $kantor=$_SESSION['kantor'];
  $siswa=$_REQUEST['siswa'];
   $paket=$_REQUEST['paket'];
  include 'include/koneksi.php';
  
?><div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Pilih Kelas</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Nama Ruangan</th>
            <th>Gelombang</th>
            <th>Jumlah Tampung</th>
            <th>Jumlah Siswa</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM kelas k inner join ruangan r on k.id_ruangan=r.id_ruangan inner join gelombang g on k.id_gel=g.id_gel inner join paket p on k.id_paket=p.id_paket inner join tahun_ajaran ta on k.id_ta=ta.id_ta where ta.status='aktif' GROUP BY k.id_paket ");
          while ($ambil = mysql_fetch_array($mysql)) {
           
            $id_kelas = $ambil['id_kelas'];
            $id_ruangan = $ambil['id_ruangan'];
            $nama_kelas = $ambil['nama_kelas'];
            $nama_gelombang = $ambil['nama_gel'];
            $nama_ruangan = $ambil['nama_ruangan'];
            $jumlah_ruangan = $ambil['jumlah_ruangan'];
            $jumlah_siswa = $ambil['jumlah_siswa'];
            $totsis = $ambil['totsis'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama_kelas; ?></td>
            <td><?php echo $nama_ruangan; ?></td>
            <td><?php echo $nama_gelombang; ?></td>
            <td><?php echo $jumlah_ruangan; ?></td>
            <td><?php echo $jumlah_siswa; ?></td>
         
            <td><?php echo "
                      <a class='glyphicon glyphicon-plus' href=\"include/siswa/pro_inputkelas.php?siswa=$siswa&kelas=$id_kelas&kantor=$kantor\" data-toggle='tooltip' data-placement='top' title='Tambahkan'></a>
                "; ?> 
            </td>
          
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>