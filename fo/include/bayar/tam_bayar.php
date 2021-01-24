<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data siswa</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Sisa Pembayaran</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'include/koneksi.php';
            $mysql = mysql_query("SELECT * FROM data_siswa d inner join tahun_ajaran ta on d.id_ta=ta.id_ta where ta.status='aktif'");
            while ($ambil = mysql_fetch_array($mysql)) {
            $no++;
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
              $sisapembayaran = $ambil['sisapembayaran'];
              number_format($sisapembayaran,2,".",",");
              if ($sisapembayaran=='0') {
                echo "

                  <tr>
                    <td>$no</td>
                    <td>$nama</td>
                    <td>Rp.$sisapembayaran</td>
                   
                    <td>
                        <a class='glyphicon glyphicon-file' href='index.php?p=bayar/bayar.php&id=$id_siswa' data-toggle='tooltip'></a>
                    </td>
                    <td>
                        <a class='glyphicon glyphicon-trash hapus' href='?p=siswa/del_siswa.php&del=$id_siswa' data-toggle='tooltip' data-placement='top' title='Delete'></a>
                    </td>
                  
                  </tr>
                ";
              } else {
                echo "
                  <tr style='background: red;'>
                    <td>$no</td>
                    <td>$nama</td>
                    <td>Rp.$sisapembayaran</td>
                   
                    <td>
                        <a class='glyphicon glyphicon-file' href='index.php?p=bayar/bayar.php&id=$id_siswa' data-toggle='tooltip'></a>
                    </td>
                    <td>
                        <a class='glyphicon glyphicon-trash hapus' href='?p=siswa/del_siswa.php&del=$id_siswa' data-toggle='tooltip' data-placement='top' title='Delete'></a>
                    </td>
                  
                  </tr>
                ";
              }
            ?>
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