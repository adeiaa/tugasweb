<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "website_donasi");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$jumlah_donasi = $_POST['jumlah_donasi'];
$metode_pembayaran = $_POST['metode_pembayaran'];

// Insert data ke tabel
$stmt = $conn->prepare("INSERT INTO donatur (nama, email, jumlah_donasi, metode_pembayaran) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssds", $nama, $email, $jumlah_donasi, $metode_pembayaran);
$stmt->execute();

// Redirect kembali ke halaman utama
header("Location: index.php");
exit;
