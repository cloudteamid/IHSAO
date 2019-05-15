-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2019 at 12:35 AM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihsaopcr_ihsao`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(250) NOT NULL,
  `password_admin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `password_admin`) VALUES
('admin', 'admin'),
('admin', 'ihsao2019');

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id_beranda` int(11) NOT NULL,
  `info_beranda` longtext NOT NULL,
  `p_tl` tinytext NOT NULL,
  `tm_tl` tinytext NOT NULL,
  `pa_tl` tinytext NOT NULL,
  `au_tl` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id_beranda`, `info_beranda`, `p_tl`, `tm_tl`, `pa_tl`, `au_tl`) VALUES
(1, 'adalah sebuah acara dimana para pelajar SMA dan SMK dapat menunjukkan kemampuannya dalam bidang Akuntansi dan sebagai barometer bagi para pelajar SMA dan SMK di Pulau Sumatera dalam menguasai dan menerapkan ilmu Akuntansi. Acara ini diharapkan dapat memotivasi para pelajar untuk melanjutkan jenjang pendidikan dalam program Akuntansi.\r\n\r\nDengan diselenggarakannya Inter High School Olympiad (IHSAO) diharapkan menjadi sebuah kontribusi besar dan motivasi dalam dunia pendidikan dan jembatan bagi para pelajar muda untuk berkompetisi secara sehat. Inter High School Olympiad (IHSAO) merupakan ajang adu ketangkasan intelektual dalam ilmu Akuntansi bagi pelajar SMA dan SMK se-Sumatera.', '01 Juni 2019 s/d\r\n\r\n01 Juli 2019', 'Politeknik Caltex Riau\r\n\r\n05 Juli 2019', 'Auditorium Politeknik Caltex Riau\r\n\r\n06 Juli 2019', 'Auditorium Politeknik Caltex Riau\r\n\r\n06 Juli 2019');

-- --------------------------------------------------------

--
-- Table structure for table `gelombang`
--

CREATE TABLE `gelombang` (
  `id_gel` int(11) NOT NULL,
  `gel_ke` int(11) NOT NULL,
  `keterangan` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gelombang`
--

INSERT INTO `gelombang` (`id_gel`, `gel_ke`, `keterangan`) VALUES
(1, 1, 'Gelombang I\r\n1 Juni 2019 - 17 Juni 2019'),
(2, 1, 'Cerdas Cermat \r\nRp.300.000 (Penginapan)\r\nRp.280.000 (Tanpa Penginapan)'),
(3, 1, 'Olimpiade \r\nRp.300.000 (Penginapan)\r\nRp.280.000 (Tanpa Penginapan)'),
(4, 1, 'MYOB \r\nRp.300.000 (Penginapan)\r\nRp.280.000 (Tanpa Penginapan)'),
(5, 1, 'Debat \r\nRp.270.000 (Penginapan)\r\nRp.250.000 (Tanpa Penginapan)'),
(6, 1, 'Karya Ilmiah \r\nRp.250.000 (Tanpa Penginapan)'),
(7, 2, 'Gelombang II\r\n20 Juni 2019 - 1 Juli 2019'),
(8, 2, 'Cerdas Cermat \r\nRp.320.000 (Penginapan)\r\nRp.300.000 (Tanpa Penginapan)'),
(9, 2, 'Olimpiade \r\nRp.320.000 (Penginapan)\r\nRp.300.000 (Tanpa Penginapan)'),
(10, 2, 'MYOB \r\nRp.320.000 (Penginapan)\r\nRp.300.000 (Tanpa Penginapan)'),
(11, 2, 'Debat \r\nRp.300.000 (Penginapan)\r\nRp.280.000 (Tanpa Penginapan)'),
(12, 2, 'Karya Ilmiah \r\nRp.250.000 (Tanpa Penginapan)\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `info_lomba`
--

CREATE TABLE `info_lomba` (
  `id_info` int(11) NOT NULL,
  `informasi_lomba` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_lomba`
--

INSERT INTO `info_lomba` (`id_info`, `informasi_lomba`) VALUES
(1, 'Lomba cerdas cermat yaitu lomba dimana terdiri dari masing-masing perwakilan sekolah yaitu 1 regu. 1 regu terdiri dari 3 orang peserta. Dilomba ini ada beberapa tim yang akan bertanding adu ketajaman berpikir dan ketangkasan menjawab pertanyaan secara cepat dan tepat.'),
(2, 'Lomba Olimpiade yaitu lomba adu ketepatan dalam menjawab soal. Lomba ini terdiri dari 2 sesi yaitu multiple choice dan study kasus. Untuk lomba ini, tiap sekolah mengirimkan 1 regu yang terdiri dari 3 orang.'),
(3, 'Lomba MYOB yaitu lomba yang terdiri dari 1 tim  dari masing-masing sekolah yang tiap timnya terdiri dari 3 orang. Para peserta nantinya akan menjawab soal dari panitia dengan menggunakan aplikasi MYOB Premier 13.'),
(6, 'Acara bertujuan agar peserta dapat mengkompetisikan kemampuannya, peserta juga akan memiliki niat dan pandangan untuk menjadi generasi akuntansi yang gemilang. Peserta juga akan menunjukkan dan mengkompetisikan kemampuannya dibidang akuntansi baik dalam teori maupun praktik, peserta juga nantinya dapat menganalisis akuntansi di era kini, meningkatkan kemampuan intelektual dan pengaplikasiannya dalam kehidupan nyata, serta meningkatkan kualitas dan kemampuan siswa- siswi dalam memecahkan masalah-masalah akuntansi.'),
(7, 'Lomba Debat yaitu lomba yang terdiri dari 1 regu berkompetisi dengan 1 regu lainnya. 1 regu dari\r\ntiap perwakilan sekolah terdiri dari 3 orang. Dikompetisi debat akuntansi ini, panitia akan\r\nmemberikan tema yang akan dilombakan / didebatkan, lalu nantinya setiap regu akan\r\nmendebatkan dan mengargumentasikan tema yang telah ditentukan panitia.'),
(8, 'Lomba Karya Ilmiah yaitu lomba dimana peserta terdiri dari 1 orang dari setiap perwakilan\r\nsekolah. Lomba ini mengkompetisikan setiap peserta dengan idenya dalam suatu karya tertulis\r\nyaitu karya ilmiah. Karya ilmiah ini dapat dibuat atau dipersiapkan sebelum perlombaan, dan\r\npada saat perlombaan nanti, peserta hanya akan mengumpulkan hasil karya ilmiah yang telah\r\ndibuat dan dipresentasikan di acara.');

-- --------------------------------------------------------

--
-- Table structure for table `kisi_lomba`
--

CREATE TABLE `kisi_lomba` (
  `id_kisi` int(11) NOT NULL,
  `id_info` int(11) NOT NULL,
  `k_lomba` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kisi_lomba`
--

INSERT INTO `kisi_lomba` (`id_kisi`, `id_info`, `k_lomba`) VALUES
(1, 1, 'Untuk soal wajib semua regu akan mendapatkan 5 soal wajib dalam 1 sesi.'),
(2, 1, 'Soal wajib untuk masing-masing regu dipilih secara acak oleh peserta yang akan dibantu panitia.'),
(3, 1, 'Saat soal wajib telah selesai dibacakan oleh pembaca soal, setiap regu yang diberi kesempatan akan diberikan waktu 1 menit untuk menjawab.'),
(4, 1, 'Untuk soal wajib setelah 1 menit berlalu bel tanda waktu telah habis akan berbunyi dan juri akan memberikan waktu selama 3 detik, jika peserta tidak juga menjawab maka akan diberikan kesempatan pada regu yang lain.'),
(5, 1, 'Apabila regu menekan bel sebelum soal selesai dibacakan oleh pembaca soal maka regu tersebut tidak diperbolehkan menjawab soal, dan soal akan diperebutkan oleh regu lain. A.2 Cerdas Cermat Soal Rebutan'),
(6, 1, 'Untuk soal rebutan semua regu akan mendapatkan 10 soal rebutan dalam 1 sesi.'),
(7, 1, 'Untuk soal rebutan regu lain bisa menekan bel setelah juri mengatakan \'salah\'.'),
(8, 1, 'Regu yang berhak menjawab setiap pertanyaan rebutan adalah regu yang ditunjuk oleh juri.');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_peserta` int(8) NOT NULL,
  `nama_sekolah` tinytext NOT NULL,
  `alamat_sekolah` tinytext NOT NULL,
  `no_telp_sekolah` tinytext NOT NULL,
  `nama_pembimbing` tinytext NOT NULL,
  `nip_pembimbing` tinytext NOT NULL,
  `no_telp_pembimbing` tinytext NOT NULL,
  `jenis_lomba` tinytext NOT NULL,
  `asal_daerah` tinytext NOT NULL,
  `nama_calon_peserta1` tinytext NOT NULL,
  `kelas_calon_peserta1` tinytext NOT NULL,
  `alamat_calon_peserta1` tinytext NOT NULL,
  `nohp_calon_peserta1` tinytext NOT NULL,
  `nama_calon_peserta2` tinytext NOT NULL,
  `kelas_calon_peserta2` tinytext NOT NULL,
  `alamat_calon_peserta2` tinytext NOT NULL,
  `nohp_calon_peserta2` tinytext NOT NULL,
  `nama_calon_peserta3` tinytext NOT NULL,
  `kelas_calon_peserta3` tinytext NOT NULL,
  `alamat_calon_peserta3` tinytext NOT NULL,
  `nohp_calon_peserta3` tinytext NOT NULL,
  `kode` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_peserta`, `nama_sekolah`, `alamat_sekolah`, `no_telp_sekolah`, `nama_pembimbing`, `nip_pembimbing`, `no_telp_pembimbing`, `jenis_lomba`, `asal_daerah`, `nama_calon_peserta1`, `kelas_calon_peserta1`, `alamat_calon_peserta1`, `nohp_calon_peserta1`, `nama_calon_peserta2`, `kelas_calon_peserta2`, `alamat_calon_peserta2`, `nohp_calon_peserta2`, `nama_calon_peserta3`, `kelas_calon_peserta3`, `alamat_calon_peserta3`, `nohp_calon_peserta3`, `kode`, `status`) VALUES
(13, 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'Olimpiade', 'Riau', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '', 'Verified'),
(15, 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'Olimpiade', 'Kepulauan Riau', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', 'randomPassword()', 'Verified'),
(20, 'sma 1', 'jl.telaga sari', '0852', 'vivi', '1762', '0853', 'Cerdas Cermat', 'Riau', 'vivi', '11', 'jl.rumbai', '096', 'vika', '11', 'jl.rumbai', '0896', 'vita', '11', 'jl.rumbai', '0896', 'ZHP670EIyw', 'Verified'),
(18, 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaa', '2222222222222', '2aaaaaaaaaaaaaa', 'a2222222', '2222222222222', 'Olimpiade', 'Lampung', 'aaaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaaaaaa', '3333333', 'aaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaa', '22222222222', 'aaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaa', '1111111111111', 'jUxZIMJrRK', 'Unverified'),
(19, 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaa', '2222222222222', '2aaaaaaaaaaaaaa', 'a2222222', '2222222222222', 'Olimpiade', 'Lampung', 'aaaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaaaaaa', '3333333', 'aaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaa', '22222222222', 'aaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaa', '1111111111111', '03fZLzapMd', 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `peraturan_lomba`
--

CREATE TABLE `peraturan_lomba` (
  `id_peraturan` int(11) NOT NULL,
  `id_info` int(11) NOT NULL,
  `p_lomba` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peraturan_lomba`
--

INSERT INTO `peraturan_lomba` (`id_peraturan`, `id_info`, `p_lomba`) VALUES
(1, 1, 'Cerdas cermat terdiri dari 3 orang dalam 1 regu.'),
(2, 1, '1 sekolah maksimal mengirimkan 2 tim.'),
(4, 1, 'Peserta berada di ruangan cerdas cermat 5 menit sebelum sesi Cerdas Cermat dimulai.'),
(5, 1, 'Jika peserta datang terlambat maka Regu yang bersangkutan akan didiskualifikasi.'),
(6, 1, 'Peserta dilarang menggunakan alat bantu hitung dalam bentuk apapun.'),
(7, 1, 'Regu yang termasuk ke babak semifinal 8 regu, kemudian regu yang masuk final ada 4 regu diambil dari poin tertinggi dari tiap sesi.'),
(12, 6, 'Peserta ujian menaati peraturan yang ditetapkan oleh panitia ujian.'),
(13, 6, 'Peserta hadir 15 menit sebelum ujian atau acara dimulai.'),
(14, 6, 'Tidak ada tambahan waktu untuk peserta yang terlambat.'),
(15, 6, 'Peserta wajib memakai seragam sekolah.'),
(16, 6, 'Peserta wajib menggunakan nametag saat perlombaan berlangsung.'),
(17, 6, 'Peserta dilarang mencontek dan memberikan contekan.'),
(18, 6, 'Peserta tidak diperbolehkan membawa peralatan atau alat bantu apapun kecuali kalkulator.'),
(19, 6, 'Peserta hanya diperbolehkan menggunakan perlengkapan yang disediakan oleh panitia.'),
(20, 6, 'Dilarang merokok dan membuang sampah sembarangan di area kampus Politeknik Caltex Riau.'),
(21, 20, 'Peserta wajib menggunakan name tag selama ujian berlangsung.\r\n'),
(22, 20, 'Dilarang bekerjasama, baik memberi contekan maupun menerima contekan.'),
(23, 20, 'Peserta diizinkan keluar kelas sebelum pengawas ujian memberi instruksi bahwa ujian dimulai.'),
(24, 20, 'Selama ujian berlangsung, peserta tidak diizinkan meninggalkan kelas sebelum waktu ujian selesai.\r\n'),
(25, 20, 'Tulislah nama lengkap dan nama asal sekolah pada soal dan amplop soal.\r\n'),
(26, 20, 'Peserta menjawab langsung pada lembar soal.\r\n'),
(27, 20, 'Jika option dianggap benar boleh dilingkari atau disilang.\r\n'),
(28, 20, 'Untuk memberikan tanda pada option yang dianggap benar wajib menggunakan pena.\r\n'),
(29, 20, 'Dalam satu soal hanya terdiri dari satu jawaban, jika option yang di pilih lebih dari satu maka dianggap salah.\r\n'),
(30, 20, 'Jawaban yang salah tidak akan mengurangi nilai peserta.\r\n'),
(31, 20, 'Peserta ujian diperkenankan menjawab soal yang diberikan ketika ada instruksi \"mulai\" dari pengawas ujian, dan peserta berhenti menjawab soal ketika instruksi \"berhenti\" dari pengawas.'),
(32, 20, 'Yang diserahkan kembali kepada pengawas adalah soal dan amplop soal.\r\n'),
(33, 20, 'Bagi peserta yang sudah selesai mengerjakan soal, tetap berada di tempat duduk masing-masing.\r\n'),
(34, 20, 'Peserta hanya diperbolehkan bertanya kepada pengawas jika soal tidak jelas, rusak atau kurang lengkap.\r\n'),
(35, 20, 'Ujian berlangsung selama 120 menit (2 jam).\r\n'),
(36, 20, 'Peserta ujian tidak diperbolehkan menggunakan alat bantu hitung apapun.\r\n'),
(37, 2, 'Peserta wajib menggunakan name tag selama ujian berlangsung.\r\n'),
(38, 2, 'Dilarang bekerjasama, baik memberi contekan maupun menerima contekan.\r\n'),
(39, 2, 'Peserta diizinkan keluar kelas sebelum pengawas ujian memberi instruksi bahwa ujian dimulai.'),
(40, 2, 'Selama ujian berlangsung, peserta tidak diizinkan meninggalkan kelas sebelum waktu ujian selesai.\r\n'),
(41, 2, 'Tulislah nama lengkap dan nama asal sekolah pada lembar jawaban dan amplop soal.'),
(42, 2, 'Peserta ujian diperkenankan menjawab soal yang diberikan ketika ada instruksi \"mulai\" dari pengawas ujian, dan peserta berhenti menjawab soal ketika instruksi \"berhenti\" dari pengawas.'),
(43, 2, 'Yang diserahkan kembali kepada pengawas adalah soal, lembar jawaban dan amplop soal.\r\n'),
(44, 2, 'Bagi peserta yang sudah selesai mengerjakan soal , tetap berada di tempat duduk masing-masing dan melapor kepada pengawas ujian.\r\n'),
(45, 2, 'Peserta hanya diperbolehkan bertanya kepada pengawas jika soal tidak jelas, rusak atau kurang lengkap.\r\n'),
(46, 2, 'Ujian berlangsung selama 90 menit.\r\n'),
(47, 2, 'Peserta ujian diperbolehkan menggunakan kalkulator.\r\n\r\n'),
(48, 2, 'Bagi yang tidak membawa kelengkapan sesuai peraturan ujian pada poin 11, dipersilahkan melapor kepada pengawas ujian.\r\n'),
(49, 3, 'Peserta dilarang menggunakan alat bantu hitung dalam bentuk apapun selama ujian berlangsung.\r\n'),
(50, 3, 'Tiap sekolah wajib mengirimkan 2 tim yang setiap timnya terdiri dari 3 orang.\r\n'),
(51, 3, 'Peserta ujian diperkenankan menjawab soal yang diberikan ketika ada instruksi \"mulai\" dari pengawas ujian, dan peserta berhenti menjawab soal ketika instruksi \"berhenti\" dari pengawas.'),
(52, 3, 'Waktu untuk mengerjakan soal adalah 120 menit (2 jam).'),
(53, 3, 'Pastikan di PC/laptop sudah ter-install MYOB Premier 13. Jika belum silahkan menghubungi pengawas untuk mendapatkan bantuan.\r\n'),
(54, 3, 'Setiap peserta diminta membuat satu folder di Desktop dengan nama masing-masing. Semua file disimpan kedalam folder tersebut. Baik masing-masing. Baik file MYOB ataupun folder Backup dan Laporan.'),
(55, 3, 'Jika ada permasalahan teknis seperti aliran listrik padam atau laptop anda mati tiba-tiba silahkan menghubungi pengawas yang bertugas untuk mendapatkan bantuan dan anda akan diberikan waktu tambahan berdasarkan keputusan pengawas.\r\n'),
(56, 3, 'Tidak diperkenankan untuk berkomunikasi dengan peserta lainnya.\r\n'),
(57, 3, 'Tidak diperkenankan meninggalkan ruangan tanpa izin dari pengawas.\r\n'),
(58, 3, 'Soal dan kertas lainnya yang digunakan dikembalikan kepada pengawas setelah selesai mengerjakan.\r\n'),
(59, 3, 'Selama ujian berlangsung peserta tidak diizinkan meninggalkan lab sebelum waktu ujian selesai.'),
(60, 7, 'Tiap sekolah maksimal mengirimkan 2 tim yang tiap timnya terdiri dari 3 orang.'),
(61, 7, 'Penentuan nomor tim dan tema debat dilakukan dengan pengundian pada hari\r\nperlombaan 06 Juli 2019.'),
(62, 7, 'Penentuan nomor tim dan tema debat dilakukan dengan pengundian pada hari\r\nperlombaan 06 Juli 2019.'),
(63, 7, 'Debat berlangsung dengan 2 tim yang saling bertolak belakang dalam memihak mosi (Pihak\r\nPro dan Pihak Kontra). Dengan Pihak Pro yang mendukung mosi, serta Pihak Kontra yang\r\nmenolak mosi.'),
(64, 7, 'Setiap tim terdiri dari 3 pembicara utama, masing - masing diawali oleh pembicara Affirmative\r\n(pro) dan diakhiri oleh pembicara Negative (kontra).'),
(65, 7, 'Debat menggunakan satu sesi yaitu sesi Debat Parlementer'),
(66, 9, 'Debat diawali oleh pembicara pertama dari tim Affirmative, kemudian diteruskan oleh\r\npembicara pertama daari tim Negative. Lalu dilanjutkan oleh pembicara kedua dari tim\r\nAffirmative, dan seterusnya sampai diakhiri oleh pembicara ketiga dari tim Negative.'),
(67, 9, 'Setiap pembicara diharapkan berbicara dalam selang waktu 2\'00\'\' - 2\'20\'\'. Apabila\r\npembicara berbicara dibawah waktu 2\'00\'\', maka pembicara dinyatakan under-time.\r\nSedangkan apabila pembicara berbicara lebih dari waktu 2\'20\'\', maka pembicara\r\ndinyatakan over-time. Baik under-time maupun over-time akan mempengaruhi penilaian.'),
(68, 9, 'Pembicara yang sedang tidak berbicara diperbolehkan untuk menyampaiakn interupsi/\r\nPoints of Information (POI) dari menit 1\'00\'\' sampai dengan 2\'00\'\'.'),
(69, 9, 'POI yang disampaikan maksimum selama 15 detik.'),
(71, 9, 'Setiap pembicara dari 1 tim diharapkan membawa argumen yang berbeda. Pembawaan\r\nargumen yang sama / berulang akan berdampak pada penilaian tim.'),
(72, 9, 'Time Keeper akan memberi sinyal waktu kepada pembicara yang berbicara dengan\r\nmengetuk sekali untuk mengisyaratkan bahwa pembicara sudah berbicara selama satu\r\nmenit. Di menit kedua dan di menit akhir, time keeper mengetuk sebanyak 2 kali, dan\r\npembicara diharapkan menyelesaikan pembicaraan / pidatonya. Dan time keeper akan\r\nmengetuk secara non-stop bila waktu berbicara melebihi waktu 2\'20\'\''),
(73, 11, 'Kesimpulan cukup diambil oleh salah satu pembicara dari masing-masing tim,\r\nkecuali pembicara ketiga.'),
(74, 11, 'Setiap pembicara diberi waktu untuk berbicara selama 1\'00\'\' sampai 1\'20\'\' tanpa\r\ninterupsi (POI) untuk meringkas debat atau untuk me-review apa yang terjadi\r\nselama perdebatan.'),
(75, 11, 'under-time maupun over-time akan mempengaruhi penilaian.'),
(76, 9, 'Sistem kompetisi yang digunakan adalah sistem gugur.'),
(78, 10, 'Peserta tidak boleh emosi.'),
(79, 10, 'Peserta tidak boleh berbicara yang menjelek-jelekkan SARA tertentu.'),
(80, 10, 'Peserta tidak boleh memukul-mukul meja.'),
(81, 10, 'Peserta tidak boleh memprovokasi lawan.'),
(82, 9, 'Jika terjadi pelanggaran, peserta / regu akan didiskualifikasi dan dinyatakan gugur.'),
(83, 9, 'Peserta wajib datang dalam technical meeting pada hari Sabtu, 05 Juli 2019.'),
(84, 9, 'Keputusan juri bersifat final dan tidak dapat diganggu gugat.'),
(85, 8, 'Tiap sekolah mengirimkan 1 peserta'),
(86, 8, 'Peserta menyiapkan karya ilmiah dengan tema \"Tantangan dan Peluang Akuntan dalam\r\nEra Revolusi Industri 4.0\" yang telah dibuat sebelumnya.'),
(87, 8, 'Peserta memberikan hasil karya ilmiah kepada panitia pada saat perlombaan'),
(88, 8, 'Hasil karya ilmiah ditulis sesuai dengan tema yang ditentukan.'),
(89, 8, 'Hasil karya ilmiah dikumpul tanggal 03 Juli 2019'),
(90, 8, 'Peserta mempersiapkan softfile presentasi karya ilmiah.'),
(91, 8, 'Peserta nantinya akan mempresentasikan hasil karya ilmiah yang telah dibuat\r\nsebelumnya dengan durasi waktu maksimal 5 menit.'),
(92, 8, 'Peserta membawa softfile hasil karya ilmiah yang telah dibuat sebelumnya.'),
(93, 12, 'Menjelaskan background yang terjadi'),
(94, 12, 'Menjelaskan definisi mosi'),
(95, 12, 'Menjelaskan Tim (Goal)'),
(96, 12, 'Menjelaskan argument'),
(97, 13, 'Menjelaskan sanggahan atas argumen pembicara pertama tim Affirmative'),
(98, 13, 'Menjelaskan tujuan tim'),
(99, 13, 'Menjelaskan argumen'),
(100, 14, 'Menjelaskan sanggahan atas argumen/ sanggahan pembicara pertama dari tim Negative'),
(101, 14, 'Menjelaskan point dari sudut pandang tim Affirmetive'),
(102, 14, 'Menjelaskan argument'),
(103, 15, 'Menjelaskan sanggahan atas argumen/ sanggahan pembicara kedua dari tim Affirmative'),
(104, 15, 'Menjelaskan point dari\r\nsudut pandang tim\r\nNegative'),
(105, 15, 'Menjelaskan argument'),
(106, 16, 'Menjelaskan sanggahan atas argumen/ sanggahan pembicara kedua dari tim Negative'),
(107, 17, 'Menjelaskan sanggahan atas argumen/ sanggahan pembicara ketiga dari tim Affirmative');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id_gambar` int(11) NOT NULL,
  `kode_gambar` tinytext NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id_gambar`, `kode_gambar`, `file`) VALUES
(21, 'aaaaaaaa - aaaaaa - aaaaaaa', 'KPPS2.jpg'),
(22, 'aaa', 'Inst-image-7.jpg'),
(23, 'aa', ''),
(24, 'aa', ''),
(25, 'ZHP670EIyw', 'Transkip nilai.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id_beranda`);

--
-- Indexes for table `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`id_gel`),
  ADD KEY `gel_ke` (`gel_ke`);

--
-- Indexes for table `info_lomba`
--
ALTER TABLE `info_lomba`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `kisi_lomba`
--
ALTER TABLE `kisi_lomba`
  ADD PRIMARY KEY (`id_kisi`),
  ADD KEY `id_info` (`id_info`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `peraturan_lomba`
--
ALTER TABLE `peraturan_lomba`
  ADD PRIMARY KEY (`id_peraturan`),
  ADD KEY `id_info` (`id_info`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id_beranda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `id_gel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `info_lomba`
--
ALTER TABLE `info_lomba`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kisi_lomba`
--
ALTER TABLE `kisi_lomba`
  MODIFY `id_kisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_peserta` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `peraturan_lomba`
--
ALTER TABLE `peraturan_lomba`
  MODIFY `id_peraturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
