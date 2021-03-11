-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 1 月 27 日 03:08
-- サーバのバージョン： 5.5.60-MariaDB
-- PHP のバージョン: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `sminami`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gulp_g_text`
--

CREATE TABLE `gulp_g_text` (
  `id` int(10) UNSIGNED NOT NULL,
  `time` date NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `money` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `template` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `gulp_g_text`
--

INSERT INTO `gulp_g_text` (`id`, `time`, `text`, `money`, `template`) VALUES
(17, '2021-01-13', 'qawsed', 3000, 2),
(18, '2021-01-13', 'qawsed', 3000, 3),
(19, '0000-00-00', 'あああああ', 0, 0),
(20, '0000-00-00', 'ああああ', 0, 0),
(21, '2021-01-20', 'ああああ', 0, 0),
(22, '2021-01-20', NULL, 150, 3);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gulp_g_text`
--
ALTER TABLE `gulp_g_text`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gulp_g_text`
--
ALTER TABLE `gulp_g_text`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
