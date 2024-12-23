<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Populasi Ternak</title>
</head>

<body>
    <x-layout>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <h2 class="text-xl font-semibold bg-gray-100 text-gray-700 py-3 px-4">Populasi Per Tanggal</h2>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Tanggal</th>
                            <th class="py-3 px-6 text-left">Jenis</th>
                            <th class="py-3 px-6 text-left">Jenis Kelamin</th>
                            <th class="py-3 px-6 text-center">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($populasiPerTanggal as $data)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $data->tanggal }}</td>
                                <td class="py-3 px-6 text-left">{{ $data->jenis }}</td>
                                <td class="py-3 px-6 text-left">{{ $data->jkel }}</td>
                                <td class="py-3 px-6 text-center">{{ $data->jumlah }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </x-layout>


</body>

</html>
