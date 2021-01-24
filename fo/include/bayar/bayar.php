<?php $kantor=$_SESSION['kantor']; ?>
<div class="col-md-5">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title titleju">Pembayaran</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php
      include 'include/koneksi.php';
      $id = $_REQUEST['id'];
      $mysql = mysql_query("SELECT * FROM biaya_kursus b inner join data_siswa d on b.id_siswa=d.id_siswa inner join paket p on b.id_paket=p.id_paket WHERE b.id_siswa='$id' ");
      $ambil = mysql_fetch_array($mysql);
        $id_biaya = $ambil['id_biaya'];
         $id_siswa = $ambil['id_siswa'];
        $nama_paket = $ambil['nama_paket'];
        $nama_siswa = $ambil['nama'];
        $biaya = $ambil['total_biaya'];
     
    ?>
    <form role="form" method="post" action="include/bayar/pro_bayar.php" enctype="multipart/form-data">

      <div class="box-body">    
       <div class="form-group">
          <label>Nama siswa</label>
          <input type="hidden" name="id" value="<?php echo $id_biaya; ?>">
          <input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>">
          <input type="hidden" name="kantor" value="<?php echo $kantor; ?>">
          <input required type="text" name="nama_siswa" class="form-control" value="<?php echo $nama_siswa; ?>" disabled>
        </div>    
        <div class="form-group">
          <label>Nama Paket</label>
          <input required type="text" name="nama_paket" class="form-control" value="<?php echo $nama_paket; ?>" disabled>
        </div>
         <div class="form-group">
          <label>Biaya Pendidikan</label>
          <input required type="text" name="biaya" class="form-control" value="<?php echo $biaya; ?>" disabled>
        </div>
        <?php
        $c=1;
        $x=mysql_query("select * from pembayaran p inner join biaya_kursus b on p.id_biaya=b.id_biaya inner join data_siswa d on b.id_siswa=d.id_siswa where d.id_siswa='$id_siswa'");
        while($z=mysql_fetch_array($x))
        {
          $cicil=$z['nominal'];
         ?>
       <div class="form-group">
          <label>Cicilan ke <?php echo $c; ?></label>
          <input required type="text" name="sisa" class="form-control" value="<?php echo $cicil; ?>" disabled>
        </div>
        <?php
        $c++;
        }

        $d=mysql_query("select sum(nominal) as total from pembayaran p inner join biaya_kursus b on p.id_biaya=b.id_biaya inner join data_siswa d on b.id_siswa=d.id_siswa where d.id_siswa='$id_siswa'");
        $w=mysql_fetch_array($d);
        $nomtotal=$w['total'];
        $total=($biaya-$nomtotal);
        ?>  
        <div class="form-group">
          <label>Sisa Pembayaran</label>
          <input required type="text" name="sisa" class="form-control" value="<?php echo $total; ?>" disabled>
        </div>
       <div class="form-group">
          <label>Bayar </label>
          <input required type="text" name="bayar" class="form-control" >
        </div>
       
      </div>
      <div class="box-footer">
      
          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
<!-- END DATA SISWA -->