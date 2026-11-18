<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Informasi Akademik</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg max-w-md w-full border-t-4 border-blue-600">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-2">Register Admin</h2>
        <p class="text-sm text-gray-500 text-center mb-6">Sistem Informasi Akademik</p>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-lg text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.process') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2 text-sm">Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" placeholder="Nama Anda">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2 text-sm">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" placeholder="admin@akademik.com">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2 text-sm">Password</label>
                <input type="password" name="password" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" placeholder="Minimal 6 karakter">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2 text-sm">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" placeholder="Ulangi password">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-lg transition text-sm mb-4">Daftar</button>
            
            <div class="text-center text-sm text-gray-500">
                Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">Login di sini</a>
            </div>
        </form>
    </div>

</body>
</html>