-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 02:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smuhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `nama_lengkap`, `password`, `email`, `no_telp`, `images`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '081332739326', 'user-256.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda_alumni`
--

CREATE TABLE `tbl_agenda_alumni` (
  `id_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `alumni` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `id_alumni` int(11) NOT NULL,
  `nama_alumni` varchar(50) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `images` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` text NOT NULL,
  `alamat_rumah` varchar(100) NOT NULL,
  `kantor` varchar(30) NOT NULL,
  `alamat_kantor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `images_berita` text NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `tanggal`, `deskripsi`, `images_berita`, `id_admin`) VALUES
(1, 'Tunjangan Khusus Penyandang Disabilitas di Jakarta', '2019-08-29', 'Liputan6.com, Jakarta - Kartu Penyandang Disabilitas Jakarta atau KPDJ resmi diluncurkan pada Rabu 28 Agustus 2019. Pada tahun ini, KPDJ disalurkan kepada 7.137 penyandang disabilitas.\r\n,<br><br>\r\nPenyaluran KPDJ bertujuan membantu para penyandang disabilitas memenuhi kebutuhan dasar. Serta, mengakses pelayanan dasar secara wajar sesuai ketentuan. KPDJ diharapkan pula meningkatkan kesejahteraan penyandang disabilitas.\r\n<br><br>\r\nSaat peluncuran kartu, Gubernur DKI Jakarta Anies Baswedan berpesan agar bank penyalur memperlakukan para pemegang kartu dengan baik. Para penyandang disabilitas harus diperlakukan sebagai customer platinum.', 'pp1.jpg', 1),
(2, 'Pertimbangan Keamanan, Petugas di 2 Bandara Perintis Papua Ditarik', '2019-08-30', 'Liputan6.com, Jakarta - Dua bandara perintis di Papua ditutup sementara akibat kerusuhan yang terjadi kemarin. Bandara perintis yang ditutup adalah Bandara Waghete di Kabupaten Deiyai dan Bandara Moanemani di Kabupaten Dogiyai, Papua.\r\n<br><br>\r\nSekretaris Perusahaan Airnav Indonesia Novy Pantaryanto mengatakan, pihaknya sudah menarik petugas Airnav Indonesia yang ditugaskan di kedua bandara tersebut  sambil menunggu situasi kembali kondusif.\r\n<br><br>\r\nSemenatra ini hanya dua bandara itu yang petugasnya ditarik. Sedangkan bandara lain di Papua beroperasi normal. \"Kalau (Bandara) di Sentani masih oke, malah kita kita tambah jam operasinya dari 18 jam jadi 24 jam,\" ia menandaskan.', 'pp2.jpg', 1),
(3, 'Kala Lagu Tanah Papua Teteskan Air Mata di CFD Bundaran HI', '2019-09-01', 'Liputan6.com, Jakarta - Suasana meriah di konser masyarakat Papua saat hari bebas kendaraan atau car free day (CFD) Bundaran Hotel Indonesia (HI), Jakarta Pusat berubah haru saat lagu Tanah Papua dinyanyikan.\r\n<br><br>\r\nPantauan Liputan6.com, Minggu (1/6/2019), sejumlah penonton tampak meneteskan air mata saat mendengar lantunan lagu tersebut.\r\n<br><br>\r\nTanah Papua merupakan lagu kebanggaan masyarakat Papua. Mendengarnya dibawakan, suasana yang awalnya ceria mendadak haru.\r\n<br><br>\r\nFrans Rumbinu sendiri berusaha mengontrol emosi saat memainkan sisirnya. Dia menahan tangis sambil terus berusaha meniup alat musiknya melanjutkan nada yang terputus.', 'pp3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jasa`
--

CREATE TABLE `tbl_jasa` (
  `id_jasa` int(11) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jasa`
--

INSERT INTO `tbl_jasa` (`id_jasa`, `nama_perusahaan`, `tanggal`, `deskripsi`, `logo`) VALUES
(1, 'Message', '2019-08-23', 'Untuk memenuhi kebutuhan tenaga kerja sebagai karyawan dan karyawati diperusahaan kami yang bergerak dalam bidang distribusi dan retail Membuka lowongan kerja untuk memenuhi kebutuhan tersebut untuk ditempatkan posisi sebagai berikut', 'b1.jpg'),
(2, 'Cleaning', '2019-08-28', 'Menjadi Perusahaan Jasa Pembayaran Terlengkap, Terpercaya dan Inovatif, dan Misi : Menyediakan Pelayanan Pembayaran Online yang Praktis, Profesional, Tangguh, Mudah dan Aman serta menguntungkan bagi Mitra Jaringan Penjualan dan Seluruh Lapisan Masyarakat ', 'b3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `parent_komentar` int(11) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lowongan_kerja`
--

CREATE TABLE `tbl_lowongan_kerja` (
  `lowongan_id` int(11) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `syarat` text NOT NULL,
  `pendaftaran` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lowongan_kerja`
--

INSERT INTO `tbl_lowongan_kerja` (`lowongan_id`, `nama_perusahaan`, `tanggal`, `deskripsi`, `syarat`, `pendaftaran`, `logo`) VALUES
(1, 'Optimizer', '2019-08-17', 'Voice of Jogja adalah Gallery kaos di Jogjakarta yang produknya sudah terjual ke Asia dan Eropa. Voice of Jogja mengutamakan kualitas produk dan pelayanan bagi setiap customer.', '<ul>\r\n<li>Pria /wanita,</li>\r\n<li>Min pend SMA </li>\r\n<li>min Pengalaman 1 th </li>\r\n</ul>', '<ul>\r\n<li>CV</li>\r\n<li>Surat Lamaran</li>\r\n<li>Kirim ke urfor@gmail.com</li>\r\n</ul>', 'p1.jpg'),
(2, 'Senjafood Bakpiaku', '2019-09-01', 'adalah perusahaan yang bergerak di bidang kuliner ( industri makanan) khususnya Bakpia.adalah perusahaan yang bergerak di bidang kuliner ( industri makanan) khususnya Bakpia.', '<ul>\r\n<li>Pria /wanita,</li>\r\n<li>Min pend SMA </li>\r\n<li>min Pengalaman 1 th </li>\r\n</ul>', '<ul>\r\n<li>CV</li>\r\n<li>Surat Lamaran</li>\r\n<li>Kirim ke urfor@gmail.com</li>\r\n</ul>', 'p2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medos_alumni`
--

CREATE TABLE `tbl_medos_alumni` (
  `id_medsos` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `facebook` text,
  `twitter` text,
  `instagram` text,
  `whatsapp` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengurus`
--

CREATE TABLE `tbl_pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat_alumni`
--

CREATE TABLE `tbl_riwayat_alumni` (
  `id_riwayat` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `pendidikan` text NOT NULL,
  `pendidikan_lulus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_agenda_alumni`
--
ALTER TABLE `tbl_agenda_alumni`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tbl_jasa`
--
ALTER TABLE `tbl_jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `tbl_lowongan_kerja`
--
ALTER TABLE `tbl_lowongan_kerja`
  ADD PRIMARY KEY (`lowongan_id`);

--
-- Indexes for table `tbl_medos_alumni`
--
ALTER TABLE `tbl_medos_alumni`
  ADD PRIMARY KEY (`id_medsos`),
  ADD KEY `id_alumni` (`id_alumni`);

--
-- Indexes for table `tbl_pengurus`
--
ALTER TABLE `tbl_pengurus`
  ADD PRIMARY KEY (`id_pengurus`),
  ADD KEY `id_alumni` (`id_alumni`);

--
-- Indexes for table `tbl_riwayat_alumni`
--
ALTER TABLE `tbl_riwayat_alumni`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_alumni` (`id_alumni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_agenda_alumni`
--
ALTER TABLE `tbl_agenda_alumni`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jasa`
--
ALTER TABLE `tbl_jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lowongan_kerja`
--
ALTER TABLE `tbl_lowongan_kerja`
  MODIFY `lowongan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_medos_alumni`
--
ALTER TABLE `tbl_medos_alumni`
  MODIFY `id_medsos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengurus`
--
ALTER TABLE `tbl_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_riwayat_alumni`
--
ALTER TABLE `tbl_riwayat_alumni`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD CONSTRAINT `tbl_berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tbl_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD CONSTRAINT `tbl_komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `tbl_berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_medos_alumni`
--
ALTER TABLE `tbl_medos_alumni`
  ADD CONSTRAINT `tbl_medos_alumni_ibfk_1` FOREIGN KEY (`id_alumni`) REFERENCES `tbl_alumni` (`id_alumni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pengurus`
--
ALTER TABLE `tbl_pengurus`
  ADD CONSTRAINT `tbl_pengurus_ibfk_1` FOREIGN KEY (`id_alumni`) REFERENCES `tbl_alumni` (`id_alumni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_riwayat_alumni`
--
ALTER TABLE `tbl_riwayat_alumni`
  ADD CONSTRAINT `tbl_riwayat_alumni_ibfk_1` FOREIGN KEY (`id_alumni`) REFERENCES `tbl_alumni` (`id_alumni`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
