CREATE DATABASE mystudents;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(10),
    emailid VARCHAR(15)
);
INSERT INTO users (id, username, emailid) VALUES (1, 'user1', 'user1@gmail.com');
INSERT INTO users (id, username, emailid) VALUES (2, 'user2', 'user2@gmail.com');
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(10),
    lname VARCHAR(10),
    age INT
);
