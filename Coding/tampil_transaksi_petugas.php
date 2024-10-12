<?php
include "koneksi.php";
include "header.php"; // Mengubah header menjadi untuk pegawai

// Query untuk mendapatkan data transaksi beserta detail produk dan pelanggan
$qry_transaksi = mysqli_query($conn, "
    SELECT 
        transaksi.id_transaksi, 
        pelanggan.nama AS nama_pelanggan, 
        transaksi.tgl_transaksi, 
        produk.nama_produk, 
        detail_transaksi.qty, 
        produk.harga, 
        (detail_transaksi.qty * produk.harga) AS subtotal 
    FROM transaksi 
    JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan 
    JOIN detail_transaksi ON transaksi.id_transaksi = detail_transaksi.id_transaksi 
    JOIN produk ON detail_transaksi.id_produk = produk.id_produk
");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tampil Transaksi Pegawai</title> <!-- Judul untuk halaman pegawai -->
</head>
<body>
    <div class="container mt-4">
        <h3 class="text-center">Daftar Transaksi - Pegawai</h3> <!-- Menampilkan judul yang spesifik untuk pegawai -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal Transaksi</th>
                    <th>Produk</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data_transaksi = mysqli_fetch_array($qry_transaksi)) {
                    echo "<tr>
                        <td>{$data_transaksi['id_transaksi']}</td>
                        <td>{$data_transaksi['nama_pelanggan']}</td>
                        <td>{$data_transaksi['tgl_transaksi']}</td>
                        <td>{$data_transaksi['nama_produk']}</td>
                        <td>{$data_transaksi['qty']}</td>
                        <td>Rp " . number_format($data_transaksi['harga'], 0, ',', '.') . "</td>
                        <td>Rp " . number_format($data_transaksi['subtotal'], 0, ',', '.') . "</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
