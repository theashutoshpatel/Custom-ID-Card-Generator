SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `cards` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `id_no` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `exp_date` varchar(20) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `cards` (`sno`, `name`, `grade`, `id_no`, `email`, `phone`, `address`, `dob`, `date`, `exp_date`, `image`) VALUES
(722, 'Rishika Biswas', NULL, '201302', 'rishi@gmail.com]', 'xxxxxxxxxx', 'Sector - 15, Noida', '2003-12-12', '2021-12-13 09:49:30', '2090-12-12', 'assets/uploads/images.jpg'),
(723, 'Coding Cush', NULL, '234567890876', 'codingcush@gmail.com]', '0123456789', 'New Delhi, India', '2021-12-22', '2021-12-14 10:48:54', '2023-03-15', 'assets/uploads/1623328813617.png');

ALTER TABLE `cards`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `cards`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=724;
COMMIT;
