<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Santri - SASTMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h3>Form Tambah Santri</h3>
        <form method="post" action="<?= base_url('santri/simpan') ?>">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>NIS</label>
                <input type="text" name="nis" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= base_url('santri') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
