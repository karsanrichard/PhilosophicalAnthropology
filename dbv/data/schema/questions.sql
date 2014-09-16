CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_code` varchar(15) NOT NULL,
  `question` text NOT NULL,
  `choices` text NOT NULL,
  `answer` varchar(255) NOT NULL,
  `question_category` varchar(15) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`question_id`),
  UNIQUE KEY `question_code` (`question_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1