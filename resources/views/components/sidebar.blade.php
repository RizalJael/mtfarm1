<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<nav class="mt-5 px-2">
    <a href="/"
        class="flex items-center px-4 py-2 mb-2 {{ request()->is('/') ? 'bg-white text-blue-500' : 'text-white ' }} rounded-md transition duration-150 ease-in-out">
        <span class="material-icons mr-2 text-base">dashboard</span>
        <span>Dashboard</span>
    </a>
    <a href="{{ route('populasi.index') }}"
        class="flex items-center px-4 py-2 mb-2 {{ request()->routeIs('populasi.*') ? 'bg-white text-blue-500' : 'text-white ' }} rounded-md transition duration-150 ease-in-out">
        <span class="material-icons mr-2 text-base">bar_chart</span>
        <span>Populasi</span>
    </a>
    <a href="{{ route('ternak.index') }}"
        class="flex items-center px-4 py-2 mb-2 {{ request()->routeIs('ternak.*') ? 'bg-white text-blue-500' : 'text-white ' }} rounded-md transition duration-150 ease-in-out">
        <span class="material-icons mr-2 text-base">pets</span>
        <span>Data Ternak</span>
    </a>
    <a href="{{ route('suplier.index') }}"
        class="flex items-center px-4 py-2 mb-2 {{ request()->routeIs('suplier.*') ? 'bg-white text-blue-500' : 'text-white ' }} rounded-md transition duration-150 ease-in-out">
        <span class="material-icons mr-2 text-base">local_shipping</span>
        <span>Ternak Suplier</span>
    </a>
    <a href="{{ route('kelahiran.index') }}"
        class="flex items-center px-4 py-2 mb-2 {{ request()->routeIs('kelahiran.*') ? 'bg-white text-blue-500' : 'text-white ' }} rounded-md transition duration-150 ease-in-out">
        <span class="material-icons mr-2 text-base">child_care</span>
        <span>Ternak Kelahiran</span>
    </a>
    <a href="{{ route('mortal.index') }}"
        class="flex items-center px-4 py-2 mb-2 {{ request()->routeIs('mortal.*') ? 'bg-white text-blue-500' : 'text-white ' }} rounded-md transition duration-150 ease-in-out">
        <span class="material-icons mr-2 text-base">warning</span>
        <span>Mortalitas</span>
    </a>
    <a href="{{ route('potong.index') }}"
        class="flex items-center px-4 py-2 mb-2 {{ request()->routeIs('potong.*') ? 'bg-white text-blue-500' : 'text-white ' }} rounded-md transition duration-150 ease-in-out">
        <span class="material-icons mr-2 text-base">content_cut</span>
        <span>Pemotongan</span>
    </a>
    <a href="{{ route('laporan.index') }}"
        class="flex items-center px-4 py-2 mb-2 {{ request()->routeIs('laporan.*') ? 'bg-white text-blue-500' : 'text-white ' }} rounded-md transition duration-150 ease-in-out">
        <span class="material-icons mr-2 text-base">content_cut</span>
        <span>Laporan</span>
    </a>
</nav>
