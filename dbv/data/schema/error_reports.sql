CREATE TABLE `error_reports` (
  `error_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `looked_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`error_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1