<?php

if (isset($_REQUEST['p']))
	include "../koneksi.php";
else
{
	include "../koneksi.php";
	echo '<link href="style_print.css" rel="stylesheet" type="text/css" />';
}
?>
<style type="text/css">
  .tu{font-size: 20px}


</style>
<img src="adzkia.jpg">
<table border="0" class="table table-striped table-striped table-bordered" align="left">

<?php


		$tangkap = $_REQUEST['deta'];
      $mysql = mysql_query("SELECT * FROM data_siswa WHERE id_siswa='$tangkap' ");
      $ambil = mysql_fetch_array($mysql);
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
	<tr >
        <td colspan="2"><h1>Biodata Siswa</h1></td>
        </tr>
      <tr class="tu">
      <td>Nama Lengkap</td>
      <td>:</td>
      <td ><?php echo $nama; ?></td>
       </tr>
      <tr class="tu"><td>
         Tempat Lahir</td><td>:</td>
         <td><?php echo $ttl1; ?></td></tr>
         <tr class="tu">
         <td>Tanggal Lahir</td><td>:</td>
         <td> <?php echo $ttl; ?></td>
       </tr>
      <tr class="tu"><td>
         Jenis Kelamin</td><td>:</td>
        <td><?php echo $jk; ?></td>
       </tr>
      <tr class="tu"><td>
         Agama</td><td>:</td>
        <td><?php echo $agama; ?></td>
        </tr>
        
      <tr class="tu"><td>
         Anak Ke</td><td>:</td>
         <td><?php echo $anak; ?></td>
         </tr>
        
      <tr class="tu"><td>
         Asal Sekolah</td><td>:</td>
          <td><?php echo $asal_sekolah; ?></td>
          </tr>
        
      <tr class="tu"><td>
         Alamat Rumah</td><td>:</td>
         <td><?php echo $alamat;?></td>
         </tr>
        
      <tr class="tu"><td>
         Telp./Hp</td><td>:</td>
         <td><?php echo $tlpn; ?> </td>
         </tr>
        
      <tr class="tu"><td>
         Facebook</td><td>:</td>
         <td><?php echo $fb; ?></td>
         </tr>
        
      <tr class="tu"><td>
         PIN BB</td><td>:</td>
          <td><?php echo $pin; ?></td>
          </tr>
        

        <tr>
        <td colspan="2"><b>Data Orang Tua / Wali</b></td>
        </tr>
          <tr class="tu"><td>
             Nama Lengkap</td><td>:</td>
            <td><?php echo $nama_ortu; ?></td>
            </tr>

            
          <tr class="tu"><td>
             Telp./Hp</td><td>:</td>
              <td><?php echo $tlpn_ortu; ?></td>
              </tr>
            
          <tr class="tu"><td>
             Pekerjaan</td><td>:</td>
            <td><?php echo $pekerjaan; ?></td>
            </tr>
            
         
            
          <!-- /.box-body -->
      <tr class="tu"><td>
         PILIHAN PROGRAM</td><td>:</td>
       <td><?php echo $program; ?></td>
       </tr>
        
      <tr class="tu"><td>
         PILIHAN KELAS</td><td>:</td>
         <td><?php echo $kelas; ?></td>
         </tr>
        
      <tr class="tu">
      <td>INFORMASI LAIN</td>
         <td>:</td>
         <td><?php echo $info; ?></td>
          </tr>
        


</table>
