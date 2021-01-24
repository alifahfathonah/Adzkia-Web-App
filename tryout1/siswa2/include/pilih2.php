<?php include "include/koneksi.php";
$siswa=$_REQUEST['siswa'];
$jadwal=$_REQUEST['jadwal']; 
$date=date("Y-m-d H:i:s");
?>
<div class="box-isi-content">
  <div class="waktu">
    <h2>
      Registration closes in <table style="border:0px;">
                                <tr>
                                    <td colspan="8"><span id="future_date"></span></td>
                                </tr>
                            </table>
                            <?php
                            $tt=mysql_query("select * from mulai where id_siswa='1' and id_jadwaltry='1'");
                            $rr=mysql_fetch_array($tt);
                            ?>
                            <script>
                                $(function(){
                                    $('#future_date').countdowntimer({
                                        startDate : "<?php echo $date ?>",
                                        dateAndTime : "<?php echo $rr['selesai']; ?>",
                                        size : "lg"
                                    });
                                });
                            </script>
                <style type="text/css">
                .displayformat {
                    font-size:18px;
                    font-style: italic;
                }
                </style>
    </h2>
  </div>
  <h3><a>Isi Pertanyaan Di Bawah Ini....</a></h3>
  <br><form action="include/kosakata_proses.php" method="post">
   <input type="hidden" name="siswa" value="<?php echo $siswa; ?>"/>
    <input type="hidden" name="jadwal" value="<?php echo $jadwal; ?>"/>


  <div class="isi_soal">
    <table border="0" cellspacing="0" cellpadding="10">
    <?php include "include/koneksi.php";


        $id=$_REQUEST['id'];
        $hal=$_REQUEST['hal'];
       

        echo "<b>Untuk soal berikut, pilihlah jawaban yang merupakan lanjutan dari barisan yang diberikan pada setiap soal berikut</b>"; 
       
       $r=1;
       if($hal==1)
       {
         $i="SELECT * from jwb_try j, soal_try s where j.id_soaltry=s.id_soaltry and s.status='11' and j.id_siswa='$siswa' and j.id_jadwaltry='$jadwal'";

        $s = mysql_query($i);
        ?><input type="hidden" name="edit" value="1"/><?php
        while ($w=mysql_fetch_array($s))
        {  
        ?>
        
        <tr>
          <td>
            <?php echo $r; ?>.
            <input type="hidden" name="soal<?php echo $r ?>" value="<?php echo $w['id_soaltry']; ?>" /><?php echo $w['soal']; ?>          
            <input type="hidden" name="kunci<?php echo $r ?>" value="<?php echo $w['kunci']; ?>"/>
            <input type="hidden" name="idd<?php echo $r ?>" value="<?php echo $w['id_jwbtry']; ?>"/>
          </td>
        </tr>

        <tr>
          <td>
            <div class="form-group">
            <label>
              <input type="radio" class="minimal pilihan" value="A" <?php if($w['jawaban']=='A'){echo 'checked';}?> name="jawab<?php echo $r; ?>" ><?php echo $w['pilihan1'] ?> 
            </label>
            <label>
              <input type="radio" class="minimal pilihan" value="B" <?php if($w['jawaban']=='B'){echo 'checked';}?>  name="jawab<?php echo $r; ?>"><?php echo $w['pilihan2'] ?>
            </label>
            <label>
              <input type="radio" class="minimal pilihan" value="C" <?php if($w['jawaban']=='C'){echo 'checked';}?> name="jawab<?php echo $r; ?>"><?php echo $w['pilihan3'] ?>
            </label>
            <label>
              <input type="radio" class="minimal pilihan" value="D" <?php if($w['jawaban']=='D'){echo 'checked';}?> name="jawab<?php echo $r; ?>"><?php echo $w['pilihan4'] ?>
            </label>
          </div>
          </td>
        </tr>
        <?php 
         $r++; 
       }
     }
     else{
       $i="SELECT * from soal_try where status='11'";

        $s = mysql_query($i);
        while ($w=mysql_fetch_array($s))
        {  
        ?>
        
        <tr>
          <td>
            <?php echo $r; ?>.
            <input type="hidden" name="soal<?php echo $r ?>" value="<?php echo $w['id_soaltry']; ?>" /><?php echo $w['soal']; ?>          
            <input type="hidden" name="kunci<?php echo $r ?>" value="<?php echo $w['kunci']; ?>"/>
          </td>
        </tr>

        <tr>
          <td>
            <div class="form-group">
            <label>
              <input type="radio" class="minimal pilihan" value="A" name="jawab<?php echo $r; ?>"><?php echo $w['pilihan1'] ?> 
            </label>
            <label>
              <input type="radio" class="minimal pilihan" value="B" name="jawab<?php echo $r; ?>"><?php echo $w['pilihan2'] ?>
            </label>
            <label>
              <input type="radio" class="minimal pilihan" value="C" name="jawab<?php echo $r; ?>"><?php echo $w['pilihan3'] ?>
            </label>
            <label>
              <input type="radio" class="minimal pilihan" value="D" name="jawab<?php echo $r; ?>"><?php echo $w['pilihan4'] ?>
            </label>
          </div>
          </td>
        </tr>
        <?php 
       
        $r++; 
        } 
      } ?>
        
    </table>
            
   <a href='?p=include/pilih1.php&hal=1&jadwal=<?php echo $jadwal; ?>&siswa=<?php echo $siswa; ?>' aria-label='Previous'>
                <span aria-hidden='true'>Previous Soal</span>
              </a>
    <input type="submit" value="simpan" class="btn btn-primary"/>
    
  </div>
  </form>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    var detik = 3;
    var menit = 10;
    function hitung() {
      setTimeout(hitung,1000);
      $('#timer').html(+ menit + ' Minute ' + detik + ' Secs ');
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
        //   window.location.href="include/soal_proses.php"
            //break;
          }
        }
      }
    }
    hitung();
  });
</script>
