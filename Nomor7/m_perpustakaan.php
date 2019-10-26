<?php
// Load Config Database
require_once('config.php');
// Method Untuk Mengambil Buku berdasarkan Kategori
function getBuku()
{
    global $conn;
    $query = "SELECT * FROM books JOIN categories ON categories.id = books.category_id ORDER BY categories.id ASC";
    $result = mysqli_query($conn, $query);
    return $result;
}
// Method untuk Mengambil data kategori
function getKategori()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM categories");
    return $result;
}
// Method untuk mengambil biodata berdasarkan id
function getBiodataById($id)
{
    global $conn;
    $query = "SELECT * FROM books JOIN categories ON categories.id = books.category_id WHERE books.category_id = '$id'";
    $result = mysqli_query($conn, $query);
    // Ubah kedalam Array Asosiatif
    $result = mysqli_fetch_assoc($result);
    return $result;
}