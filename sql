-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2023 at 09:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

--
-- Dumping data for table `bridge_product_user`
--

INSERT INTO `bridge_product_user` (`product_id`, `order_id`) VALUES
(7, 1),
(11, 2),
(9, 3),
(12, 4),
(10, 5),
(8, 6),
(12, 7),
(7, 8);

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `subcategory_name`) VALUES
(1, 'Man Hoodies', 'FW'),
(2, 'Woman Hoodies', 'Arrivals'),
(3, 'Man T-Shirt', 'FW'),
(4, 'Home Accesories', 'SS'),
(5, 'Kids T-shirt', 'SS'),
(6, 'Woman T-shirt', 'Limited Edition');

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `payment_id`, `order_date`, `product_quantity`) VALUES
(1, 1, 3, '27/09/2023', 1),
(2, 1, 4, '24/09/2023', 1),
(3, 2, 6, '21/09/2023', 3),
(4, 3, 2, '2/09/2023', 1),
(5, 3, 5, '7/09/2023', 2),
(6, 5, 1, '25/09/2023', 1),
(7, 5, 1, '25/09/2023', 2),
(8, 5, 1, '25/09/2023', 3);

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `shipment_id`, `credit_card_type`, `cvv`, `mm`, `yyyy`, `payment_failed`, `total_payment`) VALUES
(1, 2, 'UNION PAY', 314, 9, 2028, 0, 417),
(2, 6, 'VISA', 853, 11, 2026, 0, 78),
(3, 5, 'VISA', 589, 4, 2026, 0, 57),
(4, 3, 'AMEX', 315, 8, 2029, 0, 199),
(5, 4, 'MASTERCARD', 694, 1, 2027, 0, 56),
(6, 1, 'VISA', 124, 12, 2024, 0, 270);

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `supplier_id`, `category_id`, `stock`, `product_price`, `product_name`) VALUES
(7, 1, 1, 30, 57, 'IE Business School Hoodie'),
(8, 1, 2, 30, 57, 'Stella Cropster IEU Sweatshirt'),
(9, 5, 1, 15, 90, 'Men Shoftsell Jacket'),
(10, 5, 5, 10, 28, 'IE Business School Kids T-Shirt'),
(11, 1, 2, 12, 199, 'IE University Marangu Women´s Vest'),
(12, 1, 2, 2, 78, 'IEU Class of 2027 Hoodie');

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipment_id`, `shipping_date`, `to_country`, `to_city`, `to_state`, `to_zip`, `to_street`) VALUES
(1, '2023-12-01', 'Belgium', 'Brussels', 'Brusells', '20001', 'Mac Avenue'),
(2, '2023-12-02', 'United Kingdom', 'London', 'England', '20009', 'M16 Street'),
(3, '2023-12-03', 'Malaysia', 'Kuala Lumpur', 'Kualuia', '20008', 'Koalas Avenue'),
(4, '2023-12-04', 'Thailand', 'Bangkok', 'Capital District', '20001', 'Food Mountain'),
(5, '2023-12-05', 'USA', 'Cincinnati', 'Kentucky', '10003', 'Horse Race '),
(6, '2023-12-06', 'USA', 'New York City', 'New York', '10001', 'Central Park');

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_country`) VALUES
(1, 'Clothing Ltd', 'China'),
(2, 'Food Ltd', 'Panama'),
(3, 'Manufacter Ltd', 'India'),
(4, 'Computers Ltd', 'USA'),
(5, 'Cotton Ltd', 'USA'),
(6, 'Cars Ltd', 'Japan');

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `email`, `first_name`, `last_name`, `country`, `city`, `state`, `zip`, `street`) VALUES
(1, 'Javi', '1231JFPIOWF', 'javi@gmail.com', 'Javier', 'Dominguez', 'USA', 'Nashville', 'Tennessee', '10002', 'Mount Park'),
(2, 'George', '1IRJ31FMPKM', 'george@gmail.com', 'George', 'Vaskhadizke', 'USA', 'Atlanta', 'Georgia', '10002', 'Joint Point View'),
(3, 'Luis', 'I3RONJ2MCA0', 'luis@icloud.com', 'Luis', 'Infante', 'USA', 'Orlando', 'Florida', '10003', 'Long Court'),
(4, 'Juan', 'IOJ32RMF391', 'juan@yahoo.es', 'Juan', 'Allende', 'USA', 'Dallas', 'Texas', '10009', 'Wide Avenue'),
(5, 'Omar', 'JAFOKMS22F9', 'omar@hotmail.com', 'Omar', 'Smith', 'USA', 'Mountain View', 'California', '10006', 'Google Street');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
