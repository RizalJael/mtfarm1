<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Ternak Kelahiran</title>
</head>

<body>
    <x-layout>
        <div class="container mx-auto w-full" style="max-width: 700px;">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex justify-between items-center p-3 border-b">
                    <h2 class="text-xl font-semibold text-gray-800">Edit Data Ternak Kelahiran</h2>
                    <button type="submit" form="kelahiranForm"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Simpan Perubahan
                    </button>
                </div>

                <div class="p-6">
                    <form id="kelahiranForm" action="{{ route('kelahiran.update', $ternak->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="tgl"
                                    class="block text-gray-700 text-sm font-bold mb-2">Tanggal:</label>
                                <input type="date" name="tgl" id="tgl" value="{{ $ternak->tgl }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="kode" class="block text-gray-700 text-sm font-bold mb-2">Kode:</label>
                                <input type="text" name="kode" id="kode" value="{{ $ternak->kode }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="jenis" class="block text-gray-700 text-sm font-bold mb-2">Jenis:</label>
                                <input type="text" name="jenis" id="jenis" value="{{ $ternak->jenis }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="jkel" class="block text-gray-700 text-sm font-bold mb-2">Jenis
                                    Kelamin:</label>
                                <input type="text" name="jkel" id="jkel" value="{{ $ternak->jkel }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="induk" class="block text-gray-700 text-sm font-bold mb-2">Induk:</label>
                                <input type="text" name="induk" id="induk" value="{{ $ternak->induk }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                                <input type="text" name="status" id="status" value="{{ $ternak->status }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="keterangan"
                                class="block text-gray-700 text-sm font-bold mb-2">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $ternak->keterangan }}</textarea>
                        </div>
                        <input type="hidden" name="asal" value="kelahiran">
                    </form>
                </div>
            </div>
        </div>
    </x-layout>

</body>

</html>
