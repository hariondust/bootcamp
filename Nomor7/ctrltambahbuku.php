<?php
// Load Config Database
require_once('config.php');

// Variable
$name = $_POST['name'];
$stok = $_POST['stok'];
$image = $_POST['image'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];

// Query Insert to Database Buku
$query = "INSERT INTO books ('name', 'stok', 'image','deskripsi','category_id') VALUES
('$name','$stok', '$image', '$deskripsi', '$kategori')";
$result = mysqli_query($conn, $query);
// Cek Query
if ($query) {
    // Apabila sukses
    echo "
        <script type='text/javascript'>
            alert('Buku berhasil ditambahkan!');
            document.location.href='index.php';
        </script>
    ";
}