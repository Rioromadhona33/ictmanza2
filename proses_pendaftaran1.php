<?php
$nama = $_POST['nama'];
$tel = $_POST['phone'];
$kelas = $_POST['kelas'];
$pesan = $_POST['pesan'];

// Konfigurasi koneksi database
$host = 'localhost'; // Ganti sesuai dengan host databasemu
$dbUsername = 'ictmanza'; // Ganti sesuai dengan nama pengguna (username) database
$dbPassword = '12345678'; // Ganti sesuai dengan kata sandi (password) database
$dbName = 'pendaftaran_rio'; // Ganti sesuai dengan nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Memeriksa koneksi database
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Menyimpan data pendaftaran ke database
if (isset($_POST['nama']) && isset($_POST['phone']) && isset($_POST['kelas'])) {
    $sql = "INSERT INTO pendaftaran (nama, telepon, kelas, pesan) VALUES ('$nama', '$tel', '$kelas', '$pesan')";
    if ($conn->query($sql) === true) {
        echo 'success';
    } else {
        echo 'error';
    }
}

// Menutup koneksi database
$conn->close();
?>
