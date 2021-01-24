 <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pencarian
        <small>Nama Siswa</small>
    </h1>
  
</section>

<!-- Main content -->
<section class="content">
<section>
    <form>
    <input type="hidden" name="p" value="siswa/pencarian.php">
        <!-- date picker-->
        <div class="form-group">
            <label>Masukkan Nomor Induk Siswa</label>
            <div class="input-group col-xs-4">
                <input type="text" class="input-sm form-control" name="tahun" size="1" />
                <span class="input-group-addon">-</span>
                <input type="text" class="input-sm form-control" name="nis" />
            </div>
        </div><!-- /.form group -->
        <div class="form-group">
            <div class="input-group col-xs-4"> 
              <input type="submit" class="btn btn-default" value="Lihat">
            </div>
        </div>
    </form>
	
</section>
<section>
<?php include "include/siswa/hasil.php" ?>
</section>