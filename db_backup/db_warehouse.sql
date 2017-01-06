--
-- Database: `db_warehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_brand`
--

CREATE TABLE `t_brand` (
  `id_brand` int(11) NOT NULL,
  `brand_name` varchar(35) NOT NULL,
  `brand_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_brand`
--

INSERT INTO `t_brand` (`id_brand`, `brand_name`, `brand_logo`) VALUES
(1, 'Adidas', 'images\\Brands\\1.jpg'),
(2, 'Calvin Klein', 'images\\Brands\\2.jpg'),
(3, 'Fox', 'images\\Brands\\3.jpg'),
(4, 'Gap', 'images\\Brands\\4.jpg'),
(5, 'Hurley', 'images\\Brands\\5.jpg'),
(6, 'Lacoste', 'images\\Brands\\6.jpg'),
(7, 'Mango', 'images\\Brands\\7.jpg'),
(8, 'Nike', 'images\\Brands\\8.jpg'),
(9, 'Pull & Bear', 'images\\Brands\\9.jpg'),
(10, 'Puma', 'images\\Brands\\10.jpg'),
(11, 'Ralph Lauren', 'images\\Brands\\11.jpg'),
(12, 'Zara', 'images\\Brands\\12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_clothe`
--

CREATE TABLE `t_clothe` (
  `id_clothe` int(11) NOT NULL,
  `id_clothe_style` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `clothe_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_clothe`
--

INSERT INTO `t_clothe` (`id_clothe`, `id_clothe_style`, `id_color`, `id_brand`, `clothe_image`) VALUES
(1, 25, 9, 5, 'images\\Clothe\\1.jpg\r\n'),
(2, 25, 10, 9, 'images\\Clothe\\2.jpg'),
(3, 24, 7, 4, 'images\\Clothe\\3.jpg'),
(4, 17, 4, 2, 'images\\Clothe\\4.jpg'),
(5, 17, 9, 7, 'images\\Clothe\\5.jpg'),
(6, 33, 4, 6, 'images\\Clothe\\6.jpg'),
(7, 29, 9, 8, 'images\\Clothe\\7.jpg'),
(8, 5, 1, 8, 'images\\Clothe\\8.jpg'),
(9, 28, 8, 2, 'images\\Clothe\\9.jpg'),
(10, 5, 9, 2, 'images\\Clothe\\10.jpg'),
(11, 27, 8, 12, 'images\\Clothe\\11.jpg'),
(12, 28, 4, 9, 'images\\Clothe\\12.jpg'),
(13, 5, 4, 2, 'images\\Clothe\\13.jpg'),
(14, 7, 5, 4, 'images\\Clothe\\14.jpg'),
(15, 9, 5, 1, 'images\\Clothe\\15.jpg'),
(16, 1, 4, 6, 'images\\Clothe\\16.jpg'),
(17, 25, 5, 7, 'images\\Clothe\\17.jpg'),
(18, 20, 6, 10, 'images\\Clothe\\18.jpg'),
(19, 20, 5, 4, 'images\\Clothe\\19.jpg'),
(20, 1, 5, 2, 'images\\Clothe\\20.jpg'),
(21, 1, 9, 8, 'images\\Clothe\\21.jpg'),
(22, 3, 4, 12, 'images\\Clothe\\22.jpg'),
(23, 3, 2, 7, 'images\\Clothe\\23.jpg'),
(24, 26, 6, 4, 'images\\Clothe\\24.jpg'),
(25, 2, 5, 4, 'images\\Clothe\\25.jpg'),
(26, 12, 9, 3, 'images\\Clothe\\26.jpg'),
(27, 8, 5, 8, 'images\\Clothe\\27.jpg'),
(28, 8, 10, 12, 'images\\Clothe\\28.jpg'),
(29, 15, 1, 7, 'images\\Clothe\\29.jpg'),
(30, 12, 5, 1, 'images\\Clothe\\30.jpg'),
(31, 16, 5, 7, 'images\\Clothe\\31.jpg'),
(32, 16, 8, 11, 'images\\Clothe\\32.jpg'),
(33, 30, 1, 7, 'images\\Clothe\\33.jpg'),
(34, 2, 4, 2, 'images\\Clothe\\34.jpg'),
(35, 2, 9, 12, 'images\\Clothe\\35.jpg'),
(36, 26, 6, 4, 'images\\Clothe\\36.jpg'),
(37, 24, 8, 3, 'images/Clothe/37.jpg'),
(38, 19, 7, 4, 'images/Clothe/38.jpg'),
(39, 1, 9, 2, 'images/Clothe/39.jpg'),
(40, 17, 5, 4, 'images/Clothe/40.jpg'),
(41, 21, 1, 3, 'images/Clothe/41.jpg'),
(42, 33, 9, 3, 'images/Clothe/42.jpg'),
(43, 33, 9, 3, 'images/Clothe/43.jpg'),
(44, 6, 1, 2, 'images/Clothe/44.jpg'),
(45, 28, 3, 12, 'images/Clothe/45.jpg'),
(46, 13, 8, 9, 'images/Clothe/46.jpg'),
(47, 9, 9, 2, 'images/Clothe/47.jpg'),
(48, 23, 3, 12, 'images/Clothe/48.jpg'),
(49, 20, 7, 9, 'images/Clothe/49.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_clothe_style`
--

CREATE TABLE `t_clothe_style` (
  `id_clothe_style` int(11) NOT NULL,
  `clothe_style` varchar(15) NOT NULL,
  `clothe_style_logo` varchar(100) NOT NULL,
  `id_clothe_type` int(11) NOT NULL,
  `id_sex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_clothe_style`
--

INSERT INTO `t_clothe_style` (`id_clothe_style`, `clothe_style`, `clothe_style_logo`, `id_clothe_type`, `id_sex`) VALUES
(1, 'T-shirt', 'images\\ClotheStyle\\1.jpg', 1, 1),
(2, 'Shirt', 'images\\ClotheStyle\\2.jpg', 1, 1),
(3, 'T-shirt', 'images\\ClotheStyle\\3.jpg', 1, 2),
(4, 'Formal Jacket', 'images\\ClotheStyle\\4.jpg', 1, 1),
(5, 'Jacket', 'images\\ClotheStyle\\5.jpg', 1, 1),
(6, 'Hoodie', 'images\\ClotheStyle\\6.jpg', 1, 1),
(7, 'Pants', 'images\\ClotheStyle\\7.jpg', 2, 1),
(8, 'Shoes', 'images\\ClotheStyle\\8.jpg', 3, 2),
(9, 'Shorts', 'images\\ClotheStyle\\9.jpg', 2, 1),
(10, 'Swimwear', 'images\\ClotheStyle\\10.jpg', 2, 1),
(11, 'Swimwear', 'images\\ClotheStyle\\11.jpg', 2, 2),
(12, 'Casual Shoes', 'images\\ClotheStyle\\12.jpg', 3, 1),
(13, 'Formal Shoes', 'images\\ClotheStyle\\13.jpg', 3, 1),
(14, 'Crocs', 'images\\ClotheStyle\\14.jpg', 3, 3),
(15, 'High Heels', 'images\\ClotheStyle\\15.jpg', 3, 2),
(16, 'Sandals', 'images\\ClotheStyle\\16.jpg', 3, 3),
(17, 'Dress', 'images\\ClotheStyle\\17.jpg', 1, 2),
(18, 'Hat', 'images\\ClotheStyle\\18.jpg', 4, 2),
(19, 'Belt', 'images\\ClotheStyle\\19.jpg', 4, 3),
(20, 'Scarf', 'images\\ClotheStyle\\20.jpg', 4, 3),
(21, 'Glasses', 'images\\ClotheStyle\\21.jpg', 4, 3),
(22, 'Wallet', 'images\\ClotheStyle\\22.jpg', 4, 3),
(23, 'Skirt', 'images\\ClotheStyle\\23.jpg', 2, 2),
(24, 'Boots', 'images\\ClotheStyle\\24.jpg', 3, 1),
(25, 'Bag', 'images\\ClotheStyle\\25.jpg', 4, 2),
(26, 'Shirt', 'images\\ClotheStyle\\26.jpg', 1, 2),
(27, 'Formal Jacket', 'images\\ClotheStyle\\27.jpg', 1, 2),
(28, 'Jacket', 'images\\ClotheStyle\\28.jpg', 1, 2),
(29, 'Hoodie', 'images\\ClotheStyle\\29.jpg', 1, 2),
(30, 'Pants', 'images\\ClotheStyle\\30.jpg', 2, 2),
(31, 'Short', 'images\\ClotheStyle\\31.jpg', 2, 2),
(32, 'Boots', 'images\\ClotheStyle\\32.jpg', 3, 2),
(33, 'Hat', 'images\\ClotheStyle\\33.jpg', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_clothe_type`
--

CREATE TABLE `t_clothe_type` (
  `id_clothe_type` int(11) NOT NULL,
  `clothe_type` varchar(13) NOT NULL,
  `clothe_type_logo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_clothe_type`
--

INSERT INTO `t_clothe_type` (`id_clothe_type`, `clothe_type`, `clothe_type_logo`) VALUES
(1, 'Tops', 'images\\ClotheType\\1.jpg'),
(2, 'Bottoms', 'images\\ClotheType\\2.jpg'),
(3, 'Shoes', 'images\\ClotheType\\3.jpg'),
(4, 'Accessories', 'images\\ClotheType\\4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_color`
--

CREATE TABLE `t_color` (
  `id_color` int(11) NOT NULL COMMENT 'Primary Key Column',
  `color_name` varchar(20) NOT NULL,
  `color_code` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_color`
--

INSERT INTO `t_color` (`id_color`, `color_name`, `color_code`) VALUES
(1, 'Red', '#bd1e24'),
(2, 'Orange', '#e97600'),
(3, 'Yellow', '#f6c700'),
(4, 'Green', '#007256'),
(5, 'Blue', '#0067a7'),
(6, 'Purple', '#964f8e'),
(7, 'Brown', '#633517'),
(8, 'White', '#ffffff'),
(9, 'Black', '#000000'),
(10, 'Pink', '#e8919c');

-- --------------------------------------------------------

--
-- Table structure for table `t_sex`
--

CREATE TABLE `t_sex` (
  `id_sex` int(11) NOT NULL,
  `sex_name` varchar(6) NOT NULL,
  `sex_logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sex`
--

INSERT INTO `t_sex` (`id_sex`, `sex_name`, `sex_logo`) VALUES
(1, 'Men', 'images/Sex/1.jpg'),
(2, 'Women', 'images\\Sex\\2.jpg'),
(3, 'Unisex', 'images\\Sex\\3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_brand`
--
ALTER TABLE `t_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `t_clothe`
--
ALTER TABLE `t_clothe`
  ADD PRIMARY KEY (`id_clothe`),
  ADD KEY `id_clothe_style` (`id_clothe_style`),
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indexes for table `t_clothe_style`
--
ALTER TABLE `t_clothe_style`
  ADD PRIMARY KEY (`id_clothe_style`),
  ADD KEY `id_clothe_type` (`id_clothe_type`),
  ADD KEY `id_sex` (`id_sex`);

--
-- Indexes for table `t_clothe_type`
--
ALTER TABLE `t_clothe_type`
  ADD PRIMARY KEY (`id_clothe_type`);

--
-- Indexes for table `t_color`
--
ALTER TABLE `t_color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `t_sex`
--
ALTER TABLE `t_sex`
  ADD PRIMARY KEY (`id_sex`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_clothe`
--
ALTER TABLE `t_clothe`
  ADD CONSTRAINT `t_clothe_ibfk_1` FOREIGN KEY (`id_color`) REFERENCES `t_color` (`id_color`),
  ADD CONSTRAINT `t_clothe_ibfk_2` FOREIGN KEY (`id_clothe_style`) REFERENCES `t_clothe_style` (`id_clothe_style`),
  ADD CONSTRAINT `t_clothe_ibfk_4` FOREIGN KEY (`id_brand`) REFERENCES `t_brand` (`id_brand`);

--
-- Constraints for table `t_clothe_style`
--
ALTER TABLE `t_clothe_style`
  ADD CONSTRAINT `FK_clothe_style_clothe_type` FOREIGN KEY (`id_clothe_type`) REFERENCES `t_clothe_type` (`id_clothe_type`),
  ADD CONSTRAINT `t_clothe_style_ibfk_1` FOREIGN KEY (`id_sex`) REFERENCES `t_sex` (`id_sex`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
