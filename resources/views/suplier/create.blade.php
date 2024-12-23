<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ternak Suplier</title>
</head>

<body>
    <x-layout>
        <div class="container mx-auto w-full" style="max-width: 700px;">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex justify-between items-center p-3 border-b">
                    <h2 class="text-xl font-semibold text-gray-800">Tambah Data Ternak Suplier</h2>
                    <button type="submit" form="suplierForm"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Simpan
                    </button>
                </div>

                <div class="p-6">
                    <form id="suplierForm" action="{{ route('suplier.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="tgl"
                                    class="block text-gray-700 text-sm font-bold mb-2">Tanggal:</label>
                                <input type="date" name="tgl" id="tgl"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="kode" class="block text-gray-700 text-sm font-bold mb-2">Kode:</label>
                                <input type="text" name="kode" id="kode"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="jenis" class="block text-gray-700 text-sm font-bold mb-2">Jenis:</label>
                                <input type="text" name="jenis" id="jenis"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="jkel" class="block text-gray-700 text-sm font-bold mb-2">Jenis
                                    Kelamin:</label>
                                <input type="text" name="jkel" id="jkel"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="induk" class="block text-gray-700 text-sm font-bold mb-2">Induk:</label>
                                <input type="text" name="induk" id="induk"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="asal_kedatangan" class="block text-gray-700 text-sm font-bold mb-2">Asal
                                    Kedatangan:</label>
                                <input type="text" name="asal_kedatangan" id="asal_kedatangan"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                                <input type="text" name="status" id="status"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="keterangan"
                                class="block text-gray-700 text-sm font-bold mb-2">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                        <input type="hidden" name="asal" value="suplier">
                    </form>
                </div>
            </div>
        </div>
    </x-layout>


</body>

</html>
