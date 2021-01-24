<!-- DATA SISWA -->
<div class="col-md-4 box-isi1">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <H2 class="box-title box-isi">DAFTAR ONLINE</H2>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="?psg=siswa/pro_siswa.php" enctype="multipart/form-data">

    <?php
        include 'include/koneksi.php';
        
    ?>
    <input type="hidden" name="kd" value="<?php echo $io; ?>">
      <div class="box-body"> 
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input required type="text" name="nama" class="form-control" autocomplete="off" placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input required type="text" name="email" class="form-control" autocomplete="off" placeholder="Email">
        </div>
        <div class="form-group">
          <label>Tempat Lahir</label>
          <input required type="text" name="ttl1" class="form-control" autocomplete="off" placeholder="Tempat Lahir"><br/>
          <label>Tanggal Lahir</label>
        <input required type="text" class="form-control datepicker" name="ttl" placeholder="Tgl.Lahir" id="tanggal_lahir"/>
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <div class="radio">
            <label>
              <input required type="radio" name="jk" id="optionsRadios1" value="pria" checked>
              Pria &nbsp;
            </label>
            <label>
              <input type="radio" name="jk" id="optionsRadios1" value="wanita">
              Wanita &nbsp;
            </label>
          </div>
        </div>
        <div class="form-group">
          <label>Agama</label>
          <select class="form-control" name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
          </select>
        </div>
        <div class="form-group">
          <label>Anak Ke</label>
          <input type="text" name="anak" class="form-control" autocomplete="off" placeholder="Anak Ke">
        </div>
        <div class="form-group">
          <label>Asal Sekolah</label>
          <input type="text" name="asal" class="form-control" autocomplete="off" placeholder="Asal Sekolah">
        </div>
        <div class="form-group">
          <label>Alamat Rumah</label>
          <input type="text" name="alamat" class="form-control" autocomplete="off" placeholder="Alamat Rumah">
        </div>
        <div class="form-group">
          <label>Telp./Hp</label>
          <input type="text" name="tlpn" class="form-control" autocomplete="off" placeholder="Telp./Hp">
        </div>
        <div class="form-group">
          <label>Facebook</label>
          <input type="text" name="fb" class="form-control" autocomplete="off" placeholder="Facebook">
        </div>
        <div class="form-group">
          <label>PIN BB</label>
          <input type="text" name="pin" class="form-control" autocomplete="off" placeholder="PIN BB">
        </div>

        <div class="box-header with-border">
          <h3 class="box-title titleju">Data Orang Tua / Wali</h3>
        </div><!-- /.box-header -->
          <div class="box-body">      
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama_ortu" class="form-control" autocomplete="off" placeholder="Nama Lengkap">
            </div>
            <!--<div class="form-group">
              <label>Alamat Rumah</label>
              <input type="text" name="alamat_ortu" class="form-control" autocomplete="off" placeholder="Alamat Rumah">
            </div>-->
            <div class="form-group">
              <label>Telp./Hp</label>
              <input type="text" name="tlpn_ortu" class="form-control" autocomplete="off" placeholder="Telp./Hp">
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <input type="text" name="pekerjaan" class="form-control" autocomplete="off" placeholder="Pekerjaan">
            </div>
            <!--<div class="form-group">
              <label>Alamat Pekerjaan</label>
              <input type="text" name="almpeker" class="form-control" autocomplete="off" placeholder="Alamat Pekerjaan">
            </div>-->
          </div><!-- /.box-body -->
        <div class="form-group">
          <label>PILIHAN PROGRAM</label>
          <div class="radio">
           
            <label>
              <input type="radio" name="program" id="optionsRadios1" value="intensif">
              Intensif &nbsp; 
            </label>
          </div>
        </div>
        <div class="form-group">
          <label>PILIHAN KELAS</label>
          <div class="radio">
            <label>
              <input type="radio" name="kelas" id="optionsRadios1" value="prime" checked>
              Prime &nbsp;
            </label>
            <label>
              <input type="radio" name="kelas" id="optionsRadios1" value="fokus">
              Fokus &nbsp;
            </label>
            <label>
              <input type="radio" name="kelas" id="optionsRadios1" value="executive">
              Executive &nbsp;
            </label>
            <label>
              <input type="radio" name="kelas" id="optionsRadios1" value="excellent">
              Excellent &nbsp;
            </label>
            <label>
              <input type="radio" name="kelas" id="optionsRadios1" value="super excellent">
              Super Excellent &nbsp;
            </label>
            <label>
              <input type="radio" name="kelas" id="optionsRadios1" value="super executive">
              Super Executive &nbsp;
            </label>
            <label>
              <input type="radio" name="kelas" id="optionsRadios1" value="expert class">
              Expert Class &nbsp;
            </label>
<label>
              <input type="radio" name="kelas" id="optionsRadios1" value="garansi">
             Garansi &nbsp;
            </label>
   <label>
              <input type="radio" name="kelas" id="optionsRadios1" value="juara umum">
              Juara Umum &nbsp;
            </label>
          </div>
        </div>
        <div class="form-group">
          <label>INFORMASI LAIN</label>
          <div class="info">
            <label>
              <input type="radio" name="info_lain" id="optionsRadios1" value="teman" checked>
              Teman &nbsp;
            </label>
            <label>
              <input type="radio" name="info_lain" id="optionsRadios1" value="guru">
              Guru &nbsp;
            </label>
            <label>
              <input type="radio" name="info_lain" id="optionsRadios1" value="brosur">
              Brosur &nbsp;
            </label>
          </div>
        </div>
          
      </div>
      <div class="box-footer">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>