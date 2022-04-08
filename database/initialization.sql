DROP DATABASE IF EXISTS `esgi-webapi-2a2-2022`;

CREATE DATABASE `esgi-webapi-2a2-2022` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE users(
    id INTEGER PRIMARY KEY AUTO_INCREMENT
) ENGINE = InnoDB;

CREATE TABLE posts(
    id INTEGER PRIMARY KEY AUTO_INCREMENT
) ENGINE = InnoDB;

-- posts
-- https://jsonplaceholder.typicode.com/posts

-- comments
-- https://jsonplaceholder.typicode.com/comments

-- albums
-- https://jsonplaceholder.typicode.com/albums

-- users (tout sauf "address" et "company")
-- https://jsonplaceholder.typicode.com/users

-- todos
-- https://jsonplaceholder.typicode.com/todos

-- photos
-- https://jsonplaceholder.typicode.com/photos
