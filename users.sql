CREATE DATABASE profiledb;
USE profiledb;

CREATE TABLE users(
 id INT AUTO_INCREMENT PRIMARY KEY,
 uname VARCHAR(100),
 uemail VARCHAR(150)
);

INSERT INTO users(uname,uemail) VALUES
('Aarav','aarav@mail.com'),
('Riya','riya@mail.com'),
('Karan','karan@mail.com');
