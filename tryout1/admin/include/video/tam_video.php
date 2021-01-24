<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Video</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
     <div class="form-group">
        <a href="?p=video/video.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Video</th>
            <th>Deskripsi</th>

            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM video v, cat c where v.id_cat=c.id_cat");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_video = $ambil['id_video'];
              $nama_cat = $ambil['nama_cat'];
            $tgl = $ambil['tgl'];
            $judul = $ambil['judul_video'];
            $video = $ambil['video'];
            $deskripsi = $ambil['deskripsi'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo date('d-m-Y', strtotime($tgl)); ?></td>
            <td><?php echo $nama_cat; ?></td>
            <td><?php echo $judul; ?></td>
            <td><video width="250" height="150" controls>
            <source src="<?php echo $video; ?>" type="video/mp4"><?php echo $video; ?></video></td>
            <td><?php echo $deskripsi; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=video/del_video.php&del=$id_video\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=video/edit.php&edit=$id_video\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>