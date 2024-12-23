<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ternak Suplier</title>

</head>

<body class="">
    <x-layout>

        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Detail Ternak Suplier</h1>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="w-full">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-4 bg-gray-50">Tanggal</th>
                            <td class="p-4">{{ $ternak->tgl }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-left p-4 bg-gray-50">Jenis</th>
                            <td class="p-4">{{ $ternak->jenis }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-left p-4 bg-gray-50">Jenis Kelamin</th>
                            <td class="p-4">{{ $ternak->jkel }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-left p-4 bg-gray-50">Kode</th>
                            <td class="p-4">{{ $ternak->kode }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-left p-4 bg-gray-50">Induk</th>
                            <td class="p-4">{{ $ternak->induk }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-left p-4 bg-gray-50">Asal Kedatangan</th>
                            <td class="p-4">{{ $ternak->asal_kedatangan }}</td>
                        </tr>
                        <tr class="border-b">
                            <th class="text-left p-4 bg-gray-50">Keterangan</th>
                            <td class="p-4">{{ $ternak->keterangan }}</td>
                        </tr>
                        <tr>
                            <th class="text-left p-4 bg-gray-50">Status</th>
                            <td class="p-4">{{ $ternak->status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                <a href="/suplier"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                    Kembali ke Daftar
                </a>
            </div>
        </div>
    </x-layout>
</body>


</html>
