<?php  
session_start();
$kantor=$_SESSION['kantor']; ?>
<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Kelas Reguler</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
    
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Jadwal/Hari</th>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jum'at</th>
            <th>Sabtu</th>
            <th>Minggu</th>
            
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
         ?>
        <tbody>

       <!-- mulai perulangan untuk jadwal dan ruang   -->
       <?php
       $jadwal=mysql_query("select * from ruangan where id_kantor='$kantor'");

       while ($jadwal1=mysql_fetch_array($jadwal))
       {
$id_ruang=$jadwal1[id_ruangan];
       
       ?>
          <tr>
            <td >Ruangan <?php echo $jadwal1[nama_ruangan]; ?></td>
            <?php //perulangan hari
            $hari=1;
            while ($hari<=7)
            { ?>

            

              <td>
              <table id="example1" class="table table-bordered table-striped" >

               <?php //Cek kelas pagi
              $pagi=mysql_query("select * from kelas,hari,gelombang,ruangan,setkelas  
                where setkelas.id_hari=hari.id_hari 
                and kelas.id_gel=gelombang.id_gel 
                and kelas.id_ruangan=ruangan.id_ruangan 
                and kelas.id_kelas=setkelas.id_kelas 
                and hari.id_hari='$hari' 
                and gelombang.id_gel='1'
                and ruangan.id_ruangan=$id_ruang and setkelas.prog='Reguler' and ruangan.id_kantor='$kantor'");
              $pagi1=mysql_fetch_array($pagi);
              ?>
                <tr>
                <td><?php if ($pagi1==true){echo $pagi1[nama_kelas];} 
                          else { echo "KOSONG";}?></td></tr>
                

            <?php //Cek kelas siang 
              $siang=mysql_query("select * from kelas,hari,gelombang,ruangan,setkelas  
                where setkelas.id_hari=hari.id_hari 
                and kelas.id_gel=gelombang.id_gel 
                and kelas.id_ruangan=ruangan.id_ruangan 
                and kelas.id_kelas=setkelas.id_kelas 
                and hari.id_hari='$hari' 
                and gelombang.id_gel='2'
                and ruangan.id_ruangan=$id_ruang and setkelas.prog='Reguler' and ruangan.id_kantor='$kantor'");
              $siang1=mysql_fetch_array($siang);
              ?>
                <tr>
                <td><?php if ($siang1==true){echo $siang1[nama_kelas];} 
                          else { echo "KOSONG";}?></td></tr>
                

              <?php //Cek kelas sore
              $sore=mysql_query("select * from kelas,hari,gelombang,ruangan,setkelas  
                where setkelas.id_hari=hari.id_hari 
                and kelas.id_gel=gelombang.id_gel 
                and kelas.id_ruangan=ruangan.id_ruangan 
                and kelas.id_kelas=setkelas.id_kelas 
                and hari.id_hari='$hari' 
                and gelombang.id_gel='3'
                and ruangan.id_ruangan=$id_ruang and setkelas.prog='Reguler' and ruangan.id_kantor='$kantor'");
              $sore1=mysql_fetch_array($sore);
              ?>
                <tr>
                <td><?php if ($sore1==true){echo $sore1[nama_kelas];} 
                          else { echo "KOSONG";}?></td></tr>
                </table>
              </td>

            <?php 
            $hari++; } ?>
          </tr>

          <?php } ?>
        </tbody>
        
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>