<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tamu</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-warning text-dark">
                    <h3 class="mb-0">
                        <i class="bi bi-pencil-square"></i>
                        Edit Data Tamu
                    </h3>
                </div>

                <div class="card-body">

                    <?php
                    include 'koneksi.php';

                    $ID = $_GET['ID'];

                    $data = mysqli_query($koneksi,"SELECT * FROM buku_tamu WHERE ID='$ID'");

                    while($d = mysqli_fetch_array($data)){
                    ?>

                    <form method="post" action="update.php">

                        <input type="hidden" name="ID" value="<?php echo $d['ID']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text"
                                   name="Nama"
                                   class="form-control"
                                   value="<?php echo $d['Nama']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Instansi</label>
                            <input type="text"
                                   name="Instansi"
                                   class="form-control"
                                   value="<?php echo $d['Instansi']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tujuan</label>
                            <input type="text"
                                   name="Tujuan"
                                   class="form-control"
                                   value="<?php echo $d['Tujuan']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date"
                                   name="Tanggal"
                                   class="form-control"
                                   value="<?php echo $d['Tanggal']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Waktu</label>
                            <input type="time"
                                   name="Waktu"
                                   class="form-control"
                                   value="<?php echo date('H:i', strtotime($d['Waktu'])); ?>"
                                   required>
                        </div>

                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-save"></i> Update
                        </button>

                        <a href="index.php" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>

                    </form>

                    <?php } ?>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>