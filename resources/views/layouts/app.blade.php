{{-- filepath: c:\xampp\htdocs\adminku\resources\views\app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-50 min-h-screen flex">
    <!-- Sidebar -->
    <aside class="bg-green-200 text-green-900 w-64 flex-shrink-0 hidden md:flex flex-col transition-all duration-300">
        <div class="flex items-center justify-center h-20 border-b border-green-300">
            <span class="font-bold text-2xl">Adminku</span>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-green-300 transition">
                <svg class="w-5 h-5 mr-3 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"></path>
                </svg>
                Dashboard
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-green-300 transition">
                <svg class="w-5 h-5 mr-3 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M8 17l4 4 4-4m0-5V3"></path>
                </svg>
                Data Master
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-green-300 transition">
                <svg class="w-5 h-5 mr-3 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M17 20h5v-2a4 4 0 00-3-3.87"></path>
                    <path d="M9 20H4v-2a4 4 0 013-3.87"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                Users
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-green-300 transition">
                <svg class="w-5 h-5 mr-3 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 8v4l3 3"></path>
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
                Reports
            </a>
        </nav>
        <div class="p-4 border-t border-green-300">
            <button class="w-full flex items-center px-4 py-2 rounded-lg bg-green-300 hover:bg-green-400 text-green-900 transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M17 16l4-4m0 0l-4-4m4 4H7"></path>
                </svg>
                Logout
            </button>
        </div>
    </aside>

    <!-- Mobile Sidebar Toggle -->
    <div class="md:hidden fixed top-0 left-0 z-30">
        <button id="sidebarToggle" class="m-4 p-2 rounded-md bg-green-200 text-green-900 focus:outline-none focus:ring-2 focus:ring-green-400">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    <aside id="mobileSidebar" class="fixed inset-y-0 left-0 w-64 bg-green-200 text-green-900 z-40 transform -translate-x-full transition-transform duration-300 md:hidden flex flex-col">
        <div class="flex items-center justify-between h-20 border-b border-green-300 px-4">
            <span class="font-bold text-2xl">Adminku</span>
            <button id="sidebarClose" class="p-2 rounded-md hover:bg-green-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-green-300 transition">
                <svg class="w-5 h-5 mr-3 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"></path>
                </svg>
                Dashboard
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-green-300 transition">
                <svg class="w-5 h-5 mr-3 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M8 17l4 4 4-4m0-5V3"></path>
                </svg>
                Data Master
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-green-300 transition">
                <svg class="w-5 h-5 mr-3 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M17 20h5v-2a4 4 0 00-3-3.87"></path>
                    <path d="M9 20H4v-2a4 4 0 013-3.87"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                Users
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-green-300 transition">
                <svg class="w-5 h-5 mr-3 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 8v4l3 3"></path>
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
                Reports
            </a>
        </nav>
        <div class="p-4 border-t border-green-300">
            <button class="w-full flex items-center px-4 py-2 rounded-lg bg-green-300 hover:bg-green-400 text-green-900 transition">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M17 16l4-4m0 0l-4-4m4 4H7"></path>
                </svg>
                Logout
            </button>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen">
        <!-- Navbar -->
        <header class="bg-green-100 shadow h-16 flex items-center px-6 justify-between">
            <div class="flex items-center space-x-4">
                <span class="font-semibold text-lg text-green-900">Dashboard</span>
            </div>
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Search..." class="rounded-md px-3 py-1 bg-green-50 border border-green-200 focus:outline-none focus:ring-2 focus:ring-green-300">
                <div class="w-10 h-10 rounded-full bg-green-300 flex items-center justify-center text-green-900 font-bold">
                    U
                </div>
            </div>
        </header>
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    <script>
        // Sidebar toggle for mobile
        const sidebarToggle = document.getElementById('sidebarToggle');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const sidebarClose = document.getElementById('sidebarClose');

        sidebarToggle?.addEventListener('click', () => {
            mobileSidebar.classList.remove('-translate-x-full');
        });

        sidebarClose?.addEventListener('click', () => {
            mobileSidebar.classList.add('-translate-x-full');
        });

        // Close sidebar when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileSidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
                mobileSidebar.classList.add('-translate-x-full');
            }
        });
    </script>
</body>