-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2017 at 10:29 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `foadzkia`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya_kursus`
--

CREATE TABLE IF NOT EXISTS `biaya_kursus` (
  `id_biaya` int(10) NOT NULL AUTO_INCREMENT,
  `id_paket` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_kantor` int(10) NOT NULL,
  `diskon` int(100) NOT NULL,
  `diskonuang` varchar(100) NOT NULL,
  `total_biaya` int(100) NOT NULL,
  `sisa` int(10) NOT NULL,
  PRIMARY KEY (`id_biaya`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `biaya_kursus`
--

INSERT INTO `biaya_kursus` (`id_biaya`, `id_paket`, `id_siswa`, `id_kantor`, `diskon`, `diskonuang`, `total_biaya`, `sisa`) VALUES
(1, 1, 1, 1, 10, '120000', 1080000, 580000);

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(6) NOT NULL AUTO_INCREMENT,
  `id_kantor` int(10) NOT NULL,
  `kd_reg` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `anak_ke` varchar(15) NOT NULL,
  `asal_sekolah` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tlpon` varchar(20) NOT NULL,
  `fb` varchar(20) NOT NULL,
  `bbm` varchar(20) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `tlpn_ortu` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pil_program` varchar(20) NOT NULL,
  `id_paket` int(10) NOT NULL,
  `info_lain` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_ta` int(10) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `sisapembayaran` varchar(10) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `id_kantor`, `kd_reg`, `nama`, `email`, `tgl`, `tempat_lahir`, `jk`, `agama`, `anak_ke`, `asal_sekolah`, `alamat`, `tlpon`, `fb`, `bbm`, `nama_ortu`, `tlpn_ortu`, `pekerjaan`, `pil_program`, `id_paket`, `info_lain`, `status`, `tgl_daftar`, `gambar`, `id_ta`, `tahun`, `nis`, `sisapembayaran`) VALUES
(1, 1, '1', 'Ramadhani', 'dhany.zone@gmail.com', '1994-07-20', 'Medan', 'pria', 'Islam', '', '', '', '', '', '', '', '', '', 'reguler', 1, 'teman', 'new', '2017-01-11', '', 1, '16', '11010101', '580000');

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE IF NOT EXISTS `example` (
  `id_ex` int(1) NOT NULL AUTO_INCREMENT,
  `orange` varchar(10) NOT NULL,
  PRIMARY KEY (`id_ex`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id_ex`, `orange`) VALUES
(1, 'Daily,Mond'),
(2, 'Daily'),
(3, 'Monday'),
(4, 'Thursday');

-- --------------------------------------------------------

--
-- Table structure for table `gelombang`
--

CREATE TABLE IF NOT EXISTS `gelombang` (
  `id_gel` int(10) NOT NULL AUTO_INCREMENT,
  `nama_gel` varchar(100) NOT NULL,
  PRIMARY KEY (`id_gel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gelombang`
--

INSERT INTO `gelombang` (`id_gel`, `nama_gel`) VALUES
(1, 'pagi'),
(2, 'siang'),
(3, 'sore');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE IF NOT EXISTS `hari` (
  `id_hari` int(10) NOT NULL AUTO_INCREMENT,
  `nama_hari` varchar(100) NOT NULL,
  PRIMARY KEY (`id_hari`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `nama_hari`) VALUES
(1, 'senin'),
(2, 'selasa'),
(3, 'rabu'),
(4, 'kamis'),
(5, 'jumat'),
(6, 'sabtu'),
(7, 'minggu');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `id_hasil` int(50) NOT NULL AUTO_INCREMENT,
  `nis` varchar(10) NOT NULL,
  `tgl_hasil` date NOT NULL,
  `nama_hasil` varchar(100) NOT NULL,
  `tpa_jawab` int(100) NOT NULL,
  `tpa_benar` int(100) NOT NULL,
  `tpa_salah` int(100) NOT NULL,
  `tpa_kosong` int(100) NOT NULL,
  `tpa_nilai` int(100) NOT NULL,
  `tpa_ket` varchar(100) NOT NULL,
  `bi_jawab` int(100) NOT NULL,
  `bi_benar` int(100) NOT NULL,
  `bi_salah` int(100) NOT NULL,
  `bi_kosong` int(100) NOT NULL,
  `bi_nilai` int(100) NOT NULL,
  `bi_ket` varchar(100) NOT NULL,
  `total_nilai` int(100) NOT NULL,
  `total_ket` varchar(100) NOT NULL,
  PRIMARY KEY (`id_hasil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hasil`
--


-- --------------------------------------------------------

--
-- Table structure for table `kantor`
--

CREATE TABLE IF NOT EXISTS `kantor` (
  `id_kantor` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kantor` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kantor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kantor`
--

INSERT INTO `kantor` (`id_kantor`, `nama_kantor`) VALUES
(1, 'fo1');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(10) NOT NULL AUTO_INCREMENT,
  `id_paket` int(10) NOT NULL,
  `id_ruangan` int(10) NOT NULL,
  `id_gel` int(10) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `jumlah_siswa` varchar(100) NOT NULL,
  `id_kantor` int(10) NOT NULL,
  `id_ta` int(10) NOT NULL,
  `nomorkelas` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_paket`, `id_ruangan`, `id_gel`, `nama_kelas`, `jumlah_siswa`, `id_kantor`, `id_ta`, `nomorkelas`) VALUES
(1, 1, 1, 1, 'Prime1', '1', 1, 1, '01'),
(4, 2, 6, 1, 'Fokus1', '0', 1, 1, '01'),
(5, 1, 8, 2, 'Prime1', '0', 2, 1, '01');

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE IF NOT EXISTS `kuis` (
  `id_kuis` int(10) NOT NULL AUTO_INCREMENT,
  `nis` varchar(10) NOT NULL,
  `tgl_kuis` date NOT NULL,
  `nama_kuis` varchar(100) NOT NULL,
  `nilai_kuis` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kuis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kuis`
--


-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(10) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(100) NOT NULL,
  `biaya_paket` varchar(100) NOT NULL,
  `nom` varchar(10) NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `biaya_paket`, `nom`) VALUES
(2, 'Focus Class', '1000000', '02'),
(1, 'Prime Class', '1200000', '01'),
(8, 'Revan Class', '50000000', '08'),
(3, 'Executive Class', '7750000', '03'),
(4, 'Executive Super Class', '15000000', '04'),
(5, 'Excellent Class', '10000000', '05'),
(6, 'Excellent Super Class', '20000000', '06'),
(7, 'Expert Class', '1350000', '07'),
(9, 'CPNS Class', '', '09'),
(10, 'STIS Class', '', '10'),
(13, 'Akpol/Akmil Class', '', '12'),
(14, 'AMG Class', '', '13');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT,
  `id_biaya` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `nominal` int(100) NOT NULL,
  `id_kantor` int(10) NOT NULL,
  `cicilan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_biaya`, `id_siswa`, `tgl_bayar`, `nominal`, `id_kantor`, `cicilan`) VALUES
(1, 1, 1, '2017-01-11', 500000, 1, 'cicilan ke 1');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `id_ruangan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_ruangan` varchar(100) NOT NULL,
  `jumlah_ruangan` varchar(100) NOT NULL,
  `id_kantor` int(10) NOT NULL,
  PRIMARY KEY (`id_ruangan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`, `jumlah_ruangan`, `id_kantor`) VALUES
(1, 'A', '25', 1),
(6, 'B', '35', 1),
(7, 'A', '25', 2),
(8, 'B', '30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `setkelas`
--

CREATE TABLE IF NOT EXISTS `setkelas` (
  `id_setkelas` int(10) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(10) NOT NULL,
  `id_hari` int(10) NOT NULL,
  `prog` varchar(100) NOT NULL,
  PRIMARY KEY (`id_setkelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `setkelas`
--

INSERT INTO `setkelas` (`id_setkelas`, `id_kelas`, `id_hari`, `prog`) VALUES
(1, 1, 1, 'Reguler'),
(2, 1, 3, 'Reguler'),
(3, 4, 1, 'Intensif'),
(4, 3, 3, 'Intensif'),
(5, 5, 1, 'Reguler'),
(6, 5, 2, 'Reguler');

-- --------------------------------------------------------

--
-- Table structure for table `setruang`
--

CREATE TABLE IF NOT EXISTS `setruang` (
  `id_setruang` int(10) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_kantor` int(10) NOT NULL,
  `id_ta` int(10) NOT NULL,
  `nourut` varchar(10) NOT NULL,
  PRIMARY KEY (`id_setruang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setruang`
--

INSERT INTO `setruang` (`id_setruang`, `id_siswa`, `id_kelas`, `id_kantor`, `id_ta`, `nourut`) VALUES
(1, 1, 1, 1, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
  `id_ta` int(10) NOT NULL AUTO_INCREMENT,
  `ta` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_ta`, `ta`, `status`) VALUES
(1, '2016/2017', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `id_kantor` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_kantor`, `username`, `password`, `status`) VALUES
(1, 1, 'admin', 'admin', 'admin'),
(2, 2, 'binjai', 'binjai', 'admin');
