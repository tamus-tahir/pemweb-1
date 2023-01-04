<?php

function query($query)
{
    global $koneksi;
    $result    = mysqli_query($koneksi, $query);
    $row       = [];
    while ($data = mysqli_fetch_assoc($result)) {
        $row[]     = $data;
    }
    return $row;
}

function security($param = null)
{
    global $base_url;
    if ($param) {
        if (!in_array($_SESSION['profil'], $param)) {
            $_SESSION['gagal'] = "Anda tidak memiliki akses!";
            header('location:' . $base_url . 'admin/dashboard/index');
        }
    } else {
        if (!$_SESSION['id_user']) {
            $_SESSION['gagal'] = "Anda tidak memiliki akses!";
            header('location:' . $base_url . 'login');
        }
    }
}

function upload($filename, $ext, $maxSize, $location)
{
    $name         = $_FILES[$filename]['name'];
    $size         = $_FILES[$filename]['size'];
    $error        = $_FILES[$filename]['error'];
    $tmp_name     = $_FILES[$filename]['tmp_name'];

    if ($error != 0) {
        $_SESSION['error'] = "File gagal diupload";
        return false;
    }

    // verifikasi tipe file yang diizinkan
    $type_file         = $ext;
    // merubah nama file menjadi arrray karena kita ingin mendapatkan tipe file
    $type_name         = explode('.', $name);
    // strtolower ==> merubah text menjadi huruf kecil
    // hal ini karena ada tipe file yang menggunakan huruf kapital
    // end menyeleksi data terakhir dari array
    // hal ini dilakukan untuk mendapatkan tipe file
    $type_name         = strtolower(end($type_name));

    // mengeceak tipe file apakah diizinkan atau tidak
    if (!in_array($type_name, $type_file)) {
        $_SESSION['error'] = "Tipe file tidak di izinkan";
        return false;
    }

    // verifikasi size file satuan dalam byte
    // 2000000 == 2mb
    if ($size > $maxSize) {
        $_SESSION['error'] = "File yang diupload terlalu besar";
        return false;
    }

    // nama file baru untuk mencegah jika terjadi nama file yang sama
    $new_name = time() . '.' . $type_name;

    // memindahkan dari tempat penyimpanan sementara yaitu tmp_name ke folder yang kita buat
    move_uploaded_file($tmp_name, $location . $new_name);
    return $new_name;
}

function tanggalIndo($date)
{
    $tanggal = explode("-", $date);

    switch ($tanggal[1]) {
        case "1":
            $tanggal[1] = "Januari";
            break;
        case "2":
            $tanggal[1] = "Februari";
            break;
        case "3":
            $tanggal[1] = "Maret";
            break;
        case "4":
            $tanggal[1] = "April";
            break;
        case "5":
            $tanggal[1] = "Mei";
            break;
        case "6":
            $tanggal[1] = "Juni";
            break;
        case "7":
            $tanggal[1] = "Juli";
            break;
        case "8":
            $tanggal[1] = "Agustus";
            break;
        case "9":
            $tanggal[1] = "September";
            break;
        case "10":
            $tanggal[1] = "Oktober";
            break;
        case "11":
            $tanggal[1] = "November";
            break;
        case "12":
            $tanggal[1] = "Desember";
            break;
        default:
            $tanggal[1] = "No Date";
    }

    $tanggalBaru = $tanggal[2] . ' ' . $tanggal[1] . ' ' . $tanggal[0];
    return $tanggalBaru;
}


function getStatus($param)
{
    if ($param == 1) {
        return '<span class="badge bg-warning p-2">Belum Diverifikasi</span>';
    } elseif ($param == 2) {
        return '<span class="badge bg-primary p-2">Pendaftaran Disetujui</span>';
    } elseif ($param == 3) {
        return '<span class="badge bg-success p-2">Lulus</span>';
    } elseif ($param == 4) {
        return '<span class="badge bg-danger p-2">Pendaftaran Ditolak</span>';
    }
}

function getStatusCetak($param)
{
    if ($param == 1) {
        return 'Belum Diverifikasi';
    } elseif ($param == 2) {
        return 'Pendaftaran Disetujui';
    } elseif ($param == 3) {
        return 'Lulus';
    } elseif ($param == 4) {
        return 'Pendaftaran Ditolak';
    }
}
