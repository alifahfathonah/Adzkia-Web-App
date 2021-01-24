<?php include "include/koneksi.php";
$siswa=$_REQUEST['siswa'];
$video=$_REQUEST['id']; 

$date=date("Y-m-d H:i:s");
$user=$_SESSION['id_user'];
$p=mysql_query("select * from user u, data_siswa d where u.id_siswa=d.id_siswa and u.id_user='$user'");
$u=mysql_fetch_array($p);
$siswa=$u['id_siswa'];

?>
<div class="box-isi-content">
  <div class="waktu">
    <h2>
      Registration closes in 
    </h2>
  </div>
  <h3><a>Isi Pertanyaan Di Bawah Ini....</a></h3>
  <br><form action="include/video/kuis_proses.php" method="post">
   <input type="hidden" name="siswa" value="<?php echo $siswa; ?>"/>
    <input type="hidden" name="video" value="<?php echo $video; ?>"/>


  <div class="isi_soal">
    <table border="0" cellspacing="0" cellpadding="10">
    <?php include "include/koneksi.php";
       

        echo "<b>Kuis</b>"; 
       
       $r=1;
      
         $i="SELECT * from soal_kuis s where s.id_video='$video'";

        $s = mysql_query($i);
        while ($w=mysql_fetch_array($s))
        {  
        ?>
        
        <tr>
          <td>
            <?php echo $r; ?>.
            <input type="hidden" name="soal<?php echo $r ?>" value="<?php echo $w['id_soalkuis']; ?>" /><?php echo $w['soal']; ?>          
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
   
      ?>
        
    </table>
     
    <input type="submit" value="simpan" class="btn btn-primary"/>
    
  </div>
  </form>
</div>

