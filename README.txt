README
for more information on the methods used, go to 
http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL

1.
Delete super_sleep database in MySQL OR SKIP STEP a).

2.
Go to SQL page where you can Run SQL query/queries on server.

3.
Run these queries in order, one at a time.


a)

CREATE DATABASE `super_sleep`;



b) create database user account

CREATE USER 'sec_user'@'localhost' IDENTIFIED BY 'L6S5rMtnQG4xkUm3';
GRANT SELECT, INSERT, UPDATE, DELETE ON `super_sleep`.* TO 'sec_user'@'localhost';



c) 

CREATE TABLE `super_sleep`.`members` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password` CHAR(128) NOT NULL,
    `salt` CHAR(128) NOT NULL 
) ENGINE = InnoDB;



d) stores login attempts for a user

CREATE TABLE `super_sleep`.`login_attempts` (
    `user_id` INT(11) NOT NULL,
    `time` VARCHAR(30) NOT NULL
) ENGINE=InnoDB



e) create a test row with known details
Test User-
Username: test_user
Email: test@example.com
Password: 6ZaxN2Vzm9NUJT2y


INSERT INTO `super_sleep`.`members` VALUES(1, 'test_user', 'test@example.com',
'00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc',
'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef');

f) add table to store sleep data

CREATE TABLE `sleep_data` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(30) NOT NULL,
 `month` varchar(10) NOT NULL,
 `day` int(11) NOT NULL,
 `year` int(11) NOT NULL,
 `hour` int(11) NOT NULL,
 `min` int(11) NOT NULL,
 `ampm` varchar(2) NOT NULL,
 `hoursSlept` int(11) NOT NULL,
 `comment` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1