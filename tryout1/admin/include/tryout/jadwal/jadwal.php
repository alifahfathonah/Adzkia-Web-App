<section class="col-md-12">
	<div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Form Jadwal</h3>
      <!-- tools box -->
    </div>
    <div class="box-body">
      <form id="form_jadwal" method="post" class="form-horizontal">
	    	<div class="form-group">
				  <label class="col-md-2 control-label">Nama</label> 
				  <div class="col-md-4"><input type="text" name="nama" class="form-control"/></div>
				</div>
	    	<div class="form-group">
				  <label class="col-md-2 control-label">Tanggal</label> 
				  <div class="col-md-4"><input type="text" name="tanggal" class="form-control datepicker"/></div>
				</div>
	    	
      </form>
    </div>
    <div class="box-footer clearfix">
      <button type="button" class="pull-right btn btn-default" id="btn_simpan">Simpan
        <i class="fa fa-arrow-circle-right"></i></button>
    </div>
  </div>
</section>

<script type="text/javascript">
	$("#btn_simpan").click(function(){
	  $.ajax({ 
	    type: "POST",
	    url:'include/tryout/jadwal/pro_jadwal.php',
	    data:$("#form_jadwal").serialize(),
	    success: function(isi){
	    	//alert(isi);
	      if (isi=='sukses') {
	      	alert('berhasil');
					window.location.replace("?p=tryout/jadwal/tam_jadwal.php");
	      }
	    },
	    error: function(){
	      alert("failure");
	    }
	  });
	});
</script>