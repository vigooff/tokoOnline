<?php
include "koneksi.php";

if ($_POST) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    // Cek apakah ada file foto baru yang diupload
    if ($_FILES['foto_produk']['name']) {
        $foto_produk = $_FILES['foto_produk']['name'];
        $tmp_foto = $_FILES['foto_produk']['tmp_name'];

        // Tentukan lokasi penyimpanan
        $folder = "assets/foto_produk/";

        // Cek apakah file berhasil diupload
        if (move_uploaded_file($tmp_foto, $folder . $foto_produk)) {
            // Hapus file foto lama
            $qry_foto_lama = mysqli_query($conn, "SELECT foto_produk FROM produk WHERE id_produk = '$id_produk'");
            $data_foto_lama = mysqli_fetch_array($qry_foto_lama);
            if (file_exists($folder . $data_foto_lama['foto_produk'])) {
                unlink($folder . $data_foto_lama['foto_produk']);
            }

            // Update data produk dengan foto baru
            $qry_update = mysqli_query($conn, "UPDATE produk SET nama_produk='$nama_produk', deskripsi='$deskripsi', harga='$harga', foto_produk='$foto_produk' WHERE id_produk='$id_produk'");

            if ($qry_update) {
                echo "<script>alert('Produk berhasil diubah!');location.href='daftar_produk.php';</script>";
            } else {
                echo "<script>alert('Gagal mengubah produk');location.href='ubah_produk.php?id_produk=$id_produk';</script>";
            }
        } else {
            echo "<script>alert('Gagal upload foto!');location.href='ubah_produk.php?id_produk=$id_produk';</script>";
        }
    } else {
        // Jika tidak ada file foto yang diupload, update data tanpa mengubah foto
        $qry_update = mysqli_query($conn, "UPDATE produk SET nama_produk='$nama_produk', deskripsi='$deskripsi', harga='$harga' WHERE id_produk='$id_produk'");

        if ($qry_update) {
            echo "<script>alert('Produk berhasil diubah!');location.href='daftar_produk.php';</script>";
        } else {
            echo "<script>alert('Gagal mengubah produk');location.href='ubah_produk.php?id_produk=$id_produk';</script>";
        }
    }
}
?>
