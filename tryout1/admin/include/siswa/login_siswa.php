<?php
  function acakangkahuruf($panjang)
  {
    $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
    $pos = rand(0, strlen($karakter)-1);
    $string .= $karakter{$pos};
      }
      return $string;
  }
  //cara memanggilnya
  $username1 = acakangkahuruf(4);
  $password = acakangkahuruf(7);

  $tangkap = $_REQUEST['id'];
  include'../koneksi.php';
  $mysql1 = mysql_query("SELECT * FROM data_siswa WHERE id_siswa='$tangkap' ");
  $ambil1 = mysql_fetch_array($mysql1);
  $id=$ambil1['id_siswa'];
  $nama1 = $ambil1['nama'];
$nam=substr($nama1,0,3);
?>

  
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Form Login</h4>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" id="myform1">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <div class="form-group">
          <label class="col-md-2 control-label">Username</label> 
          <div class="col-md-4">
            <input type="text" class="form-control" name="user" value="<?php echo $nam; echo $username1; ?>" id="nama" />
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
          <label class="col-md-2 control-label">Password</label> 
          <div class="col-md-4">

            <input type="text" class="form-control" name="pass" value="<?php echo $password ?>" id="pass" readonly />
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Status</label> 
          <div class="col-md-4">

           <select name="status" class="form-control">
             <option value="siswa">Adzkia</option>
             <option value="siswaluar">Siswa Luar</option>

           </select>
          </div>
        </div>
        <div class="clearfix"></div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="button" id="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).on('click', '#submit', function(){
    $.ajax({
      type: "POST",
      url: 'include/siswa/proses_login.php',
      data: $('form#myform1').serialize(),
      success: function(msg){
        //$("#mymodal").html(msg); aktifkan ini untuk melihat eror
        $("#mymodal").modal('hide');
        window.location.reload();
      },
      error: function(){
        alert("failure");
      }
    });
  });
</script> 