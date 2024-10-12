<?php 
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: login_pelanggan.php'); // Mengarahkan pelanggan ke halaman login pelanggan jika belum login
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard Pelanggan</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard Pelanggan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home_pelanggan.php">Home</a> <!-- Link ke halaman home pelanggan -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_produk_pelanggan.php">Daftar Produk</a> <!-- Mengarahkan ke daftar produk -->
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi_pelanggan.php">Transaksi</a> <!-- Mengarahkan ke daftar transaksi pelanggan -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a> <!-- Logout dari sistem -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container bg-light rounded" style="margin-top:10px;"></div>
</body>
</html>
