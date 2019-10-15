-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 05:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smuhi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `gambar`) VALUES
(1, 'g2.jpg'),
(2, 'video-bg.jpg'),
(3, '24744.jpg'),
(4, '24744.jpg'),
(5, 'g3.jpg'),
(6, '24744.jpg'),
(7, '24744.jpg'),
(8, '24744.jpg'),
(9, '24744.jpg'),
(10, '24744.jpg'),
(11, '24744.jpg'),
(12, '24744.jpg'),
(13, '24744.jpg'),
(14, '24744.jpg'),
(15, '24744.jpg'),
(16, '24744.jpg'),
(17, '24744.jpg'),
(18, '24744.jpg'),
(19, '24744.jpg'),
(20, '24744.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kata_mutiara`
--

CREATE TABLE `kata_mutiara` (
  `id_kata_mutiara` int(11) NOT NULL,
  `kata_mutiara` text NOT NULL,
  `nama` text NOT NULL,
  `profesi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kata_mutiara`
--

INSERT INTO `kata_mutiara` (`id_kata_mutiara`, `kata_mutiara`, `nama`, `profesi`, `gambar`) VALUES
(1, 'Bersyukur Adalah Jalan Terbaik untuk Melancarkan Segala Urusan Kita di Dunia dan Akhira', 'Bpk.Steven Prakoso', 'Pengusaha', '112.jpg'),
(2, 'Sangat membanggakan dapat berkesempatan menimba ilmu di SMA ini, Disini lingkungan dan guru - gurunya sangat mendukung.', 'Anton', 'Desain Grafis', 'usr.png'),
(3, 'Jangan Pernah Lupa dengan Siapa yang Memberimu Semua Rejeki yang Kau Terima', 'Ben Ackerman', 'CEO - Optimizer', 't-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_utama`
--

CREATE TABLE `slider_utama` (
  `id_slider` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_utama`
--

INSERT INTO `slider_utama` (`id_slider`, `gambar`) VALUES
(1, '40929.jpg'),
(2, '111.png'),
(3, 'shutterstock_graduates.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id_statistik` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `os` varchar(20) NOT NULL,
  `browser` varchar(20) NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id_statistik`, `ip`, `os`, `browser`, `date_create`) VALUES
(1, '::1', 'Windows 10', 'Google Chrome v.76.0', '2019-09-22'),
(2, '162.158.166.141', 'Windows 10', 'Google Chrome v.77.0', '2019-09-25'),
(3, '172.68.144.119', 'Windows 10', 'Google Chrome v.77.0', '2019-09-25'),
(4, '172.69.134.247', 'Windows 10', 'Google Chrome v.77.0', '2019-09-25'),
(5, '162.158.165.4', 'Windows 10', 'Google Chrome v.77.0', '2019-09-25'),
(6, '162.158.166.109', 'Linux', 'Google Chrome v.75.0', '2019-09-25'),
(7, '172.68.144.119', 'Linux', 'Google Chrome v.75.0', '2019-09-25'),
(8, '172.68.144.113', 'Mac OS X', 'Apple Safari v.605.1', '2019-09-25'),
(9, '172.69.68.141', 'Unknown', 'Unknown v.HTTP', '2019-09-25'),
(10, '172.69.68.141', 'Unknown', 'Unknown v.HTTP', '2019-09-25'),
(11, '162.158.166.141', 'Windows 7', 'Mozilla Firefox v.69', '2019-09-25'),
(12, '172.68.146.84', 'Unknown', 'Google Chrome v.77.0', '2019-10-01'),
(13, '172.69.134.73', 'Windows 10', 'Google Chrome v.77.0', '2019-10-02'),
(14, '172.69.134.85', 'Windows 10', 'Google Chrome v.77.0', '2019-10-02'),
(15, '172.69.135.128', 'Linux', 'Google Chrome v.75.0', '2019-10-02'),
(16, '172.69.135.236', 'Mac OS X', 'Apple Safari v.605.1', '2019-10-03'),
(17, '172.68.146.18', 'Unknown', 'Google Chrome v.77.0', '2019-10-03');

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

--
-- Dumping data for table `tbl_agenda_alumni`
--

INSERT INTO `tbl_agenda_alumni` (`id_agenda`, `nama_agenda`, `tanggal`, `alumni`, `deskripsi`) VALUES
(1, 'Temu Alumni Angkata 2001', '2019-09-17', 2001, 'Menyambung Silaturahmi untuk memajukan guyup rukun dan berdoa bersama agar dilindungi oleh Allah SWT');

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
  `alamat_rumah` varchar(100) DEFAULT NULL,
  `kantor` varchar(30) DEFAULT NULL,
  `alamat_kantor` varchar(100) DEFAULT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`id_alumni`, `nama_alumni`, `tahun_lulus`, `images`, `no_telp`, `email`, `alamat_rumah`, `kantor`, `alamat_kantor`, `username`, `password`) VALUES
(2, 'widya', 1999, 'tm-4.jpg', '081332769382', 'widya@gmail.com', 'jl super raya no. 22', NULL, NULL, 'widya', '12345'),
(3, 'Cahyo Setyo Putro', 1994, '112.jpg', '02234699545', 'cahyo@gmail.com', 'yogyakarta', 'mundo', 'jl anggajaya', '', ''),
(4, 'dina', 2000, 'tm-4.jpg', '02336548957', 'dina@gmail.com', 'jl lely 2 depok sleman', NULL, NULL, '', ''),
(5, 'Dwi Prasetyo', 2000, '112.jpg', '023356459653', 'dwi_prasetyo@gmail.com', 'condong catur depok sleman', NULL, NULL, 'setyo', 'mantap'),
(6, 'Susi wijayanti', 1996, 'tm-4.jpg', '02231233552', 'wijayanti99@gmail.com', 'yogyakarta', 'gits solution', 'jl padjajaran', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` text NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `images_berita` text NOT NULL,
  `id_admin` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bintang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `tanggal`, `deskripsi`, `images_berita`, `id_admin`, `status`, `bintang`) VALUES
(1, 'Tunjangan Khusus Penyandang Disabilitas di Jakarta', '2019-08-29', 'Liputan6.com, Jakarta - Kartu Penyandang Disabilitas Jakarta atau KPDJ resmi diluncurkan pada Rabu 28 Agustus 2019. Pada tahun ini, KPDJ disalurkan kepada 7.137 penyandang disabilitas.\r\n,<br><br>\r\nPenyaluran KPDJ bertujuan membantu para penyandang disabilitas memenuhi kebutuhan dasar. Serta, mengakses pelayanan dasar secara wajar sesuai ketentuan. KPDJ diharapkan pula meningkatkan kesejahteraan penyandang disabilitas.\r\n<br><br>\r\nSaat peluncuran kartu, Gubernur DKI Jakarta Anies Baswedan berpesan agar bank penyalur memperlakukan para pemegang kartu dengan baik. Para penyandang disabilitas harus diperlakukan sebagai customer platinum.', 'pp1.jpg', 1, 'terima', 'tidak'),
(2, 'Pertimbangan Keamanan, Petugas di 2 Bandara Perintis Papua Ditarik', '2019-08-30', 'Liputan6.com, Jakarta - Dua bandara perintis di Papua ditutup sementara akibat kerusuhan yang terjadi kemarin. Bandara perintis yang ditutup adalah Bandara Waghete di Kabupaten Deiyai dan Bandara Moanemani di Kabupaten Dogiyai, Papua.\r\n<br><br>\r\nSekretaris Perusahaan Airnav Indonesia Novy Pantaryanto mengatakan, pihaknya sudah menarik petugas Airnav Indonesia yang ditugaskan di kedua bandara tersebut  sambil menunggu situasi kembali kondusif.\r\n<br><br>\r\nSemenatra ini hanya dua bandara itu yang petugasnya ditarik. Sedangkan bandara lain di Papua beroperasi normal. \"Kalau (Bandara) di Sentani masih oke, malah kita kita tambah jam operasinya dari 18 jam jadi 24 jam,\" ia menandaskan.', 'pp2.jpg', 1, 'terima', 'bintang'),
(3, 'Kala Lagu Tanah Papua Teteskan Air Mata di CFD Bundaran HI', '2019-09-01', 'Liputan6.com, Jakarta - Suasana meriah di konser masyarakat Papua saat hari bebas kendaraan atau car free day (CFD) Bundaran Hotel Indonesia (HI), Jakarta Pusat berubah haru saat lagu Tanah Papua dinyanyikan.\r\n<br><br>\r\nPantauan Liputan6.com, Minggu (1/6/2019), sejumlah penonton tampak meneteskan air mata saat mendengar lantunan lagu tersebut.\r\n<br><br>\r\nTanah Papua merupakan lagu kebanggaan masyarakat Papua. Mendengarnya dibawakan, suasana yang awalnya ceria mendadak haru.\r\n<br><br>\r\nFrans Rumbinu sendiri berusaha mengontrol emosi saat memainkan sisirnya. Dia menahan tangis sambil terus berusaha meniup alat musiknya melanjutkan nada yang terputus.', 'pp3.jpg', 1, 'terima', 'tidak'),
(31, 'Blog Pertama Saya1', '2019-09-19', '<p>asdasdas</p>', 'mutiaraadmin-male.png', 1, 'pending', 'tidak'),
(36, 'Siswa Berprestasi di Jateng Dapat Kuota 20 Persen Daftar SMA', '2019-09-25', '<p><span style=\"color: rgb(45, 45, 45); font-family: Helvetica, Arial;\">Pemeritahan daerah DIY mengupayakan kuota penerimaan bagi siswa berprestasi di SMA diperbanyak. Siswa berprestasi dalam satu zona akan diberikan kuota maksimal 20 persen.</span><br></p>', 'e1.jpg', 1, 'terima', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beritaalumni`
--

CREATE TABLE `tbl_beritaalumni` (
  `id_beritaalumni` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `img` text NOT NULL,
  `tempat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_beritaalumni`
--

INSERT INTO `tbl_beritaalumni` (`id_beritaalumni`, `judul`, `tanggal`, `deskripsi`, `img`, `tempat`) VALUES
(1, 'Siswa Berprestasi di Jateng Dapat Kuota 20 Persen Daftar SMA', '2019-10-25', '<p><span style=\"color: rgb(45, 45, 45); font-family: Helvetica, Arial;\">Pemeritahan daerah DIY mengupayakan kuota penerimaan bagi siswa berprestasi di SMA diperbanyak. Siswa berprestasi dalam satu zona akan diberikan kuota maksimal 20 persen.</span><br></p>', 'e1.jpg', 'Yogyakarta'),
(2, 'Kala Lagu Tanah Papua Teteskan Air Mata di CFD Bundaran HI', '2019-10-19', 'Liputan6.com, Jakarta - Suasana meriah di konser masyarakat Papua saat hari bebas kendaraan atau car free day (CFD) Bundaran Hotel Indonesia (HI), Jakarta Pusat berubah haru saat lagu Tanah Papua dinyanyikan.\r\n<br><br>\r\nPantauan Liputan6.com, Minggu (1/6/2019), sejumlah penonton tampak meneteskan air mata saat mendengar lantunan lagu tersebut.\r\n<br><br>\r\nTanah Papua merupakan lagu kebanggaan masyarakat Papua. Mendengarnya dibawakan, suasana yang awalnya ceria mendadak haru.\r\n<br><br>\r\nFrans Rumbinu sendiri berusaha mengontrol emosi saat memainkan sisirnya. Dia menahan tangis sambil terus berusaha meniup alat musiknya melanjutkan nada yang terputus.', 'pp3.jpg', 'Jakarta'),
(3, 'Kurban Wadah Silaturahmi', '2019-08-10', '<p><span style=\"color: rgb(45, 45, 45); font-family: Helvetica, Arial;\">Senin, 20 Agustus 2018 bertepatan dengan tanggal 8 Dzulhijah 1439 H bertempat di SMA Muhammadiyah 1 Yogyakarta dilaksanakan acara penyerahan hewan qurban ke beberapa amal usaha Muhammadiyah di DIY. Pada tahun 1439 H ini, SMA Muhi menyerahkan 35 hewan qurban berupa 32 ekor kambing dan 3 ekor sapi kepada AUM milik Muhammadiyah. Selain penyerahan hewan qurban, SMA Muhi juga akan mengadakan baksos hewan qurban di desa binaan SMA Muhi dan lokasi pelaksanaan Mubaligh Hijrah 1439 H..</span><br></p>', 'qurba.jpg', 'Yogyakarta');

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
(1, 'Message', '2019-08-23', 'Untuk memenuhi kebutuhan tenaga kerja sebagai karyawan dan karyawati diperusahaan kami yang bergerak dalam bidang distribusi dan retail Membuka lowongan kerja untuk memenuhi kebutuhan tersebut untuk ditempatkan posisi sebagai berikut\r\n<br><br>\r\nUntuk memenuhi kebutuhan tenaga kerja sebagai karyawan dan karyawati diperusahaan kami yang bergerak dalam bidang distribusi dan retail Membuka lowongan kerja untuk memenuhi kebutuhan tersebut untuk ditempatkan posisi sebagai berikut', 'b1.jpg'),
(2, 'Cleaning', '2019-08-28', 'Menjadi Perusahaan Jasa Pembayaran Terlengkap, Terpercaya dan Inovatif, dan Misi : Menyediakan Pelayanan Pembayaran Online yang Praktis, Profesional, Tangguh, Mudah dan Aman serta menguntungkan bagi Mitra Jaringan Penjualan dan Seluruh Lapisan Masyarakat \r\n<br><br>\r\nMenjadi Perusahaan Jasa Pembayaran Terlengkap, Terpercaya dan Inovatif, dan Misi : Menyediakan Pelayanan Pembayaran Online yang Praktis, Profesional, Tangguh, Mudah dan Aman serta menguntungkan bagi Mitra Jaringan Penjualan dan Seluruh Lapisan Masyarakat ', 'b3.jpg'),
(3, 'Facebook', '2019-09-27', '<b>KlinKlin</b> adalah Perusahaan cleaning service profesional yang mempunyai cabang di Jakarta, Jogja, Surabaya dan Tangerang. Kami melayani jasa pembersihan harian, panggilan, pembersihan khusus, kontrak berlangganan dengan harga terjangkau. Tim tukang bersih kami terlatih, profesional, terverifikasi dan terpercaya. Kami ahli dalam penanganan pembersihan rumah (home), kost, kantor, apartemen, taman, gedung, cafe dan lainnya. KlinKlin berkomitmen untuk memberikan layanan berkualitas terbaik dan menjadi Cleaning Service Online No.1 di Indonesia.', '111.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Hobby'),
(2, 'Politik'),
(3, 'Travel'),
(4, 'Foods'),
(5, 'Sosial'),
(6, 'Budaya'),
(7, 'Agama'),
(8, 'Ekonomi'),
(9, 'Pendidikan'),
(10, 'Bisnis'),
(11, 'Sport'),
(12, 'Jasa'),
(13, 'Jual Beli');

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

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_berita`, `parent_komentar`, `nama`, `email`, `isi`, `tanggal`) VALUES
(1, 3, NULL, 'maruf', 'azizmuzani@gmail.com', 'halloo', '2019-09-06'),
(2, 3, NULL, 'muzani', 'azizmuzani@gmail.com', 'isi Komentar', '2019-09-06'),
(3, 3, NULL, 'muzani', 'azizmuzani@gmail.com', 'isi Komentar halo', '2019-09-06'),
(7, 3, 1, 'admin', 'admin@gmail.com', 'oke', '2019-09-06'),
(12, 2, NULL, 'Bagus', 'bagus.wisanggeni4897@gmail.com', 'ASJDBASDBKASJDASHkj', '2019-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar_berita`
--

CREATE TABLE `tbl_komentar_berita` (
  `id_komentar_berita` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `komentar` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` varchar(50) NOT NULL,
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
(2, 'PT. Maju Sejahtera', '2019-09-01', 'Pt Maju Sejahtera membutuhkan Seorang <b>Web Developer</b> sebagai pekerja tetap didalam perusahaannya', '<ul>\r\n<li>Pria /wanita,</li>\r\n<li>Min pend SMA </li>\r\n<li>min Pengalaman 1 th </li>\r\n</ul>', '<ul>\r\n<li>CV</li>\r\n<li>Surat Lamaran</li>\r\n<li>Kirim ke urfor@gmail.com</li>\r\n</ul>', 'p2.jpg'),
(3, 'PT. Adhiguna Sekawan Abadi', '2019-09-21', 'PT. Adhiguna Sekawan Abadi adalah bergerak di bidang competence building pelatihan, outbond, event organizer & consultant, saat ini membuka lowongan kerja untuk posisi sebagai Staf Administrasi dan Staf Keuangan.sebagai Staf Administrasi dan Staf Keuangan.', '<ul>\r\n<li>Pria /wanita,</li>\r\n<li>Min pend SMA </li>\r\n<li>min Pengalaman 1 th </li>\r\n</ul>', '<ul>\r\n<li>CV</li>\r\n<li>Surat Lamaran</li>\r\n<li>Kirim ke urfor@gmail.com</li>\r\n</ul>', '111.png');

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

--
-- Dumping data for table `tbl_pengurus`
--

INSERT INTO `tbl_pengurus` (`id_pengurus`, `id_alumni`, `jabatan`, `angkatan`, `deskripsi`) VALUES
(1, 3, 'Ketua', 1994, 'Bernama lengkap William Henry Gates III atau lebih dikenal dengan nama Bill Gates dilahirkan pada 28 Oktober 1955, di Seattle, Washington. Ia adalah adalah anak kedua dari tiga bersaudara.\r\n<br><br>\r\nAyahnya William Henry Gates adalah seorang pengacara perusahaan yang punya banyak relasi di kota. Sedangkan ibunya Mary Maxwell seorang pegawai First Interstate Bank, Pacific Northwest Bell dan anggota Tingkat Nasional United Way.\r\n<br><br>\r\nBill Gates seorang anak yang cerdas, tetapi dia terlalu penuh semangat dan cenderung sering mengalami kesulitan di sekolah. Ketika dia berumur sebelas tahun, orang tuanya memutuskan untuk membuat perubahan pada dirinya dan mengirimnya ke Lakeside School, sebuah sekolah dasar yang bergengsi khusus bagi anak laki-laki.\r\n<blockquote>\r\nDalam Biografi Bill Gates diketahui bahwa pada tahun 1990 Bill Gates mendapat tuntutan dari Departemen Keadilan Amerika Serikat dengan dakwaan Gates telah melakukan monopoli terhadap perusahaan-perusahaan kecil.\r\n</blockquote>'),
(2, 5, 'ketua', 1995, 'Bernama lengkap William Henry Gates III atau lebih dikenal dengan nama Bill Gates dilahirkan pada 28 Oktober 1955, di Seattle, Washington. Ia adalah adalah anak kedua dari tiga bersaudara.\r\n<br><br>\r\nAyahnya William Henry Gates adalah seorang pengacara perusahaan yang punya banyak relasi di kota. Sedangkan ibunya Mary Maxwell seorang pegawai First Interstate Bank, Pacific Northwest Bell dan anggota Tingkat Nasional United Way.\r\n<br><br>\r\nBill Gates seorang anak yang cerdas, tetapi dia terlalu penuh semangat dan cenderung sering mengalami kesulitan di sekolah. Ketika dia berumur sebelas tahun, orang tuanya memutuskan untuk membuat perubahan pada dirinya dan mengirimnya ke Lakeside School, sebuah sekolah dasar yang bergengsi khusus bagi anak laki-laki.\r\n<blockquote>\r\nDalam Biografi Bill Gates diketahui bahwa pada tahun 1990 Bill Gates mendapat tuntutan dari Departemen Keadilan Amerika Serikat dengan dakwaan Gates telah melakukan monopoli terhadap perusahaan-perusahaan kecil.\r\n</blockquote>'),
(3, 2, 'Ketua', 1999, 'Bernama lengkap William Henry Gates III atau lebih dikenal dengan nama Bill Gates dilahirkan pada 28 Oktober 1955, di Seattle, Washington. Ia adalah adalah anak kedua dari tiga bersaudara.\r\n<br><br>\r\nAyahnya William Henry Gates adalah seorang pengacara perusahaan yang punya banyak relasi di kota. Sedangkan ibunya Mary Maxwell seorang pegawai First Interstate Bank, Pacific Northwest Bell dan anggota Tingkat Nasional United Way.\r\n<br><br>\r\nBill Gates seorang anak yang cerdas, tetapi dia terlalu penuh semangat dan cenderung sering mengalami kesulitan di sekolah. Ketika dia berumur sebelas tahun, orang tuanya memutuskan untuk membuat perubahan pada dirinya dan mengirimnya ke Lakeside School, sebuah sekolah dasar yang bergengsi khusus bagi anak laki-laki.\r\n<blockquote>\r\nDalam Biografi Bill Gates diketahui bahwa pada tahun 1990 Bill Gates mendapat tuntutan dari Departemen Keadilan Amerika Serikat dengan dakwaan Gates telah melakukan monopoli terhadap perusahaan-perusahaan kecil.\r\n</blockquote>'),
(4, 6, 'Ketua', 1996, 'Bernama lengkap William Henry Gates III atau lebih dikenal dengan nama Bill Gates dilahirkan pada 28 Oktober 1955, di Seattle, Washington. Ia adalah adalah anak kedua dari tiga bersaudara.\r\n<br><br>\r\nAyahnya William Henry Gates adalah seorang pengacara perusahaan yang punya banyak relasi di kota. Sedangkan ibunya Mary Maxwell seorang pegawai First Interstate Bank, Pacific Northwest Bell dan anggota Tingkat Nasional United Way.\r\n<br><br>\r\nBill Gates seorang anak yang cerdas, tetapi dia terlalu penuh semangat dan cenderung sering mengalami kesulitan di sekolah. Ketika dia berumur sebelas tahun, orang tuanya memutuskan untuk membuat perubahan pada dirinya dan mengirimnya ke Lakeside School, sebuah sekolah dasar yang bergengsi khusus bagi anak laki-laki.\r\n<blockquote>\r\nDalam Biografi Bill Gates diketahui bahwa pada tahun 1990 Bill Gates mendapat tuntutan dari Departemen Keadilan Amerika Serikat dengan dakwaan Gates telah melakukan monopoli terhadap perusahaan-perusahaan kecil.\r\n</blockquote>');

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
-- Dumping data for table `tbl_riwayat_alumni`
--

INSERT INTO `tbl_riwayat_alumni` (`id_riwayat`, `id_alumni`, `pendidikan`, `pendidikan_lulus`) VALUES
(1, 3, 'SDN Ngelang 2', 1989),
(2, 3, 'SMP N 1 Barat', 1991),
(3, 3, 'SMA Muhammadiyah Yogyakarta', 1994);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thread`
--

CREATE TABLE `tbl_thread` (
  `id_thread` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_thread`
--

INSERT INTO `tbl_thread` (`id_thread`, `judul`, `tanggal`, `isi`, `gambar`, `id_kategori`, `id_alumni`) VALUES
(21, 'Membaca Untuk Sehat', '2019-10-07', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"/ckfinder/userfiles/files/24744(3).jpg\"></figure>', 'event-details-img.jpg', 1, 2),
(22, 'Indomie Terenak Se dunia', '2019-10-07', '<p>Lorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;</p><figure class=\"image\"><img src=\"/ckfinder/userfiles/files/term-online-ads(4).jpg\"></figure>', '', 4, 5),
(23, 'E-Sport Indonesia', '2019-10-07', '<p>Lorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORT</p><p>Lorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORTLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem Ipsum SUka Guuyasdjlk AHSjdhkLorem Lorem&nbsp;E-SPORT</p><figure class=\"image image-style-side\"><img src=\"/ckfinder/userfiles/files/b3(1).jpg\"></figure>', 'm-img.jpg', 11, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id_video` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `url_video` text NOT NULL,
  `deskripsi_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id_video`, `judul`, `url_video`, `deskripsi_video`) VALUES
(1, 'Pesan Caknun', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GCofrAk8-1Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Ini Pesan yang Disampaikan Oleh Cak Nun'),
(2, 'Alumni Muhi', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/3djw-cOEi8U\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Duet Antara Guru dan Murid'),
(3, 'Alumni Muhi', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KL4Q-DkKSpg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Dhyen Ganjar Prabowo (Pendiri dan vokalis OM Wawes)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `kata_mutiara`
--
ALTER TABLE `kata_mutiara`
  ADD PRIMARY KEY (`id_kata_mutiara`);

--
-- Indexes for table `slider_utama`
--
ALTER TABLE `slider_utama`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id_statistik`);

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
-- Indexes for table `tbl_beritaalumni`
--
ALTER TABLE `tbl_beritaalumni`
  ADD PRIMARY KEY (`id_beritaalumni`);

--
-- Indexes for table `tbl_jasa`
--
ALTER TABLE `tbl_jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `tbl_komentar_berita`
--
ALTER TABLE `tbl_komentar_berita`
  ADD PRIMARY KEY (`id_komentar_berita`),
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
-- Indexes for table `tbl_thread`
--
ALTER TABLE `tbl_thread`
  ADD PRIMARY KEY (`id_thread`),
  ADD KEY `id_alumni` (`id_alumni`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kata_mutiara`
--
ALTER TABLE `kata_mutiara`
  MODIFY `id_kata_mutiara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_utama`
--
ALTER TABLE `slider_utama`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_agenda_alumni`
--
ALTER TABLE `tbl_agenda_alumni`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_beritaalumni`
--
ALTER TABLE `tbl_beritaalumni`
  MODIFY `id_beritaalumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jasa`
--
ALTER TABLE `tbl_jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_komentar_berita`
--
ALTER TABLE `tbl_komentar_berita`
  MODIFY `id_komentar_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lowongan_kerja`
--
ALTER TABLE `tbl_lowongan_kerja`
  MODIFY `lowongan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_medos_alumni`
--
ALTER TABLE `tbl_medos_alumni`
  MODIFY `id_medsos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengurus`
--
ALTER TABLE `tbl_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_riwayat_alumni`
--
ALTER TABLE `tbl_riwayat_alumni`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_thread`
--
ALTER TABLE `tbl_thread`
  MODIFY `id_thread` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `tbl_komentar_berita`
--
ALTER TABLE `tbl_komentar_berita`
  ADD CONSTRAINT `tbl_komentar_berita_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `tbl_berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `tbl_thread`
--
ALTER TABLE `tbl_thread`
  ADD CONSTRAINT `tbl_thread_ibfk_1` FOREIGN KEY (`id_alumni`) REFERENCES `tbl_alumni` (`id_alumni`),
  ADD CONSTRAINT `tbl_thread_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
