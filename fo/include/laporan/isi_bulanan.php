<?php
$start=$_REQUEST['start'];
$end=$_REQUEST['end'];


if (isset($_REQUEST['p']))
	include "config.php";
else
{
	include "../../config.php";
	echo '<link href="style_print.css" rel="stylesheet" type="text/css" />';
}
?>
<h1 class="text-center">KSU Mitra Bisnis Mandiri</h1>
<h4 class="text-center">Jl. Kopra Raya No. 41 Komp. Ruko P. Simalingkar Medan </h4>
<h4 class="text-center">(061) 836 7599 </h4>
<table border="1" class="table table-striped table-striped table-bordered" align=center">
<tr>
	<th>No.</th>
	<th>Tanggal</th>
	<th>No Kontrak</th>
	<th>Nama</th>
	<th width='120'>Jumlah Pinjaman</th>
	<th>Bunga</th>
	<th>Sudah Bayar</th>
	
</tr>
<?php
$s=mysql_query("SELECT bb.no_kontrak, n.nama_nasabah as nama, b.jumlah as jlh, bb.total as sudah_bayar, bb.tgl as tanggal, bb.bunga , sisa
FROM bayarbulanan bb 
LEFT JOIN bulanan b ON bb.no_kontrak=b.no_kontrak
LEFT JOIN nasabah n ON bb.no_ktp=n.no_ktp 
WHERE bb.tgl>='$start' AND bb.tgl<='$end'");
$no=0;
function num($rp){  
if($rp!=0){  
 $o = number_format($rp, 2, ',', '.');  
 }  
 else{  
 $o=0;  
 }  
return $o;  
}  
while($o=mysql_fetch_array($s))
{
	$no++;
	$no_kontrak=$o['no_kontrak'];
	$nama_nasabah=$o['nama'];
	$jumlah=num($o['jlh']);
	$sudah_bayar=num($o['sudah_bayar']);
	$tanggal=$o['tanggal'];
	$bunga=num($o['bunga']);
	$sisa=num($o['sisa']);
	
	echo "
	<tr>
		<td>$no</td>
		<td>$tanggal</td>
		<td>$no_kontrak</td>
		<td>$nama_nasabah</td>
		<td align='right'>$jumlah</td>
		<td align='right'>$bunga</td>
		<td align='right'>$sudah_bayar</td>
	
	</tr>
	";
}

?>

<tr>
<td colspan=5 align=center>Total</td>
<?php $p=mysql_query("select sum(total) as bayar, bunga from bayarbulanan where tgl>='$start' AND tgl<='$end' "); 
$g=mysql_fetch_array($p);
$n=num($g['bayar']);
$bunga=num($g['bunga']);

?>
<td align=right><?php echo $bunga; ?></td>
<td align=right><?php echo $n; ?></td>
</tr>
</table>