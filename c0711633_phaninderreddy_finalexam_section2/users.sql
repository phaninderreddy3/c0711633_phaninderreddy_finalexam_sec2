CREATE DATABASE ats;

USE ats;

CREATE TABLE `users` (
    `userID` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `email` varchar(80) NOT NULL,
    `telephone` varchar(20) DEFAULT NULL,
    PRIMARY KEY (`userID`),
    UNIQUE KEY `indx_username` (`username`)
) ENGINE=InnoDB;

