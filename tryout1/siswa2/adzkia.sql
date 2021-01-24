-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2016 at 12:59 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `adzkia`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_try`
--

CREATE TABLE IF NOT EXISTS `cat_try` (
  `id_catt` int(4) NOT NULL auto_increment,
  `id_jeniscatt` int(4) NOT NULL,
  `nama_catt` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_catt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cat_try`
--

INSERT INTO `cat_try` (`id_catt`, `id_jeniscatt`, `nama_catt`) VALUES
(1, 1, 'COba'),
(2, 2, 'Tes'),
(3, 1, 'Oke');

-- --------------------------------------------------------

--
-- Table structure for table `confirmasi`
--

CREATE TABLE IF NOT EXISTS `confirmasi` (
  `id_confirm` int(4) NOT NULL auto_increment,
  `kd_reg` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bangk_asal` varchar(50) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_confirm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `confirmasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `daftar_try`
--

CREATE TABLE IF NOT EXISTS `daftar_try` (
  `id_daftar` int(10) NOT NULL auto_increment,
  `id_siswa` int(10) NOT NULL,
  `id_jadwaltry` int(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_daftar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `daftar_try`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(6) NOT NULL auto_increment,
  `kd_reg` varchar(4) NOT NULL,
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
  `alamat_ortu` varchar(50) NOT NULL,
  `tlpn_ortu` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat_pekerjaan` varchar(50) NOT NULL,
  `pil_program` varchar(20) NOT NULL,
  `pil_kelas` varchar(20) NOT NULL,
  `info_lain` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `kd_reg`, `nama`, `email`, `tgl`, `tempat_lahir`, `jk`, `agama`, `anak_ke`, `asal_sekolah`, `alamat`, `tlpon`, `fb`, `bbm`, `nama_ortu`, `alamat_ortu`, `tlpn_ortu`, `pekerjaan`, `alamat_pekerjaan`, `pil_program`, `pil_kelas`, `info_lain`) VALUES
(1, '3', 'Dhani', 'dhany.zone@gmail.com', '2016-07-13', 'Medan', 'pria', 'Islam', '', '', '', '', '', '', '', '', '', '', '', 'reguler', 'standar', 'teman'),
(4, '$kd', '$nama', '$email', '$ttl', '$ttl1', '$jk', '$agama', '$anak', '$asal', '$alamat', '$tlpn', '$fb', '$pin', '$nama_ortu', '$alamat_ortu', '$tlpn_ortu', '$pekerjaan', '$almpeker', '$program', '$kelas', '$info'),
(5, '1', 'sdad', 'asdasd', '2016-07-26', 'asdasd', 'pria', 'Hindu', '', '', '', '', '', '', '', '', '', '', '', 'reguler', 'standar', 'teman'),
(6, '2', 'sadasd', 'asdasd', '2016-07-21', 'asdasd', 'pria', 'Islam', '', '', '', '', '', '', '', '', '', '', '', 'reguler', 'standar', 'teman'),
(7, '2', 'dhani', '$email', '$ttl', '$ttl1', '$jk', '$agama', '$anak', '$asal', '$alamat', '$tlpn', '$fb', '$pin', '$nama_ortu', '$alamat_ortu', '$tlpn_ortu', '$pekerjaan', '$almpeker', '$program', '$kelas', '$info'),
(8, '4', 'aaaa', 'dhany.zone@gmail.com', '2016-08-17', 'medan', 'pria', 'Islam', '3', '4fdfdsf', 'sdfsdsd', 'f345345345', 'qwdqwd', 'dqwd', 'wqdqwd', 'qwdqw', 'dqwdqwd', 'qwdqwdqwd', 'qwqdqwd', 'reguler', 'standar', 'teman');

-- --------------------------------------------------------

--
-- Table structure for table `jadwaltry`
--

CREATE TABLE IF NOT EXISTS `jadwaltry` (
  `id_jadwaltry` int(10) NOT NULL auto_increment,
  `nama_jadwal` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY  (`id_jadwaltry`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jadwaltry`
--

INSERT INTO `jadwaltry` (`id_jadwaltry`, `nama_jadwal`, `tanggal`, `waktu`) VALUES
(1, 'Tryout1', '2016-07-14', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_catt`
--

CREATE TABLE IF NOT EXISTS `jenis_catt` (
  `id_jeniscatt` int(4) NOT NULL auto_increment,
  `nama_jeniscatt` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_jeniscatt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jenis_catt`
--

INSERT INTO `jenis_catt` (`id_jeniscatt`, `nama_jeniscatt`) VALUES
(1, 'TPA'),
(2, 'B.Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `jwb_try`
--

CREATE TABLE IF NOT EXISTS `jwb_try` (
  `id_jwbtry` int(100) NOT NULL auto_increment,
  `id_siswa` int(6) NOT NULL,
  `id_jadwaltry` int(10) NOT NULL,
  `id_soaltry` int(4) NOT NULL,
  `jawaban` varchar(10) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_jwbtry`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `jwb_try`
--

INSERT INTO `jwb_try` (`id_jwbtry`, `id_siswa`, `id_jadwaltry`, `id_soaltry`, `jawaban`, `nilai`) VALUES
(129, 1, 1, 4, 'A', '4'),
(128, 1, 1, 2, 'A', '4'),
(127, 1, 1, 3, 'A', '-1'),
(126, 1, 1, 1, 'A', '-1');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_cat` int(10) NOT NULL auto_increment,
  `nama_cat` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_cat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kategori`
--


-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(10) NOT NULL auto_increment,
  `nama_kelas` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kelas`
--


-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
  `id_soal` int(100) NOT NULL auto_increment,
  `judul` varchar(100) NOT NULL,
  `pil1` varchar(100) NOT NULL,
  `pil2` varchar(100) NOT NULL,
  `pil3` varchar(100) NOT NULL,
  `pil4` varchar(100) NOT NULL,
  `kunci` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_soal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `soal`
--


-- --------------------------------------------------------

--
-- Table structure for table `soal_try`
--

CREATE TABLE IF NOT EXISTS `soal_try` (
  `id_soaltry` int(10) NOT NULL auto_increment,
  `id_catt` int(4) NOT NULL,
  `soal` varchar(100) NOT NULL,
  `pilihan1` varchar(100) NOT NULL,
  `pilihan2` varchar(100) NOT NULL,
  `pilihan3` varchar(100) NOT NULL,
  `pilihan4` varchar(100) NOT NULL,
  `kunci` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_soaltry`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `soal_try`
--

INSERT INTO `soal_try` (`id_soaltry`, `id_catt`, `soal`, `pilihan1`, `pilihan2`, `pilihan3`, `pilihan4`, `kunci`) VALUES
(1, 1, 'APakah', 'A', 'B', 'C', 'D', 'D'),
(2, 2, 'Bagaimana', 'A', 'B', 'C', 'D', 'A'),
(3, 3, 'Okelah', 'A', 'B', 'C', 'D', 'C'),
(4, 2, 'Benarkah', 'A', 'B', 'C', 'D', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL auto_increment,
  `id_siswa` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_siswa`, `username`, `password`, `status`) VALUES
(1, 1, 'kdkd', 'kdkd', 'siswa'),
(2, 1, 'Dhani8Roxs3T', '8Roxs3T', 'siswa');
