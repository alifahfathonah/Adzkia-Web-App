<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Kelas</h3>
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
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM data_siswa d inner join setruang s on d.id_siswa=s.id_siswa inner join kelas k on s.id_kelas=k.id_kelas inner join ruangan r on k.id_ruangan=r.id_ruangan inner join gelombang g on k.id_gel=g.id_gel GROUP BY k.id_kelas ");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $id_kelas = $ambil['id_kelas'];
            $id_ruangan = $ambil['id_ruangan'];
            $nama_kelas = $ambil['nama_kelas'];
            $nama_gelombang = $ambil['nama_gel'];
            $nama_ruangan = $ambil['nama_ruangan'];
            $jumlah_ruangan = $ambil['jumlah_ruangan'];
            $totsis = $ambil['totsis'];
            $program = $ambil['program'];
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama_kelas; ?></td>
            <td><?php echo $nama_ruangan; ?></td>
            <td><?php echo $nama_gelombang; ?></td>
             <td><?php echo $jumlah_ruangan; ?></td>
         
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit hapus' href=\"?p=nilai/kuis.php&kelas=$id_kelas\" data-toggle='tooltip' data-placement='top' title='Input'></a>
                "; ?> 
            </td>
          
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
