-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2020 pada 15.52
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `bookid` mediumint(6) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `room` varchar(50) NOT NULL,
  `userid` mediumint(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`bookid`, `checkin`, `checkout`, `room`, `userid`) VALUES
(1, '2020-07-18', '2020-07-19', 'A/C La casa Single', 1),
(2, '2020-07-18', '2020-07-18', 'Non-A/C La casa Double', 1),
(3, '2020-07-19', '2020-07-19', 'Non-A/C Accueil Double', 1),
(4, '2020-07-19', '2020-07-19', 'A/C La casa Single', 1),
(5, '2020-07-19', '2020-07-19', 'A/C La casa Single', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(60) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_level` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `phone`, `password`, `registration_date`, `user_level`) VALUES
(1, 'Denny', 'Putra', 'denny.pyp11@gmail.com', '0895338641101', '$2y$10$3ydr0TVIQwzmae8jDuCVYucZw59MHPjHRem9ChV2jAfyA5M0MasRW', '2020-07-18 12:42:37', 0),
(2, 'Denny', 'Admin Utama', 'denny@gmail.com', '085790291026 ', '$2y$10$FvfCvt4vvUXSSHQ1S7.rLuqmDXCsFtE3STgnafgPwJrq7hQBwU6wO', '2020-07-18 12:43:15', 2),
(3, 'Abu', 'Hanif Rahmatullah', 'abu@gmail.com', '089211765227', '$2y$10$ggGkQwxlQSB6Y1RkMNTXs.oqmjd3MW9viSC5MQhkhjkBk0TzOZrN.', '2020-07-19 11:39:47', 0),
(4, 'Aldi', 'Irwan', 'aldi@gmail.com', '086554271888', '$2y$10$QEoPYKkpmhISaITba2C82elXlZW.rwDANZRNJWZiUa1IWWR51k4K6', '2020-07-19 11:54:12', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `userid_bookid` (`userid`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `bookid` mediumint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `userid_bookid` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
