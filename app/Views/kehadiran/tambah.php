<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Kehadiran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <h3>Form Tambah Kehadiran</h3>
    <form method="post" action="<?= base_url('kehadiran/simpan') ?>">
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
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-select" required>
          <option value="Hadir">Hadir</option>
          <option value="Izin">Izin</option>
          <option value="Sakit">Sakit</option>
          <option value="Alpa">Alpa</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="<?= base_url('kehadiran') ?>" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</body>
</html>
