<?php
// deklarasi parameter koneksi database
$host = "xxxx";
$username = "xxxx";
$password = "xxxx";
$database = "db_sertifikasi";

// buat koneksi
$mysqli = new mysqli($host, $username, $password, $database);

// cek koneksi, jika gagal
if ($mysqli->connect_error){
    // tampilkan pesan gagal koneksi
    die('Koneksi Database Gagal: '.$mysqli->connect_error);
}
?>