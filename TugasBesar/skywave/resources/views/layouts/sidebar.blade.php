<aside class="w-64 bg-white shadow-md">
    <nav class="mt-6">
        <a href="#" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200">Dashboard</a>

        <!-- Menu Data dengan Dropdown -->
        <div class="relative">
            <button onclick="toggleDropdown('dropdown-menu')" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200 w-full text-left flex justify-between items-center">
                Data
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
            <div id="dropdown-menu" class="hidden mt-1 bg-white shadow-lg">
                <a href="/barang" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200">Barang</a>
                <a href="#" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200">Submenu 2</a>
                <a href="#" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200">Submenu 3</a>
            </div>
        </div>

        <a href="#" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200">Settings</a>
        <a href="#" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200">Reports</a>
        <form action="/logout" method="post">
            @csrf
            <button class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200" type="submit">Logout</button>
        </form>
    </nav>
</aside>