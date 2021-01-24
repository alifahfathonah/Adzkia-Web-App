<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        Admin
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="index.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="pages/widgets.html">
          <i class="fa fa-th"></i> <span>Data</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="?p=siswa/tam_siswa.php"><i class="fa fa-circle-o"></i>Siswa</a></li>
          <li><a href="?p=siswa/tam_paket.php"><i class="fa fa-circle-o"></i>Paket Belajar</a></li>
           <li><a href="?p=ruangan/tam_ruangan.php"><i class="fa fa-circle-o"></i>Ruangan Belajar</a></li>
            <li><a href="?p=jadwal/tam_jadwal.php"><i class="fa fa-circle-o"></i>Kelas</a></li>
            <li><a href="?p=siswa/tam_foto.php"><i class="fa fa-circle-o"></i>Foto</a></li>
         </ul>
      </li>
      <li>  <a href="#">
            <i class="fa fa-th"></i> <span>Pembayaran</span><i class="fa fa-angle-left pull-right"></i>
        </a>
            <ul class="treeview-menu">
             <li class="active">
             <a href="?p=bayar/tam_bayar.php"><i class="fa fa-circle-o"></i>Bayar</a>
             </li>
              <li class="active">
             <a href="?p=bayar/tam_jadwal.php"><i class="fa fa-circle-o"></i>Kelas</a>
             </li>

            </ul>
      </li>

            <li>  <a href="#">
            <i class="fa fa-th"></i> <span>Kuis</span><i class="fa fa-angle-left pull-right"></i>
        </a>
            <ul class="treeview-menu">
             <li class="active">
             <a href="?p=nilai/tam_nilaisiswa.php"><i class="fa fa-circle-o"></i>Siswa</a>
             </li>
             <li class="active">
             <a href="?p=nilai/import.php"><i class="fa fa-circle-o"></i>Import</a>
             </li>
            </ul>
           </li>

            <li>  <a href="#">
            <i class="fa fa-th"></i> <span>Tryout</span><i class="fa fa-angle-left pull-right"></i>
        </a>
            <ul class="treeview-menu">
            <li class="active">
             <a href="?p=tryout/tam_nilaisiswa.php"><i class="fa fa-circle-o"></i>Siswa</a>
             </li>
              <li class="active">
             <a href="?p=tryout/import.php"><i class="fa fa-circle-o"></i>Import</a>
             </li>
            </ul>
           </li>
           <li>  <a href="#">
            <i class="fa fa-th"></i> <span>Pencarian</span><i class="fa fa-angle-left pull-right"></i>
        </a>
            <ul class="treeview-menu">
            <li class="active">
             <a href="?p=siswa/pencarian.php"><i class="fa fa-circle-o"></i>Siswa</a>
             </li>
              <li class="active">
             <a href="?p=jadwal/carikelas.php"><i class="fa fa-circle-o"></i>Kelas</a>
             </li>
            </ul>
           </li>
 <li>  <a href="#">
            <i class="fa fa-th"></i> <span>Laporan</span><i class="fa fa-angle-left pull-right"></i>
        </a>
            <ul class="treeview-menu">
             <li class="active">
             <a href="?p=laporan/laporanpembayaran.php"><i class="fa fa-circle-o"></i>Pembayaran</a>
             </li>
             <li class="active">
             <a href="?p=laporan/laporankuis.php"><i class="fa fa-circle-o"></i>Kuis</a>
             </li>
            </ul>
           </li>
 <li>  <a href="#">
            <i class="fa fa-th"></i> <span>User</span><i class="fa fa-angle-left pull-right"></i>
        </a>
            <ul class="treeview-menu">
             <li class="active"><a href="?p=user/tam_user.php"><i class="fa fa-circle-o"></i>User</a>
            </ul>
           </li>
       
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
</section>