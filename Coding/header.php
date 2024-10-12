<?php 
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_pelanggan.php">Daftar Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_produk.php">Daftar Produk</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_transaksi_petugas.php">Histori Transkasi</a>
                    </li>
                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container bg-light rounded" style="margin-top:10px;"></div>
</body>
</html>
