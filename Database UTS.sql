create database uts;
USE uts;

CREATE TABLE content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page_name VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_title VARCHAR(100),
    project_description TEXT
);

CREATE TABLE hobbies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    hobby_name VARCHAR(255) NOT NULL
);

CREATE TABLE tentang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL
);

CREATE TABLE kontak (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    judul_kontak VARCHAR(255),
    deskripsi_kontak TEXT,
    github_link VARCHAR(255),
    gmail_link VARCHAR(255),
    instagram_link VARCHAR(255),
    facebook_link VARCHAR(255),
    youtube_link VARCHAR(255),
    whatsapp_link VARCHAR(255)
);



SELECT * FROM uts.content;

INSERT INTO content (page_name, title, description) VALUES
('home', 'Selamat Datang di Website Saya', 'Ini adalah halaman utama dari proyek tengah semester saya. Temukan lebih banyak informasi tentang saya dan apa yang saya lakukan di sini.'),
('tentang', 'Tentang Saya', 'Halo! Saya adalah mahasiswa yang sedang belajar membuat website dinamis menggunakan PHP dan MySQL.'),
('hobby', 'Hobi Saya', 'Saya suka bermain futsal, coding, dan bermain game saat waktu luang.'),
('proyek', 'Proyek Saya', 'Berikut adalah proyek-proyek yang pernah saya kerjakan selama belajar di kampus.');



SELECT * FROM uts.projects;
INSERT INTO projects (project_title, project_description) VALUES
('Proyek 1', 'Deskripsi proyek 1. Proyek ini melibatkan pengembangan aplikasi web dengan PHP dan MySQL.'),
('Proyek 2', 'Deskripsi proyek 2. Proyek ini merupakan aplikasi mobile yang dikembangkan menggunakan Flutter.'),
('Proyek 3', 'Deskripsi proyek 3. Ini adalah proyek berbasis React yang berfokus pada UI/UX design.');



SELECT * FROM uts.hobbies;
INSERT INTO hobbies (hobby_name) VALUES 
('Bermain Game'),
('Futsal'),
('Menonton Film');



SELECT * FROM uts.tentang;

INSERT INTO tentang (content) VALUES 
('Saya adalah mahasiswa Informatika di Universitas Pembangunan Jaya. Saya memiliki minat besar dalam teknologi dan keamanan informasi serta memiliki pengalaman dalam beberapa proyek pengembangan web. Dengan ketertarikan yang kuat dalam dunia teknologi sejak kecil, saya berusaha untuk terus belajar dan berkembang di bidang ini. Selain itu, saya juga berpartisipasi aktif dalam kompetisi futsal dan gaming selama waktu luang saya.');




SELECT * FROM uts.kontak;
INSERT INTO kontak (judul_kontak, deskripsi_kontak, github_link, gmail_link, instagram_link, facebook_link, youtube_link, whatsapp_link)
VALUES 
('Kontak Saya', 'Silakan menghubungi saya melalui media sosial berikut:', 'https://github.com/Geheeee', 'mailto:example@gmail.com', 'https://www.instagram.com/garduuuu_/', 'https://www.facebook.com/garda.gusasi/', 'https://www.youtube.com/@gardavi2105', 'https://wa.me/qr/V2Z4BVN4YKM6C1');


