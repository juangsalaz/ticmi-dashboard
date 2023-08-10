# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.32-log)
# Database: ticmi-db
# Generation Time: 2023-08-10 15:06:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table berlangganan_produk
# ------------------------------------------------------------

DROP TABLE IF EXISTS `berlangganan_produk`;

CREATE TABLE `berlangganan_produk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) NOT NULL,
  `ber_id_berlangganan` int(11) NOT NULL,
  `id_paket_produk` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `biaya` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuota_surat_riset` int(11) NOT NULL,
  `sisa_kuota_surat_riset` int(11) NOT NULL,
  `kuota_download` int(11) NOT NULL,
  `sisa_kuota_download` int(11) NOT NULL,
  `free_trial_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `berlangganan_produk` WRITE;
/*!40000 ALTER TABLE `berlangganan_produk` DISABLE KEYS */;

INSERT INTO `berlangganan_produk` (`id`, `id_pelanggan`, `ber_id_berlangganan`, `id_paket_produk`, `tanggal_mulai`, `tanggal_akhir`, `biaya`, `status`, `kuota_surat_riset`, `sisa_kuota_surat_riset`, `kuota_download`, `sisa_kuota_download`, `free_trial_status`, `deleted`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES
	(1,1,1,1,'2023-08-07','2023-09-07',4000000,'Aktif',5,4,4,3,'Y',0,'admin_ticmi','admin_ticmy','2023-08-07 11:39:57','2023-08-07 11:39:57'),
	(2,2,2,2,'2023-08-07','2023-08-07',200000,'Aktif',5,4,4,3,'Y',0,'admin_ticmi','admin_ticmy','2023-08-07 11:41:11','2023-08-07 11:41:11'),
	(3,1,3,2,'2023-08-10','2023-08-10',1000000,'Aktif',2,2,2,2,'Y',0,'admin ticmi','admin ticmi','2023-08-10 07:10:55','2023-08-10 07:10:55');

/*!40000 ALTER TABLE `berlangganan_produk` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table detail_tagihans
# ------------------------------------------------------------

DROP TABLE IF EXISTS `detail_tagihans`;

CREATE TABLE `detail_tagihans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_berlangganan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_tagihan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `detail_tagihans` WRITE;
/*!40000 ALTER TABLE `detail_tagihans` DISABLE KEYS */;

INSERT INTO `detail_tagihans` (`id`, `id_berlangganan`, `jumlah`, `harga_satuan`, `deleted`, `created_by`, `updated_by`, `created_at`, `updated_at`, `id_tagihan`)
VALUES
	(1,1,4,1000000,0,'admin','admin','2023-08-10 07:33:25','2023-08-10 07:33:25',1),
	(2,3,2,500000,0,'admin','admin','2023-08-10 08:52:00','2023-08-10 08:52:00',1);

/*!40000 ALTER TABLE `detail_tagihans` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table kycs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kycs`;

CREATE TABLE `kycs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kyc` json NOT NULL,
  `tanggal_mulai_aktif` date NOT NULL,
  `status_aktif` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `kycs` WRITE;
/*!40000 ALTER TABLE `kycs` DISABLE KEYS */;

INSERT INTO `kycs` (`id`, `kyc`, `tanggal_mulai_aktif`, `status_aktif`, `deleted`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES
	(1,X'7B226E616D61223A20224A75616E672053616C617A20507261626F776F222C20226E707770223A20223132333435363637383930393837222C2022656D61696C223A20226A75616E6740676D61696C2E636F6D222C20226E6F5F6870223A2022303835313732333534333534222C2022616C616D6174223A20224A6C2E204B7573756D612042616E6773612C204C616D6F6E67616E222C202267656E646572223A20224C222C20226C696E6B6564696E223A20226A73707261626F776F222C2022757365726E616D65223A20226A75616E6773616C617A222C2022746970655F616B756E223A20227065726F72616E67616E222C202274656D7061745F6C61686972223A20224C616D6F6E67616E222C202270686F746F5F70726F66696C65223A20226A75616E672E6A706567222C202274616E6767616C5F6C61686972223A202232322F30382F31393930227D','2023-08-10','Y',0,'Admin Ticmi','Admin Ticmi','2023-08-10 03:57:17','2023-08-10 03:57:17'),
	(2,X'7B226E616D61223A20224976616E79205365736120526568616469227D','2023-08-10','Y',0,'Admin Ticmi','Admin Ticmi','2023-08-10 03:58:24','2023-08-10 03:58:24');

/*!40000 ALTER TABLE `kycs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
	(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),
	(4,'2019_08_19_000000_create_failed_jobs_table',1),
	(5,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(6,'2023_08_03_102218_create_sessions_table',1),
	(7,'2023_08_06_084843_create_pelanggans_table',1),
	(9,'2023_08_07_103425_create_berlangganan_produk_table',2),
	(10,'2023_08_10_024540_create_kycs_table',3),
	(11,'2023_08_10_025246_create_paket_produks_table',4),
	(12,'2023_08_10_030320_create_detail_tagihans_table',5),
	(13,'2023_08_10_031131_create_tagihan_produks_table',6),
	(14,'2023_08_10_034901_create_pembayarans_table',7);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table paket_produks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `paket_produks`;

CREATE TABLE `paket_produks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `granularity_id` int(11) NOT NULL,
  `id_delivery` int(11) NOT NULL,
  `id_jenis_paket_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_produk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurnal_produk_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `tnc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_sample_api` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tampil` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_aktif` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_b2b` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `paket_produks` WRITE;
/*!40000 ALTER TABLE `paket_produks` DISABLE KEYS */;

INSERT INTO `paket_produks` (`id`, `granularity_id`, `id_delivery`, `id_jenis_paket_produk`, `nama_produk`, `deskripsi_produk`, `jurnal_produk_id`, `gambar`, `harga`, `tnc`, `url_sample_api`, `status_tampil`, `status_aktif`, `status_b2b`, `deleted`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES
	(1,1,1,1,'Produk 1','Produk ini sangant bermanfaat','1','',1000000,'','','Y','Y','T',0,'Admin Ticmi','Admin Ticmi','2023-08-10 04:37:36','2023-08-10 04:37:36'),
	(2,1,1,1,'Produk 2','Produk ini sangat bermanfaat','1','',500000,'','','Y','Y','T',0,'Admin Ticmi','Admin Ticmi','2023-08-10 07:08:40','2023-08-10 07:08:40');

/*!40000 ALTER TABLE `paket_produks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_reset_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table pelanggans
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pelanggans`;

CREATE TABLE `pelanggans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_kyc` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pelanggan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ktp` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_domisili` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_domisili` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_domisili` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kyc` json NOT NULL,
  `jabatan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_kuesioner` int(11) NOT NULL,
  `status_pelanggan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akun` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_pelanggan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_mitra` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `pelanggans` WRITE;
/*!40000 ALTER TABLE `pelanggans` DISABLE KEYS */;

INSERT INTO `pelanggans` (`id`, `id_kyc`, `id_perusahaan`, `username`, `password`, `nama_pelanggan`, `tempat_lahir`, `tanggal_lahir`, `gender`, `alamat_ktp`, `alamat_domisili`, `kota_domisili`, `provinsi_domisili`, `email`, `no_hp`, `fb`, `profile_photo`, `kyc`, `jabatan`, `skor_kuesioner`, `status_pelanggan`, `status_akun`, `role_pelanggan`, `status_mitra`, `deleted`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES
	(1,1,1,'juangsalaz','juang123','Juang Salaz Prabowo','Lamongan','1990-08-22','L','Lamongan, Kusuma Bangsas','Lamongan, Kusuma Bangsa','Lamongan','Jawa Timur','juang@gmail.com','081320938659','','juang.jpeg',X'7B226E616D61223A20224A75616E672053616C617A20507261626F776F222C20226E707770223A20223132333435363637383930393837222C2022656D61696C223A20226A75616E6740676D61696C2E636F6D222C20226E6F5F6870223A2022303835313732333534333534222C2022616C616D6174223A20224A6C2E204B7573756D612042616E6773612C204C616D6F6E67616E222C202267656E646572223A20224C222C20226C696E6B6564696E223A20226A73707261626F776F222C2022757365726E616D65223A20226A75616E6773616C617A222C2022746970655F616B756E223A20227065726F72616E67616E222C202274656D7061745F6C61686972223A20224C616D6F6E67616E222C202270686F746F5F70726F66696C65223A20226A75616E672E6A706567222C202274616E6767616C5F6C61686972223A202232322F30382F31393930227D','test',100,'b2b','aktif','user','user',0,'admin','admin','2023-08-06 09:27:35','2023-08-10 10:46:47'),
	(2,2,2,'vanses','vany123','Ivany Sesa Rehadi','Malang','1990-04-05','P','Lamongan','Lamongann','Lamongan','Jawa Timur','ivany@gmail.com','0812500005477','ivany','juang.jpeg',X'7B226E616D61223A20224976616E79227D','test',100,'b2c','aktif','user','user',0,'admin','admin','2023-08-06 10:42:26','2023-08-10 10:46:47');

/*!40000 ALTER TABLE `pelanggans` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pembayarans
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pembayarans`;

CREATE TABLE `pembayarans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_tagihan` int(11) NOT NULL,
  `id_payment_gateway` int(11) NOT NULL,
  `id_promosi` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `id_termin_b2b` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `kode_mitra` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_faktur` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_bayar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_bukti_bayar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve_bukti_bayar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`)
VALUES
	('7IxZlVjfnZdl8JAQoO3r9EdYaH0QsMBViP3rAVXm',1,'172.18.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoieHljTDRMZ1VRdk92ZkhvejRNYWVXV3o0NVN5TDhpQ2pFR0Q5d1Z4UyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3Q6OTAwNS9wZWxhbmdnYW4vcHJvZmlsZS8xIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCROV2kvUHpBdHRsajU0dC5DcEd2RDNlY1dOcHNkZHphSUhBRHV1bEJhRGY5cUNISDRaRm1RcSI7fQ==',1691679675),
	('M4MdEJggHASkLLJyiUCkcP9AhHeGXzE7ldfkfjYU',NULL,'172.18.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHkyMk5CZTRnZ1BuMUpGSjNBTExlWkNFbnBFN09jREZKdlhjakhZZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6OTAwNS9sb2dpbiI7fX0=',1691670348);

/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tagihan_produks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tagihan_produks`;

CREATE TABLE `tagihan_produks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_tagihan_pajak` int(11) NOT NULL,
  `jumlah_tagihan` int(11) NOT NULL,
  `tanggal_tagihan` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `tota_item` int(11) NOT NULL,
  `status_tagihan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` int(11) NOT NULL,
  `nomor_tagihan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `besar_pajak` int(11) NOT NULL,
  `status_termin_b2b` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `tagihan_produks` WRITE;
/*!40000 ALTER TABLE `tagihan_produks` DISABLE KEYS */;

INSERT INTO `tagihan_produks` (`id`, `id_tagihan_pajak`, `jumlah_tagihan`, `tanggal_tagihan`, `tanggal_jatuh_tempo`, `tota_item`, `status_tagihan`, `diskon`, `nomor_tagihan`, `besar_pajak`, `status_termin_b2b`, `deleted`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES
	(1,1,5000000,'2023-08-10','2023-08-10',6,'belum dibayar',0,'PDK13CPERK1X1',0,'',0,'admin','admin','2023-08-10 07:35:33','2023-08-10 07:35:33');

/*!40000 ALTER TABLE `tagihan_produks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`)
VALUES
	(1,'juang','juang@gmail.com',NULL,'$2y$10$NWi/PzAttlj54t.CpGvD3ecWNpsddzaIHADuulBaDf9qCHH4ZFmQq',NULL,NULL,NULL,NULL,NULL,NULL,'2023-08-06 09:19:27','2023-08-06 09:19:27');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
