DROP DATABASE IF EXISTS SDG;

CREATE DATABASE SDG;

USE SDG;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (email, password) 
VALUES ('test@gmail.com', '$2y$10$sK4HHQN.lfLAjgjw39xpNuBD46qNn9wAN3maCraGEBOJEMgYiyxFK');