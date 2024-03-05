<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = htmlspecialchars($_POST["nama"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = $_POST["password"]; // Tetapkan kata sandi tanpa hash
    $level = htmlspecialchars($_POST["level"]);

    // Koneksi ke database (ganti informasi sesuai dengan database Anda)
    $host = "localhost";
    $username_db = "nama_pengguna";
    $password_db = "kata_sandi";
    $nama_database = "website_sekolah";

    // Cek koneksi database
    $koneksi = new mysqli($host, $username_db, $password_db, $nama_database);
    if ($koneksi->connect_error) {
        die("Koneksi database gagal: " . $koneksi->connect_error);
    }

    // Gunakan prepared statement untuk mencegah SQL injection
    $sql = $koneksi->prepare("INSERT INTO user (nama, username, password, level) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $nama, $username, $password, $level);

    // Eksekusi prepared statement
    if ($sql->execute()) {
        echo "Registrasi berhasil! Data berhasil disimpan ke dalam database.";
    } else {
        echo "Error: " . $sql->error;
    }

    // Tutup prepared statement
    $sql->close();

    // Tutup koneksi
    $koneksi->close();
}
?>
