-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2021 at 12:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpractice`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(20) DEFAULT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(255) NOT NULL,
  `p_name` varchar(225) NOT NULL,
  `p_url` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `email_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pick_location` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `p_img` longtext NOT NULL,
  `registered_at` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_url`, `p_price`, `phone`, `email_id`, `pick_location`, `p_description`, `p_img`, `registered_at`) VALUES
(2, 'pen', '', '150', 135475455, '', 'multan', 'sale', '', ''),
(4, 'gucci bag', '', '1235', 5421632, '', 'peshware', 'for sale', '', ''),
(34, 'laptop', '', '123456', 546987, '', 'gsfdf', 'wdtewfdgw', '', ''),
(35, 'bag', '', '123456', 5846321, '', 'islamabad', 'for sale', '', ''),
(36, 'phone cover', '', '1000', 12354, '', 'isb', 'fdrsgwgqwd', '', ''),
(41, 'laptop12', '', '5366', 68979, '', '5', 'thtrhr', '18746-12-(2).jpg', ''),
(42, 'shoes', '', '5000', 2147483647, '', 'isb', 'efewfefew', '70531-d2zp4v.jpg', ''),
(43, 'school bag', '', '3000', 542631785, '', 'islamabad', 'Children School Bags Girls Butterfly School Backpack Kids Satchel Boy Knapsack Girl For School Bag\r\n', '51045-12314a9b71c035743634e802f1d3b602aca84f8b_original.jpeg', ''),
(44, 'LAptop Bag', '94532-50000', '50000', 25631478, '', 'lahore', 'Bags Structure: Interior\'CompartmentBrandMI Material100% Polyester FibreCapacity:17LSize28*12*41cmClosure Type:Zipper Weight:560g            \r\nColor:Black, Red,Grey            \r\n Occasion:Study, Business, Travel, etc', '67901-e6ff3531d4077da9780e94ad3443c3be.jpg', ''),
(45, 'watch for men', '26453-watch-for-men', '2000', 4568212, '', 'multan', '1170-BL-BR Unique New Day & Date Analog Watch - For Men', '69231-watch.jpeg', ''),
(46, 'plain-travelling-bag', '4492-plain-travelling-bag', '87965', 2147483647, '', 'islamabad', 'Brand	Magnet\r\nPattern	Plain\r\nZipper Type	Double Zipper\r\nNo. Of Compartment	3\r\nWash Care	Handwash\r\nIs It Waterproof:	 yes Waterproof', '9147-plain-travelling-bag-.jpg', ''),
(47, 'Bridal dress', '93763-bridal-dress', '50,000', 54632897, 'h@bh.com', 'lahore', '\r\nCharming Indian & Pakistani Bridal Frocks Ideas for Wedding Dress - Style N Stylu\r\n', '2320-unnamed.jpg', ''),
(48, 'Purple Hand Bag', '41059-purple-hand-bag', '3500', 65743899, 'abc@g.com', 'Islamabad', 'for sale', '58506-253159_3_.jpg', ''),
(49, 'Canon EF-S 18-55mm 1:3.5-5.6 IS STM Camera Lens', '55932-canon-ef-s-18-55mm-1:3.5-5.6-is-stm-camera-lens', '11142.96', 5486215, 'asdf@g.com', 'Peshawar', 'Brand – Canon\r\nModel – Canon EF-S 18-55mm 1:3.5-5.6 IS STM\r\nLens Type – Zoom lens\r\nFocal Length – 18-55 mm\r\nFocal Length Ranges – Standard\r\nLens Mount – Canon EF-S\r\nMax Format size – APS-C / DX', '8266-18-55mm-1.jpg', '06,Jul 21 00:28:56'),
(50, 'DSLR Camera', '80631-dslr-camera', '100', 2147483647, 'jay@n.com', 'isb', 'testing', '26416-dslr.jpeg', '10,Jul 21 18:13:33'),
(51, 'Girls Dress', '22215-girls-dress', '15000', 0, 'sam546@gmail.com', 'islamabad', 'Summer Wedding Dresses Children Bowknot Party Dresses Elegant Ball grown princess dress kids birthday custumes', '24927-dress.jpg', '11,Jul 21 03:42:38'),
(52, 'dress', '20103-bag', '105000', 456321, 'anaya123@gmail.com', 'faisalabad', 'fgdg', '4493-dress.jpg', '12,Jul 21 21:10:14'),
(53, 'car', '24382-pen', '5000', 123, 'anaya123@gmail.com', 'islamabad', 'for sale', '96291-car.jfif', '12,Jul 21 21:11:57'),
(54, 'mehndi dress', '61717-mehndi-dress', 'Rs.5000', 45698774, 'seemasabir1994@gmail.com', 'isb', 'Heavy Mirror Work Embroidery Chiffon Wedding Dress with 4-Side Embroidered Dupatta\r\n\r\n', '93459-dress.jpg', '12,Jul 21 21:55:11'),
(56, 'gucci bag', '68623-gucci-bag', '5500', 2147483647, 'sajjadawan034451@gmail.com', 'islamabad', 'Gucci Mormont Velvet Bag Bags ', '52327-gucci.jpeg', '14,Jul 21 23:08:23'),
(57, 'csmers', '34900-csmers', '2233', 2147483647, 'seemasabir1994@gmail.com', 'rwp', 'lkdsfjsdlk', '41293-car.jfif', '15,Jul 21 09:59:54'),
(58, 'DSLR Camera', '78180-dslr-camera', '45632', 300456987, 'seemasabir1994@gmail.com', 'isb', 'for sale\r\n', '77382-bg.jpg', '15,Jul 21 11:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `renting`
--

CREATE TABLE `renting` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` longtext NOT NULL,
  `pick_loc` varchar(255) NOT NULL,
  `pdescription` varchar(225) NOT NULL,
  `rentdays` varchar(255) NOT NULL,
  `registered_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renting`
--

INSERT INTO `renting` (`id`, `name`, `email_id`, `phone`, `price`, `img`, `pick_loc`, `pdescription`, `rentdays`, `registered_at`) VALUES
(1, '12345678', '', '', '', '', '', '', '', ''),
(2, 'haniya', 'h@h.com', '12345678', '', '', '', '', '', ''),
(3, 'miran', 'm@m.com', '47856933211', '', '', '', '', '', ''),
(4, 'miran', 'm@m.com', '47856933211', '', '', '', '', '', ''),
(5, 'miran', 'm@m.com', '47856933211', '', '', '', '', '', ''),
(6, 'sam', 'ss@s.com', '485796321', '', '70022-', '', '', '', ''),
(7, 'sam', 'ss@s.com', '485796321', '', '59387-', '', '', '', ''),
(8, 'seema', 'jay@n.com', '1234567898', '100000', '94056-dslr.jpeg', '', '', '', ''),
(9, 'jibran', 'j@j.com', '54632178', '21253', '63574-12314a9b71c035743634e802f1d3b602aca84f8b_original.jpeg', '', '', '', ''),
(10, 'hello', 'helloj@j.com', '54632178', '21253', '11933-253159_3_.jpg', '', '', '', ''),
(11, 'hi', 'hhyelloj@j.com', '54632178', '21253', '67369-dslr.jpeg', '', '', '', ''),
(12, 'hi', 'hhyelloj@j.com', '54632178', '21253', '90569-dslr.jpeg', '', '', '', ''),
(13, 'bag', 'b@b.com', '5241632541', '54865', '23368-12314a9b71c035743634e802f1d3b602aca84f8b_original.jpeg', '', '', '', ''),
(14, 'camera dslr', 'jay@n.com', '58476321', '100000', '1552-dslr.jpeg', 'isb', 'for rent', '4', ''),
(17, 'Corolla', 'jay@n.com', '897463221', '15000', '25182-car.jfif', 'rwp', 'only for one day events . you will pay in case of damage/lost ', 'only for 1 day', '07,Jul 21 22:35:37'),
(18, 'car', 'jay@j.com', '123456', '15000', '59280-car.jfif', 'karachi', 'contact me for details', '1', '12,Jul 21 02:42:40'),
(19, 'carr', 'j@j.com', '456321', '25000', '83384-car.jfif', 'rwp', 'rent', '1', '12,Jul 21 02:48:11'),
(20, 'carr', 'j@j.com', '456321', '25000', '67157-car.jfif', 'rwp', 'rent', '1', '12,Jul 21 02:49:23'),
(21, 'sunny', '123@gmail.com', '44444', '100000', '67617-dslr.jpeg', 'rwp', 'hfftfgfhg', 'only for 1 day', '12,Jul 21 02:55:21'),
(22, 'Corolla', 'seemasabir1994@gmail.com', '45698723', '15000000', '74186-car.jfif', 'karachi', 'rent', '5', '12,Jul 21 21:50:24'),
(23, 'mehndi dress', 'seemasabir1994@gmail.com', '123654789', '6000', '54340-mehndi-dress.jpg', 'isb', 'rent', 'only for 1 day', '12,Jul 21 22:00:44'),
(24, '', 'seemasabir1994@gmail.com', '4521456398788', '4000', '25893-ds.jpeg', 'multan', 'DSLR Camera Model Photo Studio Props with with EF100 Lens for Canon EOS 80D', '2 days', '14,Jul 21 19:30:15'),
(25, 'generator', 'seemasabir1994@gmail.com', '1235214632897', '3000', '50459-generator.jpg', 'isb', '39,453 Generator Stock Illustrations, Vectors & Clipart - ', '4', '14,Jul 21 19:35:28'),
(26, 'car', 'sajjadawan034451@gmail.com', '03004521633', '10000', '77281-carrr.jfif', 'multan', 'Toyota Corolla (E170) \r\ncontact us for more details', 'only for 1 day', '14,Jul 21 23:16:50'),
(27, 'Corolla', 'seemasabir1994@gmail.com', '03001254639', '15000', '94804-car.jfif', 'karachi', 'rent', 'only for 1 day', '15,Jul 21 11:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `r_id` int(11) NOT NULL,
  `email_id` varchar(225) NOT NULL,
  `spam_email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`r_id`, `email_id`, `spam_email`, `message`) VALUES
(1, 'sajjadawan034451@gmail.com', 'sam@@gmail.com', 'fake products\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` longtext NOT NULL,
  `registered_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `img`, `registered_at`, `updated_at`) VALUES
(1, 'lucifer M', 'l@l.com', '14e1b600b1fd579f47433b88e8d85291', '42215-12-(2).jpg', '', ''),
(4, 'haniya khan', 'h@h.com', 'c56d0e9a7ccec67b4ea131655038d604', '45932-12-122032_cute-desktop-computer-cute-hd.jpg', '', '23,May 21 03:24:58'),
(6, 'Mazikeen', 'm@m.com', '827ccb0eea8a706c4c34a16891f84e7b', '19629-images.jpg', '23,May 21 03:33:05', ''),
(7, 'ali', 'ali@a.com', 'e10adc3949ba59abbe56e057f20f883e', '81081-unnamed-(2).jpg', '23,May 21 03:33:59', ''),
(8, 'ali nadeem', 'ali@a.com', '14e1b600b1fd579f47433b88e8d85291', '94825-bkg.jpg', '23,May 21 04:36:13', '21,Jun 21 20:59:12'),
(11, 'ali12333', 'aaa@a.com', 'f608a77e3a0bbf5247244961be8b6217', '65452-235653.jpg', '23,May 21 07:31:00', '24,May 21 14:47:36'),
(18, 'sajjadAhmad', 's@ss.com', '14e1b600b1fd579f47433b88e8d85291', '56502-900-9007328_ice-age-characters.png', '23,May 21 21:22:06', '23,May 21 21:42:00'),
(20, 'reyyan', 'r@r.com', 'c4ca4238a0b923820dcc509a6f75849b', '18537-900-9007328_ice-age-characters.png', '31,May 21 23:27:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `name` varchar(55) CHARACTER SET latin1 NOT NULL,
  `email_id` varchar(55) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(55) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cpassword` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cnicfront` longtext NOT NULL,
  `cnicback` longtext NOT NULL,
  `certificate` longtext NOT NULL,
  `registered_at` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email_id`, `phone`, `password`, `cpassword`, `cnicfront`, `cnicback`, `certificate`, `registered_at`, `token`, `status`) VALUES
(8, 'sam', 'a@a.com', '4577777777', 'c20ad4d76fe97759aa27a0c99bff6710', '', '', '', '', '2021/07/10', '555c9c558852d212e274ac2e45262d', 'inactive'),
(10, 'haniya', 'haniyahanifaofficial@gmail.com', '1234567890', 'c20ad4d76fe97759aa27a0c99bff6710', '', '', '', '', '2021/07/10', '786a0fe48dfb326e83442fe963b55c', 'active'),
(12, 'aditya', 'batch16.065@gmail.com', '1236547896', 'c20ad4d76fe97759aa27a0c99bff6710', '', '', '', '', '2021/07/13', 'e020187cf1281749a1737b08949b3b', 'inactive'),
(14, 'ali', 'seemasabir19994@gmail', '5444545454', 'cfcd208495d565ef66e7dff9f98764da', '', 'usercnic/accuntbg.jpg', 'usercnic/bg.jpg', 'usercnic/acuntbg.png', '2021/07/13', '0e3ee577dd2ee37f827105c242e39e', 'inactive'),
(15, 'suman', 'suman@gmail.com', '4563217895', 'c20ad4d76fe97759aa27a0c99bff6710', '', 'usercnic/product-4.jpg', 'usercnic/product-9.jpg', 'usercnic/product-12.jpg', '2021/07/14', 'c6234f288bcca10e172c22388904ae', 'inactive'),
(17, 'maze', 'maze@gmail.com', '1235847444', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710', 'usercnic/bck.jpg', 'usercnic/bgk.jpg', 'usercnic/acuntbg.png', '2021/07/14', '92de18af82b12507922e5b86f15b64', 'inactive'),
(18, 'aliya', 'seemasabir1994@gmail.com', '4563255555', 'c20ad4d76fe97759aa27a0c99bff6710', 'c4ca4238a0b923820dcc509a6f75849b', 'usercnic/grey.jpg', 'usercnic/user2.png', 'usercnic/user1.jpg', '2021/07/14', 'd42bdf3513e5dcd57fc6f317ba4b11', 'active'),
(20, 'huzaifa', 'sajjadawan034451@gmail.com', '0300546826', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710', 'usercnic/cnic.jpg', 'usercnic/cnic.jpg', 'usercnic/doc.jpg', '2021/07/14', '7229c172ba33ecf8e08c0f9f87ee20', 'inactive'),
(21, 'MAzekeen', 'haniyahanifa143@gmail.com', '0300854632', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710', 'usercnic/cnic.jpg', 'usercnic/cnic.jpg', 'usercnic/template-doc-after_80.jpg', '2021/07/15', '98f8a9fbfd967a86977856bd90851e', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `v_id` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `cnicfront` longtext NOT NULL,
  `cnicback` longtext NOT NULL,
  `certificate` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`v_id`, `mail`, `cnicfront`, `cnicback`, `certificate`) VALUES
(1, '', 'usercnic/exmpl.jpg', 'usercnic/exmpl.jpg', 'usercnic/dslr.jpeg'),
(2, '', 'usercnic/exmpl.jpg', 'usercnic/exmpl.jpg', 'usercnic/dslr.jpeg'),
(3, '', 'usercnic/cnic.jpg', 'usercnic/car.jfif', 'usercnic/doc.jpg'),
(4, '', 'usercnic/cnic1exmpl.jfif', 'usercnic/download.jfif', 'usercnic/template-doc-after_80.jpg'),
(5, 'sam@gmail.com', 'usercnic/cnic1exmpl.jfif', 'usercnic/download.jfif', 'usercnic/template-doc-after_80.jpg'),
(6, 'sam@gmail.com', 'usercnic/cnic1exmpl.jfif', 'usercnic/download.jfif', 'usercnic/template-doc-after_80.jpg'),
(7, '', 'usercnic/', 'usercnic/', 'usercnic/'),
(8, '', 'usercnic/', 'usercnic/', 'usercnic/'),
(9, '', 'usercnic/', 'usercnic/', 'usercnic/'),
(10, '', 'usercnic/', 'usercnic/', 'usercnic/'),
(11, '', 'usercnic/', 'usercnic/', 'usercnic/'),
(12, '', 'usercnic/', 'usercnic/', 'usercnic/'),
(13, '', 'usercnic/', 'usercnic/', 'usercnic/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `renting`
--
ALTER TABLE `renting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `renting`
--
ALTER TABLE `renting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `v_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
