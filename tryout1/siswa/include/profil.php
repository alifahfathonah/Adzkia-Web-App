<div class="col-md-8 box-content">
  <div class="toptitle">
    <p>profil</p>
  </div>
  <h3><a>Biodata Anda</a></h3>
  <br>
  <div class="isi_soal">
    
    <?php
      include 'include/koneksi.php';
       $user=$_SESSION['id_user'];

$now = date("Y-m-d");
$p=mysql_query("select * from user u, data_siswa d where u.id_siswa=d.id_siswa and u.id_user='$user'");
$u=mysql_fetch_array($p);
$siswa=$u['id_siswa'];

      $mysql = mysql_query("SELECT * FROM data_siswa WHERE id_siswa='$siswa' ");
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

        </div>
           <?php } ?>     
        
    
  </div>
  </form>
</div>
