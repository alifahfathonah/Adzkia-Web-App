<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Wacana/Penalaran</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="form-group">
        <a href="?p=tryout/soal/wacana.php">
          <button type="submit" class="btn btn-primary tambah">Tambah</button>
        </a> 
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Wacana/Penalaran</th>
            <th>Jenis Soal</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
          include 'include/koneksi.php';
          $no++;
          $mysql = mysql_query("SELECT * FROM wacana ");
          while ($ambil = mysql_fetch_array($mysql)) {
             $id_wacana = $ambil['id_wacana'];
            $wacana = $ambil['nama_wacana'];
            $status = $ambil['jenis'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $wacana; ?></td>
             <td><?php if($status==8)
             {
                echo "Wacana";
             } 
             elseif($status==9)
             {
                echo "Penalaran";
             } ?></td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-trash hapus' href=\"?p=tryout/soal/del_wacana.php&del=$id_wacana\" data-toggle='tooltip' data-placement='top' title='Delete'></a>
                "; ?> 
            </td>
            <td><?php echo "
                      <a class='glyphicon glyphicon-edit' href=\"?p=tryout/soal/soalwacana.php&li=$id_wacana\" data-toggle='tooltip' data-placement='top' title='Edit'></a>
                "; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>