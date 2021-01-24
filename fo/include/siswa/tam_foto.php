<?php  
session_start();
$kantor=$_SESSION['kantor'];
 ?>
<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data siswa</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
    <div class="form-group">
        <a href="?p=siswa/siswa.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>No.HP</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'include/koneksi.php';
            $no++;
            $mysql = mysql_query("SELECT * FROM data_siswa where id_kantor='$kantor' ");
            while ($ambil = mysql_fetch_array($mysql)) {
              $id_siswa = $ambil['id_siswa'];
              $nama = $ambil['nama'];
              $ttl1 = $ambil['pil_program'];
              $ttl = $ambil['pil_kelas'];
              $jk = $ambil['jk'];
              $alamat = $ambil['alamat'];
               $telp = $ambil['tlpon'];
              $agama = $ambil['agama'];
              $nominal = $ambil['nominal'];
              $tujuan = $ambil['tujuan'];
              $bank = $ambil['bank_asal'];
              $status = $ambil['status'];
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $telp; ?></td>
           
          
            <td><?php echo "
                      <a class='glyphicon glyphicon-file file' href=\"?p=siswa/foto.php&id=$id_siswa\" data-toggle='tooltip' data-placement='top' title='Show'></a>
                "; ?> 
            </td>
           
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div id="mymod" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="MyModal" aria-hidden="true">
</div>

<!--<script type="text/javascript">
  $('.form_mod').click(function(){
    var id = $(this).data('id');
      $.ajax({ 
        type: "POST",
        url:'include/siswa/login_siswa.php',
        data: 'id='+id,
        success: function(msg){
          $("#mymod").html(msg);
          $("#mymod").modal("show");
        },
        error: function(){
          alert("failure");
        } 
      });
      return false;
    });
</script>-->