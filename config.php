<?php
// Pengaturan zona waktu
date_default_timezone_set('Asia/Jakarta');

// Koneksi ke database
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'serkom_abangfahri';

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}


// Mulai sesi
session_start();

// Fungsi untuk mendapatkan data berita
function getBerita($limit = null) {
    global $koneksi;
    $sql = "SELECT * FROM berita ORDER BY tanggal DESC";
    if ($limit) {
        $sql .= " LIMIT $limit";
    }
    return $koneksi->query($sql);
}

// Fungsi untuk mendapatkan data guru
function getGuru() {
    global $koneksi;
    return $koneksi->query("SELECT * FROM guru ORDER BY nama ASC");
}
?>