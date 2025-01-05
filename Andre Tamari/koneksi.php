<?php
$host = "localhost"; // Nama host database
$user = "root"; // Nama pengguna database
$pass = ""; // Kata sandi pengguna database
$dbname = "belajar_php_kelas_kronjo"; // Nama database

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menampilkan pesan jika koneksi berhasil
echo "Koneksi berhasil!";
?>