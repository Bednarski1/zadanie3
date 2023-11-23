create database formularz;

use baza;

create table users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255)
);
INSERT INTO 'users' ('id' 'username', 'password') VALUES
    ('admin', 'tescior');