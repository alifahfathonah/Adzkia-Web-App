<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List Siswa</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
   
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
             <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>No.HP</th>
            <th>Sisa Pembayaran</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'include/koneksi.php';
            $kelas=$_REQUEST['kelas'];
            $mysql = mysql_query("SELECT * FROM data_siswa d inner join setruang s on d.id_siswa=s.id_siswa inner join kelas k on s.id_kelas=k.id_kelas where k.id_kelas='$kelas' ");
            while ($ambil = mysql_fetch_array($mysql)) {
            $no++;
              $id_siswa = $ambil['id_siswa'];
              $nama = $ambil['nama'];
              $ttl1 = $ambil['pil_program'];
              $ttl = $ambil['pil_kelas'];
              $jk = $ambil['jk'];
              $alamat = $ambil['alamat'];
               $telp = $ambil['tlpon'];
              $agama = $ambil['agama'];
              $nominal = $ambil['nominal'];
              $nis = $ambil['nis'];
              $bank = $ambil['bank_asal'];
              $status = $ambil['status'];
              $sisapembayaran = $ambil['sisapembayaran'];
              number_format($sisapembayaran,2,".",",");
              if ($sisapembayaran=='0') {
                echo "
                  <tr>
                    <td>$no</td>
                    <td>$nis</td>
                    <td>$nama</td>
                    <td>$jk</td>
                    <td>$telp</td>
                    <td>Rp.$sisapembayaran</td>
                   
                    <td>
                        <a class='glyphicon glyphicon-trash hapus' href='?p=jadwal/del_lihat.php&del=$id_siswa' data-toggle='tooltip' data-placement='top' title='Delete'></a>
                    </td>
                  </tr>
                ";
              } else {
                echo "
                  <tr style='background: red;'>
                    <td>$no</td>
                    <td>$nis</td>
                    <td>$nama</td>
                    <td>$jk</td>
                    <td>$telp</td>
                    <td>Rp.$sisapembayaran</td>
                   
                    <td>
                        <a class='glyphicon glyphicon-trash hapus' href='?p=jadwal/del_lihat.php&del=$id_siswa' data-toggle='tooltip' data-placement='top' title='Delete'></a>
                    </td>
                  </tr>
                ";              
              }
            }
          ?>
        </tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
