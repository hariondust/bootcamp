<?php
// Load Config Database
require_once('config.php');
// Get ID by URL
$id = $_GET['id'];
// Query 
$query = "DELETE FROM books WHERE id = '$id'";
$result = mysqli_query($conn, $query);
// Cek Query
if ($result) {
    // Hasil query
    echo "
        <script type='text/javascript'>
            alert('Biodata berhasil dihapus!');
            document.location.href='index.php';
        </script>
    ";
}