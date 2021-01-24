<div class="box-isi-content">
  <div class="waktu">
    <h2>
      Waktu yang anda miliki <i id='timer' name='timer'></i>
    </h2>
  </div>
  <h3><a>Isi Pertanyaan Di Bawah Ini....</a></h3>
  <br><form action="include/soal_proses.php" method="post">
  <div class="isi_soal">
    <table border="0" cellspacing="0" cellpadding="10">
    <?php include "include/koneksi.php";
    $id=$_REQUEST['id'];

    $p=mysql_query("select * from cat_try c, jenis_catt j where c.id_jeniscatt=j.id_jeniscatt order by j.id_jeniscatt ASC");
    $r=1;
    while($c=mysql_fetch_array($p))
    {
      $id1=$c['id_catt'];
      $cat=$c['nama_catt'];
        $s=mysql_query("select * from soal_try s, cat_try c where s.id_catt=c.id_catt and c.id_catt='$id1'");
        ?>
        <tr>
          <td>
            <b><i>-&nbsp;<?php echo $cat; ?></i></b>
          </td>
        </tr>
        <?php

        while ($w=mysql_fetch_array($s))
        { 
        ?>
        <tr>
          <td>
            <?php echo $r; ?>.
            <input type="hidden" name="soal<?php echo $r ?>" value="<?php echo $w['id_soaltry']; ?>" /><?php echo $w['soal']; ?> 
            <input type="hidden" name="siswa" value="1"/>
            <input type="hidden" name="jadwal" value="1"/>
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
        <?php $r++; } ?>
        <?php } ?>
    </table>
    <input type="submit" value="simpan" class="readmore-11"/>
  </div>
  </form>
</div>

  <script type="text/javascript">
    $(document).ready(function() {
      var detik = 5;
      var menit = 0;
      function hitung() {
        setTimeout(hitung,1000);
        $('#timer').html(+ menit + ' Minute ' + detik + ' Secs ');
          detik --;
        if(detik < 0) {
          detik = 59;
          menit --;
          if(menit < 0) {
            menit = 4;
            jam --;
            if(jam < 0) {
              jam = 0;
              menit = 0;
              detik = 0;
            }
          }
        }
      }
      hitung(); 
    });
  </script>