<?php
// Load Config Database
require_once('config.php');

// Variable
$name = $_POST['name'];

// Query Insert to Database Buku
$query = "INSERT INTO categories ('name') VALUES
('$name')";
$result = mysqli_query($conn, $query);
// Cek Query
if ($query) {
    // Apabils sukses
    echo "
        <script type='text/javascript'>
            alert('Kategori berhasil ditambahkan!');
            document.location.href='index.php';
        </script>
    ";
}