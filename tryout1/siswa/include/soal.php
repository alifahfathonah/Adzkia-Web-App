<?php session_start();
include "include/koneksi.php";
  $siswa=$_REQUEST['siswa'];
  $jadwal=$_REQUEST['jadwal']; 
  $c=$_REQUEST['i'];
  $date=date("Y-m-d H:i:s");
  $ij=mysql_query("select * from mulaibi where id_siswa='$siswa' and id_jadwaltry='$jadwal'");
  $po=mysql_num_rows($ij);

if ($po>0) {
   echo "<script>
     alert('Maaf, Anda tidak bisa kembali ke menu soal ini.');
      document.location.href='?p=soalbi.php&jadwal=$jadwal&siswa=$siswa'
      </script>";
}
else
{

?>
<div class="col-md-8 box-content">
  <div class="col-sm-6 table-row1">
    <table>
      <?php $ll=mysql_query("select * from data_siswa where id_siswa='$siswa'");
      $tt=mysql_fetch_array($ll);
      $nama1=$tt['nama'];
       ?>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama1 ?></td>
      </tr>
      
    </table>
  </div>
  <div class="col-sm-6 table-row2">
    <table>
      <tr>
        <td>Jumlah Soal</td>
        <td>:</td>
        <td>180</td>
      </tr>
    </table>
  </div>
</div>
<div class="col-md-3 box-right">
  <span id="waktuhabis"></span>
  <span>WAKTU : <font color="red" id="future_date"></font> 
    <?php
      $tt=mysql_query("select * from mulai where id_siswa='$siswa' and id_jadwaltry='$jadwal' order by id_mulai DESC limit 1");
      $rr=mysql_fetch_array($tt);
      //echo $user;
      ?>
      <script>
        $('#future_date').countdowntimer({
            startDate : "<?php echo $date ?>",
            dateAndTime : "<?php echo $rr['selesai']; ?>",
            size : "lg"
        });
        /*function countdowntimer(time, url){
          var interval = setInterval(function(){
            //$('#future_date').text(time);
            time = time - 1;
            if(time == 0){
              clearInterval(interval);
              window.location = url;
            }
          }, 1000);
        }
         
        $(document).ready(function(){
          countdowntimer(10, $(".button").trigger("click"));
        });*/
      </script>
  </span>
</div>
<div class="col-md-8 text">
  <span class="jumsoal">Soal Tryout </span>
</div>
<div class="col-md-8 concen">
<?php 
echo $rr['selesai'];
$t=mysql_query("select * from soalbaru where id_jadwaltry='$jadwal' and nomor>='1' and nomor<='13' order by id_soalbaru ASC");
while($r=mysql_fetch_array($t))
{ ?>
  <img src="../admin/<?php echo $r['soal'] ?>" width="750px" height="1300px">
<?php
}

 ?>
</div>
<div class="col-md-3 box-sidebar">
  <form action="?p=soal_proses.php" method="post">
  <table border="0" cellspacing="0" cellpadding="10">
  <input type="hidden" name="siswa" value="<?php echo $siswa; ?>"/>
    <input type="hidden" name="jadwal" value="<?php echo $jadwal; ?>"/>

     <?php 
     echo "<b>Soal</b>"; 
     $l=mysql_query("select * from kunci k where id_jadwaltry='$jadwal' and status_soal='tpa'");
       
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
<script type="text/javascript">
  /*$(".button").click(function(){
    //alert('asdasd');
    if (!confirm("Anda yakin ingin lanjut ke soal berikutnya?\nHarap periksa kembali jawaban anda")){
      return false;
    }
  });*/

  $(document).ready(function() {
    var detik = 1;
    var menit = 100;
    function hitung() {
      setTimeout(hitung,1000);
      $('#waktuhabis').html(+ menit + ' Minute ' + detik + ' Secs ');
      if(detik>0)
      {
        detik--;
        if(detik==0)
        {
          if(menit>0)
          {
            menit--;
            detik = 59;
          }
          if(menit == 0 && detik ==0)
          {
        	$(".button").trigger("click");
          }
        }
      }
    }
    hitung();
  });
  $("#waktuhabis").hide();
</script>
<?php } ?>
