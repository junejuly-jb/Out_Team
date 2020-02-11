-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 09:12 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `out_team`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(50) NOT NULL,
  `announcement_subject` varchar(50) NOT NULL,
  `announcement_details` varchar(200) NOT NULL,
  `start` varchar(50) NOT NULL,
  `end` varchar(50) NOT NULL,
  `book_id` int(50) NOT NULL,
  `organizer_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(50) NOT NULL,
  `book_start` varchar(50) NOT NULL,
  `book_end` varchar(50) NOT NULL,
  `organizer_id` int(50) NOT NULL,
  `venue_id` int(50) NOT NULL,
  `transportation_id` int(50) NOT NULL,
  `food_id` int(50) NOT NULL,
  `booking_code` varchar(50) NOT NULL,
  `booking_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `book_start`, `book_end`, `organizer_id`, `venue_id`, `transportation_id`, `food_id`, `booking_code`, `booking_status`) VALUES
(1, '5:00', '13:00', 2, 1, 1, 1, 'qewasdz', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(50) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_details` varchar(200) NOT NULL,
  `food_price` varchar(50) NOT NULL,
  `food_size` varchar(50) NOT NULL,
  `food_type` varchar(50) NOT NULL,
  `food_status` varchar(500) NOT NULL,
  `provider_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_details`, `food_price`, `food_size`, `food_type`, `food_status`, `provider_id`) VALUES
(1, 'Value Meal1', '5 pcs. Fried Chicken with 3 extra gravies', '500', '4 pax', 'lunch', 'available', 9);

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `organizer_id` int(50) NOT NULL,
  `organizer_fname` varchar(50) NOT NULL,
  `organizer_lname` varchar(50) NOT NULL,
  `organizer_email` varchar(50) NOT NULL,
  `organizer_contact` varchar(50) NOT NULL,
  `organizer_address` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`organizer_id`, `organizer_fname`, `organizer_lname`, `organizer_email`, `organizer_contact`, `organizer_address`, `company_name`) VALUES
(2, 'June', 'Aragoncillo', 'junearagoncillo@gmail.com', '09324732508', 'asdadasd', 'HiPE'),
(3, 'Juan', 'Dela Cruz', 'juan@me.com', '12345678910', 'asdadad', 'HiPE');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `rating_comments` varchar(50) NOT NULL,
  `provider_id` int(50) NOT NULL,
  `organizer_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `rating`, `rating_comments`, `provider_id`, `organizer_id`) VALUES
(1, '5', 'Chuy keyo', 7, 3),
(2, '3', 'Just neutral', 11, 2),
(3, '1', 'Bati jud kaayu', 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `provider_id` int(50) NOT NULL,
  `provider_name` varchar(50) NOT NULL,
  `provider_type` varchar(50) NOT NULL,
  `provider_address` varchar(100) NOT NULL,
  `provider_contact` varchar(50) NOT NULL,
  `booking_rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`provider_id`, `provider_name`, `provider_type`, `provider_address`, `provider_contact`, `booking_rate`) VALUES
(6, 'Wheels 4 Life', 'transportation', 'Guadalupe Cebu', '(032) 505 9800', '500'),
(7, 'Plantation Bay Resort and Spa', 'venue', 'Marigondon, Mactan Island, Lapu-Lapu City, 6015 Cebu', '(032) 505 9800', '5000'),
(8, 'Cebu Westown Lagoon', 'venue', 'mo2 entertainment complex, Mandaue City, 6014 Cebu', '(032) 236 2299', '12000'),
(9, 'Manila Foodshoppe', 'food', 'Capitol Square, N Escario St, Cebu City, 6000 Cebu', '(032) 255 5505', '500'),
(10, 'Ayer\'s Lechon', 'food', 'SM City Cebu, Juan Luna Ave Corner Cabahug And Kaoshiung St, Cebu City, 6000 Cebu', '(032) 231 7615', '8000'),
(11, 'Hot Wheels', 'transportation', 'Lorega San Miguel', '(032) 505 9800', '100');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `transportation_id` int(50) NOT NULL,
  `transportation_package` varchar(50) NOT NULL,
  `transportation_details` varchar(100) NOT NULL,
  `transportation_type` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `no_seats` varchar(50) NOT NULL,
  `transportation_rate` varchar(50) NOT NULL,
  `provider_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`transportation_id`, `transportation_package`, `transportation_details`, `transportation_type`, `driver`, `no_seats`, `transportation_rate`, `provider_id`) VALUES
(1, 'pack1', 'Package 1 brings you a 5 seater car with free gasoline back and forth', 'Car', 'June Aragoncillo', '5', '500', 6),
(2, 'pack2', 'Free 1 way gasoline', 'Car', 'Enad Matias', '4', '450', 6),
(3, 'pack3', 'Car only', 'SUV', 'Enad Matias', '6', '6000', 11);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` int(50) NOT NULL,
  `venue_name` varchar(50) NOT NULL,
  `venue_details` varchar(50) NOT NULL,
  `venue_rate` varchar(50) NOT NULL,
  `venue_size` varchar(50) NOT NULL,
  `provider_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_name`, `venue_details`, `venue_rate`, `venue_size`, `provider_id`) VALUES
(1, 'PBR 1', 'Most beautiful place ', '5000', '6 pax', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `organizer_id` (`organizer_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `organizer_id` (`organizer_id`),
  ADD KEY `venue_id` (`venue_id`),
  ADD KEY `transportation_id` (`transportation_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`organizer_id`),
  ADD KEY `provider_id` (`company_name`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `provider_id` (`provider_id`),
  ADD KEY `organizer_id` (`organizer_id`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`provider_id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`transportation_id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `organizer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `provider_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `transportation_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `booking` (`book_id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`organizer_id`) REFERENCES `organizer` (`organizer_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`transportation_id`) REFERENCES `transportation` (`transportation_id`),
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`venue_id`) REFERENCES `venue` (`venue_id`);

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `service_provider` (`provider_id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `service_provider` (`provider_id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`organizer_id`) REFERENCES `organizer` (`organizer_id`);

--
-- Constraints for table `transportation`
--
ALTER TABLE `transportation`
  ADD CONSTRAINT `transportation_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `service_provider` (`provider_id`);

--
-- Constraints for table `venue`
--
ALTER TABLE `venue`
  ADD CONSTRAINT `venue_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `service_provider` (`provider_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
