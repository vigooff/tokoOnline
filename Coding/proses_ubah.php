<?php
if ($_POST) {
    $id_petugas = $_POST['id_petugas'];
    $nama_petugas= $_POST['nama_petugas'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    
    if (empty($nama_petugas)) {
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('nik tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "update petugas set nama_petugas='" . $nama_petugas . "', username='" . $username . "', level='" . $level . "', id_petugas='" . $id_petugas. "' where id_petugas= '" . $id_petugas . "' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah.php?id=" . $id_petugas . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update petugas set nama_petugas='" . $nama_petugas . "',username='" . $username . "', level='" . $level . "', alamat='" ."' password='" . md5($password) . "', level='" . $level . "' where id = '" . $id_petugas. "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah.php=" . $id_petugas . "';</script>";
            }
        }

    }
}

?>