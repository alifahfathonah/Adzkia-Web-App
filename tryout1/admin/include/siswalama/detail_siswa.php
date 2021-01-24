<!-- DATA SISWA -->
<div class="col-md-5">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title titleju">Detail Siswa</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php
      include 'include/koneksi.php';
      $tangkap = $_REQUEST['deta'];
      $mysql = mysql_query("SELECT * FROM data_siswa WHERE id_siswa='$tangkap' ");
      while ($ambil = mysql_fetch_array($mysql)) {
        $nama = $ambil['nama'];
        $ttl = $ambil['tgl'];
        $ttl1 = $ambil['tempat_lahir'];
        $jk = $ambil['jk'];
        $agama = $ambil['agama'];
        $anak = $ambil['anak_ke'];
        $asal_sekolah = $ambil['asal_sekolah'];
        $alamat = $ambil['alamat'];
        $tlpn = $ambil['tlpon'];
        $fb = $ambil['fb'];
        $pin = $ambil['bbm'];
        $nama_ortu = $ambil['nama_ortu'];
        $alamat_ortu = $ambil['alamat_ortu'];
        $tlpn_ortu = $ambil['tlpn_ortu'];
        $pekerjaan = $ambil['pekerjaan'];
        $almpeker = $ambil['alamat_pekerjaan'];
        $program = $ambil['pil_program'];
        $kelas = $ambil['pil_kelas'];
        $info = $ambil['info_lain'];
    ?>
    <form role="form" method="post" action="?p=siswa/pro_edit.php" enctype="multipart/form-data">

      <div class="box-body">
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input disabled type="text" name="nama" class="form-control" autocomplete="off" value="<?php echo $nama; ?>">
        </div>
        <div class="form-group">
          <label>Tempat Lahir</label>
          <input type="text" disabled name="ttl1" class="form-control" autocomplete="off" placeholder="Tempat Lahir" value="<?php echo $ttl1; ?>"><br/>
          <label>Tanggal Lahir</label>
          <input type="text" disabled class="form-control datepicker" name="ttl" placeholder="Tgl.Lahir" id="tanggal_lahir" value="<?php echo $ttl; ?>"/>
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <div class="radio">
            <label>
              <input disabled type="radio" name="jk" id="optionsRadios1" value="pria" <?php if($jk=='pria'){echo 'checked';} ?>>
              Pria &nbsp;
            </label>
            <label>
              <input disabled type="radio" name="jk" id="optionsRadios1" value="wanita" <?php if($jk=='wanita'){echo 'checked';} ?>>
              Wanita &nbsp;
            </label>
          </div>
        </div>
        <div class="form-group">
          <label>Agama</label>
          <select disabled class="form-control" name="agama">
            <option value="Islam" <?php if ($agama=="Islam") { echo "selected=\"selected\""; } ?>>Islam</option>
            <option value="Kristen" <?php if ($agama=="Kristen") { echo "selected=\"selected\""; } ?>>Kristen</option>
            <option value="Katolik" <?php if ($agama=="Katolik") { echo "selected=\"selected\""; } ?>>Katolik</option>
            <option value="Budha" <?php if ($agama=="Budha") { echo "selected=\"selected\""; } ?>>Budha</option>
            <option value="Hindu" <?php if ($agama=="Hindu") { echo "selected=\"selected\""; } ?>>Hindu</option>
          </select>
        </div>
        <div class="form-group">
          <label>Anak Ke</label>
          <input disabled type="text" name="anak" class="form-control" autocomplete="off" value="<?php echo $anak; ?>">
        </div>
        <div class="form-group">
          <label>Asal Sekolah</label>
          <input disabled type="text" name="asal" class="form-control" autocomplete="off" value="<?php echo $asal_sekolah; ?>">
        </div>
        <div class="form-group">
          <label>Alamat Rumah</label>
          <input disabled type="text" name="alamat" class="form-control" autocomplete="off" value="<?php echo $alamat; ?>">
        </div>
        <div class="form-group">
          <label>Telp./Hp</label>
          <input disabled type="text" name="tlpn" class="form-control" autocomplete="off" value="<?php echo $tlpn; ?>">
        </div>
        <div class="form-group">
          <label>Facebook</label>
          <input disabled type="text" name="fb" class="form-control" autocomplete="off" value="<?php echo $fb; ?>">
        </div>
        <div class="form-group">
          <label>PIN BB</label>
          <input disabled type="text" name="pin" class="form-control daterange" autocomplete="off" value="<?php echo $pin; ?>">
        </div>

        <div class="box-header with-border">
          <h3 class="box-title titleju">Data Orang Tuan / Wali</h3>
          </div><!-- /.box-header -->
          <div class="box-body">      
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input disabled type="text" name="nama_ortu" class="form-control" autocomplete="off" value="<?php echo $nama_ortu; ?>">
            </div>
            <div class="form-group">
              <label>Alamat Rumah</label>
              <input disabled type="text" name="alamat_ortu" class="form-control" autocomplete="off" value="<?php echo $alamat_ortu; ?>">
            </div>
            <div class="form-group">
              <label>Telp./Hp</label>
              <input disabled type="text" name="tlpn_ortu" class="form-control" autocomplete="off" value="<?php echo $tlpn_ortu; ?>">
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <input disabled type="text" name="pekerjaan" class="form-control daterange" autocomplete="off" value="<?php echo $pekerjaan; ?>">
            </div>
            <div class="form-group">
              <label>Alamat Pekerjaan</label>
              <input disabled type="text" name="almpeker" class="form-control" autocomplete="off" value="<?php echo $almpeker; ?>">
            </div>
          </div><!-- /.box-body -->
        <div class="form-group">
          <label>PILIHAN PROGRAM</label>
          <div class="radio">
            <label>
              <input disabled type="radio" name="program" id="optionsRadios1" value="reguler" <?php if($program=='reguler'){echo 'checked';} ?>>
              Reguler &nbsp;
            </label>
            <label>
              <input disabled type="radio" name="program" id="optionsRadios1" value="intensif" <?php if($program=='intensif'){echo 'checked';} ?>>
              Intensif &nbsp; 
            </label>
          </div>
        </div>
        <div class="form-group">
          <label>PILIHAN KELAS</label>
          <div class="radio">
            <label>
              <input disabled type="radio" name="kelas" id="optionsRadios1" value="standar" <?php if($kelas=='standar'){echo 'checked';} ?>>
              Standar &nbsp;
            </label>
            <label>
              <input disabled type="radio" name="kelas" id="optionsRadios1" value="fokus" <?php if($kelas=='fokus'){echo 'checked';} ?>>
              Fokus &nbsp;
            </label>
            <label>
              <input disabled type="radio" name="kelas" id="optionsRadios1" value="excekutive" <?php if($kelas=='excekutive'){echo 'checked';} ?>>
              Excekutive &nbsp;
            </label>
            <label>
              <input disabled type="radio" name="kelas" id="optionsRadios1" value="excellent" <?php if($kelas=='excellent'){echo 'checked';} ?>>
              Excellent &nbsp;
            </label>
            <label>
              <input disabled type="radio" name="kelas" id="optionsRadios1" value="super excekutive" <?php if($kelas=='super excekutive'){echo 'checked';} ?>>
              Super Excekutive &nbsp;
            </label>
          </div>
        </div>
        <div class="form-group">
          <label>INFORMASI LAIN</label>
          <div class="info">
            <label>
              <input disabled type="radio" name="info_lain" id="optionsRadios1" value="teman" <?php if($info=='teman'){echo 'checked';} ?>>
              Teman &nbsp;
            </label>
            <label>
              <input disabled type="radio" name="info_lain" id="optionsRadios1" value="guru" <?php if($info=='guru'){echo 'checked';} ?>>
              Guru &nbsp;
            </label>
            <label>
              <input disabled type="radio" name="info_lain" id="optionsRadios1" value="brosur" <?php if($info=='brosur'){echo 'checked';} ?>>
              Brosur &nbsp;
            </label>
          </div>
        </div>

      <div class="box-footer">
        <button type="reset" class="btn btn-primary" onclick=self.history.back()>Kembali</button>
      </div>
    </form>
    <?php } ?>
  </div>
</div>
<!-- END DATA SISWA -->
