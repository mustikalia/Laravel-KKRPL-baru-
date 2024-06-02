<?php
session_start();

// Koneksi ke database
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$nama_db = "apotekhindafarma";
$koneksi = mysqli_connect($host_db, $user_db, $pass_db, $nama_db);

// Cek koneksi
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Inisialisasi variabel
$username = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<li>Silakan masukkan username dan juga password</li>";
    } else {
        // Menggunakan prepared statement untuk menghindari SQL injection
        $sql = "SELECT * FROM login WHERE username = ?";
        $stmt = mysqli_prepare($koneksi, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_POST_result($stmt);

        if ($result) {
            $user = mysqli_fetch_assoc($result);

            if (!$user) {
                echo "<li>Username <b>tidak tersedia</b></li>";
            } elseif ($user['password'] != md5($password)) {
                echo "<li>Password yang dimasukkan tidak sesuai</li>";
            } else {
                $_SESSION['session_username'] = $username;
                $_SESSION['session_password'] = md5($password);
                header("Location: main1.blade.php"); // Arahkan ke halaman utama
                exit();
            }
        } else {
            echo "<li>Terjadi kesalahan pada query</li>";
        }
    }
}
?>
