<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Potong</title>
</head>

<body>
    <x-layout>
        <div class="container mx-auto w-full" style="max-width: 700px;">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex justify-between items-center p-3 border-b">
                    <h2 class="text-xl font-semibold text-gray-800">Edit Data Potong</h2>
                    <button type="submit" form="potongForm"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Simpan Perubahan
                    </button>
                </div>

                <div class="p-6">
                    <form id="potongForm" action="{{ route('potong.update', $potong->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="kode" class="block text-gray-700 text-sm font-bold mb-2">Kode
                                    Ternak:</label>
                                <select name="kode" id="kode"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    @foreach ($ternaks as $ternak)
                                        <option value="{{ $ternak->kode }}"
                                            {{ $ternak->kode == $potong->kode ? 'selected' : '' }}>
                                            {{ $ternak->kode }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="tgl"
                                    class="block text-gray-700 text-sm font-bold mb-2">Tanggal:</label>
                                <input type="date" name="tgl" id="tgl" value="{{ $potong->tgl }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="bobot" class="block text-gray-700 text-sm font-bold mb-2">Bobot:</label>
                                <input type="number" name="bobot" id="bobot" value="{{ $potong->bobot }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="tujuan" class="block text-gray-700 text-sm font-bold mb-2">Tujuan:</label>
                                <input type="text" name="tujuan" id="tujuan" value="{{ $potong->tujuan }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="keterangan"
                                class="block text-gray-700 text-sm font-bold mb-2">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $potong->keterangan }}</textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-layout>

</body>

</html>
