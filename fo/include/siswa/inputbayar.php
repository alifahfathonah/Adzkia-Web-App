 <?php $kantor=$_SESSION['kantor']; ?>
 <script type="text/javascript">
            function tambah(){
                var biaya=document.getElementById("biaya").value;                
                var diskon=document.getElementById("diskon").value;
                var diskon1=(parseFloat(diskon)/100);
                var hasildiskon=(parseFloat(biaya)*parseFloat(diskon1));
                var total=parseInt(biaya)-parseInt(hasildiskon);  
                document.getElementById("diskon1").value=parseInt(diskon1);               
                document.getElementById("hasildiskon").value=parseInt(hasildiskon);         
                document.getElementById("total").value=parseInt(total);

                var bayar=document.getElementById("bayar").value; 
                var sisa=parseInt(total)-parseInt(bayar);  
                document.getElementById("sisa").value=parseInt(sisa);  
            }
            function refresh(){
                document.getElementById("biaya").value="";
                document.getElementById("diskon").value="";
                document.getElementById("diskon1").value="";
                document.getElementById("diskon2").value="";
                document.getElementById("hasildiskon").value="";
                document.getElementById("total").value="";
            }
        </script>

<?php
  $kantor=$_SESSION['kantor'];
  $id=$_REQUEST['id'];
  include 'include/koneksi.php';
  $s=mysql_query("select * from data_siswa d inner join paket p on d.id_paket=p.id_paket where d.id_siswa='$id'");
  $p=mysql_fetch_array($s);
  $id_paket=$p['id_paket'];
$nama=$p['nama'];
$biaya_paket=$p['biaya_paket'];
 
?>
<!-- DATA SISWA -->
<div class="col-md-12 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Input Biaya</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="include/siswa/pro_inputbayar.php" enctype="multipart/form-data">
      <input type="hidden" name="kd" value="<?php echo $regis; ?>">
      <div class="box-body">        
        <div class="form-group">
         <input required type="hidden" name="id" class="form-control" autocomplete="off" value="<?php echo $id; ?>">
          <input required type="hidden" name="id_paket" class="form-control" autocomplete="off" value="<?php echo $id_paket; ?>">
            <input required type="hidden" name="kantor" class="form-control" autocomplete="off" value="<?php echo $kantor; ?>">

          <label>Nama Lengkap</label>
          <input required type="text" name="nama" class="form-control" autocomplete="off" value="<?php echo $nama; ?>" disabled>
        </div>
        <div class="form-group">
          <label>Biaya Kursus</label>
          <input required type="text" name="biaya" class="form-control" id="biaya" autocomplete="off" value="<?php echo $biaya_paket; ?>" onkeyup="tambah()" disabled>
        </div>
         <div class="form-group">
          <label>Disc (%)</label>
          <input required type="text" name="diskon" class="form-control" id="diskon" autocomplete="off" onkeyup="tambah()">
        </div>
        <div class="form-group">
         
          <input required type="hidden" name="diskonuang" class="form-control" id="hasildiskon" autocomplete="off" onkeyup="tambah()">
          <input required type="hidden" class="form-control" id="diskon1" autocomplete="off" onkeyup="tambah()">
        </div>
        <div class="form-group">
          <label>Total Biaya</label>
          <input required type="text" name="totalbiaya" class="form-control" 
          id="total" autocomplete="off">
        </div>
         <div class="form-group">
          <label>Bayar</label>
          <input required type="text" name="bayar" class="form-control" id="bayar" autocomplete="off" id="bayar" onkeyup="tambah()">
        </div>
        <div class="form-group">
          <label>Sisa Pembayaran</label>
          <input required type="text" name="sisa" class="form-control" id="sisa" autocomplete="off" id="sisa">
        </div>

       
      </div>
      <div class="box-footer">
        
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>