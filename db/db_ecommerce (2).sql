-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2020 pada 23.58
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id_akses`, `keterangan`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `nama_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `nama_category`) VALUES
(1, 'BAJU WANITA'),
(2, 'BAJU PRIA'),
(3, 'AKSESORIS\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id_orderdetail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `order_date` varchar(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sts_order` varchar(255) DEFAULT NULL,
  `ttl_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `id_product`, `order_date`, `jumlah`, `sts_order`, `ttl_harga`) VALUES
(1, 23, 5, '2020-01-13', 1, 'BELUM', 250000),
(2, 23, 5, '2020-01-13', 1, 'BELUM', 250000),
(3, 15, 6, '2020-01-13', 1, 'BELUM', 250000),
(4, 15, 5, '2020-01-13', 1, 'BELUM', 250000),
(5, 15, 5, '2020-01-13', 3, 'BELUM', 750000),
(6, 15, 5, '2020-01-13', 2, 'BELUM', 500000),
(7, 15, 6, '2020-01-13', 1, 'BELUM', 250000),
(8, 23, 6, '2020-01-13', 1, 'BELUM', 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `size` varchar(5) NOT NULL,
  `nama_product` varchar(30) NOT NULL,
  `hrg_product` int(11) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `foto_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `id_user`, `id_category`, `stok`, `size`, `nama_product`, `hrg_product`, `deskripsi`, `foto_product`) VALUES
(5, 15, 2, 2, 'L', 'Kaos pria lengan pendek', 250000, 'Baju bekas baru dipakai 2 hari lalu, barang bagus keren', '6464144_dc1cdd95-223f-4c08-b2bc-1dbce564f7b5.jpg'),
(6, 15, 3, 1, '50M', 'Jam tangan bekas original orie', 250000, 'Original Bekas', 'jam tangan bekas kuno original orient crystal AAA automatic 21 jewels.jpg'),
(7, 15, 2, 5, 'L', 'baju atasan lengan pendek', 500000, 'Original baru dipakai 2 hari ', 'baju atasan kemeja lengan pendek pria bapak bapak batik.jpg'),
(8, 15, 3, 3, '-', 'Casio mar-101 original', 499000, 'pemakaian masih 1 bulan', 'casio mar-101 original.jpg'),
(9, 15, 2, 1, '30', 'Celana Jeans pria', 75000, 'minus pemakaian', 'celana jeans ukuran 30.jpg'),
(10, 15, 2, 1, 'L', 'kemeja lengan pendek', 45000, 'pemakaian masih 1 kali', 'kemeja kotak kuning lengan pendek.jpg'),
(11, 15, 2, 1, '29', 'Celana pendek pria', 75000, 'Minus pemakaian', 'celana pendek pria.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_orderdetail` int(11) NOT NULL,
  `nama_status` varchar(255) NOT NULL,
  `foto_bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_akses` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_akses`, `nama_user`, `email_user`, `no_telp`, `username`, `password`) VALUES
(15, 2, 'Akbar Imawan Dwi Cahya', 'akbarimawan18@gmail.com', 628125264, 'akbaridc', '123'),
(23, 2, 'kepin', 'akbarimawan18@gmail.com', 98, 'kepin', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id_orderdetail`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_category` (`id_category`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_order` (`id_orderdetail`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_akses` (`id_akses`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id_orderdetail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `orderdetails_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Ketidakleluasaan untuk tabel `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `akses` (`id_akses`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
