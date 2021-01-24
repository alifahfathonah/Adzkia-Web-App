<?php
$start=$_REQUEST['start'];
$end=$_REQUEST['end'];
$disable="";
if (!isset($start) && !isset($end)) {
    $disable="disabled";
}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Bulanan
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Laporan</a></li>
        <li class="active">Bulanan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<section>
    <form>
        <input type="hidden" name="p" value="laporan/laporanbulanan.php">
        <!-- date picker-->
        <div class="form-group">
            <label>Date range:</label>
            <div class="input-daterange input-group col-xs-4" id="datepicker">
                <input type="text" class="input-sm form-control" name="start" />
                <span class="input-group-addon">to</span>
                <input type="text" class="input-sm form-control" name="end" />
            </div>
        </div><!-- /.form group -->
        <div class="form-group">
            <div class="input-group col-xs-4">
              <button type="submit" class="btn btn-default">Lihat</button>
            </div>
        </div>
    </form>
	<form action="include/laporan/print_bulanan.php" target="_blank">
        <input type="hidden" name="start" value="<?php echo $start?>">
        <input type="hidden" name="end" value="<?php echo $end?>">
		<div class="form-group">
            <div class="input-group col-xs-4">
              <button type="submit" class="btn btn-default" <?php echo $disable;?>>Print</button>
            </div>
        </div>
	</form>
</section>
<section>
	<?php include "include/laporan/isi_bulanan.php" ?>
</section>
</section><!-- /.content -->

<script src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
             $(function() {
                $('.input-daterange').datepicker({
                    format: "yyyy-mm-dd",
                    language: "id",
                    autoclose: true,
                    todayHighlight: true
                });
             });
        </script>