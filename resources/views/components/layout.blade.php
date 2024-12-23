<div class="flex h-screen bg-white">
    <!-- Left Column (Sidebar) -->
    <div class="flex flex-col w-64 bg-white shadow-lg">
        <div class="flex items-center h-16 px-8 bg-blue-500">
            <!-- Logo -->
            <h1 class="text-xl font-bold text-white">MT Farm</h1>
        </div>
        <nav class="flex-1 p-4 space-y-2 bg-blue-500 overflow-y-auto">
            <!-- Sidebar Items -->
            <x-sidebar></x-sidebar>
        </nav>
    </div>

    <!-- Right Column (Main Content) -->
    <div class="flex flex-col flex-1 overflow-hidden">
        <!-- Navbar -->
        <header class="shadow-sm bg-white">
            <div class="flex items-center justify-between h-16 px-4">
                <h1 class="text-xl font-bold text-gray-800">Page Title</h1>

                <div class="flex items-center space-x-4 mx-5">
                    <!-- Search Bar -->
                    <div class="relative mx-5">
                        <input type="text" placeholder="Cari..."
                            class="px-5 pr-4 py-2 w-64 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>



                    <!-- Logout Button -->
                    <a href="#" class="flex items-center text-gray-600 hover:text-gray-800">
                        <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </header>



        <!-- Main Content -->
        <main class="flex-1 overflow-x-auto">
            <div class="p-6">
                <!-- Table Content -->
                {{ $slot }}
            </div>
        </main>
    </div>
</div>
