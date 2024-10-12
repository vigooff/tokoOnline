<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ubah Pelanggan</title>
</head>

<body>
    <?php
    include "koneksi.php";
    $qry_get_pelanggan = mysqli_query($conn, "select * from pelanggan where id_pelanggan = '" . $_GET['id_pelanggan'] . "'");
    $dt_pelanggan = mysqli_fetch_array($qry_get_pelanggan);
    ?>
    <h3>Ubah Pelanggan</h3>
    <form action="proses_ubah_pelanggan.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_pelanggan" value="<?= $dt_pelanggan['id_pelanggan'] ?>" />
        
        <!-- Field Username -->
        Username:
        <input type="text" name="username" value="<?= $dt_pelanggan['username'] ?>" class="form-control">
        
        <!-- Field Password -->
        Password:
        <input type="password" name="password" value="" class="form-control">
        
        <!-- Field Nama -->
        Nama:
        <input type="text" name="nama" value="<?= $dt_pelanggan['nama'] ?>" class="form-control">
        
        <!-- Field Alamat -->
        Alamat:
        <textarea name="alamat" class="form-control"><?= $dt_pelanggan['alamat'] ?></textarea>
        
        <!-- Field Telepon -->
        Telepon:
        <input type="text" name="telp" value="<?= $dt_pelanggan['telp'] ?>" class="form-control">
        
        <!-- Field Foto -->
        Foto:
        <input type="file" name="foto" class="form-control">
        <br>
        
        <input type="submit" name="simpan" value="Ubah Pelanggan" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
