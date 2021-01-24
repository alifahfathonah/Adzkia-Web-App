<?php 
include "../../koneksi.php";
$id=$_REQUEST['id'];
$u=mysql_query("select * from jadwaltry where id_jadwaltry='$id'");
$t=mysql_fetch_array($u);
$tr=$t[tanggal];
function from_date($tr)
{
 $data = explode("-", $tr);
 $bulan = array(
 "error",
 "Januari",
 "Februari",
 "Maret",
 "April",
 "Mei",
 "Juni",
 "Juli",
 "Agustus",
 "September",
 "Oktober",
 "November",
 "Desember"
 );
 return $data[2] . " " . $bulan[intval($data[1])] . " " . $data[0];
}
$tg = from_date($tr);
?>
<style type="text/css">
	
	table{
	margin:0 20px;
}
table tr td, table tr th{
	padding:5px 7px;
}
</style>
<h1 align="center">HASIL TRY OUT USM PKN STAN 2017</h1>
<p align="center">Tanggal <?php echo $t['tanggal']; ?></p>

<table border="1">
<tr align="center">
<th rowspan="3" >Rank</th>
<th rowspan="3" >Nama Siswa</th>
<th rowspan="3" >BPU</th>
<th colspan="12" >Hasil Try Out</th>
<th rowspan="3" >Total Nilai</th>
<th rowspan="3" >Keterangan</th>
</tr>

<tr align="center">
<th colspan="6" >Test Potensi Akademik</th>
<th colspan="6" >Bahasa Inggris</th>
</tr>

<tr align="center">
<th >Jwb</th>
<th >Bnr</th>
<th >Slh</th>
<th >Ksg</th>
<th >Nilai</th>
<th >Ket</th>
<th >Jwb</th>
<th >Bnr</th>
<th >Slh</th>
<th >Ksg</th>
<th >Nilai</th>
<th >Ket</th>
</tr>

<?php
$s=mysql_query("select * from hasil j, data_siswa d where j.id_siswa=d.id_siswa and j.id_jadwaltry='$id' order by total_nilai ASC");
$a=1;
while($q=mysql_fetch_array($s))
{
	?><tr>
	<td align="center"><?php echo $a; ?></td>
	<td align="center"><?php echo $q['nama']; ?></td>
	<td align="center"><?php echo $q['kd_reg']; ?></td>
<td align="center"><?php echo $q['tpa_jawab']; ?></td>
<td align="center"><?php echo $q['tpa_benar']; ?></td>
<td align="center"><?php echo $q['tpa_salah']; ?></td>
<td align="center"><?php echo $q['tpa_kosong']; ?></td>
<td align="center"><?php echo $q['tpa_nilai']; ?></td>
<td align="center"><?php echo $q['tpa_ket']; ?></td>
<td align="center"><?php echo $q['bi_jawab']; ?></td>
<td align="center"><?php echo $q['bi_benar']; ?></td>
<td align="center"><?php echo $q['bi_salah']; ?></td>
<td align="center"><?php echo $q['bi_kosong']; ?></td>
<td align="center"><?php echo $q['bi_nilai']; ?></td>
<td align="center"><?php echo $q['bi_ket']; ?></td>
<td align="center"><?php echo $q['total_nilai']; ?></td>
<td align="center"><?php echo $q['total_ket']; ?></td>
</tr>
	<?php
}


?>

</table>
