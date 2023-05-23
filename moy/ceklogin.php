<?php
// Koneksi ke database
include "koneksi.php";

// Ambil data yang dikirim melalui form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari data pengguna dengan username dan password yang sesuai
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($konek, $query);

// Cek apakah data pengguna ditemukan
if (mysqli_num_rows($result) > 0) {
    // Data pengguna ditemukan, redirect ke halaman utama
    header("Location: index.php");
} else {
    // Data pengguna tidak ditemukan, tampilkan pesan error
    echo "Username atau password salah.";
}
?>
