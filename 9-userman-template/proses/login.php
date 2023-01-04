<?php include_once '../config/autoload.php';  ?>

<?php
if (isset($_POST["submit"])) {

    // ambil data dari form input
    $username   = $_POST["username"];
    $password   = $_POST["password"];

    // ambil data username berdasarkan username
    $user = mysqli_query($koneksi, "SELECT * FROM tabel_user WHERE username = '$username'");

    // verifikasi username ==> apakah usernamenya ada
    if ($user) {
        // merubah data menjadi array assosiatif
        $data = mysqli_fetch_assoc($user);

        // verifikasi password ==> apakah passwornya benar
        if (password_verify($password, $data["password"])) {

            // cek jika usernya aktif
            if ($data["aktif"] ==  1) {
                // memberikan session yang menandakan usernya telah login
                $_SESSION['id_user'] = $data["id_user"];
                $_SESSION['profil'] = $data["profil"];
                $_SESSION['berhasil'] = $data["nama"] . ', anda telah berhasil login!';
                header('location:' . $base_url . 'admin/dashboard/index');
                exit();
            } else {
                $_SESSION['gagal'] = "Login gagal, akun anda tidak aktif!";
                header('location:' . $base_url . 'login');
            }
        }
    }

    // jika error
    $error = true;
    if (isset($error)) {
        $_SESSION['gagal'] = "Login gagal, username atau password tidak cocok!";
        header('location:' . $base_url . 'login');
    }
}
