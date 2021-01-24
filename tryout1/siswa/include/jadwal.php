<div class="col-md-8 box-content">
	<div class="toptitle">
		<p>jadwal tryout</p>
	</div>
	<br>
	<?php session_start();
	 include "include/koneksi.php";
	 $user=$_SESSION['id_user'];

	date_default_timezone_set('Asia/Jakarta');

	$now = date("Y-m-d");
	$p=mysql_query("select * from user u, data_siswa d where u.id_siswa=d.id_siswa and u.id_user='$user'");
	$u=mysql_fetch_array($p);
	$siswa=$u['id_siswa'];


	$s=mysql_query("select * from jadwaltry order by id_jadwaltry DESC");
	$w=mysql_fetch_array($s);
	$tgl=$w['tanggal'];

	//$date = date('Y-m-d', strtotime('+30 day', $tgl));
	$o=mysql_query("select * from jadwaltry where tanggal>='$now' and tanggal<='$tgl'");
	$z=mysql_fetch_array($o);
	$t=mysql_num_rows($o);
	$nama=$z['nama_jadwal'];
	$jadwal=$w['id_jadwaltry'];
	echo $tgl;

	if($t<1)
	{

		echo "Maaf Tidak Ada Jadwal Tryout Dalam Waktu Dekat Ini <br>
	Anda disarankan menggunakan Browser <b>Mozilla Firefox</b> atau <b>Google Chrome</b> sebelum memulai Tryout Online<br><br>";
		
	}
	else
	{	
		
		$ij=mysql_query("select * from hasil h, jadwaltry j where h.id_siswa='$siswa' and h.id_jadwaltry='$jadwal' and h.bi_kosong!='' and j.tanggal='$now' ");
	  	$po=mysql_num_rows($ij);
		if($po>0)
		{
			echo "Maaf Anda Sudah Mengikuti Jadwal Tryout Pada Hari ini.<br> Anda disarankan menggunakan Browser <b>Mozilla Firefox</b> atau <b>Google Chrome</b> sebelum memulai Tryout Online<br><br>";
		}
		else
		{
		$ii=mysql_query("select * from mulai where id_siswa='$siswa' and id_jadwaltry='$jadwal'");
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
				echo "Maaf, Anda sudah menjalankan ujian ini";
			}

			
		}
		else
		{
		$o1=mysql_query("select * from jadwaltry where tanggal>='$now' and tanggal<='$tgl'");
		$z1=mysql_fetch_array($o1);
		$t1=mysql_num_rows($o1);
		$tr=$z1[tanggal];
				function from_date($tr)
				{
					 $data = explode("-", $tr);
					 $bulan = array(
					 "error",
					 "Januari",
					 "Februari",
					 "Maret",
					 "April",
					 "Mei",
					 "Juni",
					 "Juli",
					 "Agustus",
					 "September",
					 "Oktober",
					 "November",
					 "Desember"
					 );
					 return $data[2] . " " . $bulan[intval($data[1])] . " " . $data[0];
				}
			$tg = from_date($tr);

				if($now!=$tgl)
				{
				echo "Jadwal Tryout yang akan datang pada tanggal $tg <br>";
				}
				else
				{
					echo "Bobot penilaian : Benar skor 4, salah skor -1, kosong skor 0. <br>
				Nilai mati untuk TPA : Benar < 40 soal <br>
				Nilai mati untuk TBI  : Benar < 20 soal <br><br>

	Anda disarankan menggunakan Browser <b>Mozilla Firefox</b> atau <b>Google Chrome</b> sebelum memulai Tryout Online<br><br>

	Mohon untuk tidak menekan tombol <b>REFRESH (F5)</b> dan tombol <b>Back (tanda panah kesamping kiri)</b> pada <b>Browser</b> Anda selama mengikuti Tryout Online karena dapat mempengaruhi proses ujian anda<br><br>
				Tekan Tombol Mulai untuk melanjutkan Tryout<br><br>
				<form action=?p=start.php&jadwal=$jadwal&siswa=$siswa method=POST>
				<input type=submit class='btn btn-primary' value=Mulai></form>
				";
				}
		}
		}
	}


	?>
</div>