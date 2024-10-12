<?php 
if (isset($_GET['id_pelanggan'])) {
    include "koneksi.php";
    
    // Validasi bahwa 'id_pelanggan' adalah angka
    $id_pelanggan = intval($_GET['id_pelanggan']);  // Konversi menjadi integer untuk keamanan

    // Gunakan prepared statement untuk menghapus data pelanggan
    $stmt = mysqli_prepare($conn, "DELETE FROM pelanggan WHERE id_pelanggan = ?");
    mysqli_stmt_bind_param($stmt, "i", $id_pelanggan);
    $execute = mysqli_stmt_execute($stmt);

    if ($execute) {
        echo "<script>alert('Sukses hapus pelanggan');location.href='tampil_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus pelanggan: " . mysqli_error($conn) . "');location.href='tampil_pelanggan.php';</script>";
    }

    // Tutup statement
    mysqli_stmt_close($stmt);
    
    // Tutup koneksi
    mysqli_close($conn);
}
?>
