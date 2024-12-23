<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Populasi Ternak</title>
</head>

<body>
    <h1>Laporan Populasi Ternak</h1>

    <h2>Periode: {{ $startDate->format('d-m-Y') }} - {{ $endDate->format('d-m-Y') }}</h2>

    <h2>Total Populasi</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Jenis</th>
                <th>Jantan</th>
                <th>Betina</th>
                <th>Anak</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Domba</td>
                <td>{{ $dombaJantan }}</td>
                <td>{{ $dombaBetina }}</td>
                <td>{{ $dombaAnak }}</td>
                <td>{{ $totalDomba }}</td>
            </tr>
            <tr>
                <td>Sapi</td>
                <td>{{ $sapiJantan }}</td>
                <td>{{ $sapiBetina }}</td>
                <td>{{ $sapiAnak }}</td>
                <td>{{ $totalSapi }}</td>
            </tr>
            <tr>
                <td>Kambing</td>
                <td>{{ $kambingJantan }}</td>
                <td>{{ $kambingBetina }}</td>
                <td>{{ $kambingAnak }}</td>
                <td>{{ $totalKambing }}</td>
            </tr>
            <tr>
                <td colspan="4">Total Keseluruhan</td>
                <td>{{ $totalTernak }}</td>
            </tr>
        </tbody>
    </table>

    <h2>Populasi Per Tanggal</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jenis</th>
                <th>Jenis Kelamin</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($populasiPerTanggal as $data)
                <tr>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->jenis }}</td>
                    <td>{{ $data->jkel }}</td>
                    <td>{{ $data->jumlah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
