<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="registrasi.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

form {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 8px;
}

input, select {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

/* Optional: Styling for links in the form */
a {
    color: #4caf50;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
    <form action="registrasiaja.php" method="post">
        <h2>Registrasi</h2>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="level">Level:</label>
        <select id="level" name="level" required>
            <option value="tim IT">IT</option>
            <option value="Guru">Guru</option>
            <option value="siswa">Siswa</option>
            <option value="staff admin">Staff Admin</option>
            <option value="admin sekolah">Admin Sekolah</option>
            <option value="orang tua">Orang Tua</option>
        </select>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
