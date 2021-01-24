<?php
$tahun=$_REQUEST['tahun'];
$nis=$_REQUEST['nis'];
if($tahun!="")
{

?>
<div class="col-md-12">
  <div class="box"> 
    <div class="box-body"><?php include 'include/koneksi.php';
     $mysql = mysql_query("SELECT *
FROM kuis k
INNER JOIN data_siswa d ON k.nis = d.nis
WHERE d.tahun='$tahun' and d.nis = '$nis'");

          while ($ambil = mysql_fetch_array($mysql)) {
            $id_siswa = $ambil['id_siswa'];
            $nama = $ambil['nama'];
            $nilai_kuis = $ambil['nilai_kuis'];
            $nama_kuis = $ambil['nama_kuis'];
            $nama_kelas = $ambil['nama_kelas'];

          } ?>
	    <div class="form-group"><h1 class="text-center">Nama Siswa : <?php echo $nama ?></h1>
		<table border="1" class="table table-striped table-striped table-bordered" align="center">
		<tr><th colspan="3">Nilai Kuis</th></tr>
		<tr>
			
			  <th>Tanggal</th>
              <th>Nama Kuis</th>
              <th>Nilai Kuis</th>
			
			
			
		</tr>

		<?php 
		$s=mysql_query("SELECT *
FROM kuis k
INNER JOIN data_siswa d ON k.nis = d.nis
WHERE d.tahun='$tahun' and d.nis = '$nis'");
		$no=0;
		
		while($o=mysql_fetch_array($s))
		{
			$no++;
			$id_siswa1 = $o['id_siswa'];
            $nama1 = $o['nama'];
            $tgl = $o['tgl_kuis'];
            $nilai_kuis1 = $o['nilai_kuis'];
            $nama_kuis1 = $o['nama_kuis'];
            $nama_kelas1 = $o['nama_kelas'];
			
			echo "
			<tr>
				
				<td>$tgl</td>
				<td>$nama_kuis1</td>
				<td>$nilai_kuis1</td>
				
			</tr>
			";
		}

		?>
<tr><th colspan="3">Nilai Tryout</th></tr>
	 <tr>
              <th>Tanggal</th>
              <th>Nama Tryout</th>
              <th>Nilai Tryout</th>
            </tr>
   <?php 
     $mysql1 = mysql_query("SELECT * FROM hasil h inner join data_siswa d on h.nis=d.nis where d.tahun='$tahun' and d.nis='$nis'");

          while ($ambil1 = mysql_fetch_array($mysql1)) {
            $id_hasil = $ambil1['id_hasil'];
            $nama1 = $ambil1['nama_hasil'];
            $tgl = $ambil1['tgl_hasil'];

              $nama_hasil = $ambil1['nama_hasil'];
              $tpa_jawab = $ambil1['tpa_jawab'];
              $tpa_benar = $ambil1['tpa_benar'];
              $tpa_salah = $ambil1['tpa_salah'];
              $tpa_kosong = $ambil1['tpa_kosong'];
              $tpa_nilai = $ambil1['tpa_nilai'];
              $tpa_ket = $ambil1['tpa_ket'];
              $bi_jawab = $ambil1['bi_jawab'];
              $bi_benar = $ambil1['bi_benar'];
               $bi_salah = $ambil1['bi_salah'];
               $bi_kosong = $ambil1['bi_kosong'];
               $bi_nilai = $ambil1['bi_nilai'];
               $bi_ket = $ambil1['bi_ket'];
               $total_nilai = $ambil1['total_nilai'];
               $total_ket = $ambil1['total_ket'];
                       ?>
            <tr>
              <td><?php echo $tgl; ?> </td>
              <td><?php echo $nama_hasil; ?></td>
              <td><?php echo $total_nilai; ?></td>
            </tr>
            <?php
          } ?>
		</table>
	    </div>
   	</div>
   </div>
</div>
<?php } 
else
{ ?>
<div class="col-md-12">
  <div class="box">
    <div class="box-body">
	    <div class="form-group"><h1 class="text-center">Adzkia</h1>
		<table border="1" class="table table-striped table-striped table-bordered" align="center">
		<tr>
			<th>No.</th>
			  <th>Tanggal</th>
              <th>Nama Kuis</th>
              <th>Nilai Kuis</th>
			
		</tr>
		<?php
		
			
			echo "
			<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				
			</tr>
			";
		?>

	
		</table>
	    </div>
   	</div>
   </div>
</div>


<?php }
?>
