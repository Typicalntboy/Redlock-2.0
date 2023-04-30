CREATE DATABASE Redlock;

USE Redlock

CREATE TABLE users (
    UsersID CHAR(5) PRIMARY KEY CHECK(UsersID REGEXP 'UI[0-9][0-9][0-9]'),
    Nama VARCHAR(100) NOT NULL,
    Alamat VARCHAR(100) NOT NULL,
    Jabatan VARCHAR(100) NOT NULL
);

INSERT INTO users VALUES
('UI001', 'Yahyun', 'Halim perdanakusuma', 'Mayor Jenderal'),
('UI002', 'Joshua', 'El-tari', 'Letnan Kolonel'),
('UI003', 'Pian', 'Soewondo', 'Kolonel'),
('UI004', 'Akhbar', 'Batam', 'Brigadir Jenderal'),
('UI005', 'Huda', 'Iswahjudi', 'Letnan Jenderal');