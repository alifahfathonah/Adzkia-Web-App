<?php
include "include/koneksi.php";
   $siswa=$_REQUEST['siswa'];
$jadwal=$_REQUEST['jadwal'];

//TPA
	$o=mysql_query("select * from hasil h, jadwaltry jd, data_siswa d where h.id_siswa=d.id_siswa and jd.id_jadwaltry=h.id_jadwaltry and h.id_siswa='$siswa' and h.id_jadwaltry='$jadwal'");
	$m=mysql_fetch_array($o);

	
	?>
<div class="box-body">
 <div class="form-group">
          <h2>Hasil Tryout Anda</h2>
          <h2>Total Nilai <?php echo $m['total_nilai'];?></h2>
          <h2>Keterangan <?php echo $m['total_ket'];?></h2>
         
        </div>
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input disabled type="text" name="nama" class="form-control" autocomplete="off" value="<?php echo $m['nama'] ?>">
        </div>
        <div class="form-group">
          <label>Test Potensi Akademik</label>
         
        </div>
        <div class="form-group">
          <label>Jawab</label>
          <input disabled type="text" name="anak" class="form-control" autocomplete="off" value="<?php echo $m['tpa_jawab'] ?>">
        <div class="form-group">
          <label>Benar</label>
          <input disabled type="text" name="asal" class="form-control" autocomplete="off" value="<?php echo $m['tpa_benar'] ?>">
        </div>
        <div class="form-group">
          <label>Salah</label>
          <input disabled type="text" name="alamat" class="form-control" autocomplete="off" value="<?php echo $m['tpa_salah'] ?>">
        </div>
        <div class="form-group">
          <label>Kosong</label>
          <input disabled type="text" name="tlpn" class="form-control" autocomplete="off" value="<?php echo $m['tpa_kosong'] ?>">
        </div>
        <div class="form-group">
          <label>Nilai</label>
          <input disabled type="text" name="fb" class="form-control" autocomplete="off" value="<?php echo $m['tpa_nilai'] ?>">
        </div>
        <div class="form-group">
          <label>Keterangan</label>
          <input disabled type="text" name="pin" class="form-control daterange" autocomplete="off" value="<?php echo $m['tpa_ket'] ?>">
        </div>
            <div class="form-group">
          <label>Bahasa Inggris</label>
         
        </div>
        <div class="form-group">
          <label>Jawab</label>
          <input disabled type="text" name="anak" class="form-control" autocomplete="off" value="<?php echo $m['bi_jawab'] ?>">
        <div class="form-group">
          <label>Benar</label>
          <input disabled type="text" name="asal" class="form-control" autocomplete="off" value="<?php echo $m['bi_benar'] ?>">
        </div>
        <div class="form-group">
          <label>Salah</label>
          <input disabled type="text" name="alamat" class="form-control" autocomplete="off" value="<?php echo $m['bi_salah'] ?>">
        </div>
        <div class="form-group">
          <label>Kosong</label>
          <input disabled type="text" name="tlpn" class="form-control" autocomplete="off" value="<?php echo $m['bi_kosong'] ?>">
        </div>
        <div class="form-group">
          <label>Nilai</label>
          <input disabled type="text" name="fb" class="form-control" autocomplete="off" value="<?php echo $m['bi_nilai'] ?>">
        </div>
        <div class="form-group">
          <label>Keterangan</label>
          <input disabled type="text" name="pin" class="form-control daterange" autocomplete="off" value="<?php echo $m['bi_ket'] ?>">
        </div>  
</div>

