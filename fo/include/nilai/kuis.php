<?php $kelas=$_REQUEST['kelas']; ?>
<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Input Nilai Kuis</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
  <form role="form" method="post" action="include/nilai/pro_kuis.php" enctype="multipart/form-data">
      <table id="example1" class="table table-bordered table-striped">
      <label>Tanggal Kuis</label>
        <input required type="text" class="form-control datepicker" name="tgl" placeholder="Tanggal" id="tanggal_lahir"/>
         <label>Nama Kuis</label>
        <input required type="text" class="form-control" name="namakuis" placeholder="Nama Kuis"/><br>
        <input type="hidden" name="kelas" value="<?php echo $kelas ?>">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody>

        <?php
          include 'include/koneksi.php';
          $i=1;
          $no++;
          $mysql = mysql_query("SELECT * FROM data_siswa d inner join setruang s on d.id_siswa=s.id_siswa inner join kelas k on s.id_kelas=k.id_kelas where k.id_kelas='$kelas' ");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];
            $ttl1 = $ambil['pil_program'];
            $ttl = $ambil['pil_kelas'];
            $jk = $ambil['jk'];
        ?>
        
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?>
            <input type="hidden" name="siswa<?php echo $i; ?>" value="<?php echo $id_siswa; ?>" ></td>
           <td><input type="text" name="kuis<?php echo $i; ?>"></td>
          </tr>
        
        <?php $i++; } ?></tbody>

      </table><input type="submit" value="simpan" class="btn btn-primary"/></form>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
