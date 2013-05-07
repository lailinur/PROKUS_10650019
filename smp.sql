-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 13. April 2013 jam 15:34
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `user_admin` varchar(20) NOT NULL,
  `pass_admin` varchar(40) NOT NULL,
  PRIMARY KEY (`user_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user_admin`, `pass_admin`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(4) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tgl`) VALUES
(1, 'aneh', 'ljbadlwejdba,sdsafsd', '2013-04-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` varchar(20) NOT NULL,
  `nm_guru` varchar(30) NOT NULL,
  `pass_guru` varchar(20) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nm_guru`, `pass_guru`, `jk`, `agama`, `alamat`) VALUES
('111100001', 'dewi', 'dewina', 'perempuan', 'islam', 'bandung'),
('111100002', 'budiman', 'randi', 'laki-laki', 'islam', 'kulonprogo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `nis` varchar(10) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `th_ajar` varchar(10) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `kd_mapel` (`kd_mapel`),
  KEY `nis` (`nis`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`no`, `nis`, `kd_mapel`, `hari`, `jam`, `nip`, `th_ajar`) VALUES
(2, '10650019', '001', 'kamis', '10.00', '111100001', '2014'),
(3, '10650001', '001', 'senin', '07.00', '111100001', '2014'),
(4, '10650019', '002', 'kamis', '70.00', '111100002', '2014');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `nm_kelas` varchar(20) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `th_ajar` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_kelas`),
  KEY `nis` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nm_kelas`, `nis`, `th_ajar`) VALUES
('07A', '7A', '10650001', '2013');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `kd_mapel` varchar(10) NOT NULL,
  `nm_mapel` varchar(30) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_mapel`),
  KEY `kd_kelas` (`kd_kelas`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `nm_mapel`, `kd_kelas`, `nip`) VALUES
('001', 'matematikai', '07A', '111100001'),
('002', 'bhs inggris', '07A', '111100002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `no` int(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `th_ajar` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `nilai` int(5) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `nis` (`nis`),
  KEY `kd_mapel` (`kd_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`no`, `nis`, `kd_mapel`, `th_ajar`, `semester`, `nilai`) VALUES
(0, '10650019', '001', '2014', 'genap', 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(10) NOT NULL,
  `nm_siswa` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `almt_siswa` text NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `th_ajar` varchar(10) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nm_siswa`, `password`, `almt_siswa`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `th_ajar`, `angkatan`) VALUES
('10650001', 'anis', 'ww', 'yogyakarta', 'bantul', '2004-12-12', 'perempuan', 'islam', '2014', '2009'),
('10650004', 'rena', 'svkq', 'yogyakarta', 'bantul', '1999-03-09', 'perempuan', 'islam', '2014', '2009'),
('10650013', 'beni', 'yy', 'kulonprogo', 'kulonprogo', '1999-03-09', 'laki laki', 'islam', '2014', '2006'),
('10650019', 'tami', 'tami', 'bantul, yogyakarta', 'yogyakarta', '2013-03-03', 'laki laki', 'islam', '2013', '2005'),
('10650020', 'randi', 'pppp', 'yogyakarta', 'yogyakarta', '2004-12-12', 'laki laki', 'islam', '2014', '2006'),
('10650021', 'bowo', 'www', 'pandak', 'pandak', '1999-11-10', 'laki laki', 'islam', '2014', '2009');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`kd_mapel`) REFERENCES `mapel` (`kd_mapel`);

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Ketidakleluasaan untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `mapel_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `mapel_ibfk_2` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`kd_mapel`) REFERENCES `mapel` (`kd_mapel`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
