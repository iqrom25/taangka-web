-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2022 pada 04.15
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_taangka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `highlight` varchar(500) NOT NULL,
  `artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `thumbnail`, `judul`, `highlight`, `artikel`) VALUES
(1, '1605840075_b4d8df294159a8700734.jpg', 'Apa itu Weeding Organizer ?????', 'Beberapa orang masih sering bertanya Apa itu Wedding Organizer? Lalu Apa Peran Penting Wedding Organizer Dalam Pernikahan?. Untuk itu bagi kalian yang ingin mengetahuinya simak artikel berikut.', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Wedding Organizer</strong>&nbsp;adalah &nbsp;suatu jasa khusus yang secara pribadi membantu calon pengantin dan keluarga dalam perencanaan dan supervisi pelaksanaan rangkaian acara pesta pernikahan sesuai dengan jadwal yang telah ditetapkan.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Wedding Organizer</strong>&nbsp;Memberikan informasi mengenai berbagai macam hal yang berhubungan dengan acara pernikahan, Membantu merumuskan konsep pernikahan.&nbsp;<strong>Wedding Organizer</strong>&nbsp;mem-fasilitasi, negosiasi dan koordinasi dengan pihak gedung/hotel dan supplier/vendor seperti : Catering, dekorasi, fotografer, perias, grup musik, dll.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Wedding Organizer</strong>&nbsp;Membantu memilih jenis makanan, kuantitas dan food tasting. Menghubungi setiap rekanan untuk follow up yang diperlukan, Mengikuti rapat koordinasi dengan keluarga, juga memimpin rapat teknis dengan para rekanan. Technical meeting di tempat resepsi. Membantu menyusun buku acara Dll yang berhubungan dengan acara pernikahan.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Bagi Anda yg akan menikah dan belum menentukan apakah memakai sistem paket atau memilih sendiri vendor dan&nbsp;<strong>Wedding Organizer</strong>&nbsp;pernikahan, tips berikut ini kelebihan menggunakan Paket pernikahan dari sebuah&nbsp;<strong>Wedding Organizer</strong>?</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><em>Kelebihan Sistem paket:</em></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">1. Menghemat waktu<br />\r\nBiasanya buat pasangan yg sibuk berkerja, agak sulit pastinya mengatur waktu utk browsing, apa lagi survei perihal vendor pernikahan. Menggunakan sistem paket&nbsp;<strong>Wedding Organizer</strong>&nbsp;jelas membantu pasangan yg disibukkan dgn pekerjaan di kantor.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Bisa lebih murah</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Jika Anda tidak punya waktu utk &lsquo;berburu&rsquo;, tentunya hanya ada sedikit referensi Anda mengenai harga. Alhasil, Anda tidak bisa membandingkan harga dan kualitas setiap vendor. Lain hal jika Anda memilih sistem paket, maka Anda tinggal nego harga dgn&nbsp;<strong>Wedding Organizer</strong>, minta diskon khusus atau bonus tambahan, langsung deal.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Dikoordinasikan 1 orang</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Entah paket ini dikeluarkan oleh gedung/cetering/&nbsp;<strong>Wedding Organizer</strong>, pasti ada minimal 1 orang yg mengkoordinasikan semua vendor. Pada satu orang ini kita mencurahkan segala maksud keinginan kita. Tentu saja sebagai penanggung jawab orang ini lebih gampang dicari dibanding PIC dari masing-masing vendor jika ada masalah.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Pada intinya sistem paket memang lebih simple dan ringkas, cocok banget sama orang yg tidak mau ribet tapi mau acaranya lancar.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Mempersiapkan pernikahan bisa menjadi kegiatan yang sangat menyenangkan. Namun bagi Anda yang sibuk, efeknya bisa bertolak belakang. Saat stress melanda, menyewa jasa<strong>&nbsp;Wedding Organizer</strong>&nbsp;(WO) bisa menjadi jalan keluar.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Tak sedikit juga calon pengantin yang masih ragu untuk menggunakan jasa&nbsp;<strong>Wedding Organizer</strong>. Beberapa alasan yang dikutip dari Ezine berikut akan meyakinkan Anda dan calon suami.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><em>Mengurangi stres</em></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Menjadi calon pengantin akan membuat tingkat stres bertambah . Mempersiapkan diri untuk peran yang baru sebagai istri sudah cukup menguras pikiran. Ditambah lagi harus menyiapkan segala sesuatu yang berhubungan dengan acara pesta.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Tak ada salahnya untuk membagi beban tersebut kepada&nbsp;<strong>Wedding Organizer&nbsp;</strong>yang profesional. Sehingga pesta pernikahan lancar, Anda pun terbebas dari stres berlebihan.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><em>Manajemen waktu</em></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Wo profesional sudah tahu benar jadwal-jadwal yang harus dilakukan oleh calon pengantin. Kapan Anda harus memesan undangan, membuat baju pengantin, fiting, test food catering dan masih banyak lagi. Di sela-sela kesibukan Anda, jadwal ini bisa saja berantakan. Namun dengan bantuan&nbsp;<strong>Wedding Organizer</strong>, Anda tingal mengikuti timeline yang telah mereka buat. Jika lupa, mereka juga siap mengingatkan Anda.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><em>Mengontrol biaya</em></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Salah satu keuntungan menyewa jasa&nbsp;<strong>Wedding Organizer</strong>&nbsp;adalah, biasanya mereka telah memiliki rekanan vendor seperti dekorasi, katering percetakan dsb. Mereka pun bisa menapatkan diskon yang menggiurkan. Selain itu, mereka juga bisa membuat daftar pengeluaran dengan detil sehingga tak ada biaya yang terbuang sia-sia.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><em>Memperhatikan detail</em></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Hal-hal kecil dan detail penting bisa saja luput dari perhatian Anda si calon pengantin. Namun&nbsp;<strong>Wedding Organizer</strong>&nbsp;bisa memastikan hal tersebut tidak terjadi. Sehingga hal-hal buruk yang berjalan di luar rencana bisa diminimalisir.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><em>Bantuan</em></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Dengan menyewa jasa&nbsp;<strong>Wedding Organizer</strong>, pada hari H, baik Anda, pasangan juga keluarga, tak lagi harus repot mengurus segala urusan. Anda bisa tenang dan menikmati pesta. Jadilah pengantin tercantik yang tersenyum bahagia tanpa tekanan saat menerima ucapan selamat dari para tamu.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Kebutuhan bisnis jasa wedding organizer selalu ada karena&nbsp;<strong>persiapan pernikahan</strong>&nbsp;tak ada habisnya.&nbsp;Banyak sekali diantara calon penganti yang tidak mempunyai cukup waktu untuk mempersiapkan hari pernikahannya sehingga membutuhkan jasa&nbsp;Wedding Organizer. Selain waktu, apabila anda termasuk dalam kriteria-kriteria dibawah ini maka artinya anda membutuhkan jasa&nbsp;Wedding Organizer:</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">1. Waktu</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Semakin banyaknya calon pasangan yang tidak mempunyai waktu untuk mempersiapkan hari pernikahannya.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">2. Ketidaktahuan</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Sama sekali buta dengan apa dan bagaimana mempersiapkan acara pernikahan, bagaimana tips untuk menghemat budget, bagaimana memilih vendor terpercaya, karena apabila salah langkah, bisa saja anggaran anda semakin membengkak dan vendor tidak sesuai keinginan.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">3. Domisili</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Anda dan calon pasangan anda terpisah ribuan kilometer sementara banyak hal yang harus dipersiapkan menjelang hari pernikahan, tidak ada yang dapat membantu memberikan masukan atau bahkan bantuan tenaga, disinilah&nbsp;Wedding Organizer&nbsp;perlu hadir disamping anda tidak hanya sebagai organizer namun juga sebagai wedding consultant, karena jelas mereka jauh lebih berpengalaman.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">4. Macet</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Melakukan meeting dengan calon vendor jelas akan memakan waktu dan tenaga, terlebih di kota Jakarta yang keadaan lalulintasnya tidak dapat di prediksi sama sekali, maka bersantailah, biarkan&nbsp;Wedding Organizermengerjakan tugas anda secara efektif</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">5. Tematik</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Jika anda memiliki keinginan pesta pernikahan anda dilakukan secara tematik dengan konsep yang berbeda maka jangan ambil resiko, diskusikanlah kepada&nbsp;Wedding Organizer&nbsp;pilihan anda dan biarkan mereka merealisasikannya untuk anda.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Bagi kalian yang membutuhkan konsultasi dalam membuat acara pernikahan, silahkan hubungi&nbsp;<a href=\"http://www.taangkaeo.com\" style=\"color:blue; text-decoration:underline\">www.taangkaeo.com</a>. Kami akan melayani dan membuat acara anda menjadi hal yang tidak bisa anda lupakan</span></span></p>\r\n'),
(2, '1605840240_4e5e6868b8c753da6014.jpeg', 'Keuntungan Menggunakan Jasa Weeding Organizer', 'Ada banyak Keuntungan Menggunakan Jasa Wedding Organizer yang perlu anda ketahui, salah satunya mempersiapkan acara pernikahan anda atau acara formal anda lainnya dengan sangat matang.', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><em>&ldquo;SETIAP PASANGAN KEKASIH PASTI MEMILIKI RENCANA UNTUK MENIKAH. PERNIKAHAN MERUPAKAN MOMEN TERINDAH DALAM HIDUP. DAN PASTINYA SETIAP ORANG&nbsp; MENGINGINKAN PERNIKAHAN DIJALANI SEKALI UNTUK SEUMUR HIDUP.&rdquo;</em></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Untuk itu, Anda dan pasangan pasti merencanakan mewujudkan pernikahan impian. Untuk mewujudkan pernikahan impian, banyak hal yang harus di lakukan mulai dari hal paling kecil hingga hal besar.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Persiapan pernikahan impian yang panjang pasti memakan banyak waktu dan tenaga Anda dan pasangan. Namun, jika Anda ingin pernikahan impian berjalan dengan lancar tanpa harus bersusah payah, Anda bisa menggunakan jasa&nbsp;<em>wedding planner/wedding organizer.</em></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><em>Wedding organizer</em>&nbsp;atau&nbsp;<em>Wedding planner</em>&nbsp;hadir untuk membantu para pasangan calon pengantin dalam mewujudkan pernikahan impian. &nbsp;Menggunakan jasa&nbsp;<em>wedding organizer</em>atau&nbsp;<em>wedding planner</em>&nbsp;menjadi sebuah pilihan yang dipakai oleh banyak calon pengantin untuk keperluan pernikahan.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Banyak pertimbangan yang menjadi dasar mengapa Anda harus memilih menggunakan jasa&nbsp;<em>wedding organizer</em>&nbsp;dari pada harus ditangani oleh keluarga sendiri. Berikut ini adalah keuntungan yang bisa Anda dapatkan dengan menggunakan jasa&nbsp;<em>wedding organizer.</em></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Persiapan Lebih Matang</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Seperti yang Anda ketahui bahwa pernikahan memerlukan persiapan yang banyak. Mulai dari persiapan kartu undangan, dekorasi, busana pernikahan, katering, perhiasan, hingga suvenir dan lain sebagainya. Selain itu, Anda juga harus merasakan kekhwatiran akan kelancaran acara pernikahan nanti. Jika Anda mengurus pernikahan sendiri, terkadang ada sesuatu hal atau barang yang terlupakan, hal ini pasti akan membuat Anda terganggu saat hari H. Dengan menggunakan jasa&nbsp;<em>wedding organizer</em>, semua pekerjaan yang berhubungan dengan mempersiapkan pernikahan Anda akan lebih mudah dan tersusun dengan rapi.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Mengatur Bujet Yang Dimiliki</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><em>Wedding organizer</em>&nbsp;yang profesional pasti bisa memaksimalkan biaya yang Anda miliki dengan konsep pernikahan yang Anda impikan. Bagi&nbsp;<em>wedding organizer</em>, biaya merupakan hal yang fleksibel.&nbsp;<em>Wedding organizer</em>&nbsp;akan melayani Anda sesuai dengan bujet yang dimiliki. Umumnya mereka tidak akan memaksakan keinginan Anda jika bujet tidak sesuai namun mereka akan memberikan solusi terbaik untuk pernikahan impian Anda.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Mengurangi beban pikiran</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Persiapan pernikahan akan memakan waktu dan pikiran. Mulai dari menentukan penanggung jawab tugas hingga rincian anggaran. Tentunya Anda&nbsp;ingin merasakan kemeriahan pesta pernikahan nanti. Dengan menggunkan jasa&nbsp;<em>wedding organizer</em>&nbsp;semua beban tersebut akan terbantu, sehingga Anda dan pasangan serta keluarga bisa fokus ke hal-hal yang lebih utama.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Hasil Lebih Maksimal</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Dengan kru yang dimiliki oleh&nbsp;<em>wedding organizer</em>&nbsp;tentunya semua persiapan pernikahan akan dilakukan dengan baik dan profesional. Mereka memiliki sumber daya manusia yang terlatih dalam menangani segala persiapan yang berhubungan dengan pernikahan. Sehingga hasil yang didapatkan akan lebih maksimal.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Bekerjasama Dengan Vendor-vendor Profesional</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><em>Wedding organizer</em>&nbsp;atau&nbsp;<em>wedding planner</em>&nbsp;yang profesional pastinya memiliki jaringan atau hubungan baik dengan vendor-vendor pernikahan. Mereka yang biasa bekerja secara profesional tidak akan memberikan layanan yang buruk kepada klien. Meskipun vendor seperti katering, busana pernikahan, dekorasi, undangan, hingga suvenir menyesuaikan dengan bujet yang dimiliki, mereka akan&nbsp;coba memberikan kualitas terbaik.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Demikian beberapa&nbsp;Keuntungan Menggunakan Jasa Wedding Organizer. Jika anda sedang memerlukan jasa wedding organizer atau acara formal lainnya. Anda bisa menghubungi&nbsp;<a href=\"http://www.taangkaeo.com\" style=\"color:blue; text-decoration:underline\">www.taangkaeo.com</a></span></span></p>\r\n'),
(3, '1606190675_21a26cbfb2ce5cec6ebb.jpeg', 'Apa itu Event Organizer ?', 'Apakah yang anda ketahui tentang Event Oragnizer ? Tahukah anda manfaat besar menggunakan Event Organizer dalam mengurus acara yang akan anda buat ? Artikel ini akan memberikan semua jawabannya', '<p><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\"><strong>PENGERTIAN</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Dalam pengertian sederhana&nbsp;<strong>yang&nbsp;</strong>di sebut sebagai&nbsp;<strong>Event Organizer</strong>&nbsp;adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br />\r\n<br />\r\n&nbsp;<br />\r\n<br />\r\nBentuk sebuah&nbsp;<strong>Event Organizer</strong>&nbsp;sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br />\r\n<br />\r\n<strong>EVENT ORGANIZER DALAM DUNIA USAHA</strong><br />\r\n<br />\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br />\r\n<br />\r\nDalam pengertian ini yang di maksudkan dengan&nbsp;<strong>Event Organizer</strong>&nbsp;lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif&nbsp;<strong>Event Organizer</strong>&nbsp;sendiri.<br />\r\n<br />\r\nDi sini yang membedakan sebuah event organizer dalam bentuk kepanitian (in-house production) dan event organizer yang mengarah pada profesi, dapat di lihat dari keberlangsungan event organizer tersebut. Apabila dalam bentuk kepanitiaan, setelah kegiatan selesai dilaksanakan maka selesai pula tugas orang-orang yang terlibat di dalam kepanitiaan. Sedangkan dalam event organizer yang mengarah pada profesi, meskipun kegiatan telah berakhir, akan tetapi kegiatan orang-orang di dalamnya akan tetap berlangsung.<br />\r\n<br />\r\n<strong>TAHAPAN MENYELENGGARAKAN EVENT ORGANIZER</strong><br />\r\n<br />\r\nUntuk mewujudkan kesuksesan sebuah event merupakan sebuah kerja keras yang membutuhkan konsep yang jelas dan terarah. Di bawah ini beberapa tahapan strategis dalam menyelenggarakan sebuah event:</span></span></span></p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Konsep yang menarik dan kreatif</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Proses tahapan pembuatan event</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Eksekusi event yang significant</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Konsep Yang Menarik Dan Kreatif</span></span></span></li>\r\n</ul>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Dalam rencana pembuatan konsep event, kita harus kritis dengan apa yang sedang marak di lingkungan kita, baik lokal, nasional, maupun global (update). Setelah tema tercipta, maka kita harus memberikan perbedaan dalam konsep tersebut dari event organizer yang lain. Kita harus berani melakukan eksperimen dalam pembuatan konsep yang berbeda, bahkan jika perlu sesuatu yang belum pernah di bayangkan orang.<br />\r\n<br />\r\n&ldquo;Jelas itu sangat penting, karena itulah sebuah EO harus memiliki ide-ide kreatif. Kita tidak ingin membuat suatu acara hanya sebatas acara biasa. Tetapi alangkah baiknya jika acara tersebut dapat membuat kenangan tersendiri. Dari konsep inilah semua rancangan acara akan kita buat,&rdquo; (Williem Hasli, Direktur Apple Advertising &amp; Event Organizer).</span></span></span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\"><strong>Proses Tahapan Pembuatan Event :</strong></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Mencari konsep yang kreatif.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Menuangkan konsep dalam suatu rancangan tertulis.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Membentuk tim untuk event yang akan di selenggarakan.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Membicarakan konsep dengan tim dan membuat skema aturan mainnya (Kerangka Pikiran), kemudian menyusunnya dalam bentuk proposal.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Menentukan pihak-pihak yang akan terlibat dalam event tersebut, dan membuat daftar tujuan proposal.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Menyebarluaskan proposal, dengan cara yang tepat.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Melakukan follow up terhadap proposal, dan memberikan batas waktu kepada calon sponsor.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Menghubungi seluruh supplier, pengisi acara, reconfirm venue dan seluruh atribut pendukung lainnya. Seperti, perijinan, keamanan dll.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Melakukan kontrak kepada semua pihak</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Melakukan technical meeting dengan seluruh pengisi/pendukung acara</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Jika diperlukan melakukan konferensi pers</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Melakukan publikasi</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Merekruit sesuai dengan kebutuhan</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Siap melakukan loading dan akhirnya eksekusi</span></span></span></li>\r\n</ul>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\"><strong>Eksekusi Event Yang Significant :</strong></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Pemilihan orang-orang yang berpotensi dan sesuai dengan posisi yang akan dilakukan di event tersebut, misal; stage manager, seksi perlengkapan, seksi dokumentasi, seksi konsumsi, dll..</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Pemilihan supplier yang significant dan berkualitas, baik dalam hal perlengkapan, konsumsi, dll.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Membuat rundown acara yang tidak boleh ada putusnya, tetap mengalir (padat).</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Tepat waktu.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Konsep event harus sesuai dengan apa yang telah dipresentasikan awal kepada klien.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Sesering mungkin meng-announce produk klien kepada audience, atau ucapan terima kasih.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Menjaga keamanan dan ketertiban event sehingga tidak menelan korban jiwa atau sejenisnya.</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Hasil acara diliput di media cetak / elektronik</span></span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Kecerdasan atau kesanggupan seseorang itu terbagi: 1% adalah inspirasi, dan 99% adalah cucuran keringat atau usaha keras.</span></span></span></li>\r\n</ul>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><span style=\"background-color:whitesmoke\"><span style=\"font-family:Calibri,sans-serif\">Selain tahapan diatas, agar tahapan berjalan dengan target&nbsp;<strong>yang</strong>&nbsp;dininginkan dalam faktor kualitas dan kuantitas peserta maka <strong>perlunya web komunitas event organizer&nbsp;</strong>sebagai pendukung awal kegiatan.</span></span></span><br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `kategori`) VALUES
(36, '1604381889_793ea69d03d0e089fdf2.jpeg', 'slideshow'),
(37, '1605776138_c1dbc09c290966c323c1.jpg', 'slideshow'),
(48, '1605764954_3cb61a8111271cc72fb1.jpeg', 'testimoni'),
(49, '1605764985_23f1fc532fa50f76fa42.jpeg', 'testimoni'),
(50, '1605765244_13c0fe5c67b4e7ee5289.jpeg', 'testimoni'),
(51, '1605765276_12c9cc6abee67554b0e9.jpeg', 'testimoni'),
(52, '1605765293_e400c6451b45abdcdede.jpeg', 'testimoni'),
(53, '1605765327_679d880d9720f92bee7e.jpeg', 'testimoni'),
(54, '1605765340_7cfdff9920d040c1519c.jpeg', 'testimoni'),
(55, '1605765355_0c12141c74604e1c9f82.jpeg', 'testimoni'),
(56, '1605765365_14c6ef9f09b130146dea.jpeg', 'testimoni'),
(57, '1605774876_e61ca48c30d472d22f11.jpg', 'portofolio'),
(58, '1605774904_7a05873e7de5e3129253.jpg', 'portofolio'),
(59, '1605774911_89883600f954bebeaed0.jpg', 'portofolio'),
(60, '1605774931_eaf97a8f9de1d83f117e.jpg', 'portofolio'),
(61, '1605774941_b683ea14d83a3e124c39.jpg', 'portofolio'),
(62, '1605774948_50da1ed4cc8f872d826d.jpg', 'portofolio'),
(63, '1605774965_23cc538c9932671a45ae.jpg', 'portofolio'),
(64, '1605774973_4807f3e4e6a8aad341f3.jpg', 'portofolio'),
(65, '1605774988_ac6e6dc288151082e19d.jpg', 'portofolio'),
(66, '1605775009_7ac508d64e1d529a2bc8.jpg', 'portofolio'),
(67, '1605775018_edceadf3128012a5b7db.jpg', 'portofolio'),
(68, '1605775034_ac8a37b7247962dc6550.jpg', 'portofolio'),
(69, '1605775060_512258e335aa260047cd.jpg', 'portofolio'),
(70, '1605775076_1f36cccaf7ac9ee30df2.jpg', 'portofolio'),
(71, '1605775111_b605c1b0754effb8e82d.jpg', 'portofolio'),
(72, '1605775124_cb6d9a3f239692cdf73d.jpg', 'portofolio'),
(73, '1605775135_061ee21a7003704b7f6f.jpg', 'portofolio'),
(74, '1605775149_1fa87a03cbc013a1cdf4.jpg', 'portofolio'),
(75, '1605775189_3dac331180b64fd8b944.jpg', 'portofolio'),
(76, '1605775201_570113a9e9fa17c5db7f.jpg', 'portofolio'),
(77, '1605775213_d19ecb801861ae9eccd2.jpg', 'portofolio'),
(78, '1605775225_05d25a854f079867e542.jpg', 'portofolio'),
(79, '1605775240_4f30f20a966cf77277ca.jpg', 'portofolio'),
(80, '1605775268_72c73c53abc6489625cb.jpeg', 'portofolio'),
(81, '1605775326_850d37a8fc746709a3af.jpeg', 'portofolio'),
(82, '1605775340_a369749417be7189421b.jpeg', 'portofolio'),
(83, '1605775353_a268e73cb53f5bf81481.jpeg', 'portofolio'),
(84, '1605775369_2087d1e5a77a1c1b30d1.jpeg', 'portofolio'),
(85, '1605775413_39948fe0fb54853a1d29.jpeg', 'portofolio'),
(86, '1605775472_6f3201af7271fb8d8d15.jpeg', 'portofolio'),
(87, '1605775501_9757ce26012349550e02.jpeg', 'portofolio'),
(88, '1605775518_2e272788dadf5f8a9449.jpeg', 'portofolio'),
(89, '1605775530_52f30ca7f8b3d827244f.jpeg', 'portofolio'),
(90, '1605775894_d85f43a478dca3e9fa14.jpeg', 'portofolio'),
(91, '1605775909_b1a02ee3a6461de95337.jpeg', 'portofolio'),
(92, '1605775923_61b920cf5962582c7f3b.jpeg', 'portofolio'),
(93, '1605775943_cde786cb502bc2a8b858.jpeg', 'portofolio'),
(94, '1605775963_b3289eae86117838d32e.jpeg', 'portofolio'),
(95, '1605775979_af2499bfd1f68cfdff8c.jpeg', 'portofolio'),
(96, '1605775991_976979900db90fa640ea.jpeg', 'portofolio'),
(97, '1605776003_a8cb17402393d83c7cda.jpeg', 'portofolio'),
(98, '1605776018_0630d01644b6021d7d2d.jpeg', 'portofolio'),
(99, '1605776031_26a289e6a11412683227.jpeg', 'portofolio'),
(100, '1605776045_8707dd8b22c61ce1510f.jpeg', 'portofolio'),
(101, '1605776057_aaa364045ce9bf5086a7.jpeg', 'portofolio'),
(102, '1605776070_729c09cc0da1e1551859.jpeg', 'portofolio'),
(103, '1605776080_bbdfb4f43520d2f6a0aa.jpeg', 'portofolio'),
(104, '1605776091_b9dcad7f225d172e9658.jpeg', 'portofolio'),
(105, '1605776104_4fb9c4c7676ca639a4ed.jpeg', 'portofolio'),
(106, '1605776155_c4abe723d5a1a7d97435.jpeg', 'slideshow'),
(107, '1605776170_32310f5e84218a48b9b4.jpg', 'slideshow'),
(108, '1605776210_ba4c03f282925f9f3f9b.jpg', 'slideshow');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_portofolio`
--

CREATE TABLE `kategori_portofolio` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_portofolio`
--

INSERT INTO `kategori_portofolio` (`id`, `nama`) VALUES
(2, 'Weeding'),
(3, 'New Born');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `brosur` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `nama`, `harga`, `brosur`) VALUES
(1, 'Paket Rumahan', 17500000, '1605712948_9aee9c26f4cd9f25021d.jpg'),
(2, 'Paket Gedung (Khusus GM)', 40000000, '1605712973_6808a72348490e16fe50.jpg'),
(3, 'Paket Gedung (Bebas Pilih)', 55000000, '1605712990_e20d6c93c7ac5eca70d6.jpg'),
(4, 'Paket Gedung (Bebas Pilih)', 65000000, '1605713008_bbd6c5aa0d05945df419.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `icon`, `nama`, `keterangan`) VALUES
(1, '1603491740_6992c71bdaad213d8ea4.png', 'Gaun dan Jas Pengantin', 'Anda dan Pasangan Bebas Memilih Gaun dan Jas Sesuai dengan Selera'),
(2, '1604370740_d3c842009a645f545cf6.png', 'Foto dan Video Prewed', 'Foto dan Video Prewed Sangat Terkonsep menjadikan Kenangan yang takkan terlupakan'),
(3, '1604376313_0f637a48071f56043de0.png', 'Peminangan', 'Saat Peminangan Anda Bebas Memilih Pakaian Adat Sesuai dengan Suku membuat anda terlihat menarik'),
(4, '1604376442_91f1fe3810d60526d935.png', 'Pemberkatan & Resepsi', 'Moment Bahagia yang takan terlupakan dan Bersama Ta’angka ada banyak bonus-bonus menarik pastinya'),
(5, '1604376509_554c4b94f4a406324c15.png', 'Foto dan Video Maternity', 'Setelah Moment Wedding, Anda akan di Manjakan dengan Foto                       dan Video Maternity '),
(6, '1606199235_8702c1f2480c19ce7332.png', 'Foto dan Video Newborn', 'Semua Moment Bahagia Anda dan Pasangan akan di abadikan termasuk Foto dan Video Newborn dengan harga yang bersahabat'),
(7, '1606199256_c640471b369335886f2d.png', 'Lain-lain', 'Di Ta’angka Event Organizer kami Juga melayani pembuatan Video Youtuber, Foto dan Video Produk, Foto dan Video Ulang Tahun, Foto dan Video Duka, Dll');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `id_galeri`, `id_kategori`) VALUES
(10, 57, 2),
(11, 58, 2),
(12, 59, 2),
(13, 60, 2),
(14, 61, 2),
(15, 62, 2),
(16, 63, 2),
(17, 64, 2),
(18, 65, 2),
(19, 66, 2),
(20, 67, 2),
(21, 68, 2),
(22, 69, 2),
(23, 70, 2),
(24, 71, 2),
(25, 72, 2),
(26, 73, 2),
(27, 74, 2),
(28, 75, 2),
(29, 76, 2),
(30, 77, 2),
(31, 78, 2),
(32, 79, 2),
(33, 80, 2),
(34, 81, 2),
(35, 82, 2),
(36, 83, 2),
(37, 84, 2),
(38, 85, 2),
(39, 86, 2),
(40, 87, 2),
(41, 88, 2),
(42, 89, 2),
(43, 90, 2),
(44, 91, 2),
(45, 92, 2),
(46, 93, 2),
(47, 94, 2),
(48, 95, 2),
(49, 96, 2),
(50, 97, 2),
(51, 98, 2),
(52, 99, 2),
(53, 100, 2),
(54, 101, 2),
(55, 102, 2),
(56, 103, 2),
(57, 104, 2),
(58, 105, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim`
--

CREATE TABLE `tim` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tim`
--

INSERT INTO `tim` (`id`, `foto`, `nama`, `posisi`, `instagram`) VALUES
(6, '1605832115.png', 'Niki', 'Assistant Bridal', 'https://instagram.com/nickyourbae?igshid=7o5nqmbdek28'),
(7, '1605763810.png', 'Elsyn', 'Assistant Bridal', 'https://instagram.com/elsynn20?igshid=udhs08jmxsfi'),
(8, '1605831316.png', 'Ma\'e', 'Assistant Bridal', 'https://instagram.com/charolinalede?igshid=jiqgepukf7f6'),
(9, '1605764399.png', 'Nicky', 'Fotografer', 'https://instagram.com/valephotography1306?igshid=19a4mdxtcq80x'),
(10, '1605763986.png', 'Rony', 'Fotografer', 'https://instagram.com/ultimate_fotografi?igshid=msgwjpxtflz4'),
(11, '1605764004.png', 'Kopan', 'Videografer', 'https://instagram.com/kopan_keo?igshid=1eb40azmanpo6'),
(12, '1605764023.png', 'Exel', 'Assistant Weeding', 'https://instagram.com/_exelkilla_?igshid=1il1d9vtfm737'),
(13, '1605764040.png', 'Jion', 'Driver', 'https://instagram.com/jionriberu?igshid=1qz95gcl2uu4k');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `foto`, `username`, `password`, `level`) VALUES
(2, '1603976979_7630f86f1f4d57d65b4e.png', 'taangka EO', '$2y$10$fgohUOznJbp.rymAxWMz5uHAKWo/e4zwiTB6T1CHgrvIRHrqFl876', 0),
(3, 'default.jpg', 'admin 3', '$2y$10$1MAOXv8txxDwNKrbwaK5pu9fs7DeYiBA8MHSBaRA4AvXDekoHWu1y', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_portofolio`
--
ALTER TABLE `kategori_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `kategori_portofolio`
--
ALTER TABLE `kategori_portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
