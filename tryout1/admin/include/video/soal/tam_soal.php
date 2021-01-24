 <?php
          include 'include/koneksi.php';
          $id=$_REQUEST['lihat'];
           $sql = mysql_query("SELECT * FROM soal_kuis s, video v where s.id_video=v.id_video and s.id_video='$id'");

           $q=mysql_fetch_array($sql);
          ?>
<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Soal <?php echo $q['judul_video']; ?></h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="form-group">
        <a href="?p=video/soal/soal.php&id=<?php echo $id ?>">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul Soal</th>
            <th>Kategori Video</th>
            <th>Pilihan A</th>
            <th>Pilihan B</th>
            <th>Pilihan C</th>
            <th>Pilihan D</th>
            <th>Kunci Jawaban</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
       <?php
          $no++;
          $mysql = mysql_query("SELECT * FROM soal_kuis s, video v where s.id_video=v.id_video and s.id_video='$id'");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_soal = $ambil['id_soalkuis'];
            $nama_video = $ambil['judul_video'];
            $soal = $ambil['soal'];
            $pil1 = $ambil['pilihan1'];
            $pil2 = $ambil['pilihan2'];
            $pil3 = $ambil['pilihan3'];
            $pil4 = $ambil['pilihan4'];
            $kunci = $ambil['kunci'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $soal; ?></td>
            <td><?php echo $nama_video; ?></td>
            <td><?php echo $pil1; ?></td>
            <td><?php echo $pil2; ?></td>
            <td><?php echo $pil3; ?></td>
            <td><?php echo $pil4; ?></td>
            <td><?php echo $kunci; ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=kuis/soal/del_soal.php&del=$id_soal\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=kuis/soal/edit_soal.php&edit=$id_soal\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>