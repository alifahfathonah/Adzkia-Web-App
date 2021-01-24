<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Detail Kuis Siswa</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
   <?php  include 'include/koneksi.php';
   $id = $_REQUEST['id'];
   
          $no++;
          $mysql = mysql_query("SELECT * FROM hasil h inner join data_siswa d on h.id_siswa=d.id_siswa where d.id_siswa='$id'");

          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];

          }

    ?>
   <table id="example1" class="table table-bordered table-striped">
   <tr>
   <td> Nama: <?php echo $nama ?></td>   
   </tr>
   
   <tr>
              <th>Tanggal</th>
              <th>Nama Tryout</th>
              <th>Nilai Tryout</th>
            </tr>
   <?php 
     $mysql1 = mysql_query("SELECT * FROM hasil h inner join data_siswa d on h.id_siswa=d.id_siswa where d.id_siswa='$id'");

          while ($ambil1 = mysql_fetch_array($mysql1)) {
            $id_hasil = $ambil1['id_hasil'];
            $nama1 = $ambil1['nama_hasil'];
            $tgl = $ambil1['tgl_hasil'];

              $nama_hasil = $ambil1['nama_hasil'];
              $tpa_jawab = $ambil1['tpa_jawab'];
              $tpa_benar = $ambil1['tpa_benar'];
              $tpa_salah = $ambil1['tpa_salah'];
              $tpa_kosong = $ambil1['tpa_kosong'];
              $tpa_nilai = $ambil1['tpa_nilai'];
              $tpa_ket = $ambil1['tpa_ket'];
              $bi_jawab = $ambil1['bi_jawab'];
              $bi_benar = $ambil1['bi_benar'];
               $bi_salah = $ambil1['bi_salah'];
               $bi_kosong = $ambil1['bi_kosong'];
               $bi_nilai = $ambil1['bi_nilai'];
               $bi_ket = $ambil1['bi_ket'];
               $total_nilai = $ambil1['total_nilai'];
               $total_ket = $ambil1['total_ket'];
                       ?>
            <tr>
              <td><?php echo $tgl; ?> </td>
              <td><?php echo $nama_hasil; ?></td>
              <td><?php echo $total_nilai; ?></td>
            </tr>
            <?php
          }
   ?>
        
    </table>
<a href="include/nilai/cetak.php?id=<?php echo $id; ?>">Cetak</a>
      
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
