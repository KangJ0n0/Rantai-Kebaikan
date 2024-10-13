-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Okt 2024 pada 15.48
-- Versi server: 8.0.30
-- Versi PHP: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rantaikebaikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1728746197),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1728746197;', 1728746197),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1728717349),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1728717349;', 1728717349);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '0001_01_01_000000_create_users_table', 1),
(6, '0001_01_01_000001_create_cache_table', 1),
(7, '0001_01_01_000002_create_jobs_table', 1),
(8, '2024_10_11_160724_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('Sosial dan Kemasyarakatan','Kesehatan dan Kesejahteraan','Keagamaan','Teknologi Lingkungan','Edukasi dan Kesadaran Lingkungan','Konservasi Alam dan Keanekaragaman Hayati') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date DEFAULT NULL,
  `status` enum('Selesai','Berlangsung') COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `judul`, `deskripsi`, `kategori`, `deadline`, `status`, `lokasi`, `gambar`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Sedekah Air Bersih Bantu Warga Terdampak Kekeringan', 'Kemarau yang panjang dan tiba lebih awal membuat sejumlah daerah di Indonesia terdampak kekeringan ekstrem. Seperti di Jawa Tengah, kekeringan melanda 22 kabupaten/kota. Kondisinya makin parah dan meluas, khususnya di Kabupaten Blora dan Kabupaten Grobogan. Dilansir dari Media Indonesia, per 20 Agustus 2023, kekeringan di Blora dan Grobogan ini mengakibatkan lebih dari 600 ribu warga di 187 desa yang tersebar di 30 kecamatan terdampak, dan mengalami krisis air bersih.\n\nDi Blora, sebanyak 424.831 warga kesulitan untuk mendapatkan air bersih yang mengharuskan mereka mencarinya ke wilayah yang jauh, sebab sumber air di desa mulai dari sumur, sungai, saluran irigasi, juga bendungan telah mengering.\n\nDi daerah sebelah barat Kabupaten Blora, yakni Kabupaten Grobogan, hal serupa dirasakan warga di 62 desa dari 16 kecamatan yang mengalami krisis air bersih. Warga di Grobogan harus menempuh jarak sekitar 8 km menuju sungai hanya untuk mendapatkan beberapa liter air, dengan menggali atau membuat sumur di tengah sungai dengan minimal kedalaman 60 meter.\n\nMenanggulangi musibah kekeringan itu, LAZISNU Grobogan turut aktif membantu warga dengan menyalurkan air bersih. Ketua LAZISNU Grobogan, M Ghulam Dhofir Mansur menjelaskan pihaknya telah mendistribusikan bantuan 250 ribu liter air bersih untuk warga di beberapa wilayah Kabupaten Grobogan, termasuk di pondok pesantren.', 'Kesehatan dan Kesejahteraan', '2024-12-20', 'Berlangsung', 'KABUPATEN GROBOGAN', '01J9Z13RRQDRH1CBWFMP86SE9J.jpeg', 'https://nucare.id/program/sedekahairbersih', '2024-10-11 11:05:35', '2024-10-12 07:01:17'),
(6, 'Bantu Rehab Masjid Kawasan Tertinggal Terisolir', ' Kondisi masjid berbeda-beda sebagian ada yang makmur, sebagian lagi terbengkalai rusak.\n\nPenyebabnya beragam baik di kota maupun di desa. Di kawasan yang jauh seperti di pelosok juga hampir sama nasibnya. Ada yang tanpa perlengkapan suara, perlengkapan ibadah dan tak memiliki muazin bahkan imam masjid.\nKenyataan itu sejalan dengan data yang dikeluarkan Dewan Masjid Indonesia bahwa 75 persen masjid di Indonesia mengalami situasi yang memprihatinkan terbengkalai.\n\nPada pertengahan April kemarin, sahabat Lazismu bersama-sama merenovasi masjid di pelosok Bogor, tepatnya di pegunungan Halimun, di Kampung Pasir Banteng, Desa Malasari.', 'Keagamaan', '2020-12-08', 'Selesai', 'Kampung Pasir Banteng, Desa Malasari', '01JA0J5Q90CZBTC3WCG6E8XZY6.png', 'https://donasi.online/lazismu/rehabmasjid', '2024-10-12 07:23:24', '2024-10-12 07:29:58'),
(7, 'Donasi Pengadaan Tanaman Hidroponik & Urban Farming', '“Tidaklah seorang muslim menanam tanaman lalu tanaman itu dimakan manusia, binatang ataupun burung melainkan tanaman itu menjadi sedekah baginya sampai hari kiamat.” (HR. Muslim)\n\nSetiap dua tanaman yang tumbuh, bisa menjadi sumber oksigen untuk setiap satu orang. Selain itu, keberadaan urban farming di sekitar masjid atau fasilitas publik juga berdampak baik bagi pengelolaan air, udara, dan tanah di sekitarnya. Bukan hanya kita yang bisa bernapas lega, tetapi hewan juga. Pun, Allah pun melipatgandakan setiap ganjarannya.', 'Konservasi Alam dan Keanekaragaman Hayati', '2023-02-27', 'Selesai', 'Masjid An Nuur Bandung', '01JA0J1JVSJJDJAMEB5HW1RGWS.jpg', 'https://www.wakafsalman.or.id/project/donasi_pengadaan_tanaman_hidroponik_urban_farming', '2024-10-12 07:27:43', '2024-10-12 07:27:43'),
(8, 'Donasi Bantu Bangun Gereja di Pelosok Sumba', 'Hai TemanBaik, bangunan yang digunakan sebagai tempat ibadah jemaat Gereja GBI Weelonda, Sumba Barat Daya sangat sederhana. Bangunan itu berdinding anyaman bambu dan atap dari terpal. Jemaat gereja ini membutuhkan bantuan untuk pembangunan gereja yang lebih layak.\n\n\n\nMeskipun kondisi tempat ibadah sangat sederhana, jemaat gereja tetap bersyukur karena masih bisa beribadah. Mereka tetap datang untuk bersekutu dan memuji Tuhan. \n\n\n\n“Bagi jemaat di sini, bangunan bukanlah satu-satunya alasan untuk memuji Tuhan. Tapi tetap ada kerinduan, saya sendiri punya kerinduan untuk bisa mendirikan gedung gereja yang layak untuk beribadah,” ujar Pendeta Petrus Bora Lalo.', 'Keagamaan', '2025-01-15', 'Berlangsung', 'Sumba Barat Daya, NTT', '01JA0JH30GA0KAVT8V18KKWART.jpg', 'https://m.benihbaik.com/campaign/bantu-bangun-gereja', '2024-10-12 07:36:11', '2024-10-12 07:36:11'),
(9, 'Sedekah Bibit Pohon Program Rehabilitasi Hutan', 'Dampak polusi udara atau pencemaran udara terhadap kesehatan manusia dapat menyebabkan infeksi saluran pernapasan akut dikarenakan kualitas udara yang tidak baik\n\nMembayangkannya saja begitu ngeri. Jika udara bersih di tempat tinggal kita kian menurun, kita semua terancam sakit pernapasan akut. Maukah hal itu terjadi? Mungkin bagi kita sepele, 1-2 pohon ditebang paksa, lama-lama ratusan, ribuan bahkan jutaan jumlahnya. Mungkin awalnya tidak berasa dampaknya seperti apa, namun seiring berjalannya waktu, hidup kita tidak akan tenang.\n\nGBI  Weelonda terletak di Desa Kalingara, Kecamatan Wewena Tengah, Kabupaten Sumba Barat Daya, Nusa Tenggara Timur. Jarak dari Kabupaten menuju Desa Kalingara sekitar 27 kilometer. Gereja ini dirintis oleh Pendeta Petrus Bora Lalo pada bulan Juni 2016. \n\n\n\nSebelum mendirikan bangunan gereja sederhana, jemaat dan Pendeta Petrus mengadakan kebaktian di rumah-rumah warga. Kemudian jemaat mengumpulkan sedikit demi sedikit dana untuk bergotong royong membangun tempat ibadah sederhana. \n\n', 'Konservasi Alam dan Keanekaragaman Hayati', '2025-05-03', 'Berlangsung', 'Wil. Kota Jakarta Barat', '01JA0K0B3N4T4AKQ9HX8J8ABKT.png', 'https://kitabisa.com/campaign/sedekahpohonrehabilitasihutan', '2024-10-12 07:44:30', '2024-10-12 07:44:30'),
(10, 'Wujudkan Rumah Terapi dan Belajar Bagi 1000 Anak Berkebutuhan Khusus', 'Kabupaten Pekalongan dengan luasan 837,2 Km2 dengan total Anak Berkebutuhan Khusus (ABK) mencapai 735 jiwa dan 6500 orang yang tersebar di 19 kecamatan disabilitas hanya memiliki 1 rumah terapi.\n\ndalah seorang perempuan tanggung bernama Ika Nela, yang terketuk hatinya untuk mendirikan sekolah bagi anak istimewa (ABK, Cerebral Palsy dan Disabilitas) secara gratis bagi warga pra sejahtera di Karangsari, Kec. Karanganyar, Kabupaten Pekalongan, Jawa Tengah.\n\nDengan segala keterbatasan dan fasilitas seadanya, Ika Nela menampung anak-anak Istimewa tersebut untuk mendapatkan haknya memperoleh pendidikan yang layak seperti anak-anak pada umumnya. Untuk biaya guru dan operasional sekolah, Ika Nela biasa berjualan pakaian Batik khas Pekalongan via online.\n\nTahun 2024 semakin banyak anak – anak Istimewa yang ingin belajar dan dibantu biaya terapi, siswa berkebutuhan khusus kini sudah mencapai 55 anak. \n\nSehingga sekolah butuh renovasi dan pembuatan ruang terapi khusus untuk menampung lebih banyak anak-anak Istimewa.\n\nSemoga dengan adanya ruang belajar dan terapi ini membuat anak-anak tersebut dapat fokus belajar dan terapi kesembuhan hingga mereka dapat mandiri dan memiliki masa depan yang lebih baik.', 'Edukasi dan Kesadaran Lingkungan', '2024-10-24', 'Berlangsung', 'Kab. Pekalongan', '01JA0K61XYT87VFXJCBDCEVRJV.jpeg', 'https://m.benihbaik.com/campaign/wujudkan-rumah-belajar-terapi-anak-berkebutuhan-khusus', '2024-10-12 07:47:38', '2024-10-12 07:47:38'),
(11, 'Bersama Kodingbean 1000 Anak Indonesia Bisa Koding', 'Teknologi dan inovasi tumbuh dan berkembang dengan sangat cepat. Hal ini memaksa kita harus beradaptasi dengan cepat juga. \n\nKodingbean terpanggil untuk memberikan kesempatan secara merata kepada seluruh anak Indonesia untuk belajar pemprograman dasar dan mempersiapkan mereka menjadi generasi high tech. Tujuan akhirnya adalah agar mereka mampu bersaing dan menciptakan inovasi di masa mendatang.\nMelalui program 1000 Anak Indonesia Bisa Koding, kami memiliki misi \n\nuntuk menjangkau seluruh anak negeri melalui program pendidikan koding. Kami percaya belajar koding merupakan investasi berharga bagi anak-anak Indonesia di era teknologi saat ini maupun di masa depan.\n', 'Teknologi Lingkungan', '2025-01-29', 'Berlangsung', 'Wil. Kota Jakarta Timur', '01JA0KEPPC36JBAHB71N148VSY.png', 'https://m.benihbaik.com/campaign/belajar-koding-bersama-kodingbean', '2024-10-12 07:52:21', '2024-10-12 07:52:21'),
(12, 'Yuk Ikut Lestarikan Sungai Ciliwung', 'Melestarikan warisan budaya lokal dan budaya nasional untuk masa depan generasi selanjutnya.\n\nHai Teman Baik, kesadaran untuk menjaga kebersihan dan kelestarian lingkungan Sungai Ciliwung menjadi tanggung jawab bersama. Hakikat Ciliwung, komunitas yang berkomitmen pada konservasi dan pengembangan warisan alam dan budaya Sungai Ciliwung mengajak kita semua turut peduli terhadap kelestarian Sungai Ciliwung dan lingkungan sekitar.\n\nKonservasi Sungai Ciliwung terus dilakukan. Hakikat Ciliwung memiliki misi untuk membuat program dan memberikan layanan yang berorientasi untuk mendidik, pariwisata berkelanjutan dan mendorong Community Capacity Building (CCB) untuk konservasi, pemeliharaan dan pengembangan warisan budaya dan alam nasional.  ', 'Sosial dan Kemasyarakatan', '2024-12-02', 'Berlangsung', 'Daerah Khusus Ibukota Jakarta', '01JA0KJMSQ1429EJS8CV7NBA7J.jpeg', 'https://m.benihbaik.com/campaign/lestarikan-sungai-ciliwung', '2024-10-12 07:54:30', '2024-10-12 07:54:30'),
(13, 'Wujudkan Pendidikan untuk Masyarakat Pedalaman Papua', 'ami dari organisasi We Love Others (WLO) saat ini bergerak untuk membantu anak-anak dan adik-adik di pedalaman Papua agar bisa mengeyam pendidikan yang layak dengan peralatan sekolah yang maksimal, terutama buku tulis/bacaan, alat tulis, alas kaki, dll.\n\nKeterbatasan ekonomi memaksa mereka untuk berhenti sekolah karena tidak mampu membeli beragam kebutuhan untuk sekolah. Jika kondisi itu berlanjut, mereka nantinya akan sulit mendapatkan pekerjaan sehingga melestarikan jerat kemiskinan dan kebodohan.\n\nUluran tangan dari #TemanBaik akan sangat berarti bagi mereka. Sedikit bantuan yang kita kumpulkan dan salurkan untuk kebutuhan sekolah akan membuat mereka tersenyum bahagia. Menumbuhkan semangat mereka untuk belajar sekalipun harus berjalan kaki jauh di perbukitan yang sering kali kurang bersahabat.\n\nYuk, kita sisihkan rezeki kita untuk memberikan berkah bagi mereka yang kekurangan. Mereka adalah generasi muda yang menjadi harapan orangtua, masyarakat, bangsa dan negara untuk memajukan Papua.', 'Sosial dan Kemasyarakatan', '2024-12-31', 'Berlangsung', 'Kab. Manokwari', '01JA0KQT2X8KZSSFQVZ3C8WV59.jpeg', 'https://m.benihbaik.com/campaign/pendidikan-untuk-papua', '2024-10-12 07:57:19', '2024-10-12 07:57:19'),
(14, 'Wujudkan Perahu Sekolah Gratis Untuk Anak-Anak dan Guru di Kepulauan Riau', 'Kericik, Kecamatan Moro, Kabupaten Karimun, Kepulauan Riau, hanya ada satu sekolah dasar yakni SDN 21 Moro. Mayoritas guru dan murid sekolah ini harus melewati lautan selama 45 menit menggunakan perahu yang mereka sewa secara patungan untuk sampai ke sekolah, karena tak ada transportasi lain yang bisa digunakan untuk ke sana. \n\nPulau Kericik merupakan pulau kecil yang terdiri dari dua RT yang ditempati ± 60 KK. Pulau ini masih minim fasilitas dan kebutuhan sembako hanya bisa dipenuhi dari kecamatan terdekat yakni Moro di mana perlu membutuhkan waktu 45 menit menggunakan boat melewati laut untuk sampai ke sana. \n\nDi Pulau Kericik terdapat satu SD, yaitu SDN 21 Moro. Staf pengajar dan murid di SDN 21 Moro mayoritas berdomisili di Moro. Satu-satunya akses yang dapat ditempuh untuk menuju ke sekolah adalah melalui jalur laut menggunakan boat Dari Moro menuju Pulau Kericik dan sebaliknya tidak tersedia jasa penyeberangan umum. Selama ini para guru berinisiatif menyewa boat dengan biaya Rp. 2.000.000/bulan. ', 'Sosial dan Kemasyarakatan', '2024-10-25', 'Berlangsung', 'Kab. Karimun', '01JA0KWRQN07HBWGW8AX867V24.jpg', 'https://m.benihbaik.com/campaign/perahu-sekolah-pulau-kericik', '2024-10-12 08:00:02', '2024-10-12 08:00:02'),
(15, 'Wujudkan Bimbel Gratis di Desa Toyoresmi', 'Diharapkan Bimbel gratis Edukids ini dapat mengurangi ketergantungan anak-anak pada gadget, mencerdaskan mereka dengan bimbingan belajar yang memadai, serta menjauhkan mereka dari pengaruh negatif remaja masa kini.\n\nBimbel Edukids di Desa Toyoresmi, Kediri, Jawa Timur, merupakan program bimbingan belajar gratis yang mewadahi anak-anak usia sekolah yang dilengkapi guru dan tempat belajar. Program ini bermula dari permintaan orang tua di desa yang merasa anak-anak mereka butuh bimbingan belajar di luar jam sekolah.', 'Edukasi dan Kesadaran Lingkungan', '2024-12-20', 'Berlangsung', 'Kab. Kediri', '01JA0M11YQ99ACSVNN3G6K97N6.jpeg', 'https://m.benihbaik.com/campaign/wujudkan-bimbel-gratis-di-desa-toyoresmi', '2024-10-12 08:02:22', '2024-10-12 08:02:22'),
(16, 'Ayo Antisipasi Perubahan Iklim dengan menanam Pohon', '\"Bersama Menanam 1000 Pohon untuk Bumi yang Lebih Hijau!\"\nHallo #OrangBaik, kita semua tahu bahwa perubahan iklim adalah tantangan besar yang dihadapi oleh planet kita. Dari cuaca ekstrem hingga penurunan kualitas udara, dampaknya dirasakan oleh semua makhluk hidup. Namun, ada harapan! Mari kita bersama-sama melakukan aksi nyata untuk menjaga lingkungan kita.\n\n\n\nKami mengajak Anda untuk bergabung dalam gerakan \"Menanam 1000 Pohon\"! Dengan menanam pohon, kita tidak hanya mengurangi emisi karbon, tetapi juga meningkatkan kualitas udara, menciptakan habitat bagi berbagai spesies, dan mempercantik lingkungan sekitar kita.\n\n\n\nApa yang Kami Rencanakan? Kami berencana untuk menanam 1000 pohon di area yang telah terdegradasi dan membutuhkan penghijauan di daerah Yogyakarta. Kami akan bekerja sama dengan komunitas lokal, sekolah, atau organisasi lingkungan untuk memastikan pohon-pohon ini tumbuh dengan baik dan memberikan manfaat jangka panjang bagi lingkungan dan masyarakat.', 'Konservasi Alam dan Keanekaragaman Hayati', '2024-10-22', 'Berlangsung', 'Kampung Pasir Banteng', '01JA0M76Q1001HKFMTE8DC6M7H.avif', 'Cipinang Melayu', '2024-10-12 08:05:44', '2024-10-12 08:13:44'),
(17, 'Bantu Guru Sekolah di Pelosok Belajar Lagi', 'Pendidikan adalah hak setiap anak di Indonesia. Akan tetapi, tidak semua anak-anak bisa mengakses hak tersebut, termasuk anak-anak yang ada di pedalaman karena keterbatasan guru atau tenaga pengajar yang berkualitas.\n\nSeperti TK Talenta di Batula, Rote Timur yang saat ini jumlah muridnya mencapai 59 anak.\n\nKarena keterbatasan dana, mereka tidak memiliki alat belajar di dalam ruangan. Bahkan, crayon dan alat tulis tidak dapat ditemui di dalam kelas termasuk di ruang guru. \n\nPadahal, murid-murid membutuhkan alat belajar tersebut untuk mempelajari berbagai kompetensi yang dapat menjadi bekal anak-anak di masa depan.\n\nTidak hanya itu, masih ada TK yang tenaga didiknya sangat terbatas, seperti TK Nasional Kutoarjo yang hanya memiliki 2 orang guru untuk mengajar. Bahkan, latar belakang pendidikan guru ini sebagian besar SMA, hanya sebagian kecil saja yang lulus dari perguruan tinggi.\n\nOleh karena itu, kami berinisiatif membuat program bernama Bantu Guru Belajar Lagi yang targetnya untuk membantu pengembangan guru sekolah di pelosok yang memiliki keterbatasan akses terhadap sumber-sumber pengembangan diri.', 'Edukasi dan Kesadaran Lingkungan', '2025-01-28', 'Berlangsung', 'Pinang Ranti', '01JA0MSPGG963HCZFR9M5THN68.avif', 'https://kitabisa.com/campaign/bantugurubelajarlagi', '2024-10-12 08:15:50', '2024-10-12 08:15:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DN6rwy4aZWbcbHzpqy68bihNAeaAGAxTxQSzGmw5', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoieExnMGVXUzJqTnBiRmJtZkFzRFY3WUo3VHgyTWJtVHZiZHdqRTd6MCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbmZvcm1hc2kiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJGNSc0NBcTZiRmZSYWY1MWZ6UWd1QnVlTFo2TzhBZmFjOGZFSWxnNXpaWlhRSU92NTJyZGFlIjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1728746851);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$cRsCAq6bFfRaf51fzQguBueLZ6O8Afac8fEIlg5zZZXQIOv52rdae', NULL, '2024-10-11 10:03:57', '2024-10-11 10:03:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
