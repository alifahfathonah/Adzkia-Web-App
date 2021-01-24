<?php 
error_reporting(0);
session_start();
if(!isset($_SESSION['login']))
{
	?>
	<script language="javascript">
  	<!--
     	    alert('Silahkan Login Terlebih dahulu')
			window.location = "../index.php";
			
   	--></script>

	<?php
}
else
{
date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE>
<html>
<head>
	<title>Adzkiastan</title>
    <!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/demo.css">
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jQuery1.js"></script>
	<script type="text/javascript" src="js/jquery.countdownTimer.js"></script>
</head>
<body id="bgtexture">
	<div id="wrapper" class="container">
		<?php
			include 'include/header.php';
			//include 'include/menu.php';
			include 'include/slider.php';
		?>
		<div class="row content">
			<div class="contop">
				<?php
					$page=$_GET['p'];
					if (!isset($page)) {
						include 'include/content.php';
					} else {
						$page=$_GET['p'];
						include 'include/'.$page;
					}
				?>
				<div class="col-md-4 box-content">
					<div class="toptitle">
						<p>Login Siswa</p>
					</div>
					<div class="box-login">
						<form action="../login_proses.php" method="post">
							<div class="form-group">
								<input type="text" name="user" class="form-control" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" name="pass" class="form-control" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-success btn-login">Login</button>
						</form>
					</div>
					<div class="toptitle">
						<p>INFORMASI</p>
					</div>
					<div class="box-info">
						<ul class="menuinfo">
							<li>
								<i class="fa fa-file icon">
									<a href="#">Informasi 1</a>
								</i>
							</li>
							<li>
								<i class="fa fa-file icon">
									<a href="#">Informasi 2</a>
								</i>
							</li>
							<li>
								<i class="fa fa-file icon">
									<a href="#">Informasi 3</a>
								</i>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 footer">
				<p>Copyright &copy; 2016 AdzkiaSTAN. All Rights Reserved </p>	
			</div>
		</div>
	</div>
</body>
</html>
<?php
}
?>