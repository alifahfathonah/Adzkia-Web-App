
      <h3 class="box-title">Detail Kuis Siswa</h3>
  
   <?php  include '../koneksi.php';
   $id = $_REQUEST['id'];
   
          $no++;
          $mysql = mysql_query("SELECT * FROM kuis k inner join data_siswa d on k.id_siswa=d.id_siswa where d.id_siswa='$id'");

          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];
            $nilai_kuis = $ambil['nilai_kuis'];
            $nama_kuis = $ambil['nama_kuis'];
            $nama_kelas = $ambil['nama_kelas'];

          }

    ?>
   <table border="1" class="table table-striped table-striped table-bordered" width="960px">
   <tr>
   <td colspan="3"> Nama: <?php echo $nama ?></td>   
   </tr>
   
   <tr>
              <td>Tanggal</td>
              <td>Nama Kuis</td>
              <td>Nilai Kuis</td>
            </tr>
   <?php 
     $mysql1 = mysql_query("SELECT * FROM kuis k inner join data_siswa d on k.id_siswa=d.id_siswa where d.id_siswa='$id'");

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
        
    </table>
