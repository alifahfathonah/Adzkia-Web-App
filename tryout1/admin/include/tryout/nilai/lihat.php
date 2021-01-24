<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Jawaban Tryout</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Soal</th>
            <th>Kunci</th>
            <th>Jawaban</th>
            <th>Nilai</th>
            <th>Status</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $id=$_REQUEST['lihat'];
          $jd=$_REQUEST['jd'];
          $mysql = mysql_query("SELECT * 
FROM jwb_try j, data_siswa d, soal_try s
WHERE j.id_soaltry = s.id_soaltry
AND j.id_siswa = d.id_siswa
AND j.id_siswa = '$id'
AND j.id_jadwaltry = '$jd'");
          while ($ambil = mysql_fetch_array($mysql)) {
            $id_soal = $ambil['id_soaltry'];
            $soal = $ambil['soal'];
            $kunci = $ambil['kunci'];
            $jwb = $ambil['jawaban'];
            $nilai = $ambil['nilai'];
            if($nilai==4)
            {
              $status="Benar";
            }
            else
            {
              $status="Salah";
            }
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $soal; ?></td>
            <td><?php echo $kunci; ?></td>
            <td><?php echo $jwb; ?></td>
            <td><?php echo $nilai; ?></td>
            <td><?php echo $status; ?></td>
           
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>