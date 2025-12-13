CREATE DATABASE dictionary_db;
USE dictionary_db;

CREATE TABLE dictionary (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Word VARCHAR(100) NOT NULL UNIQUE,
    Meaning TEXT NOT NULL
);

INSERT INTO dictionary (word, meaning) VALUES
('computer', 'An electronic device for storing and processing data'),
('network', 'A group of interconnected computers'),
('server', 'A system that provides resources to other computers');
