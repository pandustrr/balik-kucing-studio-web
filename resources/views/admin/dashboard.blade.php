<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BK Admin</title>

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
            <h1 class="text-3xl font-heading font-black uppercase tracking-tight mb-2">Dashboard</h1>
            <p class="text-white/40 text-sm">Selamat datang kembali, {{ auth()->user()->name }}! 👋</p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Stat Card 1 -->
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-bk-orange/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-bk-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-white/30 uppercase tracking-wider">Total</span>
                </div>
                <h3 class="text-2xl font-heading font-black mb-1">0</h3>
                <p class="text-xs text-white/40 uppercase tracking-wider">Bookings</p>
            </div>

            <!-- Stat Card 2 -->
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-white/30 uppercase tracking-wider">Total</span>
                </div>
                <h3 class="text-2xl font-heading font-black mb-1">0</h3>
                <p class="text-xs text-white/40 uppercase tracking-wider">Portfolio</p>
            </div>

            <!-- Stat Card 3 -->
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-white/30 uppercase tracking-wider">Total</span>
                </div>
                <h3 class="text-2xl font-heading font-black mb-1">0</h3>
                <p class="text-xs text-white/40 uppercase tracking-wider">Customers</p>
            </div>

            <!-- Stat Card 4 -->
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-white/30 uppercase tracking-wider">Total</span>
                </div>
                <h3 class="text-2xl font-black mb-1">Rp 0</h3>
                <p class="text-xs text-white/40 uppercase tracking-wider">Revenue</p>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6">
            <h2 class="text-xl font-heading font-black uppercase tracking-tight mb-6">Aktivitas Terbaru</h2>
            <div class="text-center py-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto mb-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
                <p class="text-white/40 text-sm">Belum ada aktivitas terbaru</p>
            </div>
        </div>
    </main>
</body>

</html>