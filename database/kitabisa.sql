-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2019 pada 18.24
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitabisa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `idDonasi` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `subjudul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `target` double NOT NULL,
  `tanggal_post` date NOT NULL,
  `tanggal_kadaluarsa` date NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`idDonasi`, `judul`, `subjudul`, `deskripsi`, `kategori`, `target`, `tanggal_post`, `tanggal_kadaluarsa`, `img`) VALUES
('1242135003', 'Dari Kita Untuk Anak dan Ibu Suku Asmat', 'Campak dan gizi buruk melanda Kab Asmat, Prov Papu', '\r\n\r\nHalo, #OrangBaik. Saya Arie Kriting, dan saya sangat membutuhkan dukungan kawan-kawan sekalian untuk bersama-sama membantu saudara-saudara kita di Asmat, Papua.\r\n\r\nBencana kembali menghampiri Papua, setelah kemarin Korowai sekarang Asmat. Seperti diketahui, menurut pemerintah daerah setempat, tercatat 61 anak meninggal dunia terkena wabah campak dan gizi buruk sejak September 2017 hingga saat ini.\r\n\r\n57f4b94b1187310f16a0e170f5dea91c76fee603\r\n\r\nGambar : PKPU\r\n\r\nMengutip Kompas.com, Sejak September 2017 hingga 11 Januari 2018, RSUD Asmat dilaporkan merawat ratusan pasien campak. Sebanyak 393 orang mejalani rawat jalan dan 175 orang rawat inap. Penyakit campak juga ditemukan di beberapa tempat dan distrik, seperti Suator, Distri Sawa Erma, Distrik Akat, dan Kota Agats. Sementara untuk gizi buruk juga ditemukan di Kota Agats, Kampung Yousakor, Distrik Sirets.\r\n\r\n8fe8c13947f7e66d872a8bcdab75e17f98d34b40\r\n\r\nGambar : PKPU\r\n\r\nMengutip BBC, Kepala Kesehatan Masyarakat Dinas Kesehatan Kabupaten Asmat, Steven Langi mengatakan, pendataan empat tim terpadu penanggulangan campak dan gizi buruk mencatat setidaknya sudah 61 orang tewas. Dikutip Kompas, ia menyatakan bahwa 59 korban meninggal berasal dari tiga distrik, yakni Fayit, Aswi, dan Pulau Tiga. Tiga korban lain meninggal di Rumah Sakit Agats, ibu kota Kabupaten Asmat.\r\n\r\nBuat saya Papua lebih dari sekedar akar melainkan rumah kedua dan tempat yang sangat dekat dengan saya. Ingin sekali ajak kaka dan nona semua bantu saudara kita disana untuk bisa dapatkan Gizi dan pengobatan yang lebih baik. Kita perlu bersatu dan menunjukkan bahwa kita bisa bersama dan saling membantu untuk keluarga terdekat kita, orang Papua!\r\n\r\nDana yang terkumpul, berapapun itu akan kita salurkan kepada para korban sebagai solidaritas kita kepada para korban.\r\nAyo tunjukkan Solidaritas kita dengan berdonasi!\r\n\r\nCara Berdonasi :\r\n1. Klik \"DONASI SEKARANG\"\r\n2. Pilih Bank Transfer Mandiri/BCA/BNI/BNI Syariah/BRI dan kartu kredit\r\n3. Dapat laporan via email\r\n\r\nTerima kasih buat dukungan teman-teman semua, semoga kebaikan kalian dibalas berlipat ganda.\r\n\r\nSalam hangat,\r\n\r\nArie Kriting\r\n\r\n\r\nSumber Gambar: Kompas.com, PKPU\r\n\r\nhttp://regional.kompas.com/read/2018/01/16/0849152...\r\n\r\nhttp://www.bbc.com/indonesia/indonesia-42646288\r\n', 'Balita & Anak Sakit', 153000000, '2019-04-11', '2019-04-30', 'img/carousel3.jpg'),
('1242135004', 'Mendanai Anak Tuli mewakili Indonesia ke Argentina', 'Pengiriman Delegasi “4TH WFDYS CHILDREN CAMP” YOUR', '\r\n\r\nDahulu, Udana (12) berkomunikasi dengan membaca gerak bibir plus alat bantu dengar. Sayangnya, masih banyak hambatan komunikasi yang ia alami dengan ibunya. Hasilnya, ia kerap salah paham dengan ibunya.\r\n\r\nAlih-alih menyerah, Udana dan ibunya terus berusaha mencari solusi. Udana banyak membaca buku tentang disabilitas. Berkat bacaannya, ia sampai pada kesimpulan, “Kenapa tuna netra boleh memakai braille, tetapi Tuli tidak boleh memakai isyarat?”\r\n\r\nGayung bersambut, Ibu Udana kemudian belajar bahasa isyarat di Sekolah Semangat Tuli. Tak hanya itu, Ibu Udana juga mengajak kedua adik Udana yang Dengar untuk belajar bahasa isyarat. Hasilnya, Udana dan ibunya jadi lebih mudah berkomunikasi.\r\n\r\nKini, Udana kembali berjuang untuk satu hal. Perjuangan yang tak hanya soal hubungannya dengan ibu. Perjuangan yang lebih besar dan panjang: Ikut berjuang memenuhi hak-hak masyarakat Tuli di Indonesia. Dan Udana membutuhkan bantuanmu…\r\n\r\nPerjuangan Menuju WFDYS\r\n\r\nUdana dan seorang anak Tuli bernama Yusi telah terpilih mewakili Indonesia dalam Children Camp yang diadakan World Federation Deaf Youth Section (WFDYS) di Argentina. WFDYS adalah organisasi Tuli internasional khusus kepemudaan. WFDYS berkegiatan sejak 1987, sayangnya Indonesia belum pernah sekali pun mengirimkan wakilnya ke sana.\r\n\r\nMemangnya apa pentingnya mengirim Udana dan Yusi ke sana?\r\n\r\nSangat penting! Dalam WFDYS, Udana dan Yusi akan belajar memperjuangkan hak-hak masyarakat Tuli. Kedua adik kita ini juga akan berlatih untuk menjadi pemimpin komunitas Tuli. Plus, dalam children camp ini, keduanya bisa berinteraksi dengan anak-anak Tuli dari banyak negara lain. Melalui interaksi itu, Udana dan Yusi bisa mengambil banyak pelajaran dalam memperjuangkan hak-hak Tuli dari banyak negara.\r\n\r\nArtinya, kehadiran Udana dan Yusi ke WFDYS tak hanya tentang mereka berdua. Kedatangan Udana dan Yusi ke WFDYS adalah untuk terus merawat dan memperjuangkan hak-hak masyarakat Tuli di Indonesia.\r\n\r\nUdana dan Yusi membutuhkan bantuanmu\r\n\r\nPerjuangan Udana dan Yusi menuju WFDYS sayangnya masih menemui jalan terjal. Biaya mengikuti WFDYS pada 8-14 April 2018 di Argentina sama sekali tak sedikit.\r\n\r\nGerkatin (Gerakan untuk Kesejahteraan Tuli Indonesia) Kepemudaan membutuhkan bantuanmu untuk ikut galang dana untuk memberangkatkan Udana, Yusi, dan seorang pendamping (Laura) ke WFDYS.\r\n\r\nKamu bisa ikut donasi dengan cara:\r\n\r\n- Klik tombol merah “DONASI SEKARANG”\r\n\r\n- Pilih Metode Pembayaran\r\n\r\n- Transfer ke nomer rekening yang tertera\r\n\r\nUntuk informasi selanjutnya kamu dapat menghubungi Phieter Angdika (Ketua Gerkatin Kepemudaan) dan Muhammad Andika Panji (Sekretaris Gerkatin Kepemudaan) melalui:\r\n\r\ngktnmudaidys@gmail.com atau WhatsApp/SMS ke nomor: 08111907190 atau 081210440527\r\n\r\nSetiap donasimu akan sangat berarti untuk memperjuangkan hak-hak masyarakat Tuli di Indonesia!\r\n\r\nProfil Peserta dan Pendamping\r\n\r\nc297326d830c08433552626d4aed9f773e04a0b1.jpeg\r\n\r\nPeserta Ke-1\r\n\r\nUdana Maajid Pratista, Tuli kelahiran Magelang 30 Oktober 2005. Saat ini masih bersekolah di SLB/B Karnna Manohara, Yogyakarta kelas 5 A. Mempunyai cita cita menjadi penulis buku tentang Tuli supaya orang lain bisa mengetahui dunia Tuli dari karyanya. Hobinya menggambar, memasak dan membaca diharapkan mampu mendukung cita citanya nanti. Menjadi Tuli bukanlah hambatan untuk belajar dan berkarya. Tetap semangat dan rajin membaca itu motto hidupnya.\r\n\r\n687b72f45eeb5a5b29c101619dd897cc61d9393d.jpeg\r\n\r\nPeserta Ke-2\r\n\r\nYusi Aprilia adalah seorang Tuli yang berasal dari Pontianak dan masih bersekolah kelas 3 SD di SLB/B Dharma Asih, Pontianak. Selain bersekolah, dia juga aktif dalam bidang olahraga dan menari yang diadakan oleh sekolah luar biasa di Kalimantan Barat. Yusi tidak hanya menggemari olahraga, tetapi juga menari dan ingin diajari oleh senior Tuli untuk berbagi ilmu generasi seterusnya.\r\n\r\n9260398d73cf549a4409c0b651805ae8fbc22552.jpeg\r\n\r\nPendamping\r\n\r\nLaura Lesmana Wijaya adalah seorang perempuan Tuli berasal dari Jakarta yang sudah bersarjana di Chinese University of Hong Kong jurusan Linguistik di bawah beasiswa dari The Nippon Foundation. Selain belajar, Laura saat ini juga bekerja dalam bidang kamus bahasa isyarat dan buku panduan sebagai sukarelawan di Universitas Indonesia. Laura jugavadalah penasehat kepemudaan tuli di Gerakan untuk Kesejahteraan Tunarungu Indonesia dan juga bendahara World Federation of the Deaf Regional Secretariat Youth Section. Partisipasi ini diharapkan untuk membawa hasil dan solusi yang dapat memecahkan masalah-masalah yang dihadapi oleh anak-anak berusia di bawah umur.\r\n', 'Balita & Anak Sakit', 6390000000, '2019-04-09', '2019-06-06', 'img/carousel4.jpg'),
('13241001', 'Bantu Biaya Persalinan Al Fattieh ', 'Bantu biaya persalinan Al-Fattieh Joyo Negoro, bay', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh, Hallo para donatur,\r\nperkenalkan saya Gatot Wijoyo (Gatot Budi Santoso) dan Ulfah Setianingtias adalah orang tua dari dik Fattieh. Saya dan Istri berharap campaign ini bisa cepat tercapai target,karna biaya persalinan Al Fattieh masih belum terbayarkan sampai saait ini.\r\n\r\nBermaksud untuk, berikhtiar melalui profesi yang saya tekuni, mengumpulkan sejumlah dana yang harus saya tebus ke pihak Rumah Sakit dalam jangka waktu yang mereka berikan hingga 31 Okt 2017.\r\n\r\n\r\nSingkat cerita yakni, ketika tanggal 28 September 2017 lalu, istri saya Ulfah yang sedang mengandung 32 minggu mengalami kejang mendadak dan kemudian tidak sadarkan diri. Saya langsung membawa istri saya ke Rumah Sakit terdekat sebab khawatir akan terjadi sesuatu apabila terlambat penangannya. Dokter memberikan rekomendasi untuk segera dilakukan operasi sectio cesar jika ingin nyawa ibu dan bayinya diselamatkan, saya mengiyakan dan operasi sudah dilakukan hari itu juga. Alhamdulillah bayi dan ibu selamat namun karena premature dengan Berat Badan Lahir Rendah 1,880kg, Al Fattieh Joyo Negoro harus mendapatkan perawatan di ruang NICU untuk penanganan lebih lanjut. Tanpa BPJS (pihak RS tidak bekerjasama dengan badan BPJS), dan asuransi lainnya, biaya rumah sakit saat ini sudah diangka +- IDR 45 Jutaan.\r\n\r\n(rincian : Billing Eka Hospital Fattieh update 3 Okt 2017).\r\n\r\n(closing billing : Billing Akhir saat kepulangan Fattieh )\r\n\r\nDana yang baru kami masukkan untuk deposit sebesar : Rp 9.500.000\r\n\r\nKondisi ketika istri diperbolehkan pulang, tanggal 3 Oktober 2017, saya dipaksa pihak Rumah Sakit untuk melunasi semua tagihan an. istri saya, namun saya belum ada dana penuh untuk melunasinya, sehingga saya terpaksa menjaminkan sertifikat rumah keluarga besar kami supaya tagihan tsb dapat diulur pelunasannya hingga akhir bulan Okt 2017 (kebijakan Rumah Sakit). Kami ingin sekali memindahkan perawatan Fattieh ke RS yang lebih terjangkau, namun pihak RS bersikeras untuk pemindahannya sang bayi harus dilunasi semua tagihannya.\r\n\r\n\r\nSaya yang berprofesi sebagai seniman, jujur tidak menyiapkan dana sefantastis itu, bahkan harta berharga yang kami miliki saat ini Alhamdulillah berupa karya lukisan saja. Oleh sebab itu saya berikhtiar melalui proposal ini, supaya kiranya mendapat bantuan untuk melunasi tunggakan (outstanding) tagihan tersebut dengan opsi yang dapat saya tawarkan kepada Bapak/Ibu yakni :\r\n\r\n\r\n1. Lelang karya yang saya miliki, beberapa sudah kami cetak dalam proposal ini untuk ditawarkan kepada Bapak/Ibu\r\n2. Bentuk dukungan langsung dalam sejumlah dana, siap kami tukar nilai tersebut dengan tenaga saya dan istri dalam proyek seni apapun di perusahaan/yayasan Bapak/Ibu.\r\n\r\n\r\nSaya mohon kiranya proposal ini mendapatkan dukungan dari Bapak/Ibu sehingga saya dapat secara maksimal berupaya untuk melalui ujian yang diberikan Allah kepada keluarga kami dan bisa menjemput bayi kami yang statusnya ditangguhkan juga oleh pihak RS hingga kami mampu melunasi semua tagihan tersebut. Berikut daftar karya yang saya miliki dan harga lelangnya. Semua dukungan kami tampung melalui nomor rekening berikut maupun komunikasi lebih lanjut,\r\n\r\n\r\nKontak : 081398081887 / 087751652916\r\nEmail : gatot.wijoyo80@gmail.com\r\n\r\n\r\nTerima kasih banyak atas kesempatan yang telah diberikan kepada kami. Semoga Allah selalu memudahkan langkah hambanya yang berikhtiar untuk selalu menjalani yang terbaik sesuai syariat dijalan-Nya.\r\n\r\nBerikut karya saya yang ingin saya lelang, untuk harga di bawah itu bisa di nego:\r\n', 'Balita & Anak Sakit', 30000000, '2019-04-01', '2019-04-30', 'img/carousel1.jpg'),
('13241002', 'Koklea untuk Saras tahap 2 ', 'Penggalangan dana untuk alat implan koklea bagi Sa', '\r\n\r\nSaya adalah dr. Arifianto, Sp.A, yang dikenal masyarakat sebagai Dokter Apin, seorang edukator kesehatan anak yang sudah menulis beberapa buku dan menjadi pembicara di banyak forum edukasi kesehatan selama 12 tahun terakhir, serta giat menggalang dana untuk pasien-pasien anak yang membutuhkan.\r\n\r\nBuat Saras bisa mendengar\r\n\r\nTeman-teman, saat ini saya sedang menggalang dana untuk seorang pasien saya bernama Saras, yang rutin kontrol ke RSUD Pasar Rebo. Ia mengalami sindrom rubella kongenital (tentunya sejak lahir), dengan katarak bawaan (sudah dioperasi), mikrosefal (lingkar kepala yang kecil dan menggambarkan keterlambatan perkembangan otaknya), dan tuli kongenital. Tingkat ketuliannya sangat berat, yakni lebih dari 110 desibel untuk kedua telinganya. Dan dokter ahli THT menyatakan tindakan terbaik untuk meningkatkan fungsi pendengarannya adalah dengan pemasangan \"implan koklea\". Alat bantu dengar (ABD) diperkirakan tidak bisa membantu.\r\n\r\nHarga alat implan koklea ini sangat mahal, yaitu 154 juta (harga termurah) untuk satu telinga. Biaya operasi pemasangannya alhamdulillah dapat ditanggung BPJS Kesehatan. Untuk itu, melalui http://kitabisa.com/kokleauntuksaras, saya mencoba mengumpulkan dana untuk pembelian alat ini. Ini adalah penggalangan dana tahap kedua. Dari harga alat 154 juta, saya berhasil dapat 29 juta dari penggalangan Kitabisa tahap pertama, dan dari seorang donatur sebesar 20 juta. Mamanya Saras dapat donatur pribadi 40 juta, dan sudah sempat ada DP 18 juta sebelumnya (dari pembelian ABD). Jadi masih kurang 47 juta :-(\r\n\r\nUang muka pembayaran alat sedang diproses, dan dalam penggalangan kali ini semoga dapat terkumpul kekurangan dananya, agar Saras dapat dioperasi dalam sebulan ke depan. Terima kasih\r\n\r\nArifianto, dr. Sp.A, dokter anaknya Saras\r\n\r\nDisclaimer : Informasi dan opini yang tertulis di halaman penggalangan ini adalah milik penggalang dana dan tidak mewakili Kitabisa.\r\n', 'Balita & Anak Sakit', 250000000, '2019-04-03', '2019-04-30', 'img/carousel2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE `donatur` (
  `username` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tempatTinggal` varchar(50) NOT NULL,
  `statusPribadi` tinyint(1) NOT NULL,
  `donasi` int(11) NOT NULL,
  `salurdonasi` double NOT NULL,
  `campaign` int(11) NOT NULL,
  `fotoprofil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`username`, `nama`, `password`, `tempatTinggal`, `statusPribadi`, `donasi`, `salurdonasi`, `campaign`, `fotoprofil`) VALUES
('0812345623342', 'aq', '81dc9bdb52d04dc20036dbd8313ed0', '', 1, 0, 0, 0, ''),
('1234', 'hello@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', '', 1, 0, 0, 0, ''),
('chocho@gmail.com', 'cho', '81dc9bdb52d04dc20036dbd8313ed0', '', 1, 0, 0, 0, ''),
('coba@gmail.com', 'halloooo', '$2y$10$umMYIY0C1HQe9M2LGQa0eOI', '', 1, 0, 0, 0, ''),
('hehe', 'goo', '1234', '', 1, 0, 0, 0, ''),
('hel', 'hel', '46356afe55fa3cea9cbe73ad442cad', '', 1, 0, 0, 0, ''),
('mad@gmail.com', 'hallo', '81dc9bdb52d04dc20036dbd8313ed0', '', 1, 0, 0, 0, ''),
('ran@gmail.com', 'ran', 'd41d8cd98f00b204e9800998ecf842', '', 0, 0, 0, 0, ''),
('rosfiarani@gmail.com', 'rani', '1234', 'Semarang', 1, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `membayar`
--

CREATE TABLE `membayar` (
  `idBayarZakat` varchar(30) NOT NULL,
  `tanggal_zakat` date NOT NULL,
  `dana_disalurkan` double NOT NULL,
  `waktu` time NOT NULL,
  `idZakat` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mendonasikan`
--

CREATE TABLE `mendonasikan` (
  `idMendonasikan` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `id_donasi` varchar(20) NOT NULL,
  `isKerabat` tinyint(1) NOT NULL,
  `tanggalMenyumbang` date NOT NULL,
  `waktu` time NOT NULL,
  `dana_salurkan` double NOT NULL,
  `teksdukungan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `update`
--

CREATE TABLE `update` (
  `idUpdateDonasi` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `idDonasi` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `post` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `zakat`
--

CREATE TABLE `zakat` (
  `idZakat` varchar(20) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `lembaga` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `danaterkumpul` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`idDonasi`);

--
-- Indeks untuk tabel `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `membayar`
--
ALTER TABLE `membayar`
  ADD PRIMARY KEY (`idBayarZakat`);

--
-- Indeks untuk tabel `mendonasikan`
--
ALTER TABLE `mendonasikan`
  ADD PRIMARY KEY (`idMendonasikan`);

--
-- Indeks untuk tabel `update`
--
ALTER TABLE `update`
  ADD PRIMARY KEY (`idUpdateDonasi`);

--
-- Indeks untuk tabel `zakat`
--
ALTER TABLE `zakat`
  ADD PRIMARY KEY (`idZakat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
