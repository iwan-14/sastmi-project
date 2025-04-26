<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Santri - SASTMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h3>Data Santri</h3>
        <a href="<?= base_url('santri/tambah') ?>" class="btn btn-success mb-3">+ Tambah Santri</a>

        <form method="get" action="<?= base_url('santri') ?>" class="row g-3 mb-3">
            <div class="col-md-6">
                <input type="text" name="keyword" class="form-control" placeholder="Cari nama / NIS / kelas..." value="<?= esc($keyword) ?>">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-success">Cari</button>
                <a href="<?= base_url('santri') ?>" class="btn btn-secondary">Reset</a>
            </div>
        </form>

        <table class="table table-bordered table-striped">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($santri)) : ?>
                    <?php $no = 1; foreach ($santri as $row) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= esc($row['nama']) ?></td>
                            <td><?= esc($row['nis']) ?></td>
                            <td><?= esc($row['kelas']) ?></td>
                            <td><?= esc($row['alamat']) ?></td>
                            <td>
                                <a href="<?= base_url('santri/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('santri/hapus/' . $row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else : ?>
                    <tr><td colspan="6" class="text-center">Belum ada data santri.</td></tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</body>
</html>
