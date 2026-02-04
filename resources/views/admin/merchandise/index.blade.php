<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchandise Manager - BK Admin</title>

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

<body class="bg-ultra-black text-white font-sans">
    @include('admin.partials.sidebar')

    <!-- Main Content -->
    <main id="main-content" class="ml-56 min-h-screen p-8 transition-all duration-500">
        <!-- Header -->
        <div class="mb-8 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-heading font-black uppercase tracking-tight mb-2">Merchandise Manager</h1>
                <p class="text-white/40 text-sm">Kelola produk merchandise Balik Kucing Studio</p>
            </div>
            <button class="px-6 py-3 bg-bk-orange text-white rounded-xl font-black text-xs uppercase tracking-widest transition-all hover:scale-105 active:scale-95 shadow-xl shadow-bk-orange/20 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Produk
            </button>
        </div>

        <!-- Quick Stats / Navigation -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <a href="{{ route('admin.merchandise.categories.index') }}" class="group bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-bk-orange/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-bk-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white/10 group-hover:text-white/30 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-black mb-1 uppercase tracking-tight">Kategori</h3>
                <p class="text-xs text-white/40 uppercase tracking-widest font-bold">Kelola Pengelompokan</p>
            </a>
        </div>

        <!-- Placeholder Section -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-[32px] p-12 text-center relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-64 h-64 bg-bk-orange/5 rounded-full blur-3xl -mr-32 -mt-32 transition-all duration-700 group-hover:bg-bk-orange/10"></div>

            <div class="relative z-10 max-w-md mx-auto py-20">
                <div class="w-24 h-24 bg-white/5 rounded-3xl flex items-center justify-center mx-auto mb-8 border border-white/10 shadow-2xl rotate-12 transition-transform group-hover:rotate-0 duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-bk-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-heading font-black mb-4 uppercase tracking-tighter">Sistem Manajemen Merchandise</h2>
                <p class="text-white/40 text-sm leading-relaxed mb-8">Fitur untuk mengelola produk, stok, dan kategori merchandise sedang dalam tahap pengembangan khusus untuk Anda.</p>
                <div class="flex items-center justify-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full inline-flex">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                    </span>
                    <span class="text-[10px] font-black uppercase tracking-widest text-white/60">Coming Soon</span>
                </div>
            </div>
        </div>
    </main>
</body>

</html>