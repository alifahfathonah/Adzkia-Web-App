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
  <br><form method="post" action="include/soal_proses.php">
   <input type="hidden" name="siswa" value="<?php echo $siswa; ?>"/>
    <input type="hidden" name="jadwal" value="<?php echo $jadwal; ?>"/>


  <div class="isi_soal">
    <table border="0" cellspacing="0" cellpadding="10">
    <?php 
    
        echo "<b>Soal</b>"; 
       $l=mysql_query("select * from soalbaru s, kunci k where s.id_soalbaru=k.id_soalbaru and s.id_jadwaltry='$jadwal'");
       
       $soal=$u['id_soalbaru'];?>
       

       <?php   $r=1;
          
            while($u=mysql_fetch_array($l))
            {
            ?>
           <input type="text" name="soal" value="<?php echo $u['id_soalbaru']; ?>"/>
           <table border="1" width="300px"><tr>
           <td> <input type="text" class="minimal pilihan" value="<?php echo $u['nomor'];?>" name="nomor<?php echo $r ?>" ></td> 
            
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
            
    <input type="submit" value="simpan" class="btn btn-primary"/>
    
  </div>
  </form>
</div>