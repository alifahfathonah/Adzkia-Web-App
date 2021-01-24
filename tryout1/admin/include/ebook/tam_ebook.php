<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Ebook</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
     <div class="form-group">
        <a href="?p=ebook/ebook.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Judul</th>
             
            <th>Deskripsi</th>
            <th>Akses</th>

            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM ebook");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_ebook = $ambil['id_ebook'];
              $nama_cat = $ambil['nama_cat'];
            $tgl = $ambil['tgl'];
            $judul = $ambil['judul'];
            $ebook = $ambil['ebook'];
            $stats = $ambil['stats'];
            $deskripsi = $ambil['deskripsi'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo date('d-m-Y', strtotime($tgl)); ?></td>
            <td><a href="<?php echo $ebook; ?>"><?php echo $judul; ?></td>
            <td><?php echo $deskripsi; ?></td>
            <td><?php echo $stats; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=ebook/del_ebook.php&del=$id_ebook\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=ebook/edit.php&edit=$id_ebook\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>