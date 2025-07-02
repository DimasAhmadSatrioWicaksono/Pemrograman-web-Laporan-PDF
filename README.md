📄 Laporan PDF Mahasiswa dengan PHP + FPDF
Proyek ini adalah implementasi sederhana untuk menampilkan data mahasiswa dalam format PDF menggunakan PHP dan library FPDF. Data diambil dari database MySQL dan dirender menjadi file PDF yang bisa langsung diunduh atau ditampilkan di browser.

🧩 Fitur Utama
Membuat database dan tabel mahasiswa

Menyusun koneksi ke database MySQL dengan config.php

Mengambil data dari tabel mahasiswa

Menampilkan data dalam bentuk PDF menggunakan FPDF

Layout rapi, siap cetak, ukuran kertas A5 Landscape

🗃️ Struktur Proyek
arduino
Copy
Edit
pweblaporanpdf/
├── fpdf/
│   ├── fpdf.php          ← File utama FPDF
│   └── font/             ← Folder font bawaan
├── config.php            ← File koneksi database
└── mahasiswa_pdf.php     ← Script utama untuk generate PDF
🧱 Setup Database
sql
Copy
Edit
CREATE DATABASE tutorial;

USE tutorial;

CREATE TABLE mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nim VARCHAR(20) NOT NULL UNIQUE,
  nama_lengkap VARCHAR(100) NOT NULL,
  no_hp VARCHAR(15),
  tanggal_lahir DATE
);
⚙️ Konfigurasi Database (config.php)
php
Copy
Edit
<?php
$connect = mysqli_connect("localhost", "root", "", "tutorial");
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

📦 Cara Menjalankan
Ekstrak folder fpdf ke dalam project (download dari https://www.fpdf.org/)

Taruh folder ini ke dalam htdocs/ (jika menggunakan XAMPP)

Jalankan Apache & MySQL melalui XAMPP

Akses melalui browser:
http://localhost/pweblaporanpdf/mahasiswa_pdf.php

📥 Output
File PDF akan otomatis ditampilkan atau diunduh
Menampilkan daftar mahasiswa dari tabel database dalam format tabel

🧑‍💻 Dibuat Dengan
PHP (vanilla)
FPDF (v1.86)
MySQL (phpMyAdmin)
XAMPP (Local Server)
