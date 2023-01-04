<?php
require '../../config/autoload.php';

function hapus($id_pendaftaran)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tabel_pendaftaran WHERE id_pendaftaran = $id_pendaftaran");
    return mysqli_affected_rows($koneksi);
}

if (isset($_GET["id"])) {
    if (hapus($_GET["id"]) > 0) {
        $_SESSION['berhasil'] = "Data berhasil dihapus";
        header('location:' . $base_url . 'admin/pendaftaran/index');
    } else {
        $_SESSION['gagal'] = "Data gagal dihapus";
        return false;
    }
}
