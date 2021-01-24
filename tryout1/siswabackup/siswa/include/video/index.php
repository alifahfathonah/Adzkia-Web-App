
<div class="box-isi-content">
<?php

include "include/koneksi.php";

 $s=mysql_query("select * from video v, cat c where v.id_cat=c.id_cat order by v.id_video DESC");
while($q=mysql_fetch_array($s))
{


 ?>
 <h3><?php echo $q['judul_video']; ?></h3>
	<video width="600" height="500" controls>
	<source src="../admin/<?php echo $q['video']; ?>" type="video/mp4">
	</video> <br><br>
		<h2>Deskripsi</h2>
		<?php echo $q['deskripsi']; ?>
	
<a href="?p=include/video/kuis.php&id=<?php echo $q['id_video']; ?>">KUIS</a>
<?php 
} 
?>

</div>