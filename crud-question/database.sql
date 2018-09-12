create database test;

use test;

CREATE TABLE `questoes` (
  `id` int(11) NOT NULL auto_increment,
  `pergunta` varchar(500) NOT NULL,
  `altern_a` varchar(300) NOT NULL,
  `altern_b` varchar(300) NOT NULL,
  `altern_c` varchar(300) NOT NULL,
  `altern_d` varchar(300) NOT NULL,
  `altern_e` varchar(300) NOT NULL,
  `resp` char(1) NOT NULL,
  PRIMARY KEY  (`id`)
);