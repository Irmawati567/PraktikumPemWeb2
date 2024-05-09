<?php
// Memeriksa apakah formulir login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah email dan password yang diberikan oleh pengguna sesuai dengan yang diharapkan
    $email = $_POST["email"]; // Ubah menjadi "email"
    $password = $_POST["password"]; // Ubah menjadi "password"
    
    // Di sini Anda bisa menambahkan logika autentikasi sesuai dengan kebutuhan Anda
    $expectedEmail = "sitiirmawatiirma39@gmail.com";
    $expectedPassword = "123456789";

    // Jika email dan password yang diberikan oleh pengguna sesuai dengan yang diharapkan
    if ($email == $expectedEmail && $password == $expectedPassword) {
        // Redirect pengguna ke index.php
        header("../Project01/index.php");
        exit; // Pastikan untuk keluar dari skrip setelah melakukan redirect
    } else {
        // Jika informasi login tidak valid, redirect kembali ke halaman login dengan pesan kesalahan
        header("../Project01/index.php");
        exit;
    }
}
?>