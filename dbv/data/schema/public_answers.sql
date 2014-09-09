CREATE TABLE `public_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_code` varchar(15) NOT NULL,
  `question_response` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emailaddress` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1