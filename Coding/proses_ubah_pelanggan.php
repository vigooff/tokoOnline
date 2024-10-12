<?php
if ($_POST) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $password = $_POST['password'];

    include "koneksi.php";

    // Cek apakah ada file foto yang di-upload
    if ($_FILES['foto']['name']) {
        $foto = $_FILES['foto']['name'];
        $tmp_foto = $_FILES['foto']['tmp_name'];

        // Tentukan folder penyimpanan
        $folder = "assets/foto/";

        // Pindahkan foto baru ke folder tujuan
        move_uploaded_file($tmp_foto, $folder . $foto);

        // Jika password kosong, hanya update data kecuali password
        if (empty($password)) {
            $update = mysqli_query($conn, "UPDATE pelanggan SET nama = '$nama', username = '$username', alamat = '$alamat', telp = '$telp', foto = '$foto' WHERE id_pelanggan = '$id_pelanggan'") or die(mysqli_error($conn));
        } else {
            // Jika password diisi, update termasuk password
            $update = mysqli_query($conn, "UPDATE pelanggan SET nama = '$nama', username = '$username', alamat = '$alamat', telp = '$telp', foto = '$foto', password = '" . md5($password) . "' WHERE id_pelanggan = '$id_pelanggan'") or die(mysqli_error($conn));
        }
    } else {
        // Jika tidak ada foto baru, update tanpa foto
        if (empty($password)) {
            $update = mysqli_query($conn, "UPDATE pelanggan SET nama = '$nama', username = '$username', alamat = '$alamat', telp = '$telp' WHERE id_pelanggan = '$id_pelanggan'") or die(mysqli_error($conn));
        } else {
            $update = mysqli_query($conn, "UPDATE pelanggan SET nama = '$nama', username = '$username', alamat = '$alamat', telp = '$telp', password = '" . md5($password) . "' WHERE id_pelanggan = '$id_pelanggan'") or die(mysqli_error($conn));
        }
    }

    // Cek hasil update
    if ($update) {
        echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=" . $id_pelanggan . "';</script>";
    }
}
?>
