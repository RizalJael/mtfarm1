<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Potong</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <x-layout>
        <div class="container mx-auto w-full">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex justify-between items-center p-3 border-b">
                    <h2 class="text-xl font-semibold text-gray-800">Data Potong</h2>
                    <a href="{{ route('potong.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Tambah Data Potong
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <div class="overflow-y-auto" style="max-height: 70vh;">
                        <table class="w-full whitespace-nowrap text-sm">
                            <thead class="bg-gray-100 sticky top-0 z-20">
                                <tr>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Kode</th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Tanggal</th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Jenis</th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Jenis Kelamin</th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Asal</th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Bobot</th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Tujuan</th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Keterangan</th>
                                    <th
                                        class="border-b border-gray-200 bg-gray-100 px-3 py-2 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($potongs as $potong)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $potong->kode }}</td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $potong->tgl }}</td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $potong->jenis }}</td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $potong->jkel }}</td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $potong->asal }}</td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $potong->bobot }}</td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $potong->tujuan }}</td>
                                        <td class="px-3 py-2 whitespace-no-wrap border-b border-gray-200">
                                            {{ $potong->keterangan }}</td>
                                        <td
                                            class="px-3 py-2 whitespace-nowrap border-b border-gray-200 text-xs leading-5 font-medium">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('potong.edit', $potong->id) }}"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-1 rounded text-xs inline-flex items-center justify-center w-8 h-8"
                                                    title="Edit">
                                                    <span class="material-icons text-base">edit</span>
                                                </a>
                                                <form action="{{ route('potong.destroy', $potong->id) }}"
                                                    method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded text-xs inline-flex items-center justify-center w-8 h-8"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                        title="Hapus">
                                                        <span class="material-icons text-base">delete</span>
                                                    </button>
                                                </form>
                                            </div>
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
