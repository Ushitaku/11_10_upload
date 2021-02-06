-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-02-06 03:53:30
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d07_10`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `present_table`
--

CREATE TABLE `present_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `present_table`
--

INSERT INTO `present_table` (`id`, `username`, `image`, `created_at`) VALUES
(1, 'seikinTV', 'upload/202102031425237fe166bc1ead163b02e0ad116fba60d0.jpg', '2021-02-03 22:25:23'),
(2, 'seikinTV', 'upload/202102031428025629dca13e76000a9c4c1bc10a09626b.jpg', '2021-02-03 22:28:02'),
(3, 'seikinTV', 'upload/202102031430125cc0a4cbbc18e436e086fa35623224c6.jpg', '2021-02-03 22:30:12'),
(4, 'seikinTV', 'upload/20210203150851e616da00aa11351a2fecf6f753ffcb89.jpg', '2021-02-03 23:08:51'),
(5, 'seikinTV', 'upload/202102031510303fb63f8806808a1963154a8bee34a5db.jpg', '2021-02-03 23:10:30'),
(6, 'seikinTV', 'upload/202102031511206bfcd1905fcdd89bd8014cb3f0dedad4.jpg', '2021-02-03 23:11:20'),
(7, 'seikinTV', 'upload/20210203151153a0ccea8a06bf0467ce42ffd4d220719a.jpg', '2021-02-03 23:11:53'),
(8, 'seikinTV', 'upload/2021020315451324f5c0028bcad0687600fc7e026c24de.jpg', '2021-02-03 23:45:13'),
(9, 'seikinTV', 'upload/2021020315482903856fa68edbcb2c9ab976ebdc8e1789.jpg', '2021-02-03 23:48:29'),
(10, 'tabata', 'upload/20210204061542fc7448ef33d7433a99b42357e6d6bebd.jpg', '2021-02-04 14:15:42'),
(11, 'tabata', 'upload/202102040751554cb7639ab59a08a35f16c949be0156db.jpg', '2021-02-04 15:51:55'),
(12, 'tabata', 'upload/20210204075256178bdec57df7dbf550938476ac5dc5c6.jpg', '2021-02-04 15:52:56'),
(13, 'tabata', 'upload/2021020407580486105982895bec813c81b453dbb18b62.jpg', '2021-02-04 15:58:04'),
(14, 'tabata', 'upload/20210204080019a8b7a4051a5cecf12997f349622eaa91.jpg', '2021-02-04 16:00:19'),
(15, 'tabata', 'upload/20210204080041384aae084130e8c746a4f9813cd1b417.jpg', '2021-02-04 16:00:41'),
(16, 'tabata', 'upload/20210204080816ad954383032070c5c60d3cc5f0527bf9.jpg', '2021-02-04 16:08:16'),
(17, 'tabata', 'upload/20210204080956eedbac4a9ae9975c336c959acaaab9e3.jpg', '2021-02-04 16:09:56'),
(18, 'tabata', 'upload/202102040812342b06d9c4d6ca9baf9f29a2ebbc99ad23.jpg', '2021-02-04 16:12:34'),
(19, 'tabata', 'upload/202102040820040b62b60eb302cb59906916bbf9c36032.jpg', '2021-02-04 16:20:04'),
(20, 'tabata', 'upload/202102040820136699b3d7e2c927b04035a71f7157f867.jpg', '2021-02-04 16:20:13'),
(21, 'tabata', 'upload/20210204083027048af342f2c55d401d85cfe4d45eaca6.jpg', '2021-02-04 16:30:27'),
(22, 'tabata', 'upload/20210204083327bd23f8e1bcba6fd52c86c294710153d4.jpg', '2021-02-04 16:33:27'),
(23, 'seikinTV', 'upload/20210204124435b5189ca9bd905031685b910b3e8e456f.jpg', '2021-02-04 20:44:35'),
(24, 'ushitaku', 'upload/20210204134816ef7abc5fc822f905f874f8cfa3955afe.jpg', '2021-02-04 21:48:16'),
(25, 'ushitaku', 'upload/2021020414421649666fab42d7dd83cc5a5c68ce39f828.jpg', '2021-02-04 22:42:16');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `present_table`
--
ALTER TABLE `present_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `present_table`
--
ALTER TABLE `present_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
