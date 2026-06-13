<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">DAFTAR TAMU KUNJUNGAN</h2>

    <a href="tambah.php" class="btn btn-primary mb-3">
        + Tambah Tamu
    </a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Instansi</th>
                <th>Tujuan</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php
        include 'koneksi.php';

        $no = 1;
        $data = mysqli_query($koneksi,"SELECT * FROM buku_tamu");

        while($d = mysqli_fetch_array($data)){
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Instansi']; ?></td>
                <td><?php echo $d['Tujuan']; ?></td>
                <td><?php echo $d['Tanggal']; ?></td>
                <td><?php echo date('H:i', strtotime($d['Waktu'])); ?></td>
                <td>
                    <a href="edit.php?ID=<?php echo $d['ID']; ?>" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <a href="hapus.php?ID=<?php echo $d['ID']; ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

</body>
</html>