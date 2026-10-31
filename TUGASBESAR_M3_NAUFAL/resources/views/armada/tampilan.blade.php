<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Armada - Rentel-U</title>
    <!-- link bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/armada">Rentel-U System</a>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold text-dark m-0">Data Armada Kendaraan</h4>
                    <a href="/armada/create" class="btn btn-primary">+ Tambah Armada Baru</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle border">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Unit</th>
                                <th>No. Polisi</th>
                                <th>Merk</th>
                                <th>Tahun</th>
                                <th>Transmisi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_armada as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td class="fw-bold">{{ $item->unit }}</td>
                                <td><span class="badge bg-secondary">{{ $item->nopol }}</span></td>
                                <td>{{ $item->merk }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>
                                    <span class="badge bg-info text-dark">{{ $item->transmisi }}</span>
                                </td>
                                <td class="text-center">
                                    <a href="/armada/{{ $item->id }}/edit" class="btn btn-sm btn-warning me-1">Edit</a>
                                    
                                    <form action="/armada/{{ $item->id }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus armada ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>
</html>