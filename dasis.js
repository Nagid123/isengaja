document.addEventListener('DOMContentLoaded', function() {
    function submitForm() {
        var nis = document.getElementById('nis').value;
        var nama = document.getElementById('nama').value;
        var tempatLahir = document.getElementById('tempatLahir').value;
        var tanggalLahir = document.getElementById('tanggalLahir').value;
        var jenisKelamin = document.getElementById('jenisKelamin').value;
        var agama = document.getElementById('agama').value;
        var ayah = document.getElementById('ayah').value;
        var ibu = document.getElementById('ibu').value;
        var pekerjaanAyah = document.getElementById('pekerjaanAyah').value;
        var pekerjaanIbu = document.getElementById('pekerjaanIbu').value;
        var alamat = document.getElementById('alamat').value;

        var table = document.querySelector('table tbody');
        var newRow = table.insertRow(table.rows.length);

        var cells = [
            nis, nama, tempatLahir, tanggalLahir, jenisKelamin, agama, ayah, ibu, pekerjaanAyah, pekerjaanIbu, alamat
        ];

        for (var i = 0; i < cells.length; i++) {
            var cell = newRow.insertCell(i);
            cell.innerHTML = cells[i];
        }

        document.getElementById('registrationForm').reset();
    }
});
