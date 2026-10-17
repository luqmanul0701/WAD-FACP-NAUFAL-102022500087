<?php
include 'connect.php';

$id = $_GET['id'] ?? null;

// kondisi jika id tidak
if (!$id) {
    header("Location: armada.php");
    exit();
}

// Ambil data pengaduan berdasarkan ID
$query  = "SELECT * FROM armada WHERE id = '$id'";
$hasil = mysqli_query($conn, $query);
$data   = mysqli_fetch_assoc($hasil);

if (!$data) {
    echo "Data tidak ditemukan!";
    exit();
}

$unit = $data['unit'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Rentel-U</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm p-4">
                    <h3 class="fw-bold mb-3 border-bottom pb-2">Edit Data Rental</h3>
                    <form action="proses-edit.php" method="POST">
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Unit Kendaraan</label>
                            <input type="text" class="form-control" name="unit" value="<?= htmlspecialchars($unit); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nomor Polisi</label>
                            <input type="nopol" class="form-control" name="nopol" value="<?= htmlspecialchars($data['nopol'] ?? ''); ?>" required>
                        </div>

                       <div class="mb-3">
                  <label for="merk" class="form-label fw-semibold">Merk</label
                  >
                  <select class="form-select" id="merk" name="merk" required
                  >
                    <option value="" selected disabled>
                      -- Pilih Mobil --
                    </option>
                    <option value="HONDA">HONDA</option>
                    <option value="TOYOTA">TOYOTA</option>
                    <option value="BMW">BMW</option>
                    <option value="BYD">BYD</option>
                  </select>
                </div>

                <div class="mb-3">
                            <label class="form-label fw-semibold">Tahun Pembuatan</label>
                            <input type="tahun" class="form-control" name="tahun" value="<?= htmlspecialchars($data['tahun'] ?? ''); ?>" required>
                        </div>

                <div class="mb-4">
                  <label for="transmisi" class="form-label fw-semibold"
                    >Transmisi Kendaraan</label
                  >
                  <select
                    class="form-select"
                    id="transmisi"
                    name="transmisi"
                    required
                  >
                    <option value="" selected disabled>
                      -- Pilih Transmisi --
                    </option>
                    <option value="matic">MATIC</option>
                    <option value="manual">MANUAL</option>
                  </select>
                </div>

                        <div class="d-flex justify-content-between">
                            <a href="armada.php" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>