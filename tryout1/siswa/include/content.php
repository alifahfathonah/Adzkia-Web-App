<div class="col-md-8 box-content">
	<div class="toptitle">
		<p>NEW POST</p>
	</div>
	<div class="col-md-12 midcontent">
		<?php 
			include 'koneksi.php';
			$sql = mysql_query("SELECT * FROM artikel");
			while ($ambil = mysql_fetch_array($sql)) {
				$judul = $ambil['judul'];
				$isi = $ambil['isi'];
				$tgl = $ambil['tanggal'];
		?>
		<div class="row">
			<div class="box-midcontent">
				<div class="box-contmid">
					<div class="img-box">
						<img src="img/ars-1.jpg">
					</div>
					<div class="judul-box">
						<h2><a href="#"><?php echo $judul; ?></a></h2>
					</div>
					<div class="author">
						<span><?php echo $tgl; ?></span>
						<span>admin</span>
					</div>
					<div class="isi-box">
						<p>
							<?php echo substr($isi,0,350); ?>
						</p>
						<a href="#" class="readmore">Readmore</a>
					</div>
				</div>	
			</div>
		</div>
		<?php } ?>
	</div>
</div>