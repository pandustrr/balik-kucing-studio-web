<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - BK Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .font-heading {
            font-family: 'Instrument Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-ultra-black text-white">
    @include('admin.partials.sidebar')

    <!-- Main Content -->
    <main id="main-content" class="ml-56 min-h-screen p-8 transition-all duration-500">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-heading font-black uppercase tracking-tight mb-2">Settings</h1>
            <p class="text-white/40 text-sm">Kelola akun admin Anda</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="mb-6 p-4 bg-green-500/20 border border-green-500/30 rounded-xl text-green-400 text-sm font-medium flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            {{ session('success') }}
        </div>
        @endif

        <!-- Settings Grid -->
        <div class="grid lg:grid-cols-3 gap-6 mb-6">
            <!-- Update Name -->
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-5">
                <h2 class="text-lg font-heading font-black uppercase tracking-tight mb-4 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-bk-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Ubah Nama
                </h2>

                <form action="{{ route('admin.settings.update-name') }}" method="POST" class="space-y-3">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="current_name" class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-1.5">Nama Saat Ini</label>
                        <input type="text" id="current_name" value="{{ auth()->user()->name }}" disabled class="w-full px-3 py-2.5 bg-white/5 border border-white/10 rounded-lg text-white/40 text-sm">
                    </div>

                    <div>
                        <label for="new_name" class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-1.5">Nama Baru</label>
                        <input type="text" name="name" id="new_name" value="{{ old('name') }}" required class="w-full px-3 py-2.5 bg-white/5 border border-white/10 rounded-lg text-white text-sm focus:border-bk-orange focus:outline-none transition-colors">
                        @error('name')
                        <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="w-full px-4 py-2.5 bg-bk-orange text-white rounded-lg font-black text-xs uppercase tracking-wider transition-all hover:scale-105 active:scale-95 shadow-lg shadow-bk-orange/20">
                        Update Nama
                    </button>
                </form>
            </div>

            <!-- Update Username -->
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-5">
                <h2 class="text-lg font-heading font-black uppercase tracking-tight mb-4 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-bk-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    Ubah Username
                </h2>

                <form action="{{ route('admin.settings.update-username') }}" method="POST" class="space-y-3">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="current_username" class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-1.5">Username Saat Ini</label>
                        <input type="text" id="current_username" value="{{ auth()->user()->username }}" disabled class="w-full px-3 py-2.5 bg-white/5 border border-white/10 rounded-lg text-white/40 text-sm">
                    </div>

                    <div>
                        <label for="new_username" class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-1.5">Username Baru</label>
                        <input type="text" name="username" id="new_username" value="{{ old('username') }}" required class="w-full px-3 py-2.5 bg-white/5 border border-white/10 rounded-lg text-white text-sm focus:border-bk-orange focus:outline-none transition-colors">
                        @error('username')
                        <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="w-full px-4 py-2.5 bg-bk-orange text-white rounded-lg font-black text-xs uppercase tracking-wider transition-all hover:scale-105 active:scale-95 shadow-lg shadow-bk-orange/20">
                        Update Username
                    </button>
                </form>
            </div>

            <!-- Update Password -->
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-5">
                <h2 class="text-lg font-heading font-black uppercase tracking-tight mb-4 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-bk-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    Ubah Password
                </h2>

                <form action="{{ route('admin.settings.update-password') }}" method="POST" class="space-y-3">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="current_password" class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-1.5">Password Saat Ini</label>
                        <input type="password" name="current_password" id="current_password" required class="w-full px-3 py-2.5 bg-white/5 border border-white/10 rounded-lg text-white text-sm focus:border-bk-orange focus:outline-none transition-colors">
                        @error('current_password')
                        <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="new_password" class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-1.5">Password Baru</label>
                        <input type="password" name="password" id="new_password" required class="w-full px-3 py-2.5 bg-white/5 border border-white/10 rounded-lg text-white text-sm focus:border-bk-orange focus:outline-none transition-colors">
                        @error('password')
                        <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-1.5">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full px-3 py-2.5 bg-white/5 border border-white/10 rounded-lg text-white text-sm focus:border-bk-orange focus:outline-none transition-colors">
                    </div>

                    <button type="submit" class="w-full px-4 py-2.5 bg-bk-orange text-white rounded-lg font-black text-xs uppercase tracking-wider transition-all hover:scale-105 active:scale-95 shadow-lg shadow-bk-orange/20">
                        Update Password
                    </button>
                </form>
            </div>

            <!-- Update WhatsApp -->
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-5">
                <h2 class="text-lg font-heading font-black uppercase tracking-tight mb-4 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-bk-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    WhatsApp Center
                </h2>

                <form action="{{ route('admin.settings.update-whatsapp') }}" method="POST" class="space-y-3">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="whatsapp_number" class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-1.5">Nomor WhatsApp Aktif</label>
                        <input type="text" name="whatsapp_number" id="whatsapp_number" value="{{ old('whatsapp_number', $whatsapp_number) }}" required class="w-full px-3 py-2.5 bg-white/5 border border-white/10 rounded-lg text-white text-sm focus:border-bk-orange focus:outline-none transition-colors" placeholder="Contoh: 6281234567890">
                        <p class="mt-1.5 text-[8px] text-white/20 italic">Gunakan kode negara (62) tanpa spasi atau +.</p>
                        @error('whatsapp_number')
                        <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="w-full px-4 py-2.5 bg-bk-orange text-white rounded-lg font-black text-xs uppercase tracking-wider transition-all hover:scale-105 active:scale-95 shadow-lg shadow-bk-orange/20">
                        Update WhatsApp
                    </button>
                </form>
            </div>
        </div>

        <!-- Account Info -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-5">
            <h2 class="text-lg font-heading font-black uppercase tracking-tight mb-4 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-bk-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Informasi Akun
            </h2>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white/5 rounded-xl p-4 border border-white/5">
                    <p class="text-[10px] font-bold text-white/40 uppercase tracking-wider mb-2">Nama</p>
                    <p class="text-sm font-bold text-white">{{ auth()->user()->name }}</p>
                </div>
                <div class="bg-white/5 rounded-xl p-4 border border-white/5">
                    <p class="text-[10px] font-bold text-white/40 uppercase tracking-wider mb-2">Username</p>
                    <p class="text-sm font-bold text-white">{{ auth()->user()->username }}</p>
                </div>
                <div class="bg-white/5 rounded-xl p-4 border border-white/5">
                    <p class="text-[10px] font-bold text-white/40 uppercase tracking-wider mb-2">Role</p>
                    <p class="text-sm font-bold text-bk-orange uppercase">Super Admin</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>