<div class="box-isi-content">
<h3><a>Click Tombol Start Untuk Memulai Ujian...</a></h3>
	<?php
	//$username=$_SESSION['nama_user'];
		if($_SESSION['login']==TRUE) {
			
			echo "<a href='index.php?p=include/soal.php' class='readmore' style='margin: 10px; float: left; width:100px; text-align:center; padding: 10px;'>Start</a>";
		} else {
			echo "Anda Belum Terdaftar";
		}
	?>
</div>