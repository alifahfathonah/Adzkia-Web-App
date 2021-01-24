<?php $kantor=$_SESSION['kantor']; ?>
<div class="col-md-5">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title titleju">Edit Paket</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php

      include 'include/koneksi.php';
      $id = $_REQUEST['edit'];
      $mysql = mysql_query("SELECT * FROM paket WHERE id_paket='$id' ");
      while ($ambil = mysql_fetch_array($mysql)) {
        $id_paket = $ambil['id_paket'];
        $nama = $ambil['nama_paket'];
        $biaya = $ambil['biaya_paket'];
     
    ?>
    <form role="form" method="post" action="include/siswa/pro_editpaket.php" enctype="multipart/form-data">

      <div class="box-body">        
        <div class="form-group">
          <label>Nama Paket</label>
          <input type="hidden" name="id" value="<?php echo $id_paket; ?>">
          <input required type="text" name="paket" class="form-control" value="<?php echo $nama; ?>">
        </div>
         <div class="form-group">
          <label>Biaya Paket</label>
          <input required type="text" name="biaya" class="form-control" value="<?php echo $biaya; ?>">
        </div>

       
      </div>
      <?php } ?>
        
      <div class="box-footer">
      
          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
<!-- END DATA SISWA -->