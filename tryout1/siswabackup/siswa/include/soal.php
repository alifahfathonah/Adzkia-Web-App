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
	<span>WAKTU : <span id="future_date"></span> 
							<?php
                            $tt=mysql_query("select * from mulai where id_siswa='8' and id_jadwaltry='1'");
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
                </style></span>
</div>
<div class="col-md-8">
	<span class="jumsoal">No 10 </span>Dari 40 Soal
</div>
<div class="col-md-8 concen">
<?php $t=mysql_query("select * from soalbaru where id_jadwaltry='$jadwal'");
while($r=mysql_fetch_array($t))
{ ?>
  <img src="../admin/<?php echo $r['soal'] ?>">
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
       $l=mysql_query("select * from soalbaru s, kunci k where s.id_soalbaru=k.id_soalbaru and s.id_jadwaltry='$jadwal'");
       
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
