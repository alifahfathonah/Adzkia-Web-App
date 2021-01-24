<h1>Tryout</h1>
<br>
<?php session_start();
 include "include/koneksi.php";
 $user=$_SESSION['id_user'];

date_default_timezone_set('Asia/Jakarta');

$now = date("Y-m-d");
$p=mysql_query("select * from user u, data_siswa d where u.id_siswa=d.id_siswa and u.id_user='$user'");
$u=mysql_fetch_array($p);
$siswa=$u['id_siswa'];


 $ii=mysql_query("select * from mulai where id_siswa='$siswa' and id_jadwaltry='$jadwal'  ");
	$p=mysql_num_rows($ii);
	$v=mysql_fetch_array($ii);
	$selesai=$v['selesai'];
	$date=date("Y-m-d H:i:s");
if($p>0)
{		
		if($date <= $selesai )		
		{
			$ee=mysql_query("select * from mulaibi where id_siswa='$siswa' 
				and id_jadwaltry='$jadwal'");
			$p1=mysql_num_rows($ee);

			if($p1>0)
			{
				echo "Silahkan klik tombol ini untuk melanjutkan 
				<form action=?p=soalbi.php&jadwal=$jadwal&siswa=$siswa method=POST>
			<input type=submit class='btn btn-primary' value=B.Inggris></form>";
			}
			else
			{
				echo "Silahkan klik tombol ini untuk melanjutkan
				<form action=?p=soal.php&jadwal=$jadwal&siswa=$siswa method=POST>
			<input type=submit class='btn btn-primary' value=TPA></form>";
			}
			
		}
		else
		{
			echo "Maaf, Anda sudah menjalankan ujian ini pada hari ini";
		}

}
else
{



	?>
			 Berikut List Tryout Online. Silahkan Pilih Tryout Online.
			 <table id="example1" class="table table-bordered table-striped">
			  <tr>
			            <th>No</th>
			            <th>Tanggal</th>
			            <th>Judul</th>
			            <th>Action</th>
			      </tr>
			<?php $kk=mysql_query("select * from jadwaltry");
			while($kl=mysql_fetch_array($kk))
			{ $no++;

			 ?>
			 	 
				<tr>
			            <th><?php echo $no; ?></th>
			             <th><?php echo $kl['tanggal']; ?></th>
			            <th><?php echo $kl['nama_jadwal']; ?></th>
			            <th><a href="?p=start.php&jadwal=<?php echo $kl['id_jadwaltry']; ?>&siswa=<?php echo $siswa; ?>"><img src="img/file.png" width="30px" height="30px"></a></th>
			    </tr>

			<?php  
			} 
}
?></table>
