<?php
include "koneksi.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $agama = $_POST['agama'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $pekerjaanAyah = $_POST['pekerjaanAyah'];
    $pekerjaanIbu = $_POST['pekerjaanIbu'];
    $alamat = $_POST['alamat'];

    // Display collected form data (for debugging purposes)
    echo "NIS: $nis<br>";
    echo "Nama: $nama<br>";
    echo "Tempat Lahir: $tempatLahir<br>";
    echo "Tanggal Lahir: $tanggalLahir<br>";
    echo "Jenis Kelamin: $jenisKelamin<br>";
    echo "Agama: $agama<br>";
    echo "Ayah: $ayah<br>";
    echo "Ibu: $ibu<br>";
    echo "Pekerjaan Ayah: $pekerjaanAyah<br>";
    echo "Pekerjaan Ibu: $pekerjaanIbu<br>";
    echo "Alamat: $alamat<br>";

    // Koneksi ke database (ganti informasi sesuai dengan database Anda)
    $host = "localhost";
    $username_db = "nama_pengguna";
    $password_db = "kata_sandi";
    $nama_database = "website_sekolah";

    // Prepare the SQL statement
    $sql = "INSERT INTO siswa (NIS, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, ayah, ibu, pekerjaan_ayah, pekerjaan_ibu, alamat)
            VALUES ('$nis', '$nama', '$tempatLahir', '$tanggalLahir', '$jenisKelamin', '$agama', '$ayah', '$ibu', '$pekerjaanAyah', '$pekerjaanIbu', '$alamat')";

    // Execute the SQL statement
    if ($koneksi->query($sql) === TRUE) {
        echo "Data siswa berhasil disimpan ke dalam database.";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Close the database connection
    $koneksi->close();
}

// Display the existing data table
$query = "SELECT * FROM siswa";
$result = $koneksi->query($query);

if ($result && $result->num_rows > 0) {
    echo "<table border='1' width='100%'>";
    echo "<tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Ayah</th>
            <th>Ibu</th>
            <th>Pekerjaan Ayah</th>
            <th>Pekerjaan Ibu</th>
            <th>Alamat</th>
            <th>Action</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['NIS']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['tempat_lahir']}</td>
                <td>{$row['tanggal_lahir']}</td>
                <td>{$row['jenis_kelamin']}</td>
                <td>{$row['agama']}</td>
                <td>{$row['ayah']}</td>
                <td>{$row['ibu']}</td>
                <td>{$row['pekerjaan_ayah']}</td>
                <td>{$row['pekerjaan_ibu']}</td>
                <td>{$row['alamat']}</td>
                <td>
                    <a href='editsiswa.php?NIS={$row['NIS']}'>Edit</a> | 
                    <a href='hapussiswa.php?NIS={$row['NIS']}'>Hapus</a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data siswa.";
}
?>
