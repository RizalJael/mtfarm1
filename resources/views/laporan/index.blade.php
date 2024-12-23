<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Populasi Ternak</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <x-layout>
        <div class="container mx-auto w-full" style="max-width: 1000px;">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex justify-between items-center p-3 border-b">
                    <h2 class="text-xl font-semibold text-gray-800">Laporan Populasi Ternak</h2>
                </div>

                <div class="p-3 border-b">
                    <form method="GET" action="{{ route('laporan.index') }}" class="flex items-end space-x-4">
                        <div class="flex items-end space-x-6 mb-4">
                            <div class="flex-1 max-w-xs">
                                <label for="start_date" class="block text-sm font-medium text-gray-700 mb-2">Tanggal
                                    Mulai</label>
                                <input type="date" id="start_date" name="start_date" value="{{ $startDate }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                            </div>
                            <div class="flex-1 max-w-xs ml-4">
                                <label for="end_date" class="block text-sm font-medium text-gray-700 mb-2">Tanggal
                                    Akhir</label>
                                <input type="date" id="end_date" name="end_date" value="{{ $endDate }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                            </div>
                            <div class="ml-4 mt-8">
                                <button type="submit"
                                    class="bg-blue-500 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline text-sm hover:bg-blue-600 transition duration-300">
                                    Tampilkan Laporan
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="overflow-x-auto">
                    <div class="overflow-y-auto" style="max-height: 70vh;">
                        <table class="w-full whitespace-nowrap text-sm">
                            <thead class="bg-gray-100 sticky top-0 z-20">
                                <tr>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        No
                                    </th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Tanggal
                                    </th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Jenis
                                    </th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Jenis Kelamin
                                    </th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Induk
                                    </th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Asal
                                    </th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Asal Kedatangan
                                    </th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Masuk/Keluar
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($laporan as $index => $ternak)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $index + 1 }}
                                        </td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $ternak->tgl }}
                                        </td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $ternak->jenis }}
                                        </td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $ternak->jkel }}
                                        </td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $ternak->induk }}
                                        </td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $ternak->asal }}
                                        </td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $ternak->asal_kedatangan }}
                                        </td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $ternak->masuk_keluar }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>





</body>

</html>
