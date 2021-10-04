-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 10:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ft_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'Tarik', '180204061@aust.edu', 'test'),
(2, 'Sadee', '180204066@aust.edu', 'Hi, I need a full build.'),
(3, 'Mahin', '180204077@aust.edu', 'Can I have a single cpu?');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_warranty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_price`, `product_description`, `product_warranty`) VALUES
(1, 'ANTEC DF600 ATX MID TOWER GAMING CASE', 'ANTEC DF600 ATX MID TOWER GAMING CASE.jpg', '5,200', 'The Antec DF600 Mid Tower Gaming Cabinet is the best thermal performance for gaming. The gaming case is equipped with an industry-leading advanced ventilation design, bringing the Antec Dark League to the next generation. It also means that the functional', 'No Warranty'),
(2, 'ANTEC DF600 FLUX ARGB MID TOWER TEMPERED GLASS ATX CASE', 'ANTEC DF600 FLUX ARGB MID TOWER TEMPERED GLASS ATX CASE.jpg', '6,300', 'Antec DF600 Flux Gaming Case is equipped with the F-LUX Platform. The F-LUX Platform is a new industry-leading and highly efficient design by Antec featuring an advanced case structure for excellent airflow and 5 x 120 mm fans included. A core element of ', 'No Warranty'),
(3, 'AMD RYZEN 5 5600G 6 CORE 12 THREAD AM4 PROCESSOR WITH RADEON GRAPHICS', 'AMD RYZEN 5 5600G 6 CORE 12 THREAD AM4 PROCESSOR WITH RADEON GRAPHICS.jpg', '28,500', 'Power up your computing experience with the AMD Ryzen 5 5600G 3.9 GHz Six-Core AM4 Processor, which features six cores and 12 threads to assist quickly load and multitask demanding applications. AMD Ryzen 5 5600G Processor designed for socket AM4 motherbo', '3 Years'),
(4, 'AMD RYZEN 5 5600X 6 CORE 12 THREAD AM4 PROCESSOR', 'AMD RYZEN 5 5600X 6 CORE 12 THREAD AM4 PROCESSOR.jpg', '29,000', 'That isn\'t the only change from Zen 2 to Zen 3, however. Since it is a gaming-focused CPU, the move to a single eight-core core complex (CCX) design in Zen 3 gives the 5600X a leg up over the Ryzen 5 3600X. In the Ryzen 5 3600X, the processor was split be', '3 Years'),
(5, 'INTEL CORE I5-11600K 6 CORE 12 THREAD 11TH GEN PROCESSOR', 'INTEL CORE I5-11600K 6 CORE 12 THREAD 11TH GEN PROCESSOR.jpg', '25,800', 'This Intel Core I5-11600k Processor comes with Intel UHD 750 Graphics. This new 11th gen Rocket Lake microarchitecture is manufactured with the 14nm process that comes with eight cores and 12 threads. These Intel Core I5-11600k Processor also support 64-b', '3 Years'),
(6, 'INTEL CORE I7-11700 8 CORE 16 THREAD 11TH GEN PROCESSOR', 'INTEL CORE I7-11700 8 CORE 16 THREAD 11TH GEN PROCESSOR.jpg', '31,500', 'This Intel Core i7-11700 Processor comes with Intel Iris Xe Graphics 32 graphics. This new 11th gen Rocket Lake microarchitecture is manufactured with the 14nm process that comes with eight cores and 16 threads. These Intel Core i7-11700 Processor also su', '3 Years'),
(7, 'ASUS PRO B460M-C 10TH & 11TH GEN MICRO-ATX MOTHERBOARD', 'ASUS PRO B460M-C 10TH & 11TH GEN MICRO-ATX MOTHERBOARD.jpg', '11,200', 'The ASUS Pro B460M-C motherboard from Asus. ASUS Pro Business motherboards offer advanced features to facilitate your IT operations, including comprehensive system protection, stability and reliability around the clock, and an improved management suite fo', '3 Years'),
(8, 'ASUS PRIME B550M-K AM4 MICRO ATX AMD MOTHERBOARD', 'ASUS PRIME B550M-K AM4 MICRO ATX AMD MOTHERBOARD.jpg', '12,500', 'Boasting a robust power design, ASUS Prime series is expertly engineered with comprehensive cooling solutions and intelligent tuning options. Prime B550 series motherboards offer daily users and DIY PC builders a range of performance tuning options via in', '3 Years'),
(9, 'CORSAIR VENGEANCE LPX 8GB DDR4 3200MHZ DESKTOP RAM', 'CORSAIR VENGEANCE LPX 8GB DDR4 3200MHZ DESKTOP RAM.jpg', '5,000', 'Density: 8GB\r\nSpeed: 3200MHz\r\nTested Latency: 16-20-20-38\r\nVoltage: 1.35V\r\nFormat: Unbuffered DIMM\r\nPin Out: 288 Pin\r\nIntel XMP 2.0\r\nHeatspreader: Anodized Aluminum\r\nCompatibility-Intel 100 Series platform', 'Lifetime'),
(10, 'G.SKILL RIPJAWS-V 8GB DDR4 2666MHZ DESKTOP RAM', 'G.SKILL RIPJAWS-V 8GB DDR4 2666MHZ DESKTOP RAM.jpg', '3,800', 'Designed with a low voltage of 1.2V~1.35V at DDR4 standard, this lowers the memory voltage requirement by 20% from DDR3 memory kits! Now your system can perform even faster without becoming an expensive appliance heater.', 'Lifetime'),
(11, 'WESTERN DIGITAL GREEN 120GB M.2 SSD', 'WESTERN DIGITAL GREEN 120GB M.2 SSD.jpg', '3,000', 'Compatible with most desktop and laptop PCs, WD Green SSDs are available in 2.5” 7mm and M.2 2280 models for simple, worry-free upgrading.Monitor your drive’s health with the free, downloadable WD SSD Dashboard and clone drives with Acronis® True Image™ W', '3 Years'),
(12, 'WESTERN DIGITAL GREEN 240GB M.2 SSD', 'WESTERN DIGITAL GREEN 240GB M.2 SSD.jpg', '3,500', 'Compatible with most desktop and laptop PCs, WD Green SSDs are available in M.2 for simple, worry-free upgrading.Monitor your drive’s health with the free, downloadable WD SSD Dashboard and clone drives with Acronis® True Image™ WD Edition software.Every ', '3 Years'),
(13, 'SEAGATE BARRACUDA 1TB 7200RPM SATA DESKTOP HDD', 'SEAGATE BARRACUDA 1TB 7200RPM SATA DESKTOP HDD.jpg', '3,600', 'Built on proven reliability and innovation, BarraCuda hard drives are available in a versatile mix of capacity and price point options to fit any budget. All hard drives in the BarraCuda family come equipped with Multi-Tier Caching Technology (MTC). MTC t', '2 Years'),
(14, 'SEAGATE BARRACUDA 2TB 5400 RPM SATA DESKTOP HDD', 'SEAGATE BARRACUDA 2TB 5400 RPM SATA DESKTOP HDD.jpg', '5,800', 'Install the 2TB BarraCuda 5400 rpm SATA III 3.5\" Internal HDD from Seagate into nearly any computer with a 3.5\" drive bay. This versatile, reliable storage solution Seagate Barracuda 2TB features a 64MB cache memory buffer and supports SATA III connectivi', '2 Years'),
(15, 'GIGABYTE GEFORCE GT 1030 2GB OC GRAPHICS CARD', 'GIGABYTE GEFORCE GT 1030 2GB OC GRAPHICS CARD.jpg', '10,500', 'Powered by GeForce® GT 1030 \r\nIntegrated with 2GB GDDR5 64bit memory \r\nSupports HDMI 4K@60Hz \r\nSmooth 4K video playback and HTML5 web browsing\r\nOne-click overclocking via AORUS Graphics Engine', '2 Years'),
(16, 'GIGABYTE GEFORCE GTX 1050 TI OC 4B GRAPHICS CARD', 'GIGABYTE GEFORCE GTX 1050 TI OC 4B GRAPHICS CARD.jpg', '27,500', 'Powered by GeForce GTX 1050 Ti\r\nIntegrated with 4GB GDDR5 128bit memory\r\nWINDFORCE 2X with Blade Fan Design\r\nSupport up to 8K display  60Hz\r\nBoost: 1455MHz/ Base: 1341MHz in OC Mode\r\nBoost: 1430MHz/ Base: 1316MHz in Gaming', '2 Years'),
(17, 'ANTEC ATOM V550 550 WATT POWER SUPPLY', 'ANTEC ATOM V550 550 WATT POWER SUPPLY.jpg', '3,050', '550W Continuous Power\r\n\r\nVoltage 100VAC - 240VAC\r\n\r\nFrequency Range 47-63Hz\r\n\r\nFan Size 120 mm', '2 Years'),
(18, 'WALTON 450W 80 PLUS BRONZE CERTIFIED POWER SUPPLY', 'WALTON 450W 80 PLUS BRONZE CERTIFIED POWER SUPPLY.jpg', '3,300', 'Walton WPS45ABN02 powersupply comes with 450W Maximum power,Input Voltage 100-240 Vac which is perfect for your Pc.The PSU give you 50-60Hz Input Frequency Range,ATX 12V type make a perfact combination,Active PFC Active Power factor Correction (PFC),Effic', '1 Year'),
(19, 'LG 22MK600M 22 INCH IPS BORDERLESS FULL HD MONITOR', 'LG 22MK600M 22 INCH IPS BORDERLESS FULL HD MONITOR.jpg', '15,500', 'High Definition with True Color IPS technology highlights the performance of liquid crystal displays. Response times are shortened, color reproduction is improved, and users can view the screen at virtually any angle. Immersive Visual Experience .This str', '3 Years'),
(20, 'HP 22FW 21.5-INCH FULL HD IPS LED SLIM MONITOR', 'HP 22FW 21.5-INCH FULL HD IPS LED SLIM MONITOR.jpg', '15,500', 'Full HD display\r\nBe prepared for brilliant visuals and crisp images with the unforgettable quality of this stunning FHD display.\r\nMicro-edge display\r\nWith virtually no bezel encircling the display, an ultra-wide viewing experience provides for seamless mu', '3 Years'),
(21, 'A4 TECH KRS-83 WIRED MULTIMEDIA KEYBOARD', 'A4 TECH KRS-83 WIRED MULTIMEDIA KEYBOARD.jpg', '575', 'A4 Tech KRS-83 Wired Multimedia Keyboard 12 Multimedia Hotkeys Comfort Roundedge Keycaps Ease keystrokes on your fingertips. Providing hours of typing comfort. Adjustable Keyboard Height. A4 Tech KRS-83 WiredAdjustable tilt enables a truly personalized ex', '1 Year'),
(22, 'A4TECH KB-8A SMART KEY KEYBOARD', 'A4TECH KB-8A SMART KEY KEYBOARD.jpg', '665', 'A4TECH KB-8A has Traditional Keycaps, Character Laser Engraving, Splash Proof: Yes, Adjustable Keyboard Legs: Yes, Rating: 5 V / 30 mA, Demension: 459 × 165 × 25 mm, Weight: 640 g, Cable Length: 150 cm, Hardware Connectivity: USB / PS2, Illuminated: No, S', '1 Year'),
(23, 'A4 TECH OP-620D 2X CLICK WIRED USB MOUSE', 'A4 TECH OP-620D 2X CLICK WIRED USB MOUSE.jpg', '375', 'A4 Tech OP-620D, Type - Optical, Connectivity - Wired, 2X Click - Yes, Wheel - Yes, Dimension-  Mouse:4.68L x 2.48W x 1.39H in, Weight- 0.19 Ib.', 'No Warranty'),
(24, 'A4TECH OP-730D 2X CLICK OPTICAL WIRED MOUSE', 'A4TECH OP-730D 2X CLICK OPTICAL WIRED MOUSE.jpg', '300', 'A4Tech OP-730D Mouse with hyper-fast scrolling for increased productivity. A nearly frictionless scroll wheel lets you fly through long documents and Web pages with a single flick. Experience smoother cursor control on virtually any surface. A4Tech OP-730', 'No Warranty'),
(25, 'A4 TECH BLOODY G200S USB GAMING HEADPHONE', 'A4 TECH BLOODY G200S USB GAMING HEADPHONE.jpg', '1,550', 'A4 Tech Bloody G200S   Gaming Headphone Consist of high-quality materials for the highest comfort even after hours of computer adventures. Even the most demanding gamers will be thrilled with the elegant design. In terms of quality and comfort, Bloody G20', '1 Year');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `member_id` int(11) NOT NULL,
  `member_image` varchar(255) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`member_id`, `member_image`, `member_name`, `member_designation`) VALUES
(1, 'user1.png', 'Faysal Mahmud', 'Developer'),
(2, 'user2.png', 'Ahammed Tarik Aziz', 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `Email`, `password`, `created_at`) VALUES
(9, 'Aziz', '180204061@aust.edu', '14e1b600b1fd579f47433b88e8d85291', '2021-10-01 22:51:56'),
(10, 'Faysal', '180204075@aust.edu', 'c56d0e9a7ccec67b4ea131655038d604', '2021-10-02 18:54:17'),
(11, 'hhh', '123@asd.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-10-02 19:16:09'),
(13, 'input', 'we@ii.com', '$2y$10$Q5h9zHicwCCgsJqJazCzM.NGYKtmJIf9CwOGgeucTUDq2PIywNWL.', '2021-10-02 19:30:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
