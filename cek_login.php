<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
 $data = mysqli_fetch_assoc($login);

 
 
 // cek jika user login sebagai it
 if($data['level']=="tim IT"){
 
 // buat session login dan username
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "tim IT";
 // alihkan ke halaman dashboard it
 header("location:halaman_IT.php");
 
 // cek jika user login sebagai guru
 }else if($data['level']=="Guru"){
 // buat session login dan username
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "Guru";
 // alihkan ke halaman dashboard guru
 header("location:halaman_guru.php");
 
 // cek jika user login sebagai siswa
 }else if($data['level']=="siswa"){
 // buat session login dan username
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "siswa";
 // alihkan ke halaman dashboard siswa
 header("location:halaman_siswa.php");
 
 // cek jika user login sebagai staff admin
 }else if($data['level']=="staff_admin"){
 // buat session login dan username
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "staff_admin";
 // alihkan ke halaman dashboard staff admin
 header("location:halaman_staffadmin.php");
 
 // cek jika user login sebagai admin sekolah
 }else if($data['level']=="admin_sekolah"){
 // buat session login dan username
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "admin_sekolah";
 // alihkan ke halaman dashboard admin sekolah
 header("location:halaman_adminsekolah.php");

 // cek jika user login sebagai orang tua
 }else if($data['level']=="orang_tua"){
 // buat session login dan username
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "orang_tua";
 // alihkan ke halaman dashboard orang tua
 header("location:halaman_orangtua.php");
 
 }else{
 // alihkan ke halaman login kembali
 header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}
 
?>
