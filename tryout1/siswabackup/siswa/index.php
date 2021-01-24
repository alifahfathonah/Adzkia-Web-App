<?php session_start();
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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/demo.css">
		<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
</head>
<body id="bgtexture">
	<div id="wrapper" class="container">
		<?php
			include 'include/header.php';
			include 'include/menu.php';
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