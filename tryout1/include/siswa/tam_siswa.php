<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data siswa</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No.Hp</th>
            <th>Nominal</th>
            <th>Tujuan Transfer</th>
            <th>Program</th>
            <th>Kelas</th>
            <th>Status</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM data_siswa INNER JOIN confirmasi ON data_siswa.kd_reg=confirmasi.kd_reg");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];
            $ttl1 = $ambil['pil_program'];
            $ttl = $ambil['pil_kelas'];
            $jk = $ambil['jk'];
 $tlpon= $ambil['tlpon'];
            $alamat = $ambil['alamat'];
            $agama = $ambil['agama'];
            $nominal = $ambil['nominal'];
            $tujuan = $ambil['tujuan'];
            $bank = $ambil['bank_asal'];

        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $jk; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $bank; ?></td>
            <td><?php echo $nominal; ?></td>
            <td><?php echo $tlpon; ?></td>
            <td><?php echo $ttl1; ?></td>
            <td><?php echo $ttl; ?></td>
            <td>    
              <button type="submit" name="submit" class="btn btn-primary status">Tidak Aktif</button>
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-file' href=\"?p=siswa/detail_siswa.php&deta=$id_siswa\" data-toggle='tooltip'></a>
                "; ?>
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=siswa/del_siswa.php&del=$id_siswa\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=siswa/edit.php&edit=$id_siswa\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>