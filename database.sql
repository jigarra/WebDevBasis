CREATE TABLE `Student_marks` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Studentname` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Fees` longtext NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Image` varchar(100) NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;