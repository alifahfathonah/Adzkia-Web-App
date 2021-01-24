<?php 
session_start();
$status=$_SESSION['status'];

if($status!="admin")
{ 

  ?>
  <script language="javascript">
    <!--
          alert('Silahkan Login Terlebih dahulu')
      window.location = "../login.php";
      
    --></script>

  <?php
}
else
{
  date_default_timezone_set("Asia/Bangkok");
  ?><!DOCTYPE>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome-4.4.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
 <script  type="text/javascript"  src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
 
tinymce.init({
  selector: "textarea",
  
  // ===========================================
  // INCLUDE THE PLUGIN
  // ===========================================
   
  plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table contextmenu paste jbimages tiny_mce_wiris"
  ],
    
  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================
    
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry tiny_mce_wiris_CAS |link image jbimages ",
    
  // ===========================================
  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
  // ===========================================
    
  relative_urls: false
    
});
 
</script>
  </head>
  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
        <?php
            include 'include/header.php';
        ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php
            include 'include/menu.php';
        ?>
        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">                      
            <?php
              $_GET['p'];
              if (!isset($_GET['p'])) {
                include'include/content.php';
              } else {
                $page = $_GET['p'];
                include 'include/'.$page;
              }
            ?>
          </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <?php include 'include/footer.php' ?>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>    <script>
        $('.datepicker').datepicker({
          format:'yyyy-mm-dd',
          autoclose:true,
          todayHighlight:true
        });
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".status").click(function () {
          $(this).css("background", "green");
        });
      });
    </script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <script type="text/javascript" src="js/wirislib.js"></script>

    <!-- Prism JS script to beautify the HTML code -->
    <script type="text/javascript" src="js/prism.js"></script>
  </body>
</html>
<?php } ?>