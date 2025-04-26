<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - SASTMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-success">
    <div class="container-fluid">
      <span class="navbar-brand">SASTMI Admin</span>
      <a href="<?= base_url('logout') ?>" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
  </nav>

  <div class="container mt-4">
    <h3>Selamat Datang, <?= session('username'); ?> (<?= session('role'); ?>)</h3>
    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
          <div class="card-body">
            <h5 class="card-title">Jumlah Santri</h5>
            <p class="card-text display-6"><?= $jumlah_santri; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-info mb-3">
          <div class="card-body">
            <h5 class="card-title">Data Kehadiran</h5>
            <p class="card-text display-6"><?= $jumlah_kehadiran; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-success mb-3">
          <div class="card-body">
            <h5 class="card-title">Rata-rata Nilai</h5>
            <p class="card-text display-6"><?= round($rata_rata_nilai, 2); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <div class="container mt-4">
    <h3>Selamat Datang, <?= session('username'); ?>!</h3>
        <p>Anda login sebagai <strong><?= session('role'); ?></strong></p>

        <?php if (session('role') === 'admin') : ?>
            <p><a href="<?= base_url('santri') ?>" class="btn btn-success">Kelola Santri</a></p>
            <p><a href="<?= base_url('nilai') ?>" class="btn btn-success">Kelola Nilai</a></p>
        <?php endif ?>

        <p><a href="<?= base_url('kehadiran') ?>" class="btn btn-info">Lihat Kehadiran</a></p>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                <h5>Grafik Status Kehadiran</h5>
                <canvas id="chartKehadiran"></canvas>
            </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('chartKehadiran').getContext('2d');
  const chartKehadiran = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Hadir', 'Izin', 'Sakit', 'Alpa'],
      datasets: [{
        label: 'Jumlah',
        data: [
          <?= $status_kehadiran['Hadir']; ?>,
          <?= $status_kehadiran['Izin']; ?>,
          <?= $status_kehadiran['Sakit']; ?>,
          <?= $status_kehadiran['Alpa']; ?>
        ],
        backgroundColor: ['#198754', '#ffc107', '#0dcaf0', '#dc3545']
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
          ticks: { stepSize: 5 }
        }
      }
    }
  });
</script>
</html>
