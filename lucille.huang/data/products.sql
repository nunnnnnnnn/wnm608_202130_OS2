-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2021 at 02:51 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nunu_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(46) NOT NULL,
  `category` varchar(46) NOT NULL,
  `url` varchar(256) NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `color` text NOT NULL,
  `description` text NOT NULL,
  `material` varchar(65) NOT NULL,
  `size` text NOT NULL,
  `careinstruction` text NOT NULL,
  `import` text NOT NULL,
  `serialnumber` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `url`, `thumbnail`, `date_create`, `date_modify`, `price`, `color`, `description`, `material`, `size`, `careinstruction`, `import`, `serialnumber`, `quantity`) VALUES
(1, 'Wooden Box with Lid', 'Home', 'img/products/images/home/h1.png', 'img/products/images/home/h1.png', '2021-04-28 00:16:58', '2021-05-30 16:33:39', 29.95, 'Brown', 'Large wood box designed by famous artist Phip Filo', 'Box: Wood 100%', '71 g', 'Clean with damp cloth', 'Made in Italy', '0812748001', 10),
(2, 'Tasseled Cushion', 'Home', 'img/products/images/home/h2.png', 'img/products/images/home/h2.png', '2021-04-29 00:17:20', '2021-05-30 16:38:44', 59.95, 'Dark gray', 'Cushion cover in cotton canvas. Embroidered pattern at front, tassels at corners, and concealed zip.', 'Embroidery: Polyester 100%Cotton 100%', 'Height 10 in. Width 15 in. 430 g', 'Dry clean only', 'Made in Italy', '0812748002', 10),
(3, '4-Pack Coasters', 'Home', 'img/products/images/home/h3.png', 'img/products/images/home/h3.png\r\n\r\n', '2021-05-19 15:50:40', '2021-05-30 16:44:13', 12.95, 'Brown', 'Round coasters in braided jute.', 'Jute 100%', 'Diameter 4 in. 71 g', 'Dry clean only', 'Made in Italy', '0812748003', 10),
(4, 'Metal Figurine', 'Home', 'img/products/images/home/h4.png', 'img/products/images/home/h4.png\r\n\r\n', '2021-05-21 15:50:46', '2021-05-30 18:22:17', 29.95, 'Dark gold', 'Large matel rabbit is good for decoration', 'Matel 100%', 'Height 10 in. Width 15 in. 1.5 kg', 'Clean with damp cloth', 'Made in India', '0812748004', 10),
(5, 'Ceramic Sculpture', 'Home', 'img/products/images/home/h5.png', 'img/products/images/home/h5.png\r\n\r\n', '2021-05-12 15:50:44', '2021-05-30 18:21:59', 49.50, 'Light beige / face', 'Ceramic sculpture representing a face. Square wooden base.', 'Ceramic 100% Bottom part: Wood 100%', 'Height 11 3/4 in. Size of base 4 3/4 x 4 3/4 in. Weight - 1.6 kg', 'Clean with damp cloth', 'Made in India', '0812748005', 10),
(6, 'Jute Doormat', 'Home', 'img/products/images/home/h6.png', 'img/products/images/home/h6.png\r\n\r\n', '2021-05-18 15:50:49', '2021-05-30 18:22:13', 24.95, 'Brown', 'Doormat in braided jute with non-slip protection underneath.', 'Jute 100%', 'Height 10 in. Width 15 in. 1.5 kg', 'Dry clean only', 'Made in Italy', '0812748006', 10),
(7, 'Stone Salt & Pepper Bowls', 'Home', 'img/products/images/home/h7.png', 'img/products/images/home/h7.png\r\n\r\n', '2021-05-19 15:50:52', '2021-05-30 18:23:22', 49.95, 'Dark green / gold', 'Most popular Stone Salt & Pepper Bowls ', 'Stone 100%', 'Height 5 in. Width 15 in. 1.5 kg', 'Clean with damp cloth', 'Made in Italy', '0812748007', 10),
(8, 'Stone Candlestick', 'Home', 'img/products/images/home/h8.png', 'img/products/images/home/h8.png\r\n\r\n', '2021-05-18 15:51:03', '2021-05-30 18:22:09', 39.95, 'Beige', 'Candlestick for candle.', 'Stone 100%', 'Height 10 in. Width 15 in. 1.5 kg', 'Clean with damp cloth', 'Made in Italy', '0812748008', 10),
(9, 'Small Wooden Plant Pot', 'Home', 'img/products/images/home/h9.png', 'img/products/images/home/h9.png\r\n\r\n', '2021-05-26 15:50:55', '2021-05-30 18:22:06', 9.95, 'Brown', 'Rustic, wooden plant pot. ', 'Wood 100%', 'Height 5 1/2 in. Diameter at top 6 3/4 in. 540 g', 'Clean with damp cloth', 'Made in Italy', '0812748009', 10),
(10, 'Stoneware Soap Dispenser', 'Home', 'img/products/images/home/h10.png', 'img/products/images/home/h10.png\r\n\r\n', '2021-05-19 15:51:00', '2021-05-30 16:36:15', 19.95, 'Black / light beige', 'Lovely stoneware soap', 'Stone 100%', 'Height 2 in. Width 2 in. 200 g', 'Clean with damp cloth', 'Made in China', '0812748010', 10),
(11, '4-Pack Ceramic Cups', 'Home', 'img/products/images/home/h11.png', 'img/products/images/home/h11.png\r\n\r\n', '2021-05-27 16:33:10', '2021-05-30 16:36:13', 12.95, 'Black', 'Glazed ceramic cups with a handle.', 'Ceramic 100%', 'Height 3 1/4 in., diameter 4 in.', 'Tap cold temperature machine Washable', 'Made in India', '0812748011', 10),
(12, 'Ceramic Vase', 'Home', 'img/products/images/home/h12.png', 'img/products/images/home/h12.png\r\n\r\n', '0000-00-00 00:00:00', '2021-05-30 16:38:28', 19.50, 'Light Beige', 'Large metal cake stand for 2 sections', 'Ceramic 100%', 'Height 3 1/4 in. 300 g', 'Clean with damp cloth', 'Made in Italy', '0812748012', 10),
(13, 'Metal Cake Stand', 'NewArrivals', 'img/products/images/newarrivals/NA1.png', 'img/products/images/newarrivals/NA1.png', '2021-05-27 16:33:06', '2021-05-30 16:44:17', 24.99, 'Gold', 'Large metal cake stand for 2 sections', 'Stainless steel 100%', 'Height 3 3/4 in. Diameter 12 1/4 in. 300 g', 'Clean with damp cloth', 'Made in India', '0812747001', 10),
(14, 'Handmade Tassel-detail Basket', 'NewArrivals', 'img/products/images/newarrivals/NA2.png', 'img/products/images/newarrivals/NA2.png', '2021-05-19 16:33:03', '2021-05-30 18:22:03', 17.99, 'Light beige / white', 'Storage basket in jute decorated with large pompoms.', 'Jute 100%', 'Diameter 11 3/4 in., height 10 1/4 in.', 'Dry clean only', 'Made in France', '0812747002', 10),
(15, 'Native Union Drop Charge Pad', 'NewArrivals', 'img/products/images/newarrivals/NA3.png', 'img/products/images/newarrivals/NA3.png', '2021-05-25 16:05:25', '2021-05-30 16:36:09', 50.00, 'Light pink', 'The Drop Charge Pad is your camouflage accessory that will blend into any living space. ', '20% ABS+PC, 60% aluminium, 10% polyester, 10% silicone', 'Height 3 in. Diameter 5 in.', 'Clean with damp cloth', 'Made in China', '0812747003', 10),
(16, '3-pack Washcloths', 'NewArrivals', 'img/products/images/newarrivals/NA4.png', 'img/products/images/newarrivals/NA4.png', '2021-05-18 16:33:19', '2021-05-30 16:35:35', 12.99, 'Light gray / black ribbon', 'Washcloths in supersoft, fast-drying organic cotton terry with a high absorption rate.', 'Cotton 100%', '290 g', 'Tap cold temperature machine Washable', 'Made in Portugal', '0812747004', 10),
(17, 'Carafe', 'NewArrivals', 'img/products/images/newarrivals/NA5.png', 'img/products/images/newarrivals/NA5.png', '2021-05-27 16:33:17', '2021-05-30 16:38:22', 17.99, 'Gold / Transparent', 'Glass dispenser. Practical and stylish, perfect for parties.', ' Glass 100%', 'Height 9 in. Width 7 in.', 'Tap cold temperature machine Washable', 'Made in China', '0812747005', 10),
(18, 'Marshall Portable Speaker', 'NewArrivals', 'img/products/images/newarrivals/NA6.png', 'img/products/images/newarrivals/NA6.png', '2021-05-24 16:05:21', '2021-05-30 16:36:19', 250.00, 'Black', 'The Marshall Acton II Bluetooth Speaker features analogue knobs that allow you to fine tune your music, controlling bass, treble and volume.', '20% ABS+PC, 60% aluminium, 10% polyester, 10% silicone', 'Height 9 in. Width 7 in.', 'Clean with damp cloth', 'Made in Japan', '0812747006', 10),
(19, 'Stoneware Vase', 'NewArrivals', 'img/products/images/newarrivals/NA7.png', 'img/products/images/newarrivals/NA7.png', '2021-05-27 16:05:19', '2021-05-30 16:35:32', 29.99, 'White', 'Half David face vase', 'Stoneware 100%', 'Height 9 in. Width 7 in.', 'Clean with damp cloth', 'Made in Taiwan', '0812747007', 10),
(20, 'Cofo Provisions Collagen', 'NewArrivals', 'img/products/images/newarrivals/NA8.png', 'img/products/images/newarrivals/NA8.png', '2021-05-25 16:04:49', '2021-05-30 16:38:18', 49.95, 'White', 'Each serving is packed with 10g of Hydrolyzed Collagen Peptide Protein with 100% of your daily dose of organic vitamin C and loaded with rich organic cacao. ', 'Organic 100% Hydrolyzed Fish Collagen Peptides (from fish skin), ', '11g', 'Stay in cool temperature', 'Made in the U.S', '0812747008', 10),
(21, 'Google Nest Hub Max', 'NewArrivals', 'img/products/images/newarrivals/NA9.png', 'img/products/images/newarrivals/NA9.png', '2021-05-24 16:05:09', '2021-05-30 16:36:50', 229.00, 'Dark gray', 'Nest Hub Max with the Google Assistant helps your busy family stay in touch and on track.', 'Aluminum', 'Height 9 in. Width 7 in. ', 'Clean with damp cloth', 'Made in China', '0812747009', 10),
(22, 'Scented Candle in Holder', 'NewArrivals', 'img/products/images/newarrivals/NA10.png', 'img/products/images/newarrivals/NA10.png', '2021-05-25 16:05:05', '2021-05-30 18:22:22', 19.99, 'Beige', 'Scented candle in a ceramic holder with a glazed finish. Burn time 20 hours. ', 'Container: Ceramic 100%Other: Wax 100%', 'Diameter 3 1/4 in. Height 2 1/2 in.', 'Clean with damp cloth', 'Made in France', '0812747010', 10),
(23, 'Bala 1 LB Weighted Bangles, Set of 2', 'NewArrivals', 'img/products/images/newarrivals/NA11.png', 'img/products/images/newarrivals/NA11.png', '2021-05-21 16:04:45', '2021-05-30 16:35:37', 49.00, 'White', 'Wildy versatile, they can be worn on wrists or ankles for training and recreational activities alike. ', 'Silicone-coated cast-iron bars; athletic elastic', 'Height 3 in. Adjustable waist length. 1lb each. ', 'Clean with damp cloth', 'Made in China', '0812747011', 10),
(24, 'Theragun massage gun', 'NewArrivals', 'img/products/images/newarrivals/NA12.png', 'img/products/images/newarrivals/NA12.png', '2021-05-19 16:04:41', '2021-05-30 16:35:11', 199.00, 'Black', 'Using a proprietary brushless motor with QuietForce Technology™ and with a customizable speed range, this lightweight device delivers percussive therapy to relieve pain, accelerate recovery and improve performance.', 'QuietForce Technology', 'Height 12 in. Width 5 in. 1kg', 'Clean with damp cloth', 'Made in China', '0812747012', 10),
(25, 'Transparent Sound Speaker', 'Electronics', 'img/products/images/electronics/E1.png', 'img/products/images/electronics/E1.png', '2021-05-26 16:05:00', '2021-05-30 16:36:22', 1100.00, 'Black / white', 'With a design stripped to its bare essential, this speaker features one single aluminum \"uniframe\" with tempered glass panels. ', 'Aluminum', 'Height 12 in. Width 5 in. Length 13 in. 2kg', 'Clean with damp cloth', 'Made in China', '0812746001', 10),
(26, 'Urbanears Headphones', 'Electronics', 'img/products/images/electronics/E2.png', 'img/products/images/electronics/E2.png', '2021-05-19 16:04:55', '2021-05-30 16:36:47', 70.00, 'Light gray', 'High-performing technology with the Plattan II Bluetooth 3.0 On-Ear Headphones.', 'Aluminum', 'Height 7 in. Width 3 in. Length 7 in.', '', 'Made in China', '0812746002', 10),
(27, 'Kreafunk Headphones', 'Electronics', 'img/products/images/electronics/E3.png', 'img/products/images/electronics/E3.png', '2021-05-18 16:04:53', '2021-05-30 16:38:38', 96.00, 'Light gray / light orange', 'The bGEM In-Ear Headphones were designed to add a touch of excitement to your busy life. ', 'Sillicon', 'Height 2 in. Width 1 in. Length 1 in.', 'Clean with damp cloth', 'Made in China', '0812746003', 10),
(28, 'Kreafunk Charge Mini', 'Electronics', 'img/products/images/electronics/E4.png', 'img/products/images/electronics/E4.png', '2021-05-18 16:05:12', '2021-05-30 16:38:34', 30.00, 'Light gray / brown', 'As the smallest charger in Kreafunk\'s collection, the toCHARGE Mini is a fast-charging lifesaver that boasts high performance and a sleek design.', 'Anti-slip surface: Fluff paint + plastic', 'Height 3 in. Width 5 in. 500g', 'Clean with damp cloth', 'Made in China', '0812746004', 10),
(29, 'Twelve South AirSnap Pro', 'Electronics', 'img/products/images/electronics/E5.png', 'img/products/images/electronics/E5.png', '2021-05-28 18:24:12', '2021-05-30 16:35:42', 39.99, 'Brown / black', 'AirSnap Pro is a full-grain leather case tailored to protect your AirPods while also keeping them close at hand. ', 'Leather 100%', 'Height 4 in. Width 2.5 in. Length 1 in. ', 'Clean with damp cloth', 'Made in China', '0812746005', 10),
(30, 'Native Union Charge Pad', 'Electronics', 'img/products/images/electronics/E6.png', 'img/products/images/electronics/E6.png', '2021-05-26 15:58:22', '2021-05-30 16:35:14', 70.00, 'Black', 'The Drop Charge Pad is your camouflage accessory that will blend into any living space. ', '20% ABS+PC, 60% aluminium, 10% polyester, 10% silicone', 'Height 3 in. Diameter 5 in.', 'Clean with damp cloth', 'Made in China', '0812746006', 10),
(31, 'Twelve South BookArc', 'Electronics', 'img/products/images/electronics/E7.png', 'img/products/images/electronics/E7.png', '2021-05-24 15:58:05', '2021-05-30 16:35:07', 59.99, 'Dark gray', 'Designed exclusively for MacBooks, the sleek, low-profile design of BookArc cradles your MacBook in a space-saving stand.', 'Aluminium, waterproof', 'Height 8 in. Width 3 in. Length 9 in.', 'Clean with damp cloth', 'Made in the U.S', '0812746007', 10),
(32, 'Bang & Olufsen Speaker', 'Electronics', 'img/products/images/electronics/E8.png', 'img/products/images/electronics/E8.png', '2021-05-28 15:58:01', '2021-05-30 16:35:23', 250.00, 'Black / Brown', 'Longer playtime, fully waterproof, integrated voice assistant and speakerphone. Meet the upgraded choice for great sound on the go.', 'Pearl Blasted Aluminium, Polymer, Waterproof Leather', 'Height 5 in. Width 4 in. Length 5 in.', 'Clean with damp cloth', 'Made in China', '0812746008', 10),
(33, 'Kreafunk Speaker', 'Electronics', 'img/products/images/electronics/E9.png', 'img/products/images/electronics/E9.png', '2021-05-25 15:57:56', '2021-05-30 16:35:19', 76.00, 'Black', 'The aGROOVE boasts round edges and a classy golden front to elevate your music experience. Its simple design complements its powerful sound. Choose your color and get to leisure.', 'Anti-slip surface: Fluff paint + plastic', 'Height 10 in. Width 5 in. Length 3 in.', 'Clean with damp cloth', 'Made in China', '0812746009', 10),
(34, 'Kreafunk wiCharge Pad', 'Electronics', 'img/products/images/electronics/E10.png', 'img/products/images/electronics/E10.png', '2021-05-14 15:58:16', '2021-05-30 18:21:52', 80.00, 'Black / orange', 'The wiCHARGE Go supports the Qi standard within charging to ensure that you\'re always at full battery', 'Soft-touch surface with PU leather details', 'Height 3 in. Diameter 4 in.', 'Clean with damp cloth', 'Made in China', '0812746010', 10),
(35, 'Native Union Charge Pad', 'Electronics', 'img/products/images/electronics/E11.png', 'img/products/images/electronics/E11.png', '2021-05-27 15:58:31', '2021-05-30 16:36:27', 50.00, 'Black', 'The Drop Charge Pad is your camouflage accessory that will blend into any living space. ', '20% ABS+PC, 60% aluminium, 10% polyester, 10% silicone', 'Height 3 in. Diameter 5 in.', 'Clean with damp cloth', 'Made in China', '0812746011', 10),
(36, 'Kreafunk Charge Mini', 'Electronics', 'img/products/images/electronics/E12.png', 'img/products/images/electronics/E12.png', '2021-05-18 15:58:25', '2021-05-30 16:35:46', 30.00, 'Light pink / brown', 'As the smallest charger in Kreafunk\'s collection, the toCHARGE Mini is a fast-charging lifesaver that boasts high performance and a sleek design.', 'Anti-slip surface: Fluff paint + plastic', 'Height 3 in. Width 5 in. 500g', 'Clean with damp cloth', 'Made in China', '0812746012', 10),
(37, 'Relaxus Exer Sit Cushion', 'Fitness', 'img/products/images/fitness/F1.png', 'img/products/images/fitness/F1.png', '2021-05-25 15:58:08', '2021-05-30 16:34:48', 30.00, 'Black', 'Boost the benefits of sit-ups, squats and other balancing exercises with the Exer Sit Cushion', 'Rubber surface', 'Diameter 13 in', 'Clean with damp cloth', 'Made in China', '0812745001', 10),
(38, 'G&S Gua Sha Massage Tool', 'Fitness', 'img/products/images/fitness/F2.png', 'img/products/images/fitness/F2.png', '2021-05-27 15:57:48', '2021-05-30 16:34:56', 18.00, 'Light pink / gold', 'Sculpt me like one of your french girls.', 'Magic Stone 100%', 'Height 2 in. Width 5 in. 2g', 'Clean with damp cloth', 'Made in Italy', '0812745002', 10),
(39, 'Relaxus Yoga Eco Mat', 'Fitness', 'img/products/images/fitness/F3.png', 'img/products/images/fitness/F3.png', '2021-05-24 15:57:42', '2021-05-30 16:35:26', 32.00, 'Hot pink', 'The Yoga Eco Mat is degradable, recyclable and latex-free. Enjoy a yoga mat with luxurious cushioning and top-grade wet/dry grip for those sweaty sessions.', 'Thermoplastic Elastomer', 'Height 72 in. Width 24 in. 4mm thick', 'Clean with damp cloth', 'Made in China', '0812745003', 10),
(40, 'Bala 1 LB Bangles, Set of 2 Navy', 'Fitness', 'img/products/images/fitness/F4.png', 'img/products/images/fitness/F4.png', '2021-05-18 15:57:52', '2021-05-30 16:44:24', 49.00, 'Navy / black', 'Wildy versatile, they can be worn on wrists or ankles for training and recreational activities alike. ', 'Silicone-coated cast-iron bars; athletic elastic', 'Height 3 in. Adjustable waist length. 1lb each. ', 'Clean with damp cloth', 'Made in China', '0812745004', 10),
(41, 'Bala 1 LB Bangles, Set of 2 Brown', 'Fitness', 'img/products/images/fitness/F5.png', 'img/products/images/fitness/F5.png', '2021-05-25 15:57:39', '2021-05-30 16:34:06', 49.00, 'Beige', 'Wildy versatile, they can be worn on wrists or ankles for training and recreational activities alike. ', 'Silicone-coated cast-iron bars; athletic elastic', 'Height 3 in. Adjustable waist length. 1lb each. ', 'Clean with damp cloth', 'Made in China', '0812745005', 10),
(42, 'Theragun Yoga Mat', 'Fitness', 'img/products/images/fitness/F6.png', 'img/products/images/fitness/F6.png\r\n', '2021-05-22 15:57:35', '2021-05-30 16:34:44', 7.99, 'Black', 'The Yoga Eco Mat is degradable, recyclable and latex-free. Enjoy a yoga mat with luxurious cushioning and top-grade wet/dry grip for those sweaty sessions.', 'Thermoplastic Elastomer', 'Height 72 in. Width 24 in. 4mm thick', 'Clean with damp cloth', 'Made in India', '0812745006', 10),
(43, 'FILA Cardio Speed rope', 'Fitness', 'img/products/images/fitness/F7.png', 'img/products/images/fitness/F7.png\r\n', '2021-05-26 15:57:32', '2021-05-30 16:34:18', 9.99, 'Black', 'Crafted with PVC and nylon, this lightweight simple jump rope features non-slim foam handles', 'PVC and nylon', 'Length 9 in', 'Clean with damp cloth', 'Made in China', '0812745007', 10),
(44, 'Gaiam Sea Yoga Mat', 'Fitness', 'img/products/images/fitness/F8.png', 'img/products/images/fitness/F8.png\r\n', '2021-05-17 15:57:29', '0000-00-00 00:00:00', 29.99, 'Blue', 'A sticky grip and a non-slip surface', 'Thermoplastic Elastomer', 'Height 72 in. Width 24 in. 4mm thick', 'Clean with damp cloth', 'Made in India', '0812745008', 10),
(45, 'Theragun Smart Roller', 'Fitness', 'img/products/images/fitness/F9.png', 'img/products/images/fitness/F9.png\r\n', '2021-05-18 18:24:17', '2021-05-30 16:34:02', 149.95, 'Black', 'The Wave Roller™ delivers the most powerful and efficient warm-up foam rolling experience', 'PVC', 'Length 12 in. Diameter 5 in', 'Clean with damp cloth', 'Made in the U.S', '0812745009', 10),
(46, 'Bala Power Ring', 'Fitness', 'img/products/images/fitness/F10.png', 'img/products/images/fitness/F10.png\r\n', '2021-05-11 15:57:26', '2021-05-30 16:36:38', 85.00, 'Black', 'Add an extra oomph to full-body workouts with The Power Ring. At 10 pounds, it\'s perfect for more than 75 unique movements', 'PVC and nylon', 'Diameter 20 in', 'Clean with damp cloth', 'Made in China', '0812745010', 10),
(47, 'Bala 1 LB Bangles, Set of 2 Gray', 'Fitness', 'img/products/images/fitness/F11.png', 'img/products/images/fitness/F11.png\r\n', '2021-05-25 15:54:27', '2021-05-30 16:36:34', 49.00, 'Light gray', 'Wildy versatile, they can be worn on wrists or ankles for training and recreational activities alike. ', 'Silicone-coated cast-iron bars; athletic elastic', 'Height 3 in. Adjustable waist length. 1lb each. ', 'Clean with damp cloth', 'Made in China', '0812745011', 10),
(48, 'Gaiam Dot Yoga Mat', 'Fitness', 'img/products/images/fitness/F12.png\r\n', 'img/products/images/fitness/F12.png\r\n', '2021-05-21 15:54:25', '2021-05-30 18:21:26', 29.99, 'Black', 'A sticky grip and a non-slip surface', 'Thermoplastic Elastomer', 'Height 72 in. Width 24 in. 4mm thick', 'Clean with damp cloth', 'Made in India', '0812745012', 10),
(49, 'Linen Cushion Cover', 'Sale', 'img/products/images/sale/S1.png', 'img/products/images/sale/S1.png', '2021-05-19 15:54:13', '2021-05-30 16:33:53', 4.00, 'Black', 'Cushion cover in linen with ruffled, raw-edge trim. Concealed zipper at back.', 'Linen 100%', 'Height 15 in. Width 15 in. 115g', 'Dry clean only', 'Made in France', '0812000001', 10),
(50, '2-pack Washcloths', 'Sale', 'img/products/images/sale/S2.png', 'img/products/images/sale/S2.png', '2021-05-25 15:54:09', '2021-05-30 16:34:09', 4.00, 'Light gray', 'Washcloths in a waffled cotton fabric with fringe along two sides. No hanger loop.', 'Cotton 100%', 'Width 5 in. Length 5 in. 70g', 'Dry clean only', 'Made in China', '0812000002', 10),
(51, 'Washable Cotton Pads', 'Sale', 'img/products/images/sale/S3.png', 'img/products/images/sale/S3.png', '2021-05-21 15:54:06', '2021-05-30 18:21:45', 4.00, 'Beige / white', 'Ten washable cotton pads in unbleached organic cotton terry with overlocked edges. Supplied with mesh drawstring bag, suitable both for storing and washing pads.', 'Cotton 96%, Elastane 4%', 'Width 3 1/4 in. Length 3 1/2 in. 70g', 'Clean with damp cloth', 'Made in China', '0812000003', 10),
(52, 'Seagrass Basket', 'Sale', 'img/products/images/sale/S4.png', 'img/products/images/sale/S4.png', '2021-05-19 15:54:03', '2021-05-30 16:34:52', 4.00, 'Brown', 'Basket in braided seagrass with a loop at one side.', 'Seagrass 100%', 'Depth 2 3/4 in. Height 7 3/4 in. Width 10 1/4 in.', 'Clean with damp cloth', 'Made in France', '0812000004', 10),
(53, 'Thick Pile Bath Mat', 'Sale', 'img/products/images/sale/S5.png', 'img/products/images/sale/S5.png', '2021-05-19 15:51:42', '2021-05-30 16:33:49', 4.00, 'Beige / black / soft pink', 'Bath mat in woven cotton fabric with thick pile. Non-slip protection at back.', 'Cotton 100%', 'Height 16 in. Width 20 in. 1,24 kg', 'Dry clean only', 'Made in Italy', '0812000005', 10),
(54, '3-pack Cutlery', 'Sale', 'img/products/images/sale/S6.png', 'img/products/images/sale/S6.png', '2021-05-21 15:51:39', '2021-05-30 16:35:01', 4.00, 'Gold', 'Knife, fork, and spoon in stainless steel.', 'Metal 100%', 'Length 7 3/4 - 8 3/4 in.', 'Clean with damp cloth', 'Made in India', '0812000006', 10),
(55, 'Wine Glass', 'Sale', 'img/products/images/sale/S7.png', 'img/products/images/sale/S7.png', '2021-05-21 15:51:34', '2021-05-30 18:21:29', 4.00, 'Black', 'Wine glass with a deep bowl. ', 'Glass 100%', 'Top 2 1/2 in., height 8 1/2 in. 323 g', 'Clean with damp cloth', 'Made in China', '0812000007', 10),
(56, 'Game Board Beach Towel', 'Sale', 'img/products/images/sale/S8.png', 'img/products/images/sale/S8.png', '2021-05-19 15:51:31', '2021-05-30 16:33:57', 4.00, 'Beige / orange / yellow / pink', 'Square towel in soft cotton terry, perfect for the beach. Velour at front with a Parcheesi game board motif.', 'Cotton 100%', 'Height 30 in. Length 30 in. 600g', 'Dry clean only', 'Made in China', '0812000008', 10),
(57, '4-pack Teaspoons', 'Sale', 'img/products/images/sale/S9.png', 'img/products/images/sale/S9.png', '2021-05-19 15:51:28', '2021-05-30 16:34:13', 4.00, 'Black', 'Teaspoons in stainless steel with a narrow handle. ', 'Metal 100%', 'Width at widest point 1 in., length 4 3/4 in. 70 g', 'Clean with damp cloth', 'Made in China', '0812000009', 10),
(58, 'Yoga Mat', 'Sale', 'img/products/images/sale/S10.png', 'img/products/images/sale/S10.png', '2021-05-19 15:51:25', '2021-05-30 16:36:42', 4.00, 'Dark green', 'Ultra grip, no-slip, machine washable yoga mat with a microfiber suede surface so you can leave your yoga towel at home', 'Microfiber Suede & Natural Tree Rubber', 'Height 70 in. Width 24 in. 2 mm', 'Machine Washable', 'Made in India', '0812000010', 10),
(59, 'Stoneware Serving Dish', 'Sale', 'img/products/images/sale/S11.png', 'img/products/images/sale/S11.png', '2021-05-18 15:51:21', '2021-05-30 18:21:38', 4.00, 'Beige', 'Large, asymmetric serving dish in glazed stoneware. Reactive glaze creates variegated coloring, giving each item a unique appearance.', 'Stoneware 100%', 'Height 1 1/2 in. Width 9 in. Length approx. 15 3/4 in. ', 'Clean with damp cloth', 'Made in France', '0812000011', 10),
(60, 'Poncho Towel', 'Sale', 'img/products/images/sale/S12.png', 'img/products/images/sale/S12.png', '2021-05-25 15:51:15', '2021-05-30 16:33:46', 4.00, 'Soft Pink', 'Poncho towel in soft cotton terry with velour at outer side. Hood with appliqués and open sides with narrow ties.', 'Cotton 100%', 'One size for 3~5 kids.150 g', 'Wash machine ok', 'Made in China', '0812000012', 10),
(61, 'Candle Lantern', 'Home', 'img/products/images/home/h13.png', 'img/products/images/home/h13.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 29.99, 'Black', 'Large lantern', 'Matel 100%', 'Height 3 1/4 in. 300 g', 'Clean with damp cloth', 'Made in Italy', '0812748013', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
