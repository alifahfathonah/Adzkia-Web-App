<?php 
session_start();
if(!isset($_SESSION['login']))
{
	?>
	<script language="javascript">
  	<!--
     	    alert('Silahkan Login Terlebih dahulu')
			window.location = "login.php";
			
   	--></script>

	<?php
}
else
{

?>

<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tryout Online</title>
    <!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style_1.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <script type="text/javascript" src="js/jquery.plugin.min.js"></script>
    <script src="plugins/jquery-scrolltofixed-min.js" type="text/javascript"></script>
    
	<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
	<script type="text/javascript" src="js/jquery.countdownTimer.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.countdownTimer.css" />
	<script type="text/javascript">
		$(document).ready(function() {
		   	var stickyNavTop = $('.waktu').offset().top;

		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop();
			         
			    if (scrollTop > stickyNavTop) { 
			        $('.waktu').addClass('sticky');
			    } else {
			        $('.waktu').removeClass('sticky'); 
			    }
			};

			stickyNav();
			$(window).scroll(function() {
				stickyNav();
			});
		});
	</script>

	<style type="text/css">
		.sticky {
		  position: fixed;
		  width: 960px;
		  top: 0;
		  margin-left: -205px;
		  z-index: 100;
		  border-top: 0;
		  padding: 20px;
		  text-align: center;
		  -webkit-box-shadow: 0 5px 5px 0 #000000;
		  box-shadow: 0 2px 5px 0 #000000;
		}
		@media (min-width: 450px) {
			.sticky {
				width: 345px;
				margin-left: 0px;
			}
		}
		@media (min-width: 368px) {
			.sticky {
				width: 345px;
				margin-left: 0px;
			}
		}
		@media (min-width: 768px) {
			.sticky {
				width: 940px;
				margin-left: 0px;
			}
		}
	</style>
</head>
<body>

<div id="wrapper">
	<div id="header">
		<div id="hleft">
			<div class="box-img">
				<img src="img/ADZKIA-STAN.png">
			</div>
		</div>
		<div id="hright">
			<span class="menu-trigger">Menu</span>
			<div class="button-menu">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<div class="box-menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php?p=include/profil.php">Profil</a></li>
					<li><a href="index.php?p=include/jadwal.php">Tryout</a></li>
					<li>
					<a href="index.php?p=include/video/index.php">Materi</a>
					<ul>
						    <li><a href="#">TPA</a></li>
						    <li><a href="#">Bahasa Inggris</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="cleft">
			<div class="top-content">
				<?php if($_REQUEST['p']!="")
				{
					include $_REQUEST['p'];
				}
				else
				{
					include "content.php";
				}

				?>
			</div>
		</div>
		<!--<div id="cright">
			<div class="box-sidebar">
				<div class="box-side">
					<a href="#"><img src="img/bimbel-1.png"></a>
				</div>
				<div class="box-side">
					<a href="#"><img src="img/bimbel-2.png"></a>
				</div>
				<div class="box-side">
					<a href="#"><img src="img/bimbel-3-1.png"></a>
				</div>
			</div>
		</div>-->
	</div>
	<div id="footer">
		<p>Copyright &copy; 2016 AdzkiaSTAN. All Rights Reserved </p>
	</div>
</div>
</body>
	<script type="text/javascript">
		$(".button-menu").click(function(){
			$(".box-menu").slideToggle(400, function(){
				$(this).toggleClass("nav-expanded").css('display', '');
			});
			//alert('kelas');
		});
	</script>
</html>
<?php } ?>