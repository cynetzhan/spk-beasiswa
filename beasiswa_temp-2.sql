-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jul 2017 pada 13.33
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beasiswa_temp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `id_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'mastermin1', '$2y$10$DQ1ba5hYrUiE.lUA0.iMH.9.pckWnDVDKM3nit/4B7T6u9usApWqi', '1'),
(2, 'gurubk1', '$2y$10$DQ1ba5hYrUiE.lUA0.iMH.9.pckWnDVDKM3nit/4B7T6u9usApWqi', '2'),
(3, 'dinas1', '$2y$10$DQ1ba5hYrUiE.lUA0.iMH.9.pckWnDVDKM3nit/4B7T6u9usApWqi', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `nis_siswa` varchar(8) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kls_siswa` varchar(4) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `nama_ayah_siswa` varchar(35) NOT NULL,
  `nrata_siswa` double NOT NULL,
  `jmsdr_siswa` double DEFAULT NULL,
  `pnd_ayah_siswa` double DEFAULT NULL,
  `krj_ayah_siswa` double DEFAULT NULL,
  `hasil_ayah_siswa` double DEFAULT NULL,
  `status_siswa` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`nis_siswa`, `nama_siswa`, `kls_siswa`, `alamat_siswa`, `nama_ayah_siswa`, `nrata_siswa`, `jmsdr_siswa`, `pnd_ayah_siswa`, `krj_ayah_siswa`, `hasil_ayah_siswa`, `status_siswa`) VALUES
('10', 'Faiza Muharma', '7,1', 'WISMA INDAH 10 BLOK A NO 2', 'ERIZAL ALI JAMAL', 82, 3, 7, 7, 1, 0),
('100', 'Agustina Laia', '7,4', 'JL. PEPAYA NO. 24B', 'Otoluam Bowo Laia', 86, 1, 3, 8, 3, 0),
('101', 'Angel Qonitah Andriani', '7,4', 'Jl. Beringin 4B No. 11', 'Denny Ikhsanul', 89, 3, 3, 10, 5, 0),
('102', 'Arthadhika Dewanto', '7,4', 'Jl. Merpati 3 No. 35', 'Siswanto', 82, 2, 3, 10, 5, 0),
('103', 'Azlan Al-Isyraq', '7,4', 'Perum Lubuk Intan Blok. O/3', 'Jufryendri', 86, 4, 8, 5, 2, 0),
('104', 'BIMA PUTRA RAHMADAN', '7,4', 'JL. BELIMBING NO. 240 PADANG', 'KIRMAN', 89, 3, 1, 7, 4, 0),
('105', 'BRILLIANT FIRDAUS', '7,4', 'ADINEGORO NO. 18', 'ASRIL BASRI', 92, 3, 3, 8, 2, 0),
('106', 'Delin Ellyanda', '7,4', 'Aspol Lolong Blok F/14', 'Irwandi', 88, 2, 3, 1, 1, 0),
('107', 'Faradiva Putri', '7,4', 'Lubuk Gading Permai 1 Blok B 16', 'Sukirno Sardi', 91, 5, 3, 7, 3, 0),
('108', 'Fina Frisca  Oktarinda', '7,4', 'Jl. Sentani No. 4', 'Anifri', 92, 3, 7, 7, 3, 0),
('109', 'HENDRA TRIO PERMANA', '7,4', 'JALAN S. PARMAN 144 B', 'ERWIN', 86, 2, 3, 10, 5, 0),
('11', 'Farra Qayla Rinjani ', '7,1', 'Bungo Pasang, SIMPANG MAUT', 'Afriadi Guci', 86, 2, 3, 10, 4, 0),
('110', 'MARSAA NAUFAL ZAIDAN ZALFAA', '7,4', 'Jl. Kalin serayu no.59', 'Defriadi', 86, 3, 3, 7, 3, 0),
('111', 'Muhammad Akbar', '7,4', 'Perum. Vila Permata Putri Bougenvil No. 11', 'Ferdinand', 91, 1, 3, 7, 1, 0),
('112', 'Muhammad Ikhsan', '7,4', 'Jl. Anggrek No 47 Komp UNP', 'Samsul Hadi', 85, 3, 3, 8, 4, 0),
('113', 'MUHAMMAD IMAM SYAKRI', '7,4', 'Lubuk Gading Pengembangan Blok CC No.02', 'Syafrial', 86, 3, 8, 5, 3, 0),
('114', 'MUHAMMAD RIZALDI PRATAMA', '7,4', 'JL. UJUNG PANDANG', 'ERFENDI', 88, 4, 7, 5, 2, 0),
('115', 'Nashinta Assyura', '7,4', 'Pondok Pinang L 1', 'Guswendi', 89, 1, 7, 15, 4, 0),
('116', 'NESYA WALFADHILA', '7,4', 'JL KIJANG DUA NO 15', 'YUSWALDI', 84, 3, 3, 15, 5, 0),
('117', 'NIKEN SETYA PRADITA', '7,4', 'JL. BAHARI II NO. 62 B', 'RIANTO PRASTYO', 78, 3, 2, 15, 5, 0),
('118', 'RAHMADANI LISWAR', '7,4', 'JL. ANDALAS I/30', 'LISWAR', 86, 1, 2, 10, 5, 0),
('119', 'RAISA NABILA', '7,4', 'PERUM SINGGALANG PRIMA II A4/13', 'M REZA', 89, 1, 8, 5, 1, 0),
('12', 'HAIVA .J.', '7,1', 'JL PERTANIAN', 'H DAMPURI GANTI', 89, 4, 4, 7, 3, 0),
('120', 'RAMADHANI SAPUTRA', '7,4', 'JL. PEKAN BARU UJUNG 40A', 'MEILIASMAN', 92, 2, 3, 8, 4, 1),
('121', 'Rendy Andeska', '7,4', 'Jl. Khatib Sulaiman', 'Rafles', 88, 4, 2, 10, 5, 0),
('122', 'Rianvi Ramadio', '7,4', 'Asrama Polisi Lolong Blok D No. 9', 'Efi Nofrizal', 91, 4, 3, 1, 1, 0),
('123', 'SALSA BILLA MANTI BACHTIAR', '7,4', 'KELAPA GADING RAYA NO.2', 'BACHTIAR', 92, 4, 3, 7, 4, 0),
('12334', 'Hafizhan Shidqi', '7.11', 'Ronggowarsito', 'Ayahanda', 98, 4, 2, 3, 3, 0),
('124', 'Shintia Catur Amanda', '7,4', 'Jl. Rumin No. 8', 'Kasniel Komar', 86, 2, 3, 10, 5, 0),
('125', 'Steyfani Rihhadatul Aisy', '7,4', 'Jl. Belanti Barat No. 3 Lolong', 'Syafian', 90, 2, 2, 10, 5, 0),
('126', 'Syahril Reno Samde Putra', '7,4', 'Jl. Anyelir No. 12', 'Samsudin', 89, 3, 3, 1, 3, 0),
('127', 'Tari Azari', '7,4', 'Jl. Jhoni Anwar No.9', 'Yulia Rodi', 91, 2, 3, 7, 4, 0),
('128', 'TEGUH PRATAMA DINIL HAQ', '7,4', 'JL. BAHARI NO.9 ULAK KARANG SELATAN', 'AKMAL', 89, 3, 3, 8, 2, 0),
('129', 'Vivi Desvitrisia', '7,4', 'Jl. IR.H . Juanda 65', 'Herman Firdaus', 90, 5, 1, 10, 5, 0),
('13', 'Hayfa Nisa Marindra', '7,1', 'Jl.Beringin No. 05 Lolong Padang', 'Indra Gani', 92, 3, 8, 7, 2, 0),
('130', 'Wahdana Aulia ', '7,4', 'Taruko Permai Thp IV', 'Alm. Habib Yusuf', 86, 4, 3, 15, 5, 1),
('131', 'Widya Rosa Pratiwi', '7,4', 'Aspol Lolong', 'Maman Rosadi', 89, 2, 7, 5, 2, 0),
('132', 'Aditia Bima Sena', '7,5', 'Jln. Bahari no 76 B', 'Sutrisno', 83, 6, 2, 15, 3, 0),
('133', 'Muhammad Lutfi', '7,5', 'Jln. Hamka Air Tawar', 'Rusdan Efendi', 83, 3, 3, 8, 3, 0),
('134', 'Nabila Salwa Dira', '7,5', 'Jln. Damar I', 'Rudi Effendi', 80, 4, 3, 7, 3, 0),
('135', 'Aisyah Nabila Said', '7,5', 'Jln. Hamka Air Tawar', 'Anderson', 78, 3, 7, 7, 3, 0),
('136', 'Cut Irma Mahmuti', '7,5', 'Jl. Bunda Dalam', 'Mahmud', 86, 4, 3, 13, 4, 0),
('137', 'Fatimah Azzahra', '7,5', 'Komplek BBI', 'Syafil, Ph D', 84, 7, 9, 5, 3, 0),
('138', 'Shifa Wustha Trikarsa', '7,5', 'Komp. Aru Indah, Parak Karakah', 'Khairil', 80, 3, 3, 8, 3, 0),
('139', 'Syevina Aprilia', '7,5', 'Jln. Parkit V', 'Afrizal', 81, 2, 3, 14, 4, 0),
('14', 'JEFRIAN MAULANA', '7,1', 'Jl. Beringin IV A  No. 7 Lolong Belanti', 'Jafri Maulana', 88, 3, 6, 7, 1, 0),
('140', 'Junawar Dito', '7,5', 'Jln. S. Parman', 'Mefriandi', 82, 3, 3, 10, 4, 0),
('141', 'Dita Aisha', '7,5', 'Perum. Batang Kabung Asri', 'Dasril', 83, 2, 3, 8, 1, 0),
('142', 'Berliana Dea Syaffitri', '7,5', 'Jln. Ir. H. Juanda', 'Syafroni', 79, 5, 1, 7, 4, 0),
('143', 'Tiara Juliana Mardiansyah', '7,5', 'Perum. Adinegoro Indah', 'Dedi Ferdiansyah', 81, 3, 2, 10, 5, 0),
('144', 'Faras Abiyu', '7,5', 'Jln. Kampung Jawa dalam  no.15', 'Jasman kari mudo', 82, 2, 3, 7, 4, 0),
('145', 'Miko Marchelino Putra', '7,5', 'Jln. Juanda 53 D', 'Indra Wahyu', 77, 3, 2, 15, 4, 0),
('146', 'Viesha Josivanka', '7,5', 'Komp. Cendanablok A/3 Pasir Jambak', 'Joko Haryanto', 88, 2, 3, 1, 2, 0),
('147', 'Shakira Karunia Deri Putri', '7,5', 'Jln. Swadaya . Tunggul Hitam', 'Badri Ahmad', 86, 4, 7, 5, 1, 0),
('148', 'Khalisma Ridha Fadhila Zawi', '7,5', 'Jln. Legislatif I  no 9 Lapai', 'Ben Zaini', 86, 1, 7, 8, 4, 0),
('149', 'M. Ridho Taufiqurrahman', '7,5', 'Perm. Jihat Persada dua blok c/2', 'Syafrial', 85, 5, 1, 10, 4, 1),
('15', 'KARINDA NAJLA SHAHIRA', '7,1', 'WISMA INDAH LESTARI', 'DELSI SATRIA', 91, 2, 7, 8, 1, 0),
('150', 'AMMAR RASYIID YUSUF ALKHALIDI', '7,5', 'JL. TEMPU 42 NO 4', 'TRIHADI WIDI KURNIAWAN', 86, 4, 7, 8, 2, 0),
('151', 'Arya Saputra', '7,5', 'Jl. Ujung pandang No. 3 Blok G', 'Hendrisman', 91, 2, 7, 5, 3, 0),
('152', 'Faras Abiyu', '7,5', 'Jl. Sawah Dalam III No. 15', 'Jasman Kari Mudo', 85, 3, 3, 7, 4, 0),
('153', 'Febrina Diesta Putri', '7,5', 'Jalan Parupuk V No 17/A', 'Alfino Diesta', 86, 1, 7, 5, 4, 0),
('154', 'Harrits Yasin Nuzyes', '7,5', 'Jl. S Parman No 162', 'Nuzli Ikhlas', 88, 3, 6, 8, 2, 0),
('155', 'Hazzahra Aswati Putri', '7,5', 'Jl. Parak rumbio No. 09', 'Kasran', 89, 3, 2, 15, 4, 0),
('156', 'Ilham Agustino', '7,5', 'Jl. Khatib Sulaiman', 'Abdul Muis (Alm)', 84, 4, 3, 15, 5, 1),
('157', 'Irvan Fadila', '7,5', 'Jalan Utama Rawang Tunggul Hitam', 'Rilson', 78, 1, 6, 7, 3, 0),
('158', 'Muhammad Raiskhan Rafi', '7,5', 'Jl. Gajah V No. 1', 'Novi Hendri', 90, 3, 3, 7, 1, 0),
('159', 'Naufal Afesa Gilbert', '7,5', 'Jl. Selaguri No. 7 Tabing Padang', 'Afrizal', 89, 3, 7, 5, 2, 0),
('16', 'Khansa Nabilah Ufairah', '7,1', 'Jln. Belanti Raya No. 1', 'Rony Surya Hidayat', 92, 5, 3, 8, 3, 0),
('160', 'NISRINA MUFIDA TANJUNG', '7,5', 'JL. KEDONDONG NO. 75B PURUS V', 'HERMASYUR TANJUNG', 91, 1, 3, 7, 1, 0),
('161', 'Pasca Warensa', '7,5', 'Jl. Sarang Gagak No. 155 C', 'Rendra Putra', 89, 1, 8, 5, 3, 0),
('162', 'Rafid Al Furqan', '7,5', 'Asratek Jl. Menado M/9', 'Junaidi ', 90, 3, 3, 5, 2, 0),
('163', 'Rifaldo Saputra', '7,5', 'Jl. Hiu No. 25', 'Syaiful Bahri', 89, 3, 3, 15, 5, 0),
('164', 'Rindiani Faulika Rinaldi', '7,5', 'Jl. Kasuari No. 14 Air Tawar', 'Efrinaldi', 91, 2, 7, 7, 1, 1),
('165', 'Ryan Yulianda', '7,5', 'Jl. Arwana No. 2 C', 'Hermansyah', 90, 4, 3, 1, 1, 0),
('166', 'Vavang Vaveta Efrita', '7,5', 'Jl. Khatib Sulaiman No. 14', 'Effendi Saputra', 86, 2, 3, 7, 4, 0),
('167', 'Jihan Maisaroh', '7,6', 'Jln. Gajah Mada', 'Hendra Desmansyah', 83, 3, 6, 7, 1, 0),
('168', 'Putri Iqlima Miftahuddini', '7,6', 'Jln. S.Parman no 107', 'Zulkifli', 83, 2, 3, 7, 1, 0),
('169', 'Ferdiansyah', '7,6', 'Komp. Jihat Indah Persada ', 'Syaiful Saat', 67, 5, 3, 8, 4, 0),
('17', 'Muhammad Al Raffi Prima', '7,1', 'Komplek taman firdaus BLOK L/13', 'Saprijon', 86, 3, 3, 7, 2, 0),
('170', 'Thariq Muhammad', '7,6', 'Komp. Cimpago Putih', 'Dadan Surya M.Pd', 72, 3, 9, 5, 2, 0),
('171', 'Anna Karenina', '7,6', 'Jln. Beringin', 'Dino Sidarta', 86, 2, 9, 8, 1, 0),
('172', 'Septyla Dwi Putri', '7,6', 'Jln. Buton 27 UKU', 'Wilslon', 81, 2, 3, 10, 5, 0),
('173', 'Muhammad Ikhsan Mubaraq', '7,6', 'Perm. Anak Air Permai', 'Sabri', 85, 2, 3, 15, 4, 0),
('174', 'Malikha Caesarani', '7,6', 'Jln. Bougenvile', 'Hendri Sahar', 86, 3, 6, 8, 1, 0),
('175', 'Salsabilla Muharani Syafyati', '7,6', 'Jln. Gajah Mada', 'Sofyan Kader', 82, 4, 3, 10, 4, 0),
('176', 'Lega Pesona Kasih', '7,6', 'Perm. Gerry Permai', 'Azwar S.Pd., M. Pd', 85, 3, 8, 5, 3, 0),
('177', 'ABHINAYA AUGUSTO DAYOH', '7,6', 'JL. RASAK NO. 17 LOLONG', 'BERTJE DAYOH', 86, 2, 3, 7, 4, 0),
('178', 'ADHITYA IBNU MIRHAND', '7,6', 'KOTO PANJANG', 'AFRIDEL', 89, 1, 3, 15, 5, 0),
('179', 'Ananda Muhammad Rizki', '7,6', 'Jl. Ir. H. Juanda No. 27 Gg.Gumarang', 'Ider Pendi', 92, 3, 3, 15, 4, 1),
('18', 'MUHAMMAD ATHA ADYA', '7,1', 'JL MUTIARA NO 19', 'ADYA CHANDRA', 82, 2, 4, 7, 4, 0),
('180', 'ANNA KARENINA', '7,6', 'jl beringin 3 c no. 9', 'dino sidarta', 82, 3, 8, 7, 3, 0),
('181', 'Arif Ramadhan', '7,6', 'Jl. Parak Rumbio', 'Basril', 84, 4, 2, 13, 4, 0),
('182', 'Arwilia Arbi Syafri', '7,6', 'Jl. Kali Citarum 4 No. 12', 'Syamsir', 79, 8, 3, 7, 3, 0),
('183', 'BRYAN TRISNA HENDRAWAN', '7,6', 'JALAN BELIMBING', 'HENDRA', 86, 2, 7, 8, 2, 0),
('184', 'Dhea Puspita', '7,6', 'Perundam IV Blok I No. 21 Tg. Hitam', 'Taufik', 89, 2, 7, 5, 3, 0),
('185', 'EMIRRO ZAHRAND', '7,6', 'WISMA INDAH  JL HALMAHERA S4', 'NOFRIAL', 82, 2, 3, 8, 3, 0),
('186', 'Fadlan', '7,6', 'JL. LAP BOLA PSTS NO. 84 TABING', 'RUSWARDI', 86, 3, 3, 1, 1, 0),
('187', 'Faiha Salwa', '7,6', 'JL.Surian No.7 ', 'Zurianto Absar ', 89, 3, 3, 10, 5, 0),
('188', 'Ferdiansyah', '7,6', 'Komp. Jihad Indah Persada Blok BB 12', 'Syaiful Sa''at', 92, 3, 3, 5, 4, 0),
('189', 'Hanan Early Nofrel', '7,6', 'Jl. Gelatik 9. No. 54', 'Nofri', 88, 3, 7, 5, 4, 1),
('19', 'Muhammad Taslim Noer', '7,1', 'Komp. Salingka Bungo Permai 2 Blok Anyelir', 'Febrar BE', 87, 2, 6, 8, 3, 0),
('190', 'ILHAM FEBRIYANTO', '7,6', 'JL. RASAK NO. 2', 'RUDIYANTO', 91, 2, 3, 15, 5, 0),
('191', 'Irdiani Aiko Syahputri', '7,6', 'Jl. bandar Olo III No. 41 B', 'Syahriyal', 92, 3, 7, 5, 2, 0),
('192', 'IRVAN FEBRIAN', '7,6', 'JL. SAMARINDA M/17 ASRATEK', 'YUSLI', 86, 3, 1, 10, 5, 0),
('193', 'Jihan Maisarah', '7,6', 'Jl. Surabaya D 6', 'Hendra Desmansyah', 85, 2, 6, 7, 4, 0),
('194', 'Lega Pesona Kasih', '7,6', 'Komp.Gerry permai', 'Azwar', 86, 2, 8, 5, 3, 0),
('195', 'Malikha Caesarani', '7,6', 'Jl. Bougenvil No. 3', 'Hendry Sahar', 86, 3, 6, 7, 4, 0),
('196', 'Melysa', '7,6', 'Jl. Cemara No. 11', 'Fitrajaya', 75, 5, 3, 10, 5, 0),
('197', 'Mentari Alza Syafira', '7,6', 'Jl. Bandung No. 6 Asrtaek', 'Suhardi', 83, 3, 2, 15, 5, 0),
('198', 'Muhammad Ali Hanafi', '7,6', 'Jl. Raya Pasir Putih Perum Sinar Graha', 'Iman Setiawan', 84, 2, 6, 8, 3, 0),
('199', 'Muhammad Farid Yarfi', '7,6', 'Jondul IV Blok MM 3 Tabing', 'Soufyan', 89, 3, 7, 8, 2, 0),
('20', 'Mutiara Fikar', '7,1', 'JL. CENDRAWASIH NO.7', 'Zulfikar Ali Buto', 83, 2, 3, 10, 5, 0),
('200', 'Muhammad Ikhsan Mubaraq ', '7,6', 'Perum Anak Air Permai Blok F No 5', 'Sabri ', 89, 3, 3, 7, 4, 0),
('201', 'NABILA SYAHYATI', '7,6', 'JL. LUMBA-LUMBA NO. 125', 'BUDI SYAHRIFAL, ST', 88, 4, 8, 8, 3, 0),
('202', 'PUTRI IQLIMA MIFTAHUDDINI', '7,6', 'JL  S PARMAN 115', 'ZULKIFLI', 82, 2, 3, 15, 5, 0),
('203', 'Reski Iranda', '7,6', 'Jl. Ir.Juanda No. 51', 'Khaidir', 82, 3, 1, 10, 5, 0),
('204', 'Salsabilla Muharani Syofyati', '7,6', 'Jalan Gajah 2  No 3', 'Syofyan Kader', 82, 3, 3, 7, 5, 0),
('205', 'SEPTYLA DWI PUTRI', '7,6', 'JL BUTON NO 27', 'WILSON', 86, 1, 3, 10, 5, 0),
('206', 'Shavez Ananda Elwaz', '7,6', 'Asrama Brimob Pdg Sarai', 'Wazirman', 88, 3, 3, 1, 3, 0),
('207', 'THAQIFAH NADA', '7,6', 'JL. PEKAN BARU NO. 26 ASRATEX', 'AHMAD IBRAHIM', 90, 2, 3, 8, 4, 0),
('208', 'Thariq Muhammad', '7,6', 'Komp. Cimpago Putih D/19', 'Dadan Suryana', 87, 4, 9, 5, 2, 0),
('209', 'Waode Nindya Ramadani', '7,6', 'KOMPLEK PURI SUMA KENCANA G 19', 'JUHARDIO ANSE', 89, 3, 7, 8, 4, 0),
('21', 'NADA FASYA', '7,1', 'KOMP SALINGKA BUNGO PERMAI 2', 'ISRA MAULUDI', 79, 3, 8, 5, 2, 0),
('210', 'Shaves Ananda Elwaz', '7,6', 'Asrama Brimob', 'Wazirman', 84, 3, 3, 1, 3, 0),
('211', 'Ainul Qodri Z', '7,7', 'Komp. Mutiara Putih', 'Zakirman S.Pt', 85, 2, 7, 5, 1, 0),
('212', 'M. Fajar Setiadi', '7,7', 'Jln. Banio', 'Mazir Chan', 63, 3, 2, 8, 4, 0),
('213', 'Nabila Afifah', '7,7', 'Jln. Buton no 25', 'Daswardi', 84, 2, 3, 8, 3, 0),
('214', 'Utari', '7,7', 'Jln. Bhayangkara Lb. Buaya', 'Dasbianur', 82, 3, 2, 10, 4, 0),
('215', 'Nindya Helmi Namasa', '7,7', 'Perm. Anak Air blok B/6', 'Iqbal Harifudin S.E', 87, 1, 7, 8, 4, 0),
('216', 'Dimas Rusalis', '7,7', 'Jln. Khatib Sulaiman', 'Iswanto', 90, 3, 3, 8, 4, 0),
('217', 'M. Fan Al-Dzikro', '7,7', 'Komp. Monang Air Tawar Barat', 'Muhammad Afdhal', 64, 3, 3, 7, 1, 0),
('218', 'Ririn Desti Putri', '7,7', 'Jln. Jhoni Anwar', 'Syafar Trisna', 83, 7, 3, 8, 4, 0),
('219', 'Diana Dzikra', '7,7', 'Jln. Madang no 7', 'Taufik Hidayat', 59, 2, 3, 15, 4, 0),
('22', 'NIKEN RAHMAN', '7,1', 'PONDOK PRATAMA 3', 'MUJIBUR RAHMAN', 82, 4, 2, 7, 3, 0),
('220', 'Anita Afrillia AZ', '7,7', 'Jl. Bahari No. 16 A', 'Abuzamar', 86, 3, 1, 10, 5, 1),
('221', 'Ayudzia Hendrina Sari', '7,7', 'Jalan Cednrawasih No 7', 'Rusfi Hendri', 89, 3, 3, 7, 4, 0),
('222', 'Cut Tari', '7,7', 'Jalan Kasuari No.4', 'Syahrul', 92, 3, 3, 10, 4, 0),
('223', 'Erick Andrea', '7,7', 'Jl. Hiu II No. 9', 'Fauzi', 88, 2, 2, 10, 5, 1),
('224', 'Ghazy Rahmat Aira', '7,7', 'Lubuk Gading Permai I Blok A 06', 'Juli Hazra', 91, 5, 3, 7, 4, 0),
('225', 'Hadib Pradipa', '7,7', 'Komp. Mawar Putih Blok M / 26 Korong Gadang', 'Dinno Syam', 92, 2, 7, 7, 3, 0),
('226', 'Hafi Musyaiyad', '7,7', 'Lubuk Gading Permai I No I pengembangan Blok AA 3', 'Mursyid', 86, 3, 7, 8, 3, 0),
('227', 'Idris Ahmad', '7,7', 'JL.KEMAYORAN KOMP TNI AU NO 4', 'IFTICHAR AHMAD', 81, 2, 3, 1, 1, 0),
('228', 'Ihsan', '7,7', 'Jl. Kelapa Gading', 'M. HELMI', 85, 3, 7, 5, 2, 0),
('229', 'Livia Fitri Ananda', '7,7', 'Piai', 'Hartono', 87, 2, 3, 8, 2, 0),
('23', 'NISRINA MARIEN', '7,1', 'PERUMAHAN VILANO B2/2', 'ARFUNI ABDULLAH', 85, 3, 7, 5, 3, 0),
('230', 'MUHAMMAD BAGAS PRATAMA', '7,7', 'JL. BERINGIN BARU', 'ALWINDRA JONI', 84, 2, 3, 7, 4, 0),
('231', 'Muhammad Haykhal Fajjar Reiyan', '7,7', 'Jl. Pekanbaru I No 170 A', 'Rusman Raina', 79, 4, 3, 15, 5, 0),
('232', 'Muhammad Raihan', '7,7', 'Jl. belanti Barat 3 No. 9 Lolong PA', 'Andi As''ad', 86, 2, 7, 5, 2, 0),
('233', 'Nasywa rahmah Gega', '7,7', 'Pondok Pratama III E 6 Lubuk Buaya', 'Gesmanizon', 89, 3, 7, 7, 1, 0),
('234', 'Nisa Aulia Fathin Mujahidah', '7,7', 'Jl. Bahari No. 27', 'Suardi', 82, 4, 3, 13, 5, 0),
('235', 'Renanthari Tauhidyani', '7,7', 'Jln Linggar Jati II/ 9 A', 'Tauhiman Nasrul. S', 86, 3, 7, 5, 3, 0),
('236', 'Reza Amelia', '7,7', 'Jl Gajah 2 No 1', 'Zulbahri', 89, 2, 3, 7, 4, 0),
('237', 'RIDHO DARMAWAN', '7,7', 'KOMPLEK PERUMAHAN SINGGALANG BLOK A NO. 18', 'SOEDIRMAN ARMEN', 92, 5, 3, 8, 3, 0),
('238', 'Shyintia Rifda Andini', '7,7', 'Taruko Permai IV Blok H/10', 'Harif Haryanto', 88, 2, 3, 8, 3, 0),
('239', 'Siti Zakiyyah Izani', '7,7', 'Jl. Rasak No. 7', 'Juni Alisman', 91, 2, 3, 8, 2, 0),
('24', 'Novita Safitri', '7,1', 'Anak Air', 'Nasrizal Candra', 88, 2, 3, 7, 4, 0),
('240', 'SUCY AULIA PUTRI', '7,7', 'LUBUK GADING III N/II', 'BASAR', 89, 2, 3, 15, 5, 0),
('241', 'Villa Cania', '7,7', 'Jl. Bahari No. 40 Pasir Ulak Karang', 'Sawir', 81, 4, 2, 10, 5, 0),
('242', 'Viola Arista', '7,7', 'Jl. Bakau', 'Afrizal', 83, 6, 2, 15, 4, 0),
('243', 'Zidanul Ikhsan', '7,7', 'Lbk Gading I Blok LL/3', 'Yusri', 84, 4, 3, 7, 1, 0),
('244', 'Zulfikri', '7,7', 'Jln. Flamboyan', 'Kaswan', 85, 1, 3, 5, 3, 0),
('245', 'Elsa', '7,8', 'Pasir Purus Atas', 'Afrizal', 79, 5, 2, 7, 3, 0),
('246', 'Resty Febby Syafitri', '7,8', 'Jln. Buton no 27 Uku', 'Syafrizal ', 84, 2, 3, 5, 3, 0),
('247', 'Adhitya Fajar Febrian', '7,8', 'Komp. Singgalang', 'Irwansyah', 59, 2, 3, 8, 2, 0),
('248', 'Findy Fayola', '7,8', 'Komp. Griya Madani 4', 'Farhan', 87, 1, 7, 8, 3, 0),
('249', 'Richard Firmansyah', '7,8', 'Jln. Gajah IV no 5', 'Yoskar', 81, 2, 3, 9, 4, 0),
('25', 'Puan Utami Arianti', '7,1', 'JONDUL IV BLOK TT/16', 'indra jaya', 89, 2, 7, 7, 2, 0),
('250', 'Baihaqi Agusutina', '7,8', 'Jln. Lombok', 'Supriadi', 61, 3, 3, 5, 3, 1),
('251', 'M. Azi Rahmedian Halim', '7,8', 'Jln. Purus II no 33 H', 'Rahmed Halim', 70, 2, 3, 8, 3, 0),
('252', 'Amelia Zahra', '7,8', 'Jln. Rasak no 9 Lolong', 'Novriadi', 84, 3, 2, 10, 5, 0),
('253', 'Ridho Maulana Aulia Putra', '7,8', 'Jln. Bandung', 'Sudirman', 79, 1, 3, 10, 5, 0),
('254', 'Muhaamad Dimas Barazki', '7,8', 'Jln. Paus IV no 1 Ulak Karang', 'Yandi Mirwan', 85, 3, 6, 7, 4, 0),
('255', 'Nabila Zhafira', '7,8', 'Jln. Samarinda', 'Drs. Erizal, M.Si', 85, 3, 9, 5, 2, 0),
('256', 'Syaza Rizkia Putri', '7,8', 'Jln. Khatib Sulaiman no 30', 'Abdul Razak', 86, 3, 2, 7, 4, 0),
('257', 'Raisyah Nabila Syafri', '7,8', 'Lubuk Gading Permai', 'Syafri Nofendi', 86, 3, 7, 8, 1, 0),
('258', 'Zhafran Arya Putra', '7,8', 'Jln. Cendrawasi ', 'Andri Febrian S.H', 75, 2, 7, 7, 4, 0),
('259', 'Muhammad Fathani', '7,8', 'Perm. Beringin Indah Permai', 'Drs. Andrinifa, M.Si', 83, 4, 8, 7, 2, 0),
('26', 'Rafi Devan Pratama', '7,1', 'Jl. Jakarta No. 7 Asratek', 'Anugrah Pratama', 87, 1, 8, 1, 1, 0),
('260', 'Novira Ramadhani', '7,8', 'Jln. Rasak no 12', 'Jonnaidi', 84, 3, 7, 4, 4, 0),
('261', 'Pratiwi Ayu Putri', '8,1', 'Jln. Adi Negoro no 13 Lb. Buaya', 'Asril', 89, 3, 3, 8, 4, 0),
('262', 'Ivo Fauziah', '8,1', 'Jln. Belanti  Barat VII', 'Fahri Syawal Fitri', 89, 3, 3, 8, 4, 0),
('263', 'Nada Fasya', '8,1', 'Komp. Salingka Bungo Permai 2 Tabing', 'Isra Mauludi', 88, 2, 8, 5, 2, 0),
('264', 'Shadafi Fashan', '8,1', 'Jln. Adi Negoro no 4 Tabing', 'Fashan', 82, 3, 7, 7, 3, 0),
('265', 'M. Taslim Noer', '8,1', 'Komp. Salingka 2, Bungo Pasang ', 'Febrar', 82, 2, 6, 8, 1, 0),
('266', 'Rafi Devan Pratama', '8,1', 'Jln. Jakarta no 7 Asratek', 'H. Anugrah Pratama S.E., MM', 82, 3, 8, 5, 1, 0),
('267', 'M. Atha Adya', '8,1', 'Jln. Mutiara no 19', 'Adya Chandra', 86, 3, 4, 7, 1, 0),
('268', 'Faiza Muharma', '8,1', 'Wisma Indah X Pasie Nan Tigo', 'Erizal Ali jamal', 88, 2, 7, 7, 1, 0),
('269', 'Ayu Pertiwi', '8,1', 'Jln. DPR gang Topan Dadok', 'Amril Tanjung', 90, 4, 3, 10, 4, 0),
('27', 'RAFLI AKBAR', '7,1', 'SUNGAI LAREH', 'RUSTAM', 89, 4, 2, 7, 4, 0),
('270', 'Santika Kurnia', '8,1', 'Jln. Simpang 4 Air Tawar', 'Darlis', 87, 6, 2, 10, 4, 0),
('271', 'Yoga Defrian Fitra', '8,1', 'Perm. Permata Air Dingin', 'Defrizal', 85, 3, 3, 3, 3, 0),
('272', 'Qotrunnada', '8,1', 'Asrama Polisi Lolong', 'Heritsyah, S.H', 89, 3, 7, 1, 1, 0),
('273', 'Muhammad Rafi', '8,1', 'Perm. Lubuk Intan', 'Defri Arvedi', 87, 2, 3, 7, 4, 0),
('274', 'Andri Nugraha Akbar', '8,1', 'Komp. Cimpago Putih', 'Khairul Hidayat', 90, 4, 3, 5, 3, 0),
('275', 'Maulana Abror Ibrahim', '8,1', 'Villa Fakrisindo gang mawar no 13', 'Davy Hendry', 89, 4, 8, 5, 3, 0),
('276', 'Fanesha Widianda', '8,1', 'Jln. Prof. Dr Hamka n0 9', 'Suardi', 88, 3, 2, 7, 3, 0),
('277', 'Aliffa Oktanofrida Hade', '8,1', 'Jln. Parkit IX ', 'Hendery Dahlan', 91, 3, 9, 5, 1, 0),
('278', 'Fania Nefalda', '8,1', 'Komp. Pondok Pinang blok c/16', 'Suryanef', 88, 2, 8, 5, 1, 0),
('279', 'M. Gifari Aulia Furqan', '8,1', 'Jln. Mutiara no 2 Air Tawar', 'Drs. Nofembli Rauf', 89, 4, 7, 7, 3, 0),
('28', 'RESTU NUGRAHA', '7,1', 'Perum. Taman Sakinah Blok E No 29', 'DONI', 82, 4, 3, 7, 4, 0),
('280', 'Farhan Franaka', '8,1', 'Jln. Gajah IV no 2 A', 'Indra', 91, 1, 2, 7, 3, 0),
('281', 'Siti Aurora Khairunnisa', '8,1', 'Jln. Adi Negoro no 12 Batang Kabung', 'Muchdi Tjandra', 90, 3, 3, 5, 3, 0),
('282', 'Natasya Az Zahra', '8,1', 'Komp. Pondok Karya Perdana', 'Dedi Chandra', 89, 2, 6, 8, 2, 0),
('283', 'Affifah Nabila Putri ', '8,1', 'Flamboyan', 'Hefrizon', 90, 3, 6, 7, 1, 0),
('284', 'Fadhya Chandra', '8,1', 'Pondok Citra blok c/33', 'Tando Suardi', 89, 1, 1, 8, 4, 0),
('285', 'Ananda Vidia Maharani', '8,1', 'Ikur Koto', 'Devi Satria', 91, 2, 3, 7, 3, 0),
('286', 'Diva Rizkia', '8,1', 'Flamboyan', 'Darel Ishola', 89, 4, 2, 10, 4, 0),
('287', 'Hera Huga Marsha', '8,1', 'Jln. Belanti Barat 2 no3', 'Heryantra', 90, 4, 3, 8, 1, 0),
('288', 'Salsa Rahmadian Noer', '8,1', 'Jln. Berok Jembatan Lama', 'Noviandri', 89, 4, 3, 5, 3, 0),
('289', 'Ananda Salsabila Sakinah', '8,1', 'Jln. Cendrawasih no 16', 'Asrul S.Pd.i', 91, 2, 7, 5, 2, 0),
('29', 'SANTIKA KURNIA', '7,1', 'Simpang Ampek', 'DARLIS', 91, 3, 2, 10, 5, 0),
('290', 'Diva Putri Riandani', '8,1', 'Perm. Kasai Permai', 'Zainofriandi ', 90, 2, 2, 15, 4, 0),
('291', 'Sandi Kurniawan', '8,1', 'Tunggul Hitam Rawang Panjang', 'Armayalis', 86, 3, 1, 11, 4, 0),
('292', 'Alfiqi Ageel Prama Putra', '8,1', 'Komp. Jihat Indah Persada', 'Asrizal S.H', 91, 2, 7, 4, 1, 0),
('293', 'Muhammad Ilham', '8,1', 'Jln. Pasir Parupuk', 'Helmizar', 86, 3, 6, 5, 2, 1),
('294', 'Fatin Harun', '8,1', 'Komp. Jondul IV', 'Rustavinus', 88, 3, 6, 8, 1, 0),
('295', 'Reza Ananda', '8,1', 'Pasir Nan Tigo', 'Edi Canlatoga', 91, 3, 3, 8, 3, 0),
('296', 'Muhammad Naufal Al- Hanif', '8,2', 'Perm. Taman Sakinah Lb. Buaya', 'Nefri S.T', 86, 3, 7, 8, 2, 0),
('297', 'Fitria Wulandari', '8,2', 'Jln. Parak Rambio', 'Suwandi', 91, 2, 3, 7, 4, 0),
('298', 'Fitria Deswita Anggiami', '8,2', 'Jln. Adi Negoro Lb. Buaya', 'Amri Chan', 95, 5, 3, 7, 4, 0),
('299', 'Tri Ayu Lestari', '8,2', 'Jln. DPRD IV Dadok Tunggil Hitam', 'Siswoyo', 89, 2, 3, 10, 4, 0),
('3', 'Anissa Fadila', '7,1', 'JL. MARANSI INDAH GANG VI', 'Taufan Taufik', 81, 3, 3, 8, 2, 0),
('30', 'Shadafi Fastiyan', '7,1', 'JL. ADINEGORO NO.4', 'Fastiyan', 86, 3, 3, 7, 4, 0),
('300', 'Nasywa Alya Deyna', '8,2', 'Jln. Seranti no 5', 'Nasirman Chan', 87, 3, 7, 8, 2, 0),
('301', 'Fatya Khairani', '8,2', 'Komp. Lubuk Gading V', 'Zulkifli', 90, 2, 3, 7, 1, 0),
('302', 'Adisty Mesya Triazeva Putri', '8,2', 'Jln. Dakota', 'Muslim', 91, 3, 6, 10, 4, 0),
('303', 'Nur Wahyuni Joshe', '8,2', 'Jln. Dadok Raya Utama Tunggul Hitam', 'Jos Hendri ', 90, 3, 6, 8, 1, 0),
('304', 'Yora Hendriana', '8,2', 'Komp. Graha Agung Perdana', 'Hendri Boy', 92, 2, 3, 8, 4, 0),
('305', 'Annisa Ramadhani', '8,2', 'Jln. Gunung Karakatau', 'Dedy Maryanto Nasir', 88, 2, 7, 8, 3, 0),
('306', 'Risti Fadillah', '8,2', 'Jln. Purus', 'Solikin', 88, 2, 2, 13, 5, 0),
('307', 'Alya Zahara', '8,2', 'Jln. Gg Bhakti', 'Aprianto', 91, 4, 1, 10, 4, 0),
('308', 'Azzahra Lady Ashel', '8,2', 'Jln. Bahakti Abri', 'Drs. Asrizal M.Si', 93, 2, 8, 5, 1, 0),
('309', 'Cici Wahyuni', '8,2', 'Jln. Adinegoro, Tabing', 'Gazali', 92, 6, 3, 1, 3, 0),
('31', 'THESA FIRDA MARISKA', '7,1', 'LINTAS PAGARALAM', 'HERDI FRRDAUS', 86, 3, 3, 5, 4, 0),
('310', 'Okta Ariza', '8,2', 'Jln. Cendrawasih ', 'Zulfikri', 91, 3, 3, 8, 4, 0),
('311', 'Aurelya Azzahra', '8,2', 'Jln. Adinegoro, Ripan IV no 9', 'Syafrinus', 88, 3, 3, 5, 3, 0),
('312', 'Siti Faizah', '8,2', 'Jln. Gelatik 2 no 123', 'Ostian', 92, 3, 3, 8, 3, 0),
('313', 'Vina Febyola', '8,2', 'Jln. Adinegoro no 19, Singgalang', 'Masril', 92, 3, 3, 10, 5, 0),
('314', 'Yallny Elvitri Sari', '8,2', 'Jln. Rumah Potong Lb. Buaya', 'Yusril', 89, 4, 3, 10, 4, 0),
('315', 'Riska Fatma Putri', '8,3', 'Koto Panjang Ikur Koto', 'Budiman', 86, 3, 3, 10, 4, 0),
('316', 'Annisa', '8,3', 'Jln. Lumba-Lumba', 'Danil Ahmad', 86, 2, 3, 7, 3, 0),
('317', 'Jesica Sandita Putri', '8,3', 'Jln. Purus', 'Sandiar', 87, 3, 2, 7, 4, 0),
('318', 'Millazia Dalkala Jannah Ridwan', '8,3', 'Jln. Belibis Ujung', 'Warneri', 89, 1, 3, 7, 3, 0),
('319', 'Zakia Salsabilla', '8,3', 'Perumdan III/4 Dadok', 'Riswandi S.H', 87, 3, 7, 7, 3, 0),
('32', 'Viona Aura Rianni', '7,1', 'Jl. Cemara No. 5', 'Heriyanto', 89, 2, 7, 5, 3, 1),
('320', 'Shalsa Calista Azhaly', '8,3', 'Jln. Parak Anau Saiyo Tabing', 'Drs. Azardi', 87, 2, 7, 8, 4, 0),
('321', 'M. Arvito R', '8,3', 'Komp. Cendana Tabing', 'Ardi S.E', 88, 2, 7, 7, 2, 0),
('322', 'Elsa Fadillah', '8,3', 'Lb. Gading Pengembangan', 'Antanius', 88, 5, 3, 8, 3, 0),
('323', 'Isnanini Marfuah', '8,3', 'Jln. Madang no 10', 'Arianto', 92, 2, 1, 7, 4, 0),
('324', 'Aisyah AZ-Zahra', '8,3', 'Permata Air Dingin', 'Suprianto', 89, 6, 8, 5, 1, 0),
('325', 'Yunika Butsaini Putri', '8,3', 'Jln. Palembang', 'Irfan Dukarnaen', 88, 3, 3, 7, 4, 0),
('326', 'Fadiyah Khairani', '8,3', 'Jln. Murai no 4 Air Tawar Barat', 'Zulfikri', 86, 2, 3, 10, 5, 0),
('327', 'ABDILLAH', '8,3', 'WISMA INDAH 10 BLOK B/12', 'KEDIDI', 88, 4, 3, 8, 3, 0),
('328', 'ADAM SEQUEL KAMARUZ', '8,3', 'KOMPLEK SOPO INANTA BLOK D 6', 'KAMARUZZAMAN', 82, 2, 7, 5, 2, 0),
('329', 'ADIB ASYROF', '8,3', 'JL. MUTIARA NO. 27', 'ZULFAIRIS', 84, 3, 3, 15, 5, 0),
('33', 'Rahma Aprilya Jonisa', '7,2', 'Wisma Indah Lestari THP III', 'Arjonis', 88, 2, 3, 1, 1, 0),
('330', 'AYENDRI AL FARHAN', '8,3', 'PASIR KANDANG', 'RASMI HENDRI', 86, 3, 6, 5, 2, 0),
('331', 'CHILA AGSHARNA', '8,3', 'JALAN ANSHAR NO 50', 'IRWAN, SH', 84, 1, 7, 5, 2, 0),
('332', 'DHINI AZHARI', '8,3', 'JALAN MERDEKA DUKU KASANG', 'AL AZHAR ADEK', 88, 3, 8, 5, 1, 0),
('333', 'DIVA ZHAFIRADYA', '8,3', 'GRAHA AGUNG PERDANA BLOK I NO 18', 'ZAUJI UZER', 87, 2, 3, 8, 5, 0),
('334', 'FARHAN ANDIKATAMA PUTRA', '8,3', 'JL TERI NO. 4', 'SYAHRIAL MUIS', 79, 4, 3, 1, 1, 0),
('335', 'FRISKA AULIA PUTRI', '8,3', 'BATANG KABUNG NO 23', 'DARIYUS S.SOS', 88, 3, 7, 15, 5, 0),
('336', 'MAULA DISADINA', '8,3', 'KOMP. RAHAKA GRIYA PERMAI', 'AD HENDRI', 84, 3, 6, 5, 1, 0),
('337', 'MUHAMMAD AFDAL ZIKRI', '8,3', 'KOMPLEK PASIR PUTIH BLOK A/36', 'SYAFRIZAL', 82, 2, 1, 10, 4, 0),
('338', 'MUHAMMAD FARHAN BAIHAKI', '8,3', 'JALAN RAYA LUBUK MINTURUN', 'FITRIAL', 84, 5, 7, 7, 1, 0),
('339', 'MUHAMMAD RIDHO', '8,3', 'JL. KASIAK D13 KOMPLEK KEHUTANAN', 'DEFRY MURSAL', 78, 3, 7, 8, 4, 0),
('34', 'Sunja Syakira Hasanah', '7,2', 'Sungai Tarung, Perumahan Polda blok A no.7 Tabing', 'Syaiful Amrullah', 82, 4, 3, 1, 1, 0),
('340', 'NABILA PUTRI INDRAMA', '8,3', 'KOMPLEK FILLANO BLOK A 1 NO 11', 'INDRA MAZLI', 90, 2, 3, 7, 4, 0),
('341', 'PUTRI NABILLA', '8,3', 'KOMPLEK KHARISMATAMA PERMAI B/2', 'ZARMADI INDRA', 89, 3, 3, 7, 3, 0),
('342', 'REFITRA IRAWAN', '8,3', 'KOMPLEK JONDUL 4 BLOK FF 13 TABING', 'INDRA IRAWADI S.T', 91, 4, 7, 7, 2, 0),
('343', 'STELLINA SHAKIRA', '8,3', 'JALAN BAHARI 1 NO 75', 'ASWIR JUNAIRY', 89, 1, 3, 10, 4, 0),
('344', 'SULTHAN SAYIDINA BERMANA', '8,3', 'PASIR SEBELAH PASIR NAN TIGO', 'BERMAN HENDRI', 90, 2, 7, 7, 1, 0),
('345', 'SYAFLIZAL SATRIA', '8,3', 'JALAN OLO LADANG NO 14 D', 'AGUSWARDI', 90, 1, 3, 15, 5, 0),
('346', 'Rindiani Ukhti Salsabila', '8,3', 'Jln. Parupuk', 'Rusli', 92, 3, 1, 10, 4, 0),
('347', 'Muhammad Ichsan ', '8,3', 'Jln. Ir. H. Juanda', 'Syafnizal', 88, 3, 3, 8, 2, 0),
('348', 'Nabila Rahmi Fareza', '8,4', 'Perm. Graha Bungo Pasang, Tunggul Hitam', 'Fahrizal', 91, 2, 3, 7, 4, 0),
('349', 'Amelia Calista', '8,4', 'Perm. Padang Sarai Permai', 'Junaedi Syarkawi', 88, 2, 8, 5, 1, 0),
('35', 'Muhammad Aras Sadiq', '7,2', 'Bhakti III no. 13 Alai Parak Kopi', 'Jon Efrizal', 84, 2, 7, 5, 3, 0),
('350', 'Rafiqah', '8,4', 'Komp. Permata Air Dingin', 'Ir. Mumtas', 92, 3, 7, 7, 3, 0),
('351', 'Cheti Chati Nurhayati', '8,4', 'Jln. Heler gg DPRD 1 Dadok', 'Nafendri Caniago', 90, 6, 3, 8, 3, 0),
('352', 'Hurriyah Nadhira Fianfi', '8,4', 'Jln. Linggarjati no 3 Tabing', 'Aldifian M', 92, 2, 7, 5, 2, 0),
('353', 'Raisha Olivia Haekal', '8,4', 'Jln. Rasak no 6 Lolong', 'Whendra Amir, Bsc', 90, 2, 6, 5, 2, 0),
('354', 'Rosa Meiyolanda', '8,4', 'Jln. Madang no 1a Lolong', 'Darmawi', 87, 1, 1, 10, 4, 0),
('355', 'Rahmat Oky Rivaldi', '8,4', 'Komp. Pemda Sei Lareh', 'Syamsuar', 86, 3, 3, 5, 4, 0),
('356', 'Dzaky Fadhlur R', '8,4', 'Asrama Brimob Padang Sarai', 'Andi Susandi', 79, 2, 3, 1, 2, 0),
('357', 'Deo Al- Fajri', '8,4', 'Jln. Bhakti n0 6', 'Murizal', 91, 1, 1, 10, 4, 0),
('358', 'Libjen Duri Kalfitri', '8,4', 'Jln. Cendrawasih no 20 Air Tawar', 'Lilik Yulianto', 86, 2, 3, 7, 2, 1),
('359', 'Nur Ivana Mustika', '8,4', 'Jln. Utama no 2Dadok Tunggul Hitam', 'Mustofa', 88, 3, 3, 8, 1, 0),
('36', 'Muhammad Brilliant', '7,2', 'Perumahan Anak Air Permai Blok E.19', 'Agus Kusyaeri', 86, 5, 3, 5, 2, 0),
('360', 'Annisa DWI Maselvi', '8,4', 'Jln. Anshar I no 31 Dadok Tunggul Hitam', 'Masrizal', 90, 3, 7, 8, 1, 0),
('361', 'Muhammad Rifqi Asyari', '8,4', 'Jln. Kelapa Gading Raya no 4 Asratek', 'Deri Kurnia, S.T', 93, 3, 7, 7, 3, 0),
('362', 'Selly Delviana Eka Suci', '8,4', 'Jln. Garuuda 2 no14 PERUMNAS ATB', 'Sebridel Putra', 90, 3, 6, 8, 4, 0),
('363', 'Firza Putri Murendra', '8,4', 'Jln. Pinus III no 26', 'Makmur', 92, 2, 3, 7, 4, 0),
('364', 'Shelsy Sri Rahmadini', '8,4', 'Komp. Jihad Indah Persada', 'Ali Bahar', 89, 3, 3, 5, 3, 0),
('365', 'Rafika Zarmi', '8,4', 'Jln. Utama no29 Karawang Panjang', 'Zarman', 89, 3, 1, 11, 5, 0),
('366', 'Prety Maharani', '8,4', 'Lubuk Buaya Komp. Gerry Permai', 'Jasril', 88, 2, 2, 10, 5, 0),
('367', 'Aprillia Atifa Yaner', '8,4', 'Jln. Prof. Dr. Hamka no 17 D Tabing Padang', 'Neri Nizar', 93, 2, 3, 7, 3, 0),
('368', 'Revanda Annisaa Cahyani', '8,4', 'Wisma Indah II Jln. Rambutan Lapai', 'Rafles Nur', 91, 3, 7, 5, 1, 0),
('369', 'Faridhul Arsyad', '8,4', 'Lubuk Gading Permai VI blok A no 16', 'Suyatno', 89, 5, 3, 8, 2, 0),
('37', 'Randy Yantaris', '7,2', 'Pondok Pratama III G.10', 'Syafris', 84, 4, 3, 8, 3, 0),
('370', 'Dinda Rifda Ashani', '8,4', 'Perm. Taruko IV blok H no 10', 'Harif Aryanto', 90, 3, 3, 10, 4, 0),
('371', 'Muhammad Ilham Adya', '8,4', 'Jln. Mutiara no 19 ATT padang', 'Adya Chandra', 90, 3, 4, 7, 4, 0),
('372', 'Rainisha De Vania', '8,4', 'Jln. Beringin IV no 14 Lolong', 'Zulyasri', 90, 4, 6, 10, 5, 0),
('373', 'Gema Zikra Rohan', '8,4', 'Jln. Ranah Binuang', 'Zulkarnain', 88, 3, 3, 8, 4, 0),
('374', ' Yusuf Syahrul Ramadhan', '8,4', 'Jln. Jeruk no 185', 'Zulianaidi', 86, 2, 3, 10, 5, 0),
('375', 'Nabila Khairani', '8,4', 'Jln. Bougenville', 'Zulfikar Agus Salim', 90, 3, 8, 8, 1, 0),
('376', 'Mohammad Restu Dhiyabilal Farh', '8,4', 'Wisma Mayang Sani Bt. Kabung', 'Adek Adrian', 80, 1, 3, 8, 1, 0),
('377', 'Fajriani Dwi Wahyuni', '8,4', 'Simp Komp. Altarindo no 29', 'Muliadi', 88, 2, 7, 8, 1, 0),
('378', 'Fauzan Syailendra', '8,5', 'Komp. Wisma Indah Lestari', 'April Maiza', 86, 2, 3, 10, 4, 0),
('379', 'Agra Hidayatullah', '8,5', 'Jln. Asra II no 49 Dadok Tunggul Hitam', 'Hotman', 85, 3, 6, 7, 4, 0),
('38', 'Vanya Aldhanda', '7,2', 'Perumahan Kasai Permai Blok P no.3', 'Alfitra', 88, 3, 3, 10, 4, 0),
('380', 'Raisha Indira Putri', '8,5', 'Jln. Hercules no 27 Tunggul Hitam', 'Indra', 86, 4, 7, 5, 3, 0),
('381', 'Della Amelia Putri', '8,5', 'Blkg Pasar Lb. Buaya', 'Suharmen', 90, 3, 3, 7, 4, 0),
('382', 'Maghfira Risya Azzahra', '8,5', 'Komp. Lubuk Sejahtera Lestari Strata', 'Yuleus Usman', 87, 2, 7, 7, 1, 0),
('383', 'Athifah Nabila Putri', '8,5', 'Jln. Adinegoro', 'Muslim Amd', 91, 2, 6, 7, 4, 0),
('384', 'Lidya Rossa Liza', '8,5', 'Lubuk Buaya Kec Koto Tangah', 'Nilza Candra', 88, 4, 2, 10, 5, 0),
('385', 'Robby Marzein Romano', '8,5', 'Komp. Cendana Tabing', 'Medi Afriza', 85, 2, 3, 7, 5, 0),
('386', 'Muhammad Zaidan Addyp', '8,5', 'Jln. Seranti no10', 'David Yudia Putra', 84, 3, 8, 5, 3, 0),
('387', 'ARIQ REFIANANDA', '8,5', 'JL. KENCUR NO. 12 WISMA TABING', 'REKSI SANJAYA', 81, 3, 7, 8, 3, 0),
('388', 'DEFINE ALICE CALYA', '8,5', 'MEGA MARINA BLOK U/23 TABING PADANG', 'RIKO SOPHA', 85, 1, 4, 8, 2, 0),
('389', 'DIVA RIZALIA PUTRI', '8,5', 'KOMP. WISMA MAYANG SANI B/16', 'NASRIZAL', 87, 2, 3, 7, 1, 0),
('39', 'Tasya mawadah', '7,2', 'Jln. Kelapa Gading Raya', 'Mayunis', 87, 3, 3, 7, 1, 0),
('390', 'FAJARANTI PRATIWI', '8,5', 'JALAN CEMARA NO 3', 'NASRIDAL PATRIA', 84, 4, 8, 5, 1, 0),
('391', 'FARAS KARIZTIFALLAH', '8,5', 'PERUMAHAN MEGA PERMAI 1 BLOK B2/15', 'HARMON', 79, 2, 3, 7, 3, 0),
('392', 'IRVAN FADILLAH', '8,5', 'PERUMAHAN BUNGA MAS BLOK H3/5', 'DEDI SURYADI', 86, 2, 3, 8, 4, 0),
('393', 'ISNA FADHILA', '8,5', 'JL. BAKTI NO. 8A', 'MASRIL', 89, 4, 1, 12, 5, 1),
('394', 'JINGGA KIRANA', '8,5', 'JL. ANGKASA PURI NO. 28', 'EDDY LATUFARIZAL', 82, 3, 3, 8, 1, 0),
('395', 'MARSENDA OVILIA', '8,5', 'KORONG SEI PINANNG', 'SUMARDI', 86, 1, 1, 15, 5, 0),
('396', 'MUHAMMAD EVAN GIFFARY', '8,5', 'KOMPLEK TAMAN CITRA BERLINDO BLOK H NO 10', 'CHANDRA', 89, 3, 7, 8, 5, 0),
('397', 'MUHAMMAD FAUZAN', '8,5', 'KOMP. SINGGALANG BLOK BD/28', 'ERI YOSERIZAL', 92, 3, 3, 5, 3, 0),
('398', 'MUHAMMAD FERDI ZON', '8,5', 'KOMPLEK BUNDA PERMAI BLOK B NO 4', 'MAIZON', 88, 2, 3, 10, 4, 0),
('399', 'MUHAMMAD HABIBI GUNAWAN', '8,5', 'JALAN ENGGANG RAYA NO 28 A', 'YONIWAL GUNAWAN', 91, 4, 6, 7, 4, 0),
('4', 'Anliano Zaky', '7,1', 'Komplek Taruko IV Blokn L / 23', 'Yanto B', 85, 3, 3, 7, 4, 0),
('40', 'Najwa Dwina Natassya', '7,2', 'Jln. Heler RT.01 RW 08 Dadok Tg. Hitam', 'Guslami', 79, 3, 3, 10, 4, 0),
('400', 'NIKO ANDRIA', '8,5', 'JL. KHATIB SULAIMAN 35', 'ANDRI SUSANTO', 90, 1, 3, 8, 4, 0),
('401', 'RAHMI NURADILA', '8,5', 'ASRAMA BRIMOB', 'AIDIL PUTRA SULTANDA', 84, 2, 7, 5, 3, 0),
('402', 'RANTI RAMADHANI', '8,5', 'GANG BAKTI 2 TUNGGUL HITAM', 'AMIRUDDIN', 88, 4, 3, 7, 4, 0),
('403', 'RHAUDATUL SHAKILA PAHLEVI', '8,5', 'ASPOL LOLONG BLOK F NO 8', 'FIRDAUS', 87, 2, 3, 1, 1, 0),
('404', 'ROZIN ADIGUNA', '8,5', 'PERUM GERRY BLOK T NO 10', 'EMLIARDI', 79, 3, 6, 10, 5, 0),
('405', 'SOVIA LATIFA', '8,5', 'PERUMAHAN PONDOK SARAI PERMAI', 'OKSAS MARFENDI', 88, 3, 3, 7, 4, 0),
('406', 'SYAHWILDA TRI HAYATI', '8,5', 'PERUMAHAN BERINGIN INDAH LESTARI J/31', 'GAFUR SYAH', 88, 3, 3, 7, 4, 0),
('407', 'Riandiani Faulika Rinaldi', '8,5', 'Jln Kasuari no 14 Air Tawar', 'Efrinaldi', 83, 4, 7, 7, 3, 0),
('408', 'Alif Aisa Deo Putra', '8,5', 'Jln. Raden Saleh', 'Albert Dasril', 88, 2, 3, 10, 5, 0),
('409', 'Silvira Anggraini Putri', '8,6', '', 'Adrian', 84, 3, 2, 10, 5, 0),
('41', 'Nadia Zahratul Husna', '7,2', 'Jln. Bunda Raya no. 8', 'Edison S.Pd', 88, 4, 7, 5, 1, 0),
('410', 'Rahma Dewi', '8,6', 'Pasir Sebelah, Muaro Penjalinan', 'Lahuddin Chan', 84, 2, 2, 13, 4, 0),
('411', 'Maesy Chairunnisa ', '8,6', 'Jln. Surabaya no c/25', 'Syamsu Rizal', 88, 3, 7, 5, 1, 0),
('412', 'Muhammad Raffi Akbar', '8,6', 'Komp. Bundo Permai blok A2', 'Dedi Fendri', 88, 1, 7, 7, 1, 0),
('413', 'Avhika Ralyno Putri', '8,6', 'Palapa Saiyo', 'Ramli', 87, 2, 3, 10, 4, 0),
('414', 'Ummu Kalsum Afifah', '8,6', 'Jln. Gajah II no 9B', 'Yaslim', 89, 4, 2, 8, 4, 0),
('415', 'Dafka Shidiq Arief', '8,6', 'Komp. Salingka II', 'Arif Rahman', 87, 3, 6, 7, 3, 0),
('416', 'Bintang Anthony Putra', '8,6', 'Jln. Veteran', 'Anthony Zain', 88, 5, 6, 8, 2, 0),
('417', 'Oryn Fazillah', '8,6', 'Jln. Utama Perm BBI Tunggul Hitam', 'Irwan', 84, 3, 3, 8, 5, 0),
('418', 'Febiana Avarel Khan', '8,6', 'Jln. Pinus II no 13', 'Yulykhan', 89, 3, 7, 8, 2, 0),
('419', 'ADZRA OKTALISMANRIVA', '8,6', 'PRUMDAM TUNGGUL HITAM H 7', 'ALISMAN A', 86, 1, 6, 8, 1, 0),
('42', 'Mutiara Aura Dhita', '7,2', 'Perumuahan Pondok Pinang blok J/2 Lubuk Buaya', 'Taswin Novrian Yonizar', 84, 2, 4, 8, 4, 0),
('420', 'AISA SELVIRA QURATTA AYUNNI', '8,6', 'JALAN BRONCO NO 5', 'WINARDI', 86, 4, 7, 8, 3, 0),
('421', 'AKMAL RAHMAN', '8,6', 'JL. SALAK NO. 274', 'JHONI', 75, 4, 3, 8, 2, 0),
('422', 'ALIF AZANI ZUHRI', '8,6', 'JL. DAHLIA NO. 12', 'TOMMI JAUHARI', 83, 2, 6, 7, 1, 0),
('423', 'AMALIA AZ-ZAHRA HARINI', '8,6', 'JL. SEPAKAT NO. 5 MUARO PANJALINAN', 'HARDION', 84, 2, 7, 8, 3, 0),
('424', 'ANDRI SYAHPUTRA', '8,6', 'JALAN DURIAN NO 18A PURUS BARU', 'SEPRI', 89, 2, 2, 15, 4, 0),
('425', 'ANGELICA VIDYA ULFA', '8,6', 'JL. HIDAYAH I/26', 'SUDARMAJI', 89, 5, 7, 8, 2, 0),
('426', 'ANNISA EKA PUTRI', '8,6', 'JALAN JHONI ANWAR GANG ATLAS', 'IBRAHIM', 88, 3, 2, 15, 2, 0),
('427', 'BAYU MENTARI', '8,6', 'PERUM BUMI LUBUK BUAYA INDAH', 'MUJIONO', 88, 4, 3, 10, 4, 0),
('428', 'CENDY ALWIGA', '8,6', 'JL. CENDRAWASIH GG PARI', 'DRS. GUSRIZAL', 82, 2, 7, 5, 1, 0),
('429', 'FARREL HAFI HASYIM', '8,6', 'JALAN BY PASS', 'DESPRARAMA', 84, 2, 7, 5, 3, 0),
('43', 'M. Thariq Elvian', '7,2', 'Perumahan Beringin Indah Lestari  blok A/2', 'Elvi Amri', 82, 3, 7, 8, 2, 0),
('430', 'HANIFA RAHMATUL AINI', '8,6', 'SIMPANG HILALANG NO 8 BATANG KABUNG', 'MULYADI S', 86, 3, 3, 10, 5, 0),
('431', 'M. IKHSAN', '8,6', 'KOMP. BSD I PASIR KANDANG', 'KUSRIANTO', 84, 1, 3, 10, 4, 0),
('432', 'MARISCA SHAHIRA', '8,6', 'KOMPLEK ALAM PERMAI BLOK B NO 8', 'SYAHRIWAL', 88, 1, 7, 8, 1, 0),
('433', 'MUTHIA LATHIFA', '8,6', 'KOMPLEK BATANG KABUNG ASRI A 17 KOTO TANGAH', 'BOYFIRMINO', 87, 4, 7, 8, 2, 0),
('434', 'NABILAH ZHAFIRAH', '8,6', 'JL. LAPANGAN BOLA PSTS NO.76', 'AZI AFIRMAN', 79, 3, 3, 7, 4, 0),
('435', 'TORIQ PERMANA', '8,6', 'PASIR JAMBAK', 'JUNIZAR', 88, 3, 3, 13, 5, 0),
('436', 'VANESA CINTA EFANDRI', '8,6', 'PALAPA SAIYO BLOK A 8 NO 14', 'EFANDI', 84, 3, 6, 8, 3, 0),
('437', 'VINA AMELIA', '8,6', 'JALAN BASKET NO I BELAKANG UNP II', 'IRMAN DJAFAR', 82, 2, 6, 5, 2, 0),
('438', 'Nanda Sulton Aulia', '8,6', 'Jln. Bahari no 76 B', 'Sutrisno', 88, 6, 2, 7, 3, 0),
('439', 'Dion Noorsa', '8,6', 'Jln. Sumba  Ulak karang', 'Syaifullah Husein', 91, 1, 7, 5, 4, 0),
('44', 'Citra Rahma Deya', '7,2', 'Komp. Kuala Nyiur 2 blok D/9', 'Suprianto', 81, 3, 3, 5, 3, 0),
('440', 'Cintya Junia Dasril', '8,7', 'Duku', 'Dasril S.T', 90, 2, 7, 7, 1, 0),
('441', 'Vonny Rahmadhani Fitri', '8,7', 'Anak Air Lb. Buaya', 'Hendri', 89, 2, 3, 8, 4, 0),
('442', 'Amanda Akira Nasrul', '8,7', 'Jln. Delima Komp Pondok Mungil', 'Nasrul Syam', 93, 3, 7, 8, 1, 0),
('443', 'Luthfi Sausan Armelia', '8,7', 'Ikur Koto', 'Arman S.Pd', 89, 1, 7, 5, 2, 0),
('444', 'Dindriana Azzahra', '8,7', 'Jln. Minturun', 'Elli Hartono', 88, 3, 3, 7, 4, 0),
('445', 'Avil Rahmad', '8,7', 'Jln. Hiu III no 14', 'Bambang', 84, 3, 3, 10, 4, 0),
('446', 'Andhika Anthony Putra', '8,7', 'Jln. Veteran', 'Anthony Zain', 88, 5, 6, 8, 2, 0),
('447', 'Annisa Rahmadhani', '8,7', 'Air Dingin', 'Syaifuddin', 86, 8, 3, 10, 4, 0),
('448', 'Tri Agnes Irlano Putri', '8,7', 'Jln. Pramuka V', 'Irlano Putra', 92, 5, 3, 10, 4, 0),
('449', 'Aulia Putri Ananda', '8,7', 'Perm. Bungo Mas', 'Aznal', 88, 3, 3, 2, 1, 0),
('45', 'Annisa Dwi Fitriani', '7,2', 'Tanjung Aur RT 02 RW 05', 'Hendri', 90, 3, 3, 9, 4, 0),
('450', 'Yulia Annisa Putri', '8,7', 'Jln. Bunda 3B no 7', 'Budi Karna', 91, 1, 3, 10, 5, 1),
('451', 'Nadia Reswara', '8,7', 'Jln. DPR 7 no 8A', 'Dian C. Ariwibawa', 88, 3, 7, 5, 1, 0),
('452', 'Jihan Zahirah', '8,7', 'Komp. Perum Lubuk Intan blok O/16', 'Hendri', 88, 3, 7, 7, 1, 0),
('453', 'Qamarani Salwa Yora Jaslin', '8,7', 'Komp. Lb.Gading I', 'Suyono', 87, 2, 3, 8, 4, 0),
('454', 'Ayatusyifa Burhamsli', '8,7', 'Jln. Pramuka I', 'Edy Burhamsyah', 87, 2, 7, 8, 4, 0),
('455', 'Rifani Widia Putri', '8,7', 'Anak Air Lb. Buaya', 'Nofriadi Rusli', 88, 3, 1, 10, 4, 0),
('456', 'Muhammad Rangga Perdana', '8,7', 'Jln. Semangka Wisma Indah', 'Jhon Irwan', 91, 3, 7, 8, 1, 0),
('457', 'Egi Khalifah Nugraha', '8,7', 'Pinang Bungkuk Permai', 'Cucu Sukarna', 91, 3, 7, 5, 2, 0),
('458', 'Rezkhy Maulana Yazir', '8,7', 'Komp. Polri Bungo Tanjung Indah', 'M. Nazir', 90, 4, 1, 7, 4, 0),
('459', 'Silvina Maulidya', '8,8', 'Jln. M.H Thamrin', 'Syafrul', 85, 3, 7, 8, 3, 0),
('46', 'Syahnaz Triatika', '7,2', 'Jln. Bhakti no 68 Tabing', 'Armadia', 79, 4, 3, 10, 5, 0),
('460', 'Rahmat Hidayat', '8,8', 'Ulak Karang', 'Herman Fahrizal', 87, 3, 3, 10, 4, 0),
('461', 'Muhammad Anugrah Fadel', '8,8', 'Asrama Haji Tabing', 'Junaidi', 88, 3, 3, 8, 4, 0),
('462', 'Qalbun Salim F.H', '8,8', 'Komp. Gfilano Tabing', 'Hanafih Mahmud ST', 84, 4, 7, 5, 1, 0),
('463', 'ANDINI AULIA PUTRI', '8,8', 'PASIR KANDANG', 'FERDI', 82, 3, 3, 10, 4, 0),
('464', 'ATHAYA PUTRA MARSA', '8,8', 'KOMPLEK MONANG INDAH B/7 LB. BUAYA PADANG', 'SATRIAGUS SY', 87, 3, 3, 10, 4, 0),
('465', 'ATIKA REIZKY MARINI', '8,8', 'PERUM VILLA ANGGREK II BLOK 0/5 AIR DINGIN', 'JAMRAS', 83, 5, 3, 7, 3, 0),
('466', 'BINTANG PUTRA RAMAESTA', '8,8', 'TAMAN CITRA BERLINDO THP II DD/7', 'HIPTHONIUS RAMAGUS', 79, 3, 7, 7, 1, 0),
('467', 'CHINTI AGITA MASTRA', '8,8', 'JL. KESEHATAN', 'AMAS', 82, 2, 6, 7, 1, 0),
('468', 'DAVIN MUHAMMAD FAHREZY', '8,8', 'JL. GANDARIA NO.7', 'ROSLAN ROBERT', 85, 2, 7, 7, 1, 0),
('469', 'DEA MAHARANI', '8,8', 'LUBUK GADING 4 B NO 41 LUBUK BUAYA', 'DIDI WABER', 88, 2, 7, 5, 2, 0),
('47', 'Marsha Indah Cahyani', '7,2', 'Komp. Salingka Bungo Permai 1', 'Ardi Chandra NS', 76, 2, 6, 8, 1, 0),
('470', 'DINDA RAHMANIA DIANTO', '8,8', 'JL. RAMBAI GG MAKMUR NO. 2C', 'MARDIANTO INDRA', 89, 1, 3, 12, 4, 0),
('471', 'FEBRIAN VALENTINO FALIX', '8,8', 'JALAN GARUDA NO 45 TUNGGUL HITAM', 'FAUZAN', 87, 4, 3, 7, 4, 0),
('472', 'HANNIE NAVIZA ADENI', '8,8', 'KOMPLEK JONDUL 4 BLOK TT NO 16', 'ADYOS', 89, 3, 8, 5, 1, 0),
('473', 'HASANAH FUAD', '8,8', 'KOMPLEK JONDUL III BLOK E/4', 'KHAIRUL FUAD', 82, 2, 7, 8, 2, 0),
('474', 'INDAH AYU ALBANAND', '8,8', 'JL. NGURAHRAI NO. 2', 'DEVI HENDRY', 91, 4, 6, 7, 4, 0),
('475', 'ISTIDANIELA RIS OKTAVIANIS', '8,8', 'KOMPLEK MUTIARA PUTIH BLOK N NO 3', 'DAHNIL', 86, 2, 3, 7, 4, 0),
('476', 'KHALISHATINNISAA''', '8,8', 'JALAN EVAKUASI PUSKESMAS ANAK AIR', 'YULPAHERI', 86, 2, 7, 5, 3, 0),
('477', 'M. GAMEL ABDEL PRAKOSO', '8,8', 'ASRATEK JL. DILI R/9', 'IRAWAN', 79, 3, 3, 7, 1, 0),
('478', 'MEZANECHIA GHEVIRANICA', '8,8', 'JALAN JUANDA NO 2', 'CANDRIANTO', 86, 2, 8, 5, 1, 0),
('479', 'MUHAMMAD LUTHFI ERFAT TANE', '8,8', 'JALAN BENGKUANG NO 26 PURUS', 'ERICK TANE', 81, 2, 7, 7, 1, 0),
('48', 'Widia Rahmi', '7,2', 'Komp. Lubuk Gading Permai 3 blok H/5', 'Zainir, S.H, M.Si', 88, 3, 8, 5, 1, 0),
('480', 'MUSANNIF NUR SALIM', '8,8', 'JALAN PULAI LUBUK KAPUH', 'AFRIZAL', 85, 4, 3, 10, 5, 0),
('481', 'RACHMAT FADILLAH RAMADHAN', '8,8', 'BUNGO PASANG', 'SYAFRUDDIN ZAINUN', 87, 2, 3, 8, 1, 0),
('482', 'RAMA FAZAKO ARISTIK', '8,8', 'AIR DINGIN', 'MASRIAL', 84, 4, 7, 5, 2, 0),
('483', 'RAYANA SYAHRI', '8,8', '. JALAN SAWO NO 24 PURUS 5', 'SYAHRIAL', 79, 3, 3, 10, 4, 0),
('484', 'RIANA OKTARINA', '8,8', 'JALAN DPRD VI NO 11 DADOK TUNGGUL HITAM', 'JASMAN', 86, 3, 6, 10, 5, 0),
('485', 'RIZKY SYABANDRI', '8,8', 'KOMPLEK BUMI LAREH PERMAI BLOK D NO 1', 'NAVINDRA PUTRA', 89, 4, 2, 10, 4, 0),
('486', 'SASKIA SALSABILA', '8,8', 'PERUM PONDOK PINANG BLOK K NO 9', 'BAHENDRI', 82, 2, 8, 5, 1, 0),
('487', 'SAUSAN RAMADHANI SYAKURA', '8,8', 'JALAN GANG PUMA 23 TUNGGUL HITAM', 'NUZUWIR', 86, 2, 7, 5, 2, 0),
('488', 'SHARAH', '8,8', 'LUBUKGADING 3 BLOK K NO 4', 'NOVRA AFRIANDI', 89, 1, 3, 8, 2, 0),
('489', 'SYADILA ARMEZA PUTRI', '8,8', 'PONDOK PRATAMA 3 BLOK A 3 NO 3', 'JULHARMEN', 92, 1, 3, 10, 5, 0),
('49', 'Melati Aprillia Putri', '7,2', 'Jln. Ngurahrai no 2', 'Devi Hendry', 83, 3, 6, 7, 3, 0),
('490', 'VANNESA YUMNAA HERLYK', '8,8', 'JALAN BELIMBING NO 237 PURUS KOBON', 'HERLYK', 88, 4, 3, 7, 2, 0),
('491', 'ZULKIFLI', '8,8', 'JL. KELAPA GADING VI/29', 'RUSLI', 91, 2, 3, 12, 5, 1),
('492', 'Alfito Fikryansyah', '8,8', 'Jl. Selaguri', 'Daryan Basir', 86, 4, 7, 10, 4, 0),
('493', 'Zakaria Fernando', '8,8', 'Kel. Balai Gadang', 'Afrizal', 87, 4, 2, 10, 4, 0),
('494', 'Ruth Emeralda Raihan', '9,1', 'Jl. Belanti Barat', ' Joni Verry', 91, 4, 7, 7, 1, 0),
('495', 'Ikhsan Alwi', '9,1', 'Jl. Kelapa Gading', 'Afrizal Samara S.Pd', 88, 2, 7, 5, 2, 0),
('496', 'Annisa Yolanda', '9,1', 'Jl. Pasamala no 8', 'Mariyus', 86, 3, 2, 10, 4, 0),
('497', 'Anggeline Pramesha Asri', '9,1', 'Jl. Siti Hawa', 'Zulasri S.Pd', 84, 3, 7, 5, 2, 0),
('498', 'Aviva Salsabila', '9,1', 'Komp. Denai Pamulang', 'Amril', 90, 3, 7, 7, 1, 0),
('499', 'Eric Maulana', '9,1', 'Jl. Cendrawasi', 'Irwan Idris', 86, 3, 3, 8, 2, 0),
('5', 'ATHAGENI TALITHA PATRICIA', '7,1', 'jalan pemuda no 12', 'joni akhbar', 87, 4, 7, 5, 1, 0),
('50', 'Putri Anisa', '7,2', 'Komp. Singgalang', 'Alfa Agustinus', 81, 1, 3, 8, 4, 0),
('500', 'Arinda Restu Pratiwi', '9,1', 'Jl. Bakti no 38c', 'Odri SH', 90, 2, 7, 8, 1, 0),
('501', 'Shazri Al Hakim', '9,1', 'Jl. Belanti Barat', 'H. Jamal', 86, 4, 3, 7, 3, 0),
('502', 'Muhammada Yusuf', '9,1', 'Jl. Pekanbaru III', 'Maiyusra', 88, 2, 3, 10, 5, 0),
('503', 'Sutan Mhd Wira Hasri', '9,1', 'Jl. Melati Air Tawas', 'Sutan Ridwan', 86, 2, 7, 5, 2, 0),
('504', 'Dicko Azrinaldi', '9,1', 'Jl. Dadok Raya', 'Azripen', 89, 3, 2, 7, 3, 0),
('505', 'Aura Praduja Fria', '9,1', 'Jl. M Yunus', 'Darjis', 89, 2, 2, 10, 4, 0),
('506', 'Cindy Aulya Ramadhani', '9,1', 'Perumahan Jabal Rahmah', 'Irwan', 86, 4, 2, 10, 4, 0),
('507', 'Figo Dareviesyah L', '9,1', 'Komp. Graha Agung Perdana', 'Mardiansyah', 89, 2, 3, 8, 4, 0),
('508', 'Dea Septia Masnel', '9,1', 'Jl. Adinegoro', 'Masri, SH', 88, 4, 7, 1, 1, 0),
('509', 'Khairul Annisa Fitri', '9,1', 'Jl. Utama no 15 Dadok', 'Syamsurinal', 90, 5, 2, 7, 3, 0),
('51', 'Rafi Seprianto', '7,2', 'Komp. Perumahan Bunga Mas 1', 'Drs. Mukhnizar', 84, 3, 7, 5, 1, 0),
('510', 'Silvia Ratu Delima', '9,1', 'Jl. Komp Gor', 'Firdausil Akhyar', 88, 3, 3, 10, 4, 0),
('511', 'Akhiyarli Zurza', '9,1', 'Perm. Bungo Mas', 'Zafri Zubairi', 88, 6, 3, 10, 4, 0),
('512', 'Widi Putri Mahaswanni', '9,1', 'Jl. Bundo Dalam Ulak Karang', 'Irwan', 91, 3, 3, 10, 4, 0),
('513', 'Nindy Novia Angela', '9,1', 'Jl. Paus', 'Edward', 92, 1, 3, 8, 3, 0),
('514', 'Khairani Nofta', '9,1', 'Komp. Rahaka LB. Buaya', 'Drs. Nofri Yendri', 90, 4, 7, 5, 1, 0),
('515', 'Muhammad Zulfan Basrial', '9,1', 'Jl. Rumbai', 'Basrial Basir', 75, 4, 3, 15, 5, 0),
('516', 'Arya Nugraha', '9,1', 'Per. Berks', 'Amrizal', 86, 2, 3, 7, 3, 0),
('517', 'Hadine Azalia', '9,1', 'Jl. Adi Negoro', 'Guswandi', 86, 2, 3, 5, 2, 0),
('518', 'Hana Ajrina Dewanggi', '9,2', 'Jl. Palangka Raya', 'Rudi Hartono, ST', 91, 2, 7, 8, 3, 0),
('519', 'Aprima Queen Tana', '9,2', 'Jl. Adinegoro', 'Sony Satriadi', 85, 5, 3, 10, 5, 0),
('52', 'Rangga Febrian Indrata', '7,2', 'Pondok Citra blok E/10', 'Indra Deswandri', 89, 2, 3, 10, 4, 0),
('520', 'Bunga Gesty', '9,2', 'Perm. Lubuk Gading permai', 'Edi Delfia', 86, 3, 6, 8, 4, 0),
('521', 'Putri Oktaviani', '9,2', 'Simpang Tanjung Sungai Pinang', 'Alvian Efendi', 88, 4, 3, 7, 3, 0),
('522', 'Chesrem Putri Jayanti', '9,2', 'Jl. Belanti', 'Januardi', 89, 2, 2, 10, 5, 0),
('523', 'M. Ibra Givari', '9,2', 'Perm. Nusa Indah', 'Yulius Hendry', 84, 2, 7, 7, 5, 0),
('524', 'Agung Tri Sakti', '9,2', 'Jl. Belanti Parak', 'Sumardi', 78, 3, 2, 7, 4, 0),
('525', 'Anggun Zamsari', '9,2', 'Jl. BLK TMP Lolong', 'Zamri', 86, 1, 2, 13, 3, 0),
('526', 'Muhammad Akbar', '9,2', 'Jl. Melanti', 'Zulfani, Amd', 89, 1, 6, 8, 1, 0),
('527', 'M. Rolanda', '9,2', 'Perm. Griya Sawah Lua', 'Zainal', 85, 3, 7, 8, 3, 0),
('528', 'Siti Humaira Syarif', '9,2', 'Jl. Manggis', 'Chumusul Yusbar Putra', 90, 3, 6, 7, 3, 0),
('529', 'M. Fathur Rahmad Al Faiz', '9,2', 'Jl. Aur Duri', 'Dr. Bobby Indra Utama, SPOG', 89, 4, 8, 5, 1, 0),
('53', 'Rahmat Hidayatulah', '7,2', 'Jln. Cendrawsasih III', 'Bujang Selamat', 81, 4, 2, 8, 4, 0),
('530', 'Jevica Putri Yusrianita', '9,2', 'Aspol Jati', 'Yusri', 87, 2, 3, 8, 5, 0),
('531', 'Tahta Miftahul Jannah', '9,2', 'Jl. Raden Saleh', 'Mifsyamsir Rahman', 86, 4, 7, 5, 4, 0),
('532', 'Henritha Prima Kumala Ningsih', '9,2', 'Komp. TNI-AU', 'Dadan Sundani', 90, 3, 3, 2, 1, 0),
('533', 'Arini Cahya Amoranto', '9,2', 'Jl. Bunda', 'Ir. Teddy Amoranto', 86, 2, 7, 8, 3, 0),
('534', 'Azwili Dwinda Genissa', '9,2', 'Pondok Pratama', 'Azwar', 86, 4, 3, 7, 5, 0),
('535', 'Fikrur Irsyad', '9,2', 'Perm. Beringin Indah Lestari', 'Zainal Abidin', 89, 3, 3, 7, 3, 0),
('536', 'Yosa Setiawati', '9,2', 'Belakang Pasar Lb. Buaya', 'Yasnuir', 89, 6, 3, 10, 5, 1),
('537', 'Ananta Erin Olivia', '9,2', 'Jl. Paus', 'Sugimin', 89, 3, 2, 7, 2, 0),
('538', 'Adek Putra Zulkifri', '9,2', 'Taman Bungo Residence', 'H. Zulkifli Doris', 87, 5, 3, 8, 1, 0),
('539', 'Dina Afifah', '9,2', 'Komp. Wisma Indah Lestari', 'Syamsuddin', 93, 1, 6, 10, 5, 0),
('54', 'Afifah Putri Zakiyah', '7,2', 'Jln. Beringin IV B Lolong Belanti', 'N.M. Batar, S. Sos', 83, 2, 7, 8, 3, 0),
('540', 'Rafi Fadhlurrahman', '9,2', 'Jl. Musi', 'Yulizar', 85, 3, 1, 10, 4, 0),
('541', 'Muhammad Amin', '9,2', 'Perm. Bil', 'Andriwifa', 87, 4, 7, 7, 2, 0),
('542', 'Dede Aulia Fajri', '9,2', 'Jl. Adinegoro', 'Nasrul Syam', 81, 4, 3, 10, 5, 0),
('543', 'Vania Syafira Yora', '9,2', 'Jl. Sungai Lareh', 'Yol. DT. Sati NB', 86, 1, 7, 5, 1, 0),
('544', 'Nabila Azahra Putri', '9,3', 'Jl. Padang IV', 'Hendri Nurdin', 87, 3, 3, 7, 5, 0),
('545', 'M.Said Harfi Andri', '9,3', 'Komp. Jihad Indah', 'Harfiandri Daman Huri', 87, 2, 8, 5, 3, 0),
('546', 'Bayu Septiadi', '9,3', 'Jl. Belilas', 'Zul Idham', 88, 4, 6, 5, 1, 0),
('547', 'M. Rezki', '9,3', 'Komp. Rahaka LB. Buaya', 'Mirsadajan ilham', 93, 3, 6, 7, 5, 0),
('548', 'Zahwa Salsabila', '9,3', 'Jl. Limau Manis', 'Karnadi', 84, 3, 3, 10, 4, 0),
('549', 'Widianfilia Hasri', '9,3', 'Komp. Singgalang', 'Zulhasmi', 91, 2, 7, 5, 2, 0),
('55', 'Hendriansyah', '7,2', 'Komp. Pemda blok C1 Padang Sarai', 'Syahril T', 84, 2, 3, 10, 4, 0),
('550', 'Anggi Pardamean Simamora', '9,3', 'Asrama Polisi Lolong', 'Rahmat', 86, 5, 3, 1, 4, 0),
('551', 'M. Fajar Aryansyah', '9,3', 'Jl. Pasir Jambak', 'Afriadi', 86, 3, 3, 7, 1, 0),
('552', 'Rachel Ghina Mayati', '9,3', 'Komp. Belanti', 'Andi Munhtar', 86, 2, 3, 7, 5, 0),
('553', 'Briana Firsta', '9,3', 'Jl. Belibis', 'Yul Hendrizal, SE', 88, 2, 7, 8, 2, 0),
('554', 'Nurul Intan Vahmi', '9,3', 'perm. Vila Gunung', 'Yulvahmi', 87, 3, 3, 1, 1, 0),
('555', 'Fandi A Periadi', '9,3', 'Komp. Filano', 'Afriadi', 88, 3, 7, 5, 2, 0),
('556', 'Atikah Pamata Yevan', '9,3', 'Perm. Alam Permai', 'Dr. Yevri Zulfiqar', 86, 2, 8, 5, 1, 0),
('557', 'Mardiyah Nur Isnaini', '9,3', 'Jl. Adinegoro', 'Karnain', 89, 2, 2, 7, 5, 0),
('558', 'Radhisya Puteri Rahma', '9,3', 'Jl. S. Parman', 'Nur Aslam', 88, 4, 7, 8, 2, 0),
('559', 'Zulkifli', '9,3', 'Jl. Kelapa Gading', 'Rusli', 89, 3, 3, 12, 4, 0),
('56', 'Jonathan Maercelliano', '7,2', 'Wisma Indah VII', 'Junaidi', 85, 2, 3, 8, 4, 0),
('560', 'Meisa Aprila', '9,3', 'Jl. Bahari', 'Bustami', 88, 2, 3, 8, 3, 0),
('561', 'Putri Pratiwi', '9,3', 'Jl. Khatib Sulaiman', 'Jasiman', 83, 5, 2, 10, 4, 0),
('562', 'Amara Verucha', '9,3', 'Komp. Lubuk Intan', 'Suharmadi', 90, 2, 3, 7, 1, 1),
('563', 'Ghazi Reyhan Ivando', '9,3', 'Jl. Beringin', 'Zulyasri', 85, 4, 6, 10, 5, 0),
('564', 'Nadia Fitri Utami', '9,3', 'Jl. Dpr', 'Herman', 89, 4, 2, 10, 4, 0),
('565', 'Olivia Syafritan Putri', '9,3', 'Pasir Nan Tigo', 'Syafrial', 84, 3, 2, 13, 4, 0),
('566', 'Faza Haniyah Firstrizanda', '9,3', 'Komp. Villaku Indah', 'Yusrizal', 91, 3, 8, 5, 3, 0),
('567', 'Putri Salsabillah', '9,3', 'Jl. Siak', 'Musrizal', 86, 1, 5, 8, 5, 0),
('568', 'Irvan Hidayat', '9,4', 'Jl. Purus', 'Rachmad', 85, 4, 3, 10, 5, 0),
('569', 'Ananda Rezky', '9,4', 'Perm. Batang Kabung Asri', 'Jecki Hendri Susanto', 88, 4, 7, 8, 2, 0),
('57', 'Rifaldi Bahri', '7,2', 'Ikur Koto RT 4 RW 1', 'Syamsuri Aljufri', 83, 2, 2, 10, 4, 0),
('570', 'Amelia Nabila Putri', '9,4', 'Jl. Salak ', 'Dasrul Sani', 87, 4, 5, 7, 4, 0),
('571', 'Jeni Angeline', '9,4', 'Jln. Juanda Dalam', 'Hendra', 85, 2, 2, 10, 5, 0),
('572', 'Reyhan Umami Putri', '9,4', 'Jl. Padang Pasir', 'Robbi Putra', 88, 5, 3, 8, 1, 0);
INSERT INTO `data_siswa` (`nis_siswa`, `nama_siswa`, `kls_siswa`, `alamat_siswa`, `nama_ayah_siswa`, `nrata_siswa`, `jmsdr_siswa`, `pnd_ayah_siswa`, `krj_ayah_siswa`, `hasil_ayah_siswa`, `status_siswa`) VALUES
('573', 'Resti Eriza Putri', '9,4', 'Jl. Bandes Kandang Pedati', 'Yuhendrizal', 88, 3, 3, 2, 1, 1),
('574', 'Ulfa Saraswati', '9,4', 'Jl. Sirsak', 'Mardison', 86, 2, 6, 7, 4, 0),
('575', 'Syadilla Maulani Putri', '9,4', 'Jl. S. Parman', 'Zulkirman', 84, 3, 3, 8, 4, 0),
('576', 'Sitoresmi Pramudyawardhani', '9,4', 'Jl. Siti Hawa', 'Sohkip', 86, 3, 3, 8, 1, 0),
('577', 'Canavarro Dhaity', '9,4', 'Jl. Gunung Jaya Wijaya', 'Afdal Yandi, SP', 84, 2, 7, 8, 3, 0),
('578', 'Rahmat Fikri Annur', '9,4', 'Jln. Siak', 'Beni Andrian', 87, 2, 2, 10, 3, 0),
('579', 'Salsabila Fauzan', '9,4', 'Jl. S. Parman', 'M. Fauzan', 88, 3, 7, 7, 1, 0),
('58', 'Fahran Zofri', '7,2', 'Komp. Batang Kabung Asri', 'Zofri', 84, 3, 2, 7, 1, 0),
('580', 'Fikri Al Qhozy', '9,4', 'Jl. Bahari', 'Sul Hendri', 90, 5, 3, 10, 4, 0),
('581', 'Firman Yanshu', '9,4', 'Jl. Sulawesi', 'Fahmi Fakhruddin', 86, 3, 7, 8, 4, 0),
('582', 'Revie Ardhana Tirta', '9,4', 'Komp. Jondul', 'Indra Wardana', 90, 2, 3, 7, 3, 0),
('583', 'Aulia Rahmi Putri', '9,4', 'Jl. Khatib Sulaiman', 'Damris', 87, 3, 3, 10, 4, 0),
('584', 'Annisa Fadhila', '9,4', 'Kec Koto Tangah', 'Riswandi', 90, 3, 3, 8, 4, 0),
('585', 'Natasya Mardatillah', '9,5', 'Komp. Mega Permai', 'Syafrul', 91, 2, 3, 8, 1, 0),
('586', 'Rahmaya', '9,5', 'Jl. Bahari', 'Muhammad Nur', 86, 6, 2, 7, 4, 0),
('587', 'Muhammad Zukhruf', '9,5', 'Jl. Lb. Bayu', 'Rudi Indriyanto', 87, 3, 7, 8, 1, 0),
('588', 'Naurah Dwi Zulmi', '9,5', 'Kom. LPG', 'Zulhendri', 89, 4, 3, 8, 3, 0),
('589', 'Aldhiov', '9,5', 'Jl. Padang Pasir', 'Hendra', 84, 2, 3, 7, 3, 0),
('59', 'Rahma Aulya', '7,2', 'Jln. Belanti Barat', 'Sanifah', 87, 2, 6, 7, 3, 0),
('590', 'Fadlan Mantovani', '9,5', 'Komp. Shafa Marwa', 'Zakirman, SPd', 86, 2, 7, 5, 2, 0),
('591', 'Novella', '9,5', 'Jl. Sungai Lareh', 'Mahyunir', 89, 3, 1, 12, 5, 0),
('592', 'Zhaharatul Yaumi', '9,5', 'Komp. Mela Sentosa', 'Suhemri', 86, 3, 3, 10, 4, 0),
('593', 'Laras Vino Astuti', '9,5', 'Jl. Nusa Indah', 'Kenang Kusno', 85, 4, 2, 10, 4, 0),
('594', 'Yesi Dasril', '9,5', 'Jl. Parak Rumbio', 'Dasril', 87, 8, 1, 10, 3, 0),
('595', 'Sri Fadhilah Hanum', '9,5', 'Jl. Niu', 'Syahrial', 89, 2, 3, 10, 4, 0),
('596', 'Adam Budiman', '9,5', 'Komp. Pasir Putih', 'Asep Budiman', 84, 2, 3, 7, 1, 0),
('597', 'Fatimah Azahra Agsita', '9,5', 'Komp. Parupuk Raya', 'Agus Utomo', 93, 2, 7, 8, 2, 0),
('598', 'Andrha Octora Wiwansyah Putri', '9,5', 'Jl. Purus 2 no 14c', 'Nasyirwan', 94, 2, 7, 5, 3, 0),
('599', 'Giani Chairunisa Rahmat', '9,5', 'Jl. Batang Antokan', 'Rahmat Syafrizal Yanto', 85, 4, 3, 7, 4, 0),
('6', 'Ayu pertiwi', '7,1', 'Jl. DPRD Gg. Topan', 'Amril Tanjung', 84, 2, 2, 10, 5, 0),
('60', 'Adinda Syakila Marhamah', '7,2', 'Perm. Berlindo', 'Alfian Liza', 90, 5, 3, 7, 3, 0),
('600', 'Fani Rahmadani A', '9,5', 'Jl. Durian Ujung Gurun', 'Asril S / Amizar', 86, 3, 3, 8, 1, 0),
('601', 'Rhaudatul Shakila Pahlevi', '9,5', 'Aspol Lololng', 'Firdaus', 90, 3, 3, 1, 1, 0),
('602', 'Cindy Ulya', '9,5', 'Jl. Bahari', 'Mulyadi', 85, 1, 2, 10, 4, 0),
('603', 'Alyawati Zhefira Putri', '9,5', 'Komp. Cimpago Putih', 'Jon Heri', 86, 3, 7, 8, 1, 0),
('604', 'Nadila Aprilyra', '9,5', 'Perm. Anak Air Permai', 'Lely Mardanus', 88, 4, 3, 8, 3, 0),
('605', 'Farras', '9,5', 'Perm. Bunga Mas', 'Yunaldi', 85, 4, 7, 5, 2, 0),
('606', 'Shalsa Safawardah', '9,5', 'Komp. Anak Air Permai', 'Alwis', 86, 3, 7, 8, 1, 0),
('607', 'Diva Tishaly', '9,5', 'Jl. Purus III', 'Julfri Efendi', 90, 3, 7, 5, 1, 1),
('608', 'Mutia Annisa', '9,5', 'Jl. Adinegoro', 'Afrizon', 87, 3, 3, 7, 3, 0),
('609', 'Raihan Fadhilah Syafri', '9,5', 'Lubuk Gading I', 'Syafri Nofendi', 85, 3, 7, 7, 2, 0),
('61', 'Isma Arifah', '7,2', 'Jln. Belanti Raya No 94', 'Nofriadi', 62, 5, 3, 7, 1, 0),
('610', 'Metradiffa Keisya S', '9,5', 'Jl. Kali Serayu', 'Defriadi', 87, 2, 3, 7, 3, 0),
('611', 'Ziqi Muharam', '9,5', 'Jl. S. Parman', 'Heri Susanto', 88, 1, 3, 8, 2, 0),
('612', 'Fishi Maulana Yusuf', '9,5', 'Komp. Perm Perupuk Raya', 'Effi Kamasril', 86, 4, 3, 9, 4, 1),
('613', 'Jordy Pratama Yudha', '9,6', 'Jl. By Pass', 'Joni Iswandi', 90, 3, 3, 2, 1, 0),
('614', 'Miftahur Rahmah', '9,6', 'Muaro Kasang', 'Marta Yurizal', 90, 3, 8, 5, 2, 0),
('615', 'ACASIA GIETA PAGIARRI', '9,6', 'JL. SIDINGIN NO. 14', 'YANELDI', 87, 2, 7, 8, 4, 0),
('616', 'AMAR FADIL', '9,6', 'KOMP HARKA PASIR PERMAI A/III', 'MI''WAN MUHAMMAD BUNAY', 90, 2, 6, 1, 1, 0),
('617', 'ANINDITA FILDZAH SANI', '9,6', 'GRIYA INSANI AMBACANG', 'ADITYA MEIFERI SANI', 64, 2, 8, 8, 1, 0),
('618', 'ANNISA MUDMAINI', '9,6', 'ASRAMA TNI-AD LAPAI BLOK R/1', 'LULU LUWARSO', 83, 4, 3, 2, 3, 0),
('619', 'AQWAMMUL FAUZAN', '9,6', 'JALAN ABADI NO.75-C', 'IFRAHIL FUAD', 59, 1, 7, 8, 4, 0),
('62', 'Alya Riskiyani', '7,2', 'Komp. Mutiara Putih', 'Khairul Anshori SE', 88, 4, 7, 8, 1, 0),
('620', 'ARDHIKA ABDULLAH', '9,6', 'JL. MARANSI AIR PACAH', 'YUSLIZAR', 86, 6, 3, 10, 4, 0),
('621', 'CUT AISYAH DINA', '9,6', 'JL. BHAKTI UTAMA 3A', 'BUSTANUDDIN', 89, 3, 3, 5, 4, 0),
('622', 'DEAZIE ZAHRANI KHAIRUL', '9,6', 'JL. PARAK RUMBIO', 'KHAIRUL', 92, 2, 2, 10, 5, 0),
('623', 'DITTO DZAKI ADERIO', '9,6', 'KOMP. MUTIARA PUTIH BLOK U1', 'YUDEL WASIA', 88, 3, 6, 10, 5, 0),
('624', 'EGI YOANA', '9,6', 'PERUM.SUMA PURI KENCANA BLOK D 12 A', 'RUDI SYAMSUIR', 91, 4, 3, 7, 4, 0),
('625', 'FADLI ANDRE IRAWAN', '9,6', 'KOMP. SINGGALANG BLOK A.2/16', 'RUMAWI IRAWAN', 92, 3, 8, 5, 2, 0),
('626', 'FATIMAH AZZAHRA', '9,6', 'JL. BERINGIN BARU NO. 13', 'ADYSON', 90, 2, 2, 15, 5, 0),
('627', 'FAUZI RAHMADI RIZAL', '9,6', 'JL. TEKNOLOGI IV BLOK C.NO.11', 'YOSE RIZAL', 89, 3, 7, 7, 3, 0),
('628', 'FEMI ROZA', '9,6', 'JL. DAHLIA NO. 13 ', 'KHAIRUL', 93, 2, 3, 7, 5, 0),
('629', 'HANAFAIZAHKALTSUM', '9,6', 'LB. GADING PERMAI I BLOK C/5', 'DARMULUT', 89, 2, 7, 5, 3, 0),
('63', 'Muhammad Hafiz', '7,2', 'Jln. Rasuna Said no. 77 E', 'Abdul Manan', 84, 1, 3, 7, 1, 1),
('630', 'MUHAMMAD ADITYA PRATAMA', '9,6', 'JL. JUANDA DALAM NO. 65B', 'SYAHMUNIR', 88, 4, 1, 10, 5, 0),
('631', 'MUTIARA ABABIL KIRMIANANDA', '9,6', 'JL. BELIMBING NO. 240', 'KIRMAN', 84, 2, 1, 10, 5, 0),
('632', 'PUJA DWIKI HENDRAWAN', '9,6', 'JL. RAMBAI GG. SENTOSA/10', 'HENDRA', 82, 3, 7, 8, 1, 0),
('633', 'RAMSES JULIERO EFFENDI WIRADAN', '9,6', 'JL. GAJAH  IV', 'ZULMAN EFFENDI', 84, 4, 7, 15, 5, 0),
('634', 'RETHA SYAHVINA ZAHRA', '9,6', 'KOMP LUBUK GADING V BLOK BB/6', 'SYAHENDRI BARKAH', 86, 3, 7, 5, 2, 0),
('635', 'RILLA GUSTIA', '9,6', 'JL. TERI NO.4', 'AGUSLIM', 84, 2, 3, 7, 5, 0),
('636', 'RISWANDA NUGRAHA', '9,6', 'JL. KETIMUN NO. 344', 'MARKUM RUSDI', 88, 4, 3, 15, 5, 0),
('637', 'SAVIRA ZAHIYA PUTRI', '9,6', 'JL. PAUS NO. 1', 'ZAINUDDIN', 87, 3, 6, 8, 4, 0),
('638', 'SIGIT OKTAVIANO', '9,6', 'PONDOK CITRA B/14', 'MARDIANTO', 79, 1, 3, 1, 1, 0),
('639', 'SINTA LEONITA', '9,6', 'LOLONG', 'NASRUL', 88, 2, 8, 5, 3, 0),
('64', 'Aisyah dwi syahada', '7,3', 'Komp. Lubuk Sejahtera Lestari, Blok strata 31', 'Yon Edwin', 86, 3, 7, 8, 3, 0),
('640', 'VANIA GRISELDA WIBOWO', '9,6', 'JL. RAYA IKUR KOTO NO. 9', 'ARIEF WAHYU WIBOWO', 84, 2, 6, 8, 4, 0),
('641', 'YULISTIA BUARNI', '9,6', 'LUBUK GADING PERMAI I PENGEMBANGAN AA-7', 'BUJANG', 82, 2, 6, 5, 2, 0),
('642', 'Fathan Hibatul Wafi', '9,6', 'Pondok Citra', 'Endang, SPd', 87, 3, 7, 5, 5, 0),
('643', 'Tities Laksa Permata', '9,6', 'Jl. Flores, Ulak Karang', 'Joko Setiaji Cahyono', 88, 3, 7, 15, 5, 0),
('644', 'Halimahtusakdiah', '9,7', 'Muaro Panjalinan', 'Bahrul Amin', 88, 4, 8, 5, 3, 0),
('645', 'Khasman', '9,7', 'Komp. Lb. Gading', 'Kurnia Utama', 87, 4, 7, 8, 4, 0),
('646', 'Azura Fitri Jouharlin', '9,7', 'Jl. Hiu', 'Jouharlin', 86, 2, 6, 7, 1, 0),
('647', 'Miradzi Maruf', '9,7', 'Jl. Kalimas', 'Ponidin', 85, 5, 3, 5, 1, 0),
('648', 'Mutiara Amanda', '9,7', 'Jl. Pulai', 'Abdul Rahman', 87, 3, 2, 10, 5, 0),
('649', 'Rabiatul Fitri', '9,7', 'Komp. Gn. Pangilun', 'Sahribin', 89, 2, 3, 8, 4, 0),
('65', 'Claudya Ilhamazrah', '7,3', 'Tabek Batu Air Pacah', 'Ilham', 87, 2, 3, 10, 5, 0),
('650', 'Ilham Firdaus', '9,7', 'Jl. Juanda', 'Ismail', 85, 4, 3, 10, 5, 0),
('651', 'Titi Sumalati', '9,7', 'Jl. Bahari', 'Syofian', 92, 1, 1, 10, 4, 0),
('652', 'Radiatil Hayati', '9,7', 'perm. Nuasa Inda', 'Ifwal Zekri', 88, 2, 3, 10, 3, 0),
('653', 'Arif Rahman', '9,7', 'Jl. Palinggam', 'Rusnanda', 85, 4, 3, 7, 1, 0),
('654', 'Fani Utami Putri', '9,7', 'Pasir Kandang', 'Bambang Sulistyanto', 89, 2, 3, 8, 4, 0),
('655', 'Shabrul Kamil ', '9,7', 'Tanjung Aur', 'Aziawarman, SH', 87, 3, 7, 8, 4, 0),
('656', 'Alysa Aurelia Putri', '9,7', 'Jl. Gurita', 'Fadillah', 89, 4, 6, 7, 1, 0),
('657', 'ADE FIRMANSYAH ERNAS', '9,7', 'ASRAMA POLISI LOLONG BLOK D/3', 'NASRIL', 81, 2, 3, 1, 1, 0),
('658', 'ARYA ALVITO SYAFRI', '9,7', 'JL. KALI CITARUM BLOK U/12', 'SYAMSIR', 85, 2, 3, 7, 4, 0),
('659', 'BINTANG SEPTA RAIHAN', '9,7', 'JL. TIMOR NO.9', 'YANUAR', 87, 1, 7, 15, 4, 0),
('66', 'Anggun Sasmita', '7,3', 'Lubuk Gading Permai VI blok k/2', 'Qamaisir', 80, 3, 7, 5, 2, 0),
('660', 'FATHIMAH FITRI BUDIMAN', '9,7', 'KOMP. SINGGLANG BLOK A4/2', 'DADDY BUDIMAN', 84, 4, 8, 5, 3, 0),
('661', 'FIKA PUTRI RAHMADHANI', '9,7', 'JL. UTAMA KARYA', 'KASIDI', 79, 4, 3, 15, 5, 0),
('662', 'FIKRI MULYAWAN PERDANA', '9,7', 'MEGA PERMAI I E1/ 20', 'DELFI YASRI', 86, 3, 7, 5, 2, 0),
('663', 'GHINA NAFILA PERMANA', '9,7', 'KOMP. DPRD KAV 12', 'ENDANG SETIA PERMANA', 89, 3, 7, 7, 3, 0),
('664', 'HANIF RAHMAN ARIFIN', '9,7', 'JL.MELATI NO.10 AIR TAWAR', 'M. ARIFIN', 82, 3, 8, 5, 3, 0),
('665', 'ICHLASUL HUDA', '9,7', 'JL. SEMARANG NO.B1', 'SYAMSUL BAHRI', 86, 2, 8, 5, 2, 0),
('666', 'ILHAM FIRDAUS', '9,7', 'JL. IR. JUNDA GG GUMARANG NO 38', 'ISMAIL', 89, 2, 3, 10, 5, 0),
('667', 'KHALISA BASITHO AKBAR', '9,7', 'JL. BANJARMASIN BLOK O/22', 'ALI AKBAR', 92, 4, 8, 5, 1, 0),
('668', 'MUHAMMAD FADLI', '9,7', 'KOMP TARUKO I BLOK MM/5', 'SYARFIN', 88, 2, 8, 5, 3, 0),
('669', 'MUHAMMAD THIO NUGRAHA', '9,7', 'WISMA INDAH X BLOK B/5', 'ADE FERIANTO', 91, 5, 3, 8, 4, 0),
('67', 'Malinda Mahadiana Triani', '7,3', 'Jln. Elang 1  no 2 Air Tawar', 'Afriadi, ST', 88, 3, 7, 5, 2, 0),
('670', 'NURHALIMAH TUSYADDIAH', '9,7', 'JL. KHATIB SULAIMAN NO. 46', 'IBNU ABAS', 93, 4, 3, 10, 5, 0),
('671', 'RAHMAT HIDAYATULLAH', '9,7', 'JL. IR. H. JUANDA GG. MADRASAH', 'MUZAHIDDIN', 87, 3, 3, 7, 4, 0),
('672', 'RAISYA KAMILA ZAHRI', '9,7', 'WISMA INDAH V BLOK J1 NO. 9', 'HAMZAH', 86, 3, 7, 5, 3, 0),
('673', 'RAJA PUTRA MULYA', '9,7', 'BUNGA MAS III Y/17 ', 'MULYADI', 86, 3, 4, 10, 4, 0),
('674', 'REFSYA MAULANA ABDI', '9,7', 'KOMP. BUNGA MAS BLOK Z1/9', 'SYAMSUL BAHRI', 79, 2, 8, 5, 2, 0),
('675', 'VIONA SALSABILA', '9,7', 'KOMP. LB. GADING P6 D/12', 'FAISAL FOAD', 89, 2, 3, 1, 1, 0),
('676', 'Raja Putra Mulya', '9,7', 'Bunga Mas', 'Mulyadi', 86, 2, 4, 10, 4, 0),
('677', 'Diva Flower', '9,7', 'Air Dingin', 'Bambang Irawan', 84, 3, 3, 10, 5, 0),
('678', 'Melsy Oktrilia', '9,8', 'Komp. Rahaka LB. Buaya', 'Mulyadi', 87, 3, 3, 10, 4, 0),
('679', 'Diva Khairani', '9,8', 'Jl. Mataram', '', 85, 2, 7, 5, 3, 0),
('68', 'Arif DeliYUSMAN', '7,3', 'Jln. Salak purus kebun', 'Razali', 90, 3, 2, 10, 5, 0),
('680', 'Dhara Devona Lutsfi', '9,8', 'Jl. Hiu', 'Yusber', 89, 2, 3, 8, 4, 0),
('681', 'Arinda Nadhia T.R Putri', '9,8', 'Perm. Bung Hatta', 'Harmaini', 87, 4, 3, 7, 2, 0),
('682', 'Vioney Rachel Yefin', '9,8', 'Jl. Pulai', 'Murdifin', 86, 2, 7, 8, 3, 1),
('683', 'Ridho Fadillah', '9,8', 'Jl. Perak', 'Rinangti Rendra', 87, 4, 3, 8, 4, 0),
('684', 'M. Fikri Lubis', '9,8', 'Jl. Koopi Raya', 'H. Abdul Hakim Lubis', 90, 3, 7, 8, 1, 0),
('685', 'Siti Nadya Sefrily', '9,8', 'Bunga Mas', 'Yunafri, Amd. PK', 93, 3, 6, 5, 3, 0),
('686', 'Arneta Berliana Putri', '9,8', 'Purus Kebun', 'Budi Siswanto', 84, 4, 7, 7, 5, 1),
('687', 'Afif Alvarest Sy', '9,8', 'Jl. Gajah Mada Dalam', 'Basri', 87, 3, 7, 5, 2, 0),
('688', 'Nabila Kamala P', '9,8', 'ASP', 'Muhammad Sabki', 87, 3, 7, 5, 3, 0),
('689', 'Farid Zayyan Nafi', '9,8', 'Jl. Mangansai Koro', 'Muhammad Ali', 84, 3, 3, 5, 4, 0),
('69', 'Puja Verlita', '7,3', 'Jln. Pertanian Lubuk Minturun', 'Januddin', 83, 2, 1, 9, 4, 0),
('690', 'Syadam Maulana Putra', '9,8', 'Jl. S Parman', 'Zulkirman', 86, 2, 3, 7, 4, 0),
('691', 'Rahmat Indra Putra', '9,8', 'Jl. By Pass', 'Syamsuiman', 89, 5, 3, 12, 4, 0),
('692', 'Zahirah Zahara', '9,8', 'Perm. Jihad Indah Persada', 'Kardi Tanjung', 93, 4, 3, 7, 5, 0),
('693', 'M. Fikri Ferdiantoro', '9,8', 'Perm. Sopo Inanta', 'Lujeng Antoro', 87, 3, 3, 7, 2, 0),
('694', 'M. Kautsar', '9,8', 'Jl. Jendral Sudirman', 'Bhakti Agus', 86, 2, 8, 2, 1, 0),
('695', 'Livya Zikra Ramadhani', '9,8', 'Jl. Melati Ujung', 'Zaharrudin', 86, 5, 3, 10, 5, 0),
('696', 'Mardiah Putri Al Ghani', '9,8', 'Lubuk Minturun', 'Alfi Khandra', 91, 2, 3, 5, 2, 0),
('697', 'Maulidyna Lainas', '9,8', 'Jl. Bakti', 'Rasmi R', 88, 2, 8, 5, 1, 0),
('698', 'Monica Mai Safitri', '9,8', 'Jl. Terartai', 'Khairul', 80, 2, 2, 10, 4, 0),
('699', 'Eriska Widi Astuti', '9,8', 'Asrama TNI Tarandam', 'Ali Subroto', 81, 4, 3, 2, 3, 0),
('7', 'ERFAN FADHIL JUZAR', '7,1', 'JL. ADINEGORO NO.91', 'ALNIZAR', 79, 3, 7, 5, 2, 0),
('70', 'Tiara Chaira Sawitri', '7,3', 'Jln. Anggrek Tunggul Hitam', 'Chairul Bachri', 87, 3, 3, 8, 2, 0),
('700', 'Muhammad Rafiq', '9,8', 'Jl. Belibis', 'Elfirus', 87, 6, 7, 10, 4, 0),
('701', 'Revi Listiana', '9,8', 'Jl. Paus Ulak Karang', 'Zulkifli Bustami', 83, 1, 6, 7, 3, 0),
('702', 'M. Alif Gibran Revanza', '9,8', 'Siteba', 'Dodi Iskandar', 85, 3, 7, 8, 1, 0),
('703', 'Mutia Reizky Dwi Anantha', '9,8', 'Jl. Jaya Pura', 'H. Tamsir', 85, 2, 8, 5, 1, 0),
('704', 'Fadhlan Zuhair', '9,8', 'Jl. Parupuk III', 'Iswan', 88, 3, 7, 5, 1, 0),
('705', 'Mutia Kharisma', '9,8', 'Jl. Khatib Sulaiman', 'Cosri Antoni', 90, 4, 6, 7, 4, 0),
('71', 'Marhamah Khaira', '7,3', 'Perm. Pondok Pinang Lubuk Buaya', 'Drs. Lukman', 89, 3, 7, 5, 1, 0),
('72', 'Naila Fitri Vioniza', '7,3', 'Jln. Belitung no 18', 'Rio De Verialino', 91, 3, 7, 8, 3, 0),
('73', 'Ainil Husna', '7,3', 'Komp.Lubuk Gading VI', 'Drs. Ardi Mustafa', 87, 4, 7, 5, 3, 0),
('74', 'Muhammad Nauval Habibie', '7,3', 'Jln. Kelapa Gading Raya no 4', 'Deri Kurnia, ST', 89, 3, 7, 7, 3, 0),
('75', 'Rafid Sati Naleweru', '7,3', 'Komp. Puskud Ikur Koto', 'Misdar Putra', 83, 4, 8, 6, 1, 0),
('76', 'Febrian Aidil Adha', '7,3', 'Komp. Mega Permai', 'Joliwardi', 83, 4, 6, 8, 1, 0),
('77', 'Fauziyah Rizqi Ramadhani', '7,3', 'Jln. Joni Anwar 1 no 10', 'Real Acendri', 84, 5, 7, 7, 1, 0),
('78', 'Rescha Hanifatul Azra', '7,3', '', 'Ujang Afrizal', 88, 2, 3, 10, 4, 0),
('79', 'Diyana Cantika', '7,3', 'Komp. Jondul V Blok G 2 tabing', 'Adisman', 87, 4, 3, 5, 4, 0),
('8', 'Fadhilah Aisyah Putri', '7,1', 'Jl. Marsawa No. 22', 'Sudirman', 86, 3, 7, 1, 1, 0),
('80', 'Ingrid Salura Briliana', '7,3', 'Perm. Villa Tabgo Indah', 'Kompol Budi Prayitno SE. MH', 86, 2, 8, 5, 1, 0),
('81', 'Nurul Huda Nabillah', '7,3', 'Salingka Bungo Permai', 'Dedi ', 88, 3, 3, 7, 4, 0),
('82', 'Azima Mugni Gahadri', '7,3', 'Komp. Mega Permai I', 'Drs. Anugraha', 86, 3, 7, 5, 1, 0),
('83', 'Azzahra Alya Pratiwi', '7,3', 'Komp. Puskud Ikur Koto', 'Alkamar S.Pd', 86, 4, 7, 5, 3, 0),
('84', 'ADINDA ALIYA MAHARANI', '7,3', 'JL. PURUS IV', 'USMAR ALI', 79, 2, 7, 5, 3, 0),
('85', 'ALIYYAH PUTRI ZAHIROH', '7,3', 'JLN. BERINGIN IV B NO 7', 'NM  BATAR', 84, 1, 7, 7, 1, 0),
('86', 'Fardho Frenzyo', '7,3', 'Jl. Olo Ladang Dalam No. 134 B', 'Willens Hetman', 91, 5, 3, 15, 5, 1),
('87', 'Fhaiq  Arsyad', '7,3', 'KOMP GERI PERMAI BLOK E IV ', 'ARSYAD', 81, 3, 6, 8, 4, 0),
('88', 'Gabriella Jessica Agatha', '7,3', 'BERINGIN INDAH LESTARI F 6', 'ARY SISWANTO', 86, 3, 3, 7, 4, 0),
('89', 'GINA ZALIKA SUKMA', '7,3', 'JL. SALAK GG 7 TIMUR NO. 77', 'SUFHAR', 83, 2, 3, 10, 4, 0),
('9', 'FADIA INNAYAH AZZAHRA', '7,1', 'komp. joNdol I blok H no. 9', 'rayendri', 89, 1, 7, 7, 1, 0),
('90', 'KHAIRANI FITRI NASRUN', '7,3', 'JL DADOK RAYA NO 29', 'NASRUN', 72, 1, 8, 7, 2, 0),
('91', 'MAULANA RIZKY ARYAPUTRA', '7,3', 'JL. VETERAN NO 47', 'EDMONEVIS', 82, 4, 7, 5, 2, 0),
('92', 'MOHAMMAD ZIDAN MAULANA INDRA', '7,3', 'ASRAMA BRIMOB PADANG SARAI', 'INDRA KENEDI', 87, 3, 3, 1, 2, 0),
('93', 'muhammad aidil sri mulya putra', '7,3', 'PERMATA AIR DINGIN BLOK H/16', 'Muhamad Ali', 82, 3, 7, 8, 3, 0),
('94', 'MUHAMMAD LUTHFI', '7,3', 'JL PINANG SORI 2 NO 10', 'IBNU ISHAQ', 83, 3, 8, 5, 2, 0),
('95', 'MUHAMMAD NAVIS', '7,3', 'LB. Gading I Pengembangan. DD/20', 'Antonius', 84, 3, 3, 8, 4, 0),
('96', 'Raiend Arasy Pansla', '7,3', 'Wisma Indah Lestari K 14', 'Firdaus', 70, 2, 7, 5, 3, 0),
('97', 'TRISHNA ALGHIFFARI MUSTAGHFIRI', '7,3', 'JL GARUDA MUARO KASANG', 'TRI HADIYANTO', 85, 3, 7, 5, 2, 0),
('98', 'ADZAN JULIGION PRATAMA', '7,4', 'LUBUK BUAYA', 'YONDI AFRIZAL', 84, 3, 3, 15, 4, 0),
('99', 'AFANZA PUTRA ZEBUA', '7,4', 'JL. MELATI NO. 30', 'SABARHATI ZEBUA', 79, 3, 4, 7, 4, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `eigen_kriteria`
--

CREATE TABLE IF NOT EXISTS `eigen_kriteria` (
  `id_eigen` int(11) NOT NULL,
  `id_kriteria` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `value_eigen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `ket_kriteria` varchar(30) NOT NULL,
  `pakai_kriteria` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `ket_kriteria`, `pakai_kriteria`) VALUES
('JB', 'jmsdr_siswa', 'Jumlah Saudara', 1),
('NR', 'nrata_siswa', 'Nilai Rata-Rata', 1),
('PD', 'pnd_ayah_siswa', 'Pendidikan Ayah', 1),
('PH', 'hasil_ayah_siswa', 'Penghasilan Ayah', 1),
('PK', 'krj_ayah_siswa', 'Pekerjaan Ayah', 1),
('ST', 'status_siswa', 'Status Ortu', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `normal_data_siswa`
--

CREATE TABLE IF NOT EXISTS `normal_data_siswa` (
  `id` int(11) NOT NULL,
  `nis_siswa` varchar(8) NOT NULL,
  `nrata_siswa` double NOT NULL,
  `jmsdr_siswa` double DEFAULT NULL,
  `pnd_ayah_siswa` double DEFAULT NULL,
  `krj_ayah_siswa` double DEFAULT NULL,
  `hasil_ayah_siswa` double DEFAULT NULL,
  `status_siswa` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pair_kriteria`
--

CREATE TABLE IF NOT EXISTS `pair_kriteria` (
  `id_pair` int(11) NOT NULL,
  `id_kriteria` varchar(5) NOT NULL,
  `id_kriteria_pair` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan_sistem`
--

CREATE TABLE IF NOT EXISTS `pengaturan_sistem` (
  `id_pengaturan` varchar(30) NOT NULL,
  `value_pengaturan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan_sistem`
--

INSERT INTO `pengaturan_sistem` (`id_pengaturan`, `value_pengaturan`) VALUES
('PAKAR', 'eirata'),
('PEMBOBOTAN_TERAKHIR_BERJALAN', '14-06-2017 09:08:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `weighted_data_siswa`
--

CREATE TABLE IF NOT EXISTS `weighted_data_siswa` (
  `id` int(11) NOT NULL,
  `nis_siswa` varchar(8) NOT NULL,
  `nrata_siswa` double NOT NULL,
  `jmsdr_siswa` double DEFAULT NULL,
  `pnd_ayah_siswa` double DEFAULT NULL,
  `krj_ayah_siswa` double DEFAULT NULL,
  `hasil_ayah_siswa` double DEFAULT NULL,
  `status_siswa` double DEFAULT NULL,
  `value_weighted` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nis_siswa`);

--
-- Indexes for table `eigen_kriteria`
--
ALTER TABLE `eigen_kriteria`
  ADD PRIMARY KEY (`id_eigen`), ADD KEY `id_kriteria` (`id_kriteria`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `normal_data_siswa`
--
ALTER TABLE `normal_data_siswa`
  ADD PRIMARY KEY (`id`), ADD KEY `nis_siswa` (`nis_siswa`);

--
-- Indexes for table `pair_kriteria`
--
ALTER TABLE `pair_kriteria`
  ADD PRIMARY KEY (`id_pair`), ADD KEY `user_id` (`id_user`), ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `pengaturan_sistem`
--
ALTER TABLE `pengaturan_sistem`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `weighted_data_siswa`
--
ALTER TABLE `weighted_data_siswa`
  ADD PRIMARY KEY (`id`), ADD KEY `nis_siswa` (`nis_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eigen_kriteria`
--
ALTER TABLE `eigen_kriteria`
  MODIFY `id_eigen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `normal_data_siswa`
--
ALTER TABLE `normal_data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pair_kriteria`
--
ALTER TABLE `pair_kriteria`
  MODIFY `id_pair` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `weighted_data_siswa`
--
ALTER TABLE `weighted_data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `eigen_kriteria`
--
ALTER TABLE `eigen_kriteria`
ADD CONSTRAINT `eigen_kriteria_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `eigen_kriteria_ibfk_3` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Ketidakleluasaan untuk tabel `normal_data_siswa`
--
ALTER TABLE `normal_data_siswa`
ADD CONSTRAINT `normal_data_siswa_ibfk_1` FOREIGN KEY (`nis_siswa`) REFERENCES `data_siswa` (`nis_siswa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pair_kriteria`
--
ALTER TABLE `pair_kriteria`
ADD CONSTRAINT `pair_kriteria_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pair_kriteria_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Ketidakleluasaan untuk tabel `weighted_data_siswa`
--
ALTER TABLE `weighted_data_siswa`
ADD CONSTRAINT `weighted_data_siswa_ibfk_1` FOREIGN KEY (`nis_siswa`) REFERENCES `data_siswa` (`nis_siswa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
