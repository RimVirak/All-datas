CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

INSERT INTO `students` (`id`, `name`) VALUES
(1, 'Bunthoeun'),
(2, 'Chenda'),
(3, 'Khorn'),
(4, 'Rotha');