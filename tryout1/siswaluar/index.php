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
	include "include/koneksi.php";
$id=$_SESSION['id_user'];
//echo $id;
$qu=mysql_query("select * from data_siswa d, user u where d.id_siswa=u.id_siswa and u.id_user='$id'");
$wh=mysql_fetch_array($qu);
$id_siswa=$wh['id_siswa'];
//echo $id_siswa;
$date=date("Y-m-d");
?>

<!DOCTYPE>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style_1.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <script type="text/javascript" src="js/jquery.plugin.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
    <script src="plugins/jquery-scrolltofixed-min.js" type="text/javascript"></script>
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
		  width: 100%;
		  top: 0;
		  margin-left: -205px;
		  z-index: 100;
		  border-top: 0;
		  padding: 20px;
		  text-align: center;
		  -webkit-box-shadow: 0 5px 5px 0 #000000;
		  box-shadow: 0 2px 5px 0 #000000;
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
			<div class="box-menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="cleft">
			<div class="top-content">
				<?php 
				$sql=mysql_query("select * from daftar_try d, jadwaltry j where d.id_jadwaltry=j.id_jadwaltry 
					and d.id_siswa='$id_siswa' and j.tanggal='$date' ");
				$x=mysql_num_rows($sql);


				if($_REQUEST['p']!="")
				{
					include $_REQUEST['p'];
				}
				else
				{
					if($x>=1){
						include "start.php";	
					}
					else
					{
						include "content.php";
					}
					
				}

				?>
			</div>
			
		</div>
		<div id="cright">
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
		</div>
	</div>
	<div id="footer">
		<p>Copyright &copy; 2016 AdzkiaSTAN. All Rights Reserved </p>
	</div>
</div>
</body>
</html>
<?php } ?>