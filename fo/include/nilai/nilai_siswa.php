<?php  
session_start();
$kantor=$_SESSION['kantor'];
 ?>
<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Detail Kuis Siswa</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
   <?php  include 'include/koneksi.php';
   $id = $_REQUEST['id'];
   
          $no++;
          $mysql = mysql_query("SELECT *
FROM kuis k
INNER JOIN data_siswa d ON k.nis = d.nis
WHERE d.nis = '$id' and d.id_kantor='$kantor'");

          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];
            $nilai_kuis = $ambil['nilai_kuis'];
            $nama_kuis = $ambil['nama_kuis'];
            $nama_kelas = $ambil['nama_kelas'];

          }

    ?>
   <table id="example1" class="table table-bordered table-striped">
   <tr>
   <td> Nama: <?php echo $nama ?></td>   
   </tr>
   
   <tr>
              <th>Tanggal</th>
              <th>Nama Kuis</th>
              <th>Nilai Kuis</th>
            </tr>
   <?php 
     $mysql1 = mysql_query("SELECT *
FROM kuis k
INNER JOIN data_siswa d ON k.nis = d.nis
WHERE d.nis = '$id' and d.id_kantor='$kantor'");

          while ($ambil1 = mysql_fetch_array($mysql1)) {
            $id_siswa1 = $ambil1['id_siswa'];
            $nama1 = $ambil1['nama'];
            $tgl = $ambil1['tgl_kuis'];
            $nilai_kuis1 = $ambil1['nilai_kuis'];
            $nama_kuis1 = $ambil1['nama_kuis'];
            $nama_kelas1 = $ambil1['nama_kelas'];

            ?>
            <tr>
              <td><?php echo $tgl; ?> </td>
              <td><?php echo $nama_kuis1; ?></td>
              <td><?php echo $nilai_kuis1; ?></td>
            </tr>
            <?php
          }
   ?>
        
        <tr>
        <th colspan="2">Jumlah Absen
        </th>
        <td>
        <?php
        $pp=mysql_query("SELECT count( nilai_kuis ) AS absen, nama
FROM kuis k
INNER JOIN data_siswa d ON k.nis = d.nis
WHERE d.nis = '$id'
AND k.nilai_kuis = 'A' and d.id_kantor='$kantor'
GROUP BY d.nis ");
        $jk=mysql_fetch_array($pp);
        echo $jk['absen'];
        ?>
        </td>
        </tr>
    </table>
<a href="include/nilai/cetak.php?id=<?php echo $id; ?>">Cetak</a>
      
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
