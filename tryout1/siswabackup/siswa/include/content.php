<div class="box-isi-content">
	<?php

include "include/koneksi.php";
 $s=mysql_query("select * from info order by id_info DESC");
while($q=mysql_fetch_array($s))
{


 ?>
	<h3><a href="#"><?php echo $q['judul']; ?></a></h3>
	
		<?php echo $q['berita']; ?>

<?php } ?>
</div>