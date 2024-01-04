CREATE DATABASE IF NOT EXISTS notes_db;

USE notes_db;

CREATE TABLE IF NOT EXISTS notes (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Content TEXT,
    Completed BOOLEAN DEFAULT true,
);