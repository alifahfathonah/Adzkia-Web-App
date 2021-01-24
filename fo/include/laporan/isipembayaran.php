<?php
$start=$_REQUEST['start'];
$end=$_REQUEST['end'];


if (isset($_REQUEST['p']))
	include "include/koneksi.php";
else
{
	include "../koneksi.php";
	echo '<link href="style_print.css" rel="stylesheet" type="text/css" />';
}
?>
<div class="col-md-12">
  <div class="box">
    <div class="box-body">
	    <div class="form-group"><h1 class="text-center">Adzkia</h1>
		<table border="1" class="table table-striped table-striped table-bordered" align="center">
		<tr>
			<th>No.</th>
			<th>Tanggal</th>
			<th>Nama Siswa</th>
			<th>Cicilan ke</th>
			<th>Nominal</th>
		</tr>
		<?php
		$s=mysql_query("SELECT * FROM pembayaran p INNER JOIN data_siswa d ON p.id_siswa=d.id_siswa  WHERE p.tgl_bayar>='$start' AND p.tgl_bayar<='$end'");
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
			$nama=$o['nama'];
			$nominal=num($o['nominal']);
			$cicilan=$o['cicilan'];
			$tanggal=$o['tgl_bayar'];
			
			echo "
			<tr>
				<td>$no</td>
				<td>$tanggal</td>
				<td>$nama</td>
				<td>$cicilan</td>
				<td align='right'>Rp. $nominal</td>
			</tr>
			";
		}

		?>

		<tr>
		<td colspan=3 align=center>Total</td>
		<?php $p=mysql_query("select sum(nominal) as bayar from pembayaran where tgl_bayar>='$start' AND tgl_bayar<='$end' "); 
		$g=mysql_fetch_array($p);
		$n=num($g['bayar']);

		?>

		<td align=right>Rp. <?php echo $n; ?></td>
		</tr>
		</table>
	    </div>
   	</div>
   </div>
</div>
