<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - {{ config('anprix.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body{font-family:'Inter',sans-serif;}</style>
</head>
<body class="bg-gray-950 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-gray-900 rounded-2xl p-8 border border-white/10">
            <div class="text-center mb-8">
                <div class="w-14 h-14 rounded-2xl bg-[#00ffb3] flex items-center justify-center text-black font-black text-lg mx-auto mb-4">A</div>
                <h1 class="text-2xl font-bold text-white">Admin Login</h1>
                <p class="text-gray-400 text-sm mt-2">{{ config('anprix.name') }}</p>
            </div>
            @if($errors->any())
                <div class="bg-red-500/10 border border-red-500/20 text-red-400 px-4 py-3 rounded-xl mb-6 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full bg-gray-800 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3]">
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <input type="password" name="password" required
                        class="w-full bg-gray-800 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-[#00ffb3]">
                </div>
                <button type="submit" class="w-full bg-[#00ffb3] text-black font-bold py-3 rounded-xl hover:bg-[#00e6a0] transition">
                    Sign In
                </button>
            </form>
        </div>
    </div>
</body>
</html>
