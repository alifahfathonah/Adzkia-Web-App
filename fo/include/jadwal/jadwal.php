<?php
  
session_start();
$kantor=$_SESSION['kantor'];
 
  
  include 'include/koneksi.php';
  
?>

<!-- DATA ruangan -->
<div class="col-md-12 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Input Data Kelas</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="include/jadwal/pro_jadwal.php" enctype="multipart/form-data">
      <input type="hidden" name="kantor" value="<?php echo $kantor; ?>">
      <div class="box-body">        
      <div class="form-group">
          <label>Pilih Paket</label>
          <div class="radio">
          <?php $u=mysql_query("select * from paket order by id_paket");
          while($o=mysql_fetch_array($u))
          { 
            $id_paket=$o['id_paket'];
            $nama_paket=$o['nama_paket'];
            ?>

            <label>
              <input type="radio" name="paket" id="optionsRadios1"  class="form-group" 
              value="<?php echo $id_paket ?>">       <?php echo $nama_paket; ?> &nbsp;
            </label>

            <?php } ?>
            
          </div>

          <div class="form-group">
          <label>Pilih Ruangan</label><br>
          <select name="ruangan" class="form-control">
          <?php $u=mysql_query("select * from ruangan where id_kantor='$kantor'");
          while($o=mysql_fetch_array($u))
          { 
            $id_ruangan=$o['id_ruangan'];
            $nama_ruangan=$o['nama_ruangan'];
            ?>
            <option value="<?php echo $id_ruangan; ?>"><?php echo $nama_ruangan; ?></option>
            <?php } ?>
            </select>
          </div>
        <div class="form-group" >
          <label>Pilih Gelombang Masuk</label><br>
          <select name="gelombang"  class="form-control">
          <?php $u=mysql_query("select * from gelombang");
          while($o=mysql_fetch_array($u))
          { 
            $id_gel=$o['id_gel'];
            $nama_gel=$o['nama_gel'];
            ?>
            <option value="<?php echo $id_gel; ?>"><?php echo $nama_gel; ?></option>
            <?php } ?>
            </select>
          </div>
           <div class="form-group">
          <label>Pilih Hari</label><br>
         
             <?php $u=mysql_query("select * from hari");
          while($o=mysql_fetch_array($u))
          { 
            $id_hari=$o['id_hari'];
            $nama_hari=$o['nama_hari'];
            ?>
                  <input type="checkbox"  name="Days[]" value="<?php echo $id_hari; ?>" id="fancy-checkbox-primary"> <?php echo $nama_hari; ?><br>
                   <?php } ?>
              
            </div>
         

         <div class="form-group">
          <label>Nama Kelas</label>
          <input required type="text" name="kelas" class="form-control">
        </div>
         <div class="form-group">
          <label>Nomor Kelas</label>
          <input required type="text" name="nomor" class="form-control">
        </div>
         <div class="form-group">
          <label>Program</label><br>
          <select name="prog" class="form-control">
         
            <option value="Reguler">Reguler</option>
             <option value="Intensif">Intensif</option>
           
            </select>
          </div>

       
      </div>
      <div class="box-footer">
     
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>