<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.4/components/registrations/registration-3/assets/css/registration-3.css">
    <title>Tambah Pelanggan</title>
</head>

<body>
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
                    <div class="d-flex flex-column justify-content-between h-100 p-3 p-md-4 p-xl-5">
                        <h3 class="m-0">Welcome!</h3>
                        <img class="img-fluid rounded mx-auto my-4" loading="lazy"
                            src="https://tse4.mm.bing.net/th?id=OIP.2HOal3_6qXjrRk-vtVEjTgHaF7&pid=Api&P=0&h=180"
                            width="245" height="80" alt="BootstrapBrain Logo">

                        <p class="mb-0">Not a member yet? <a href="#!"
                                class="link-secondary text-decoration-none">Register now</a></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
                    <div class="p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <h2 class="h3">Tambah Pelanggan</h2>
                                    <h3 class="fs-6 fw-normal text-secondary m-0">Masukkan detail pelanggan</h3>
                                </div>
                            </div>
                        </div>
                        <form action="proses_tambah_pelanggan.php" method="POST" enctype="multipart/form-data">
                            <div class="col-12 mb-3">
                                <label for="nama" class="form-label">Nama Pelanggan <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Masukkan Nama" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="username" class="form-label">Username<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="Masukkan Username" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            
                            <!-- Tambahan Input Alamat -->
                            <div class="col-12 mb-3">
                                <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    placeholder="Masukkan Alamat" required>
                            </div>
                            
                            <!-- Tambahan Input No. Telepon -->
                            <div class="col-12 mb-3">
                                <label for="telp" class="form-label">No. Telepon <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="telp" id="telp"
                                    placeholder="Masukkan No. Telepon" required>
                            </div>

                            <!-- Input Foto -->
                            <div class="col-md-9 pe-5 mb-3">
                                <label for="foto" class="form-label">Foto Pelanggan</label>
                                <input type="file" id="fotopelanggan" name="foto" class="form-control">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn bsb-btn-xl btn-primary" type="submit">Tambah Pelanggan</button>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <hr class="mt-5 mb-4 border-secondary-subtle">
                                <p class="m-0 text-secondary text-end">Already have an account? <a href="#!"
                                        class="link-primary text-decoration-none">Sign in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
