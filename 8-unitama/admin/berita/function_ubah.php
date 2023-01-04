<?php
function tambah($data)
{
    global $koneksi;
    $id_berita  = $data["id_berita"];
    $judul      = $data["judul"];
    $isi        = $data["isi"];
    $tanggal    = $data["tanggal"];
    $publish    = $data["publish"];

    // jika user tidak mengupload sampul maka sampul lama yang akan dipakai
    // $_FILES['sampul']['error'] == 4 ==> tidak ada file diupload
    // jika user upload sampul, jalankan fungsi upload
    if ($_FILES['sampul']['error'] == 4) {
        $sampul = $data["sampul_lama"];
    } else {
        $sampul     = upload('sampul', ['png', 'jpg', 'jpeg'], 520000, '../../assets/uploads/');
        // menghapus sampul lama
        if ($sampul) {
            unlink('../../assets/uploads/' . $data["sampul_lama"]);
        }
    }

    $query = "UPDATE tabel_berita SET
						judul       = '$judul',
						isi         = '$isi',
						tanggal     = '$tanggal',
						publish     = '$publish',
						sampul      = '$sampul'
						WHERE id_berita  = $id_berita
					";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        $_SESSION['berhasil'] = "Data berhasil diubah";
        header('location:' . $base_url . 'admin/berita/index');
    } else {
        $_SESSION['gagal'] = "Data gagal diubah";
        return false;
    }
}
