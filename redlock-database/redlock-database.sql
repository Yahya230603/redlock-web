CREATE DATABASE Redlock;

USE Redlock

CREATE TABLE users (
    ID INT PRIMARY KEY,
    Nama VARCHAR(255),
    Alamat VARCHAR(255),
    Jabatan VARCHAR(255)
);

INSERT INTO users VALUES
(1, 'Vieri', 'Medan', 'Office Boy'),
(2, 'Angeline', 'Kemanggisan', 'Hiring And Developement'),
(3, 'Sajid', 'Kalimalang', 'Manager'),
(4, 'Huda', 'Tambun', 'Security'),
(5, 'JoNam', 'Isekai', 'tanpastatus');


