create database student_mangemnet_system;

use student_mangemnet_system;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);


CREATE TABLE `classes` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `teacher_id` varchar(250) NOT NULL,
  `section_name` varchar(25) NOT NULL,
 
  PRIMARY KEY  (`id`)
);

