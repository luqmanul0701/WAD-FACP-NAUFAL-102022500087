<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>RENTEL-U</title>
  <!-- <link href="path-to-bootstrap.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
  <h3>RENTEL-U</h3>

  
  <form action="tambah.php" method="POST">
                <div class="mb-3">
                  <label for="unit" class="form-label fw-semibold"
                    >Unit Kendaraan</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="unit"
                    name="unit"
                    placeholder="Masukan Tipe Unit Kendaraan"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label fw-semibold"
                    >Nomor Polisi</label
                  >
                  <input
                    type="int"
                    class="form-control"
                    id="nopol"
                    name="nopol"
                    placeholder="1308"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="merk" class="form-label fw-semibold"
                    >Merk</label
                  >
                  <select
                    class="form-select"
                    id="merk"
                    name="merk"
                    required
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
                  <label for="tahun" class="form-label fw-semibold"
                    >Tahun Pembuatan</label
                  >
                  <input
                    type="number" 
                    class="form-control" 
                    id="tahun" 
                    name="tahun" 
                    placeholder="MAX : 2005"
                    min="2005" 
                    max="2099" 
                    step="1"
                    required
                  />
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

                <div class="button">
                    <button type="submit" class="btn btn-primary w-10 py-2">
                  Kirim Data
                </button>
                <div class="button">
                    <a href="armada.php" class="btn btn-danger m-3 w-10 py-2">kembali</a>
                  
                </button>
                </div>
                
              </form>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>