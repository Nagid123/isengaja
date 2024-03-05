<?php
include 'koneksi.php';

$sql = "SELECT NIS, siswa, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, nama_ayah, nama_ibu, pekerjaan_ayah, pekerjaan_ibu, alamat FROM siswa";
$result = $koneksi_db->query($sql);

// Fetch data into an associative array
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
<table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Alamat Siswa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) : ?>
                <tr>
                    <td><?php echo $row['NIS'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['tempat_lahir'] ?></td>
                    <td><?php echo $row['tanggal_lahir'] ?></td>
                    <td><?php echo $row['jenis_kelamin'] ?></td>
                    <td><?php echo $row['agama'] ?></td>
                    <td><?php echo $row['ayah'] ?></td>
                    <td><?php echo $row['ibu'] ?></td>
                    <td><?php echo $row['pekerjaan_ayah'] ?></td>
                    <td><?php echo $row['pekerjaan_ibu'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
?>