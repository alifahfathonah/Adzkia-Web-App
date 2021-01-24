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
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>No.HP</th>
            <th>Program</th>
            <th>Kelas</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'include/koneksi.php';
            $no++;
            $mysql = mysql_query("SELECT * FROM data_siswa d inner join tahun_ajaran ta on d.id_ta=ta.id_ta inner join setruang s on d.id_siswa=s.id_siswa inner join kelas k on s.id_kelas=k.id_kelas where ta.status='aktif' and d.id_kantor='$kantor'");
            while ($ambil = mysql_fetch_array($mysql)) {
              $id_siswa = $ambil['id_siswa'];
              $nama = $ambil['nama'];
              $tahun = $ambil['tahun'];
              $nis = $ambil['nis'];
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
              $nama_kelas = $ambil['nama_kelas'];
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $tahun."-".$nis; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $jk; ?></td>
            <td><?php echo $telp; ?></td>
            <td><?php echo $ttl1; ?></td>
            <td><?php echo $nama_kelas; ?></td>
           
            <td><?php echo "
                      <a class='glyphicon glyphicon-file' href=\"include/siswa/print_cetak.php?deta=$id_siswa\" data-toggle='tooltip'></a>
                "; ?>
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=siswa/del_siswa.php&del=$id_siswa\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=siswa/edit.php&edit=$id_siswa\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
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