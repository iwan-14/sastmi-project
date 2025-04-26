<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Nilai</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <h3>Form Tambah Nilai</h3>
    <form method="post" action="<?= base_url('nilai/simpan') ?>">
      <div class="mb-3">
        <label>Nama Santri</label>
        <select name="santri_id" class="form-select" required>
          <option value="">-- Pilih Santri --</option>
          <?php foreach ($santri as $s) : ?>
            <option value="<?= $s['id'] ?>"><?= $s['nama'] ?> (<?= $s['nis'] ?>)</option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="mb-3">
        <label>Mata Pelajaran</label>
        <input type="text" name="mata_pelajaran" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Nilai</label>
        <input type="number" name="nilai" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Semester</label>
        <select name="semester" class="form-select">
          <option value="Ganjil">Ganjil</option>
          <option value="Genap">Genap</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="<?= base_url('nilai') ?>" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</body>
</html>
