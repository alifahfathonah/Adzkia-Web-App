<?php
  $kantor=$_SESSION['kantor'];
  
  include 'include/koneksi.php';
  
?><!-- DATA ruangan -->
<div class="col-md-5">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title titleju">Edit Ruangan</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php
      include 'include/koneksi.php';
      $id = $_REQUEST['edit'];
      $mysql = mysql_query("SELECT * FROM ruangan WHERE id_ruangan='$id' ");
      while ($ambil = mysql_fetch_array($mysql)) {
        $id_ruangan = $ambil['id_ruangan'];
        $nama = $ambil['nama_ruangan'];
        $jumlah = $ambil['jumlah_ruangan'];
     
    ?>
    <form role="form" method="post" action="include/ruangan/pro_editruangan.php" enctype="multipart/form-data">

      <div class="box-body">     
      <div class="form-group">
      <input type="hidden" name="kantor" value="<?php echo $kantor; ?>">
          <label>PILIHAN PROGRAM</label>
          <div class="radio">
            <label>
              <input type="radio" name="program" id="optionsRadios1" value="reguler" checked>
              Reguler &nbsp;
            </label>
            <label>
              <input type="radio" name="program" id="optionsRadios1" value="intensif">
              Intensif &nbsp; 
            </label>
          </div>
        </div>  
        <div class="form-group">
          <label>Nama Ruangan</label>
          <input type="hidden" name="id" value="<?php echo $id_ruangan; ?>">
          <input required type="text" name="ruangan" class="form-control" value="<?php echo $nama; ?>">
        </div>
         <div class="form-group">
          <label>Jumlah Tampung</label>
          <input required type="text" name="jumlah" class="form-control" value="<?php echo $jumlah; ?>">
        </div>

       
      </div>
      <?php } ?>
        
      <div class="box-footer">
      
          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
<!-- END DATA ruangan -->