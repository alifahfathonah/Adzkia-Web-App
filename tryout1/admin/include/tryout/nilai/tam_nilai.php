<?php $id=$_REQUEST['id']; 
?><div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Nilai</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="form-group">
        <a href="include/tryout/nilai/print_cetak.php?id=<?php echo $id; ?>">
          <button type="submit" class="btn btn-primary tambah">Cetak</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Nilai</th>
            <th>Status</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          
          $mysql = mysql_query("select * from hasil h, data_siswa d where h.id_siswa=d.id_siswa and h.id_jadwaltry='$id'");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];
            $nilai = $ambil['total_nilai'];

            $ket = $ambil['total_ket'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $nilai; ?></td>
            <td><?php echo $ket; ?></td>
            
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>