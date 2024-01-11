<?php
include "koneksi.php";

// Pastikan session_start() dipanggil sebelum mengakses/mengubah $_SESSION
session_start();

if (isset($_POST['email']) && $_POST['password']) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);
    $hashed_password = md5($pass);

    $sql = "SELECT * FROM tbl_users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($hashed_password == $data['password']) {
        $_SESSION['admin_root'] = $data['id_user'];

        // Hapus pengecekan ini, karena seharusnya sudah jelas $_SESSION['admin_root'] sudah diatur
        // if (isset($_SESSION['admin_root'])) {
        //     echo "berhasil";
        // } else {
        //     echo "tidak";
        // }
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../ONDESS/index.php">';

    } else {
        echo "login gagal, akun tidak ditemukan";
    }
}
?>
