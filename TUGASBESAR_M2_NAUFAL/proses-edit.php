<?php
require_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'] ?? null;
    $query = "SELECT * FROM armada WHERE id = '$id'";
    $hasil = mysqli_query($conn, $query);
    $data =  mysqli_fetch_assoc($hasil);


    if (!$data) {
    echo "Data tidak ditemukan!";
    exit();
    }

    $unit  = trim($_POST['unit']);
    $nopol = trim($_POST['nopol']);
    $merk  = trim($_POST['merk']);
    $tahun = trim($_POST['tahun']);
    $transmisi = trim($_POST['transmisi']);

    $query = "UPDATE armada SET unit='$unit', nopol='$nopol', merk='$merk', tahun='$tahun', transmisi='$transmisi' WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        header("Location: armada.php");
        exit();
    } else {
        echo "Terjadi Kesalahan: " . mysqli_error($conn);
    }

} else {
    header("Location : armada.php");
    exit();
}