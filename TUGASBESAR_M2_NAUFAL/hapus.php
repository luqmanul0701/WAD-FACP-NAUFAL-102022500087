<?php
include 'connect.php';

$id = $_GET['id'] ?? null;

if ($id) {
    // Hapus data berdasarkan ID
    $query = "DELETE FROM armada WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        header("Location: armada.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
} else {
    header("Location: armada.php");
    exit();
}
?>