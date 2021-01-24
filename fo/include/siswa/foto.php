<?php 
include 'include/koneksi.php';

$id=$_REQUEST['id']; 
?>
<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Foto</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
  <form role="form" method="post" action="include/siswa/foto_proses.php" enctype="multipart/form-data">
      <table id="example1" class="table table-bordered table-striped">
   <?php   $mysql = mysql_query("SELECT * FROM data_siswa where id_siswa='$id'") or die (mysql_error());
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama_siswa = $ambil['nama'];
          } ?>

   <table id="example1" class="table table-bordered table-striped">
   <tr>
   <td> Nama Siswa: <?php echo $nama_siswa ?></td>
   </tr>
   </table>
  
          <div class="form-group">
          <label>Gambar</label>
         
          <input type="file" name="gambar" class="form-control" >
        </div> 
        <input type="hidden" name="id" value="<?php echo $id_siswa ?>">
       
       

      <input type="submit" value="simpan" class="btn btn-primary"/></form>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
