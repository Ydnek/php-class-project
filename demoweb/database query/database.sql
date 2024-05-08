/*
You can execute this SQL query using XAMPP in http://localhost/phpmyadmin/ or by running it through a
 PHP script that connects to your MySQL/MariaDB server. 
After executing the query, you should have an admin user inserted into the form_data table.
*/

CREATE DATABASE form_db;

USE form_db;

CREATE TABLE form_data (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    user_type VARCHAR(50),
    fname VARCHAR(50),
    user_name VARCHAR(50),
    password VARCHAR(50),
    email VARCHAR(50),
    gender VARCHAR(10),
    dob DATE,
    education VARCHAR(50),
    city VARCHAR(50),
    comment TEXT
);

INSERT INTO form_data (user_type,fname,user_name,password,email,gender,dob,education,city,comment)
VALUES ('admin','Admin Admin','adminuser','password123','admin@admin.com','Male','1999-01-01','Masters','Addis Ababa','Administrator');

