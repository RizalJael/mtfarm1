<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>


<body>
    <x-layout>
        <div class="bg-gray-100 min-h-screen py-6">
            <div class="container mx-auto px-4">
                <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Dashboard Populasi Ternak</h1>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <!-- Total Keseluruhan Ternak -->
                    <div class="bg-blue-500 rounded-lg shadow p-4 text-white">
                        <h2 class="text-lg font-semibold mb-2">Total Ternak</h2>
                        <p class="text-3xl font-bold">{{ $totalTernak }}</p>
                    </div>

                    <!-- Total Domba -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="text-lg font-semibold text-gray-800">Domba</h2>
                            <span class="text-2xl">🐑</span>
                        </div>
                        <p class="text-2xl font-bold text-blue-500">{{ $totalDomba }}</p>
                        <div class="mt-2 text-xs text-gray-600">
                            <span>J: {{ $dombaJantan }}</span> |
                            <span>B: {{ $dombaBetina }}</span> |
                            <span>A: {{ $dombaAnak }}</span>
                        </div>
                    </div>

                    <!-- Total Sapi -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="text-lg font-semibold text-gray-800">Sapi</h2>
                            <span class="text-2xl">🐄</span>
                        </div>
                        <p class="text-2xl font-bold text-blue-500">{{ $totalSapi }}</p>
                        <div class="mt-2 text-xs text-gray-600">
                            <span>J: {{ $sapiJantan }}</span> |
                            <span>B: {{ $sapiBetina }}</span> |
                            <span>A: {{ $sapiAnak }}</span>
                        </div>
                    </div>

                    <!-- Total Kambing -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h2 class="text-lg font-semibold text-gray-800">Kambing</h2>
                            <span class="text-2xl">🐐</span>
                        </div>
                        <p class="text-2xl font-bold text-blue-500">{{ $totalKambing }}</p>
                        <div class="mt-2 text-xs text-gray-600">
                            <span>J: {{ $kambingJantan }}</span> |
                            <span>B: {{ $kambingBetina }}</span> |
                            <span>A: {{ $kambingAnak }}</span>
                        </div>
                    </div>
                </div>

                <!-- Grafik distribusi ternak -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800">Distribusi Ternak</h2>
                    <div class="h-40 bg-gray-200 rounded-lg flex items-end justify-around p-2">
                        <div class="w-1/4 bg-green-500 rounded-t-lg"
                            style="height: {{ ($totalDomba / $totalTernak) * 100 }}%"></div>
                        <div class="w-1/4 bg-red-500 rounded-t-lg"
                            style="height: {{ ($totalSapi / $totalTernak) * 100 }}%"></div>
                        <div class="w-1/4 bg-yellow-500 rounded-t-lg"
                            style="height: {{ ($totalKambing / $totalTernak) * 100 }}%"></div>
                    </div>
                    <div class="flex justify-around mt-2 text-xs text-gray-600">
                        <span>Domba</span>
                        <span>Sapi</span>
                        <span>Kambing</span>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>









    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384- --}}
