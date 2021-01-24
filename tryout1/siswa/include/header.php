<div class="row" id="header">
	<div class="col-md-4 header">
		<div class="gambarlogo">
			<img src="img/logo-web-4.png">
		</div>
		<div class="title">
			<!--<h1><a href="#">Adzkiastan</a></h1>-->
		</div>
	</div>
	<div class="col-md-8 header">
		<div class="gambarbanner">
			<!--<img src="images/banner.png">-->
		</div>
    	<?php
    		$page=$_GET['p'];
		?>
		<div class="row">
			<ul class="nav nav-pills menunav" style="margin-left: 300px;">
				<li><a href="index.php" <?php if($page=='') echo"class='current'"; ?>>Home</a></li>
				<li><a href="index.php?p=profil.php" <?php if($page=='profil.php') echo"class='current'"; ?>>Profil</a></li>
				<li><a href="index.php?p=jadwal.php" <?php if($page=='jadwal.php') echo"class='current'"; ?>>Tryout</a></li>
				<li><a href="index.php?p=video/index.php" <?php if($page=='video/index.php') echo"class='current'"; ?>> Video Materi</a></li>
				<li><a href="index.php?p=ebook/index.php" <?php if($page=='ebook/index.php') echo"class='current'"; ?>> Ebook</a></li>
				<li><a href="index.php?p=logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
</div>