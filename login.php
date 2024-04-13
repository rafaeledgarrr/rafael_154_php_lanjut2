<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek apakah nama dan email sudah diisi
    if (!empty($_POST["name"]) && !empty($_POST["email"])) {
        $name = urlencode($_POST["name"]);
        $email = urlencode($_POST["email"]);
        
        // Ambil waktu login
        date_default_timezone_set('Asia/Jakarta');
        $loginTime = date("H:i:s");
        $loginDay = date("l");
        $loginDate = date("Y-m-d");

        // Redirect ke halaman selamat datang dengan menyertakan query string
        header("Location: welcome.php?name=$name&email=$email&time=$loginTime&day=$loginDay&date=$loginDate");
        exit();
    } else {
        // Redirect ke halaman error jika nama atau email kosong
        header("Location: error.php");
        exit();
    }
} else {
    // Jika form tidak disubmit, redirect ke halaman login
    header("Location: form.php");
    exit();
}
?>
