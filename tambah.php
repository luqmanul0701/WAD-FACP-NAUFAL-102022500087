    <?php

    include 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $unit      = $_POST['unit'];
        $nopol     = $_POST['nopol'];
        $merk  = $_POST['merk'];
        $tahun = $_POST['tahun'];
        $transmisi    = $_POST['transmisi'];

        $query = "INSERT INTO armada (unit, nopol, merk, tahun, transmisi) 
                VALUES ('$unit', '$nopol', '$merk', '$tahun', '$transmisi')";
        
        if (mysqli_query($conn, $query)) {
            header("Location: armada.php");
            exit();
        } else {
            
            echo "<h3>Gagal Menyimpan Data!</h3>";
            echo "Pesan Error: " . mysqli_error($conn);
        }
    } else {
        echo "Akses langsung tidak diizinkan.";
    }
    ?>