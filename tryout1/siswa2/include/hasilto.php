<div class="box-isi-content">
  <div class="waktu">
    <h2>
     Hasil Tryout
    </h2>
  </div>
  <h3><a>Isi Pertanyaan Di Bawah Ini....</a></h3>
  <br><form action="include/kosakata_proses.php" method="post">

  <div class="isi_soal">
    <table border="1" cellspacing="0" cellpadding="10">
     <tr>
          <td>No.</td>
          <td>Nama.</td>
          <td>Nilai</td>
          <td>Hasil</td>

        </tr>
    <?php include "include/koneksi.php";

       $r=1;
      
         $i="SELECT * from hasil h,jadwaltry j, data_siswa s where h.id_jadwaltry=j.id_jadwaltry and h.id_siswa=s.id_siswa ";

        $s = mysql_query($i);
        ?><?php
        while ($w=mysql_fetch_array($s))
        {  
        ?>
          <td><?php echo $r; ?></td>
          <td><?php echo $w['nama_siswa']; ?></td>
          <td><?php echo $w['total']; ?></td>
          <td><?php echo $w['status']; ?></td>

        <?php 
       
     }
     ?>
        
    </table>
  </div>
  </form>
</div>