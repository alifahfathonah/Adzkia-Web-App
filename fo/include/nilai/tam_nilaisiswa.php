<?php  
session_start();
$kantor=$_SESSION['kantor'];
 ?>
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
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM data_siswa d inner join tahun_ajaran ta on d.id_ta=ta.id_ta where ta.status='aktif' and d.id_kantor='$kantor' ");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];
            $ttl1 = $ambil['pil_program'];
            $ttl = $ambil['pil_kelas'];
            $jk = $ambil['jk'];
            $alamat = $ambil['alamat'];
             $telp = $ambil['tlpon'];
            $agama = $ambil['agama'];
            $nominal = $ambil['nominal'];
            $tujuan = $ambil['tujuan'];
            $nis = $ambil['nis'];
            $status = $ambil['status'];
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
           
            <td><?php echo "
                      <a class='glyphicon glyphicon-file' href=\"?p=nilai/nilai_siswa.php&id=$nis\" data-toggle='tooltip'></a>
                "; ?>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
