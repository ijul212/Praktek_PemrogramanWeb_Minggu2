<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR -->
        <aside class="w-64 bg-slate-800 text-white flex flex-col">
            
            <div class="p-5 text-2xl font-bold tracking-wider bg-slate-900 border-b border-slate-700">
                SI Akademik
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <a href="/" class="block px-4 py-2.5 rounded hover:bg-slate-700 transition">Dashboard</a>
                <a href="/mahasiswa" class="block px-4 py-2.5 rounded hover:bg-slate-700 transition">Data Mahasiswa</a>
                <a href="/dosen" class="block px-4 py-2.5 rounded hover:bg-slate-700 transition">Data Dosen</a>
                <a href="/matakuliah" class="block px-4 py-2.5 rounded hover:bg-slate-700 transition">Data Mata Kuliah</a>
                <div class="p-4 border-t border-slate-700">
                <!-- <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white text-sm font-medium py-2 px-4 rounded transition text-center">
                        Logout
                    </button>
                </form> -->
            </div>
            
            </nav>
            <div class="p-4 bg-slate-900 text-xs text-center text-slate-400">
                Politeknik Manufaktur Bandung
            </div>

        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            
            <header class="h-16 bg-white shadow flex items-center justify-between px-6 border-b border-gray-200">
                <h1 class="text-xl font-semibold text-gray-800">Panel Akademik</h1>
                <div class="text-sm font-medium text-gray-600">Halo, Mahasiswa/Dosen</div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>

            <footer class="h-12 bg-white border-t border-gray-200 flex items-center justify-center text-sm text-gray-500">
                &copy; 2026 - Sistem Informasi Akademik
            </footer>

        </div>
    </div>

</body>
</html>