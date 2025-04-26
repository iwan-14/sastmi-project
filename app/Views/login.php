<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - SASTMI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="bg-success bg-opacity-25">

    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-4">
                <div class="card shadow rounded-4">
                    <div class="card-body">
                        <h4 class="text-center text-success mb-4">Login Admin</h4>
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <form method="post" action="<?= base_url('auth/login') ?>">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input 
                                    type="text" 
                                    name="username" 
                                    id="username" 
                                    class="form-control" 
                                    required
                                >
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input 
                                    type="password" 
                                    name="password" 
                                    id="password" 
                                    class="form-control" 
                                    required
                                >
                            </div>
                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </form>
                    </div>
                </div>
                <p class="text-center mt-3 text-muted">Sistem Informasi SASTMI</p>
            </div>
        </div>
    </div>

</body>
</html>
