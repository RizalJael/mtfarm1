<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ternak Kelahiran</title>
</head>

<body>
    <h1>Detail Ternak Kelahiran</h1>
    <table border="1">
        <tr>
            <th>Tanggal</th>
            <td>{{ $ternak->tgl }}</td>
        </tr>
        <tr>
            <th>Jenis</th>
            <td>{{ $ternak->jenis }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $ternak->jkel }}</td>
        </tr>
        <tr>
            <th>Kode</th>
            <td>{{ $ternak->kode }}</td>
        </tr>
        <tr>
            <th>Induk</th>
            <td>{{ $ternak->induk }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $ternak->keterangan }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $ternak->status }}</td>
        </tr>
    </table>
    <a href="/kelahiran" class="btn btn-secondary">Kembali ke Daftar</a>
</body>

</html>
