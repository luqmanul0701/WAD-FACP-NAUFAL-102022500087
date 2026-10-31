<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Armada - Rentel-U</title>
    <!-- boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white fw-bold">
                        Tambah Armada Baru
                    </div>
                    <div class="card-body p-4">
                        <form action="/armada" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label font-weight-bold">Unit / Nama Kendaraan:</label>
                                <input type="text" name="unit" class="form-control" placeholder="mobil/minibus/motor" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nomor Polisi: </label>
                                <input type="number" name="nopol" class="form-control" placeholder="contoh: 1308 " required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Merk:</label>
                                <input type="text" name="merk" class="form-control" placeholder="contoh: toyota" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tahun Pembuatan:</label>
                                <input type="number" name="tahun" class="form-control" placeholder="minimal 2005" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Transmisi:</label>
                                <select name="transmisi" class="form-select" required>
                                    <option value="" selected disabled>-- Pilih Transmisi --</option>
                                    <option value="Matic">Matic</option>
                                    <option value="Manual">Manual</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="/armada" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>