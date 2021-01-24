<br><form action="soal_proses.php" method="post">
<h1>Pertanyaan</h1>
<table border="0" cellspacing="0" cellpadding="10">
<?php include "../../include/koneksi.php";
$s=mysql_query("SELECT * FROM soal_try");
$r=1;
while ($w=mysql_fetch_array($s))
{
?>
<tr>
	<td>
	<input type="hidden" name="soal<?php echo $r ?>" value="<?php echo $w['id_soaltry']; ?>" /><?php echo $w['soal']; ?> 
	<input type="hidden" name="siswa" value="1"/>
	<input type="hidden" name="jadwal" value="1"/></td>
    
   
</tr>
<tr><td>
<input type="radio" value="A" name="kunci<?php echo $r; ?>"><?php echo $w['pilihan1'] ?> </td></tr>
<tr><td>
<input type="radio"  value="B" name="kunci<?php echo $r; ?>"><?php echo $w['pilihan2'] ?></td></tr>
<tr><td>
<input type="radio"  value="C" name="kunci<?php echo $r; ?>"><?php echo $w['pilihan3'] ?></td></tr>
<tr><td>
<input type="radio"  value="D" name="kunci<?php echo $r; ?>"><?php echo $w['pilihan4'] ?></td></tr>
<?php $r++; } ?>
</table>
<input type="submit" value="simpan"/>
</form>