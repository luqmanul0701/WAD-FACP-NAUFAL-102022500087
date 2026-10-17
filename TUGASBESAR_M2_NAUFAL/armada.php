<?php
include 'connect.php';

// Ambil semua data dari tabel armada
$query = "SELECT * FROM armada ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Data Armada</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mt-4">
  <h3>Daftar Armada</h3>

  <a href="form-tambah.php" class="btn btn-primary mb-3">Tambah Armada</a>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Unit</th>
        <th>Nomor Polisi</th>
        <th>Merk</th>
        <th>Tahun</th>
        <th>Transmisi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['unit']) ?></td>
            <td><?= htmlspecialchars($row['nopol']) ?></td>
            <td><?= htmlspecialchars($row['merk']) ?></td>
            <td><?= htmlspecialchars($row['tahun']) ?></td>
            <td><?= htmlspecialchars($row['transmisi']) ?></td>
            <td>
              <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
              <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" 
                 onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr><td colspan="7" class="text-center">Belum ada data</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
</body>
</html>
