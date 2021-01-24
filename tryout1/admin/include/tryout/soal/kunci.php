<?php
include 'include/koneksi.php';
$jadwal=$_REQUEST['jadwal'];
?><!-- DATA SISWA -->
<div class="col-md-8 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Soal</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    
    <form role="form" method="post" action="?p=tryout/soal/kunci_proses.php" enctype="multipart/form-data">
     
      <div class="box-body"> 
        
       <div class="form-group">
          <label>Jawaban</label>
          <input type="hidden" name="jadwal" value="<?php echo $jadwal; ?>">
          </div>
          <?php
          $r=1;
          while($r<=180)
          {
            ?>
           <div class="form-group">
           <table border="1" width="200px"><tr><td>
            <?php echo $r;?></td>
             
             <td> <input type="radio" class="minimal pilihan" value="A" name="jawab<?php echo $r; ?>" >A</td> 
            
            
            <td>  <input type="radio" class="minimal pilihan" value="B"  name="jawab<?php echo $r; ?>">B</td>
            
            
            <td>  <input type="radio" class="minimal pilihan" value="C" name="jawab<?php echo $r; ?>">C</td>
            
            
            <td>  <input type="radio" class="minimal pilihan" value="D" name="jawab<?php echo $r; ?>">D</td>
            
             
            <td>  <input type="radio" class="minimal pilihan" value="E" name="jawab<?php echo $r; ?>">E</td>
           
           </tr> </table>
            </div>

            <?php
            $r++;
          }
          ?>
          
       
      </div>
      <div class="box-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>