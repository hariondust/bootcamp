<?php
// Setting Config
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'perpustakaan';
// Connect To database
$conn = mysqli_connect($host, $username, $password, $database);
// Cek Error
if (!$conn) {
    echo mysqli_error($conn);
}