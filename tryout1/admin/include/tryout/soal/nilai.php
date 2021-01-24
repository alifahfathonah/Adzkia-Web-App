<div class="box-isi-content">
  <div class="waktu">
    <h2>
      Terima kasih sudah menjawab pertanyaan <i id='timer' name='timer'></i>
    </h2>
  </div>
  <h3><a>Berikut hasil nilai tryout anda</a></h3>
  <br>
   <input type="hidden" name="siswa" value="1"/>
    <input type="hidden" name="jadwal" value="1"/>


  <div class="isi_soal">
    <table border="0" cellspacing="0" cellpadding="10">
    <?php include "include/koneksi.php";
    $siswa=$_REQUEST['siswa'];
    $jadwal=$_REQUEST['jadwal'];

        $id=$_REQUEST['id'];
        $hal=$_REQUEST['hal'];
       

        echo "<b>Analogi</b>"; 
       ?>
    
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
