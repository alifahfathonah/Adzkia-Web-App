<?php include "include/koneksi.php";

$sql=mysql_query("select * from materi");
while($q=mysql_fetch_array($sql))
{ ?>
<div class="box-isi-content">
  <h3><a href="#"><?php echo $q['nama_materi']; ?></a></h3>
  </div>
<div class="box-content">
  <a href="#"><img src="img/ars-1.jpg"></a>
</div>
<div class="box-isi-content">
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
  </p>
  <a href="#" class="readmore">Kuis</a>
</div>
<?php } ?> 