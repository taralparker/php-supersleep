README

If you already have the database 'super_sleep', delete all tables in the 'super_sleep' database. Then skip to 2.(NOTE: If you do not remove the current tables, the updates will not make it into the database)

If you do not have a database named 'super_sleep', then first run a, then b, in http://localhost/phpmyadmin/  Then proceed to 2. 
    

a)
CREATE DATABASE `super_sleep`;


b) create database user account

CREATE USER 'sec_user'@'localhost' IDENTIFIED BY 'L6S5rMtnQG4xkUm3';
GRANT SELECT, INSERT, UPDATE, DELETE ON `super_sleep`.* TO 'sec_user'@'localhost';


2. Import the given .sql by navigating to Import in http://localhost/phpmyadmin/, then browsing for the given .sql file. Leave all settings as defaul, then press Go. 


LOGINS:
User: demo@demo.com
Password: Demo1!

Is a common practice user with some data. 


User: graph@graph.com
User: Graph1!

This user has data, but much less.

Feel free to register your own username and create new data. 


