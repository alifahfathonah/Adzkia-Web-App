<?php include "include/koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$siswa=$_REQUEST['siswa'];
$jadwal=$_REQUEST['jadwal']; 
$date=date("Y-m-d H:i:s");

$new_time = mktime(date('H'), date('i')+50, date('s'), date('m'), date('d'), date('Y'));
$new_time = date('Y-m-d H:i:s', $new_time);

$s=mysql_query("insert into mulaibi(id_siswa,id_jadwaltry,mulai,selesai) 
	values ('$siswa','$jadwal','$date','$new_time')")

?>
<script language="javascript">
  	<!--
     	  //  alert('Terima Kasih')
			window.location = "index.php?p=soalbi.php&jadwal=<?php echo $jadwal; ?>&siswa=<?php echo $siswa ?>";
			
   	--></script>