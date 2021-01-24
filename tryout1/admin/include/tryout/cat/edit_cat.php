<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border box-judul">
      <h2 class="box-title ">Edit Kategori Soal</h2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?p=tryout/cat/pro_edit_cat.php" enctype="multipart/form-data">
     <?php
        include 'include/koneksi.php';
        $tangkap = $_REQUEST['edit'];
        $sql = mysql_query("SELECT * FROM cat_try WHERE id_catt ='$tangkap' ");
        while ($ambil = mysql_fetch_array($sql)) {
          $id_cat = $ambil['id_catt'];
          $nama = $ambil['nama_catt'];
     ?>
      <div class="box-body"> 
        <input type="hidden" name="id" value="<?php echo $id_cat; ?>"
        <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="tujuan">
            <option value="tpa">TPA</option>
            <option value="bi">Bahasa Inggris</option>
          </select>
        </div>
        <div class="form-group">
          <label>Nama Kategori</label>
          <input required type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
        </div>
      </div>
      <div class="box-footer">
        <button type="reset" class="btn btn-primary" onclick=self.history.back()>Kembali</button>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php } ?>
    </form>
  </div>
</div>