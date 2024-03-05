
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Membuat Navbar Responsive Dengan HTML dan CSS</title>
 <link rel="stylesheet" href="dashboard.css">
</head>
<body>
 
 <nav class="navbar">
 <div class="container">
 
 
 
 <ul class="menu">
 <li><a href="halaman_registrasi.php">Registrasi</a></li>
 <li><a href="data_siswa.php">Data siswa</a></li>
 <li><a href="#">Produk</a></li>
 <li><a href="#">Layanan</a></li>
 <li><a href="#">Kontak Kami</a></li>
 </ul>
 
 
 
 </div>
 </nav>
 
 <div>
 <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:index.php?pesan=gagal");
    }
    ?>
    <span class="user-info">
            <h2>Selamat Datang: <?php echo $_SESSION['username']; ?> (<?php echo $_SESSION['level']; ?>)<h2>
        </span>
 </div>
 
</body>
</html>