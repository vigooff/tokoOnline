<?php 
if (isset($_GET['id_petugas'])) {
    include "koneksi.php";
    
    // Validasi bahwa 'id' adalah angka
    $id_petugas = intval($_GET['id_petugas']);  // Konversi menjadi integer untuk keamanan

    // Gunakan prepared statement untuk menghapus data
    $stmt = mysqli_prepare($conn, "DELETE FROM petugas WHERE id_petugas = ?");
    mysqli_stmt_bind_param($stmt, "i", $id_petugas);
    $execute = mysqli_stmt_execute($stmt);

    if ($execute) {
        echo "<script>alert('Sukses hapus petugas');location.href='tampil_petugas.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus petugas: " . mysqli_error($conn) . "');location.href='tampil_petugas.php';</script>";
    }




    
    // Tutup statement
    mysqli_stmt_close($stmt);
    
    // Tutup koneksi
    mysqli_close($conn);
}
?>
