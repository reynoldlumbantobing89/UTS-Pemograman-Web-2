<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Tamu</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">
                    <h3><i class="bi bi-person-plus-fill"></i> Tambah Data Tamu</h3>
                </div>

                <div class="card-body">

                    <form method="post" action="tambah_tamu.php">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="Nama" class="form-control" placeholder="Masukkan nama tamu" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Instansi</label>
                            <input type="text" name="Instansi" class="form-control" placeholder="Masukkan instansi" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tujuan</label>
                            <input type="text" name="Tujuan" class="form-control" placeholder="Masukkan tujuan kunjungan" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="Tanggal" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Waktu</label>
                            <input type="time" name="Waktu" class="form-control" required>
                        </div>

                        <div class="d-grid gap-2">

                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Simpan
                            </button>

                            <a href="index.php" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>