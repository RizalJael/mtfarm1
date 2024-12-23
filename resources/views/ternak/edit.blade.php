<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ternak</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Edit Data Ternak</title>
</head>

<body>
    <x-layout>
        <div class="container mx-auto" style="max-width: 700px;">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 overflow-hidden">
                <div class="overflow-x-auto" style="max-height: 80vh;">
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-2xl font-bold">Edit Data Ternak</h1>
                        <button type="submit" form="editTernakForm"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Simpan Perubahan
                        </button>
                    </div>
                    <form id="editTernakForm" action="/ternak/{{ $ternak->id }}" method="POST">
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
                                <label for="asal" class="block text-gray-700 text-sm font-bold mb-2">Asal:</label>
                                <select name="asal" id="asal"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="suplier" {{ $ternak->asal == 'suplier' ? 'selected' : '' }}>Suplier
                                    </option>
                                    <option value="kelahiran" {{ $ternak->asal == 'kelahiran' ? 'selected' : '' }}>
                                        Kelahiran</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="asal_kedatangan" class="block text-gray-700 text-sm font-bold mb-2">Asal
                                    Kedatangan:</label>
                                <input type="text" name="asal_kedatangan" id="asal_kedatangan"
                                    value="{{ $ternak->asal_kedatangan }}"
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
                    </form>
                </div>
            </div>
        </div>
    </x-layout>


</body>

</html>
