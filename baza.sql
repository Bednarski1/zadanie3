CREATE DATABASE formularz;

use formularz;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) UNIQUE,
    password VARCHAR(30)
);
INSERT INTO users (id, username, password) VALUES
    ('1' 'admin', 'tescior');
