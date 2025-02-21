<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="flex flex-col h-screen">
        <!-- Header -->
        @include('Layouts.header')

        <div class="flex flex-1">
            <!-- Sidebar -->
            @include('Layouts.sidebar')

            <!-- Main Content -->
            <main class="flex-1 p-6">
                @yield('content')
                <!-- Konten tambahan dapat ditambahkan di sini -->
            </main>
        </div>

        <!-- Footer -->
        @include('Layouts.footer')
    </div>
    <script>
        function toggleDropdown(menuId) {
            var menu = document.getElementById(menuId);
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        }
    </script>
</body>

</html>