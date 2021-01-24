<?php  
session_start();
$kantor=$_SESSION['kantor'];
 ?><div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Ruangan</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
    <div class="form-group">
        <a href="?p=ruangan/ruangan.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Ruangan</th>
            <th>Kapasitas</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM ruangan where id_kantor='$kantor' ");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_ruangan = $ambil['id_ruangan'];
            $nama_ruangan = $ambil['nama_ruangan'];
            $jumlah_ruangan = $ambil['jumlah_ruangan'];
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama_ruangan; ?></td>
            <td><?php echo $jumlah_ruangan; ?></td>
            
            <td><?php echo "
                      <a class='glyphicon glyphicon-file' href=\"include/ruangan/print_cetak.php?deta=$id_ruangan\" data-toggle='tooltip'></a>
                "; ?>
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=ruangan/del_ruangan.php&del=$id_ruangan\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=ruangan/edit_ruangan.php&edit=$id_ruangan\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>

<div id="mymod" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="MyModal" aria-hidden="true">
</div>

<script type="text/javascript">
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
</script>