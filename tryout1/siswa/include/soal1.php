<?php include "include/koneksi.php";
  $siswa=$_REQUEST['siswa'];
  $jadwal=$_REQUEST['jadwal']; 
  $date=date("Y-m-d H:i:s");
?>
<div class="col-md-8 box-content">
  <div class="col-sm-6 table-row1">
    <table>
      
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>Joko</td>
      </tr>
      
    </table>
  </div>
  <div class="col-sm-6 table-row2">
    <table>
      <tr>
        <td>Jumlah Soal</td>
        <td>:</td>
        <td>40</td>
      </tr>
    </table>
  </div>
</div>
<div class="col-md-3 box-right">
  <span>WAKTU : <font color="red" id="future_date"></font> 
    <?php
      $tt=mysql_query("select * from mulai where id_siswa='$siswa' and id_jadwaltry='$jadwal'");
      $rr=mysql_fetch_array($tt);
      ?>
      <script>
        $('#future_date').countdowntimer({
            startDate : "<?php echo $date ?>",
            dateAndTime : "<?php echo $rr['selesai']; ?>",
            size : "lg"
        });
        /*$(document).ready(function () {
          $("#future_date").click(function(){
              alert("The paragraph was clicked.");
          });
        });*/
      </script>
  </span>
</div>
<div class="col-md-8 text">
  <span class="jumsoal">Soal Tryout </span>
</div>
<div class="col-md-8 concen">
<?php $t=mysql_query("select * from soalbaru where id_jadwaltry='$jadwal'");
while($r=mysql_fetch_array($t))
{ ?>
  <img src="../admin/<?php echo $r['soal'] ?>" width="750px" height="1300px">
<?php
}

 ?>
</div>
<div class="col-md-3 box-sidebar">
  <form action="include/soal_proses.php" method="post">
  <table border="0" cellspacing="0" cellpadding="10">
  <input type="hidden" name="siswa" value="<?php echo $siswa; ?>"/>
    <input type="hidden" name="jadwal" value="<?php echo $jadwal; ?>"/>

     <?php 
    
        echo "<b>Soal</b>"; 
       $l=mysql_query("select * from kunci k where id_jadwaltry='$jadwal'");
       
       $soal=$u['id_soalbaru'];?>
       

       <?php   $r=1;
          
            while($u=mysql_fetch_array($l))
            {
            ?>

       <input type="hidden" name="soal" value="<?php echo $u['id_soalbaru']; ?>"/>
           <table border="1" width="300px"><tr>
           <td> <input type="hidden" class="minimal pilihan" value="<?php echo $u['nomor'];?>" name="nomor<?php echo $r ?>" ><?php echo $r ?></td> 
            
             <td> <input type="radio" class="minimal pilihan" value="A" name="jawab<?php echo $r; ?>" >A</td> 
            
             <input type="hidden" name="kunci<?php echo $r ?>" value="<?php echo $u['kunci']; ?>"/>
            <td>  <input type="radio" class="minimal pilihan" value="B"  name="jawab<?php echo $r; ?>">B</td>
            
            
            <td>  <input type="radio" class="minimal pilihan" value="C" name="jawab<?php echo $r; ?>">C</td>
            
            
            <td>  <input type="radio" class="minimal pilihan" value="D" name="jawab<?php echo $r; ?>">D</td>
            
             
            <td>  <input type="radio" class="minimal pilihan" value="E" name="jawab<?php echo $r; ?>">E</td>
           
           </tr> </table>
           

            <?php
           
            $r++;
          }
          ?>
    
    </table>
      <label>
        <input type="submit" class="btn btn-primary button" value="Simpan Jawaban">
      </label>
  </form>
</div>
