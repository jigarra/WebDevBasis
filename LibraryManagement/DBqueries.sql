-- Register user 

CREATE TABLE `register_mst` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL UNIQUE,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `role` varchar(100) DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Add Book 

CREATE TABLE `add_book` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `bookname` varchar(100) NOT NULL,
  `auther` varchar(100) NOT NULL,
  `discription` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `addition` varchar(100) NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--Student 
CREATE TABLE `pick_book` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `to_day` date NOT NULL,
  `return_time` varchar(25) NOT NULL,
  `book_id` int(11) NOT NULL,
  FOREIGN KEY (`book_id`) REFERENCES add_book(`id`),
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- suggest book 

CREATE TABLE `suggest_book` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `bookname` varchar(100) NOT NULL,
  `auther` varchar(100) NOT NULL,
  `discription` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `addition` varchar(100) NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;