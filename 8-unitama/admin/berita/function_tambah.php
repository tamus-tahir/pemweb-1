<?php
function tambah($data)
{
    global $koneksi;
    $judul      = $data["judul"];
    $isi        = $data["isi"];
    $tanggal    = $data["tanggal"];
    $publish    = $data["publish"];

    // membuat fungsi baru untuk menangani upload file
    $sampul     = upload('sampul', ['png', 'jpg', 'jpeg'], 520000, '../../assets/uploads/');

    // kondisi jika sampul gagal diupload
    if (!$sampul) {
        return false;
    }

    $query = "INSERT INTO tabel_berita VALUES ('', '$judul', '$isi', '$tanggal', '$sampul', '$publish')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        $_SESSION['berhasil'] = "Data berhasil ditambahkan";
        header('location:' . $base_url . 'admin/berita/index');
    } else {
        $_SESSION['gagal'] = "Data gagal ditambahkan";
        return false;
    }
}
