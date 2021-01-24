<?php
error_reporting(0);
session_start();
$status=$_SESSION['status'];
$kantor=$_SESSION['kantor'];
$id_user=$_SESSION['id_user'];

/*if($status!="admin")
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
{*/
  ?>

<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashbord Adzkia</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" type="text/css" href="plugins/datatables/dataTables.bootstrap.css">

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
    "insertdatetime media table contextmenu paste jbimages"
  ],

  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================

  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

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
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <?php include 'include/footer.php' ?>
      </footer>
    </div>
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="plugins/jQueryUI/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <script>
        $('.datepicker').datepicker({
          format:'yyyy-mm-dd',
          autoclose:true,
          todayHighlight:true
        });
    </script>
    <script src="dist/js/app.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
<?php //} ?>
