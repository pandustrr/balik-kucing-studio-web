<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Balikkucing Studio</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('Logogram_BKStd.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-ultra-black min-h-screen flex items-center justify-center p-6 overflow-hidden relative">
    <!-- Background Decor -->
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-bk-orange/10 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-bk-orange/5 rounded-full blur-[120px] translate-x-1/4 translate-y-1/4"></div>

    <div class="w-full max-w-[380px] relative z-10">
        <!-- Unified Login Container -->
        <div class="bg-white/5 backdrop-blur-3xl rounded-[48px] p-10 border border-white/10 shadow-2xl relative overflow-hidden">
            <!-- Glass Overlay Shine -->
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-white/5 rounded-full blur-3xl"></div>

            <div class="relative z-10">
                <!-- Header Inside Container -->
                <div class="flex flex-col items-center mb-10 text-center">
                    <div class="w-20 h-20 mb-6 flex items-center justify-center transform transition-transform hover:rotate-12 duration-500">
                        <img src="{{ asset('Logogram_BKStd.ico') }}" alt="Logo" class="w-full h-full object-contain brightness-0 invert">
                    </div>
                    <h1 class="text-3xl font-black text-white tracking-tight uppercase mb-1">Admin Login</h1>
                    <p class="text-[10px] text-white/40 font-bold uppercase tracking-[0.3em]">Balikkucing Studio</p>
                </div>

                <!-- Form -->
                @if($errors->any())
                <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 rounded-2xl text-[10px] font-black text-red-500 uppercase tracking-widest text-center">
                    {{ $errors->first() }}
                </div>
                @endif

                <form action="{{ route('admin.authenticate') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="space-y-5">
                        <!-- Username -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-bk-orange uppercase tracking-widest ml-1">Username</label>
                            <div class="relative group">
                                <div class="absolute left-6 top-1/2 -translate-y-1/2 text-white/20 group-focus-within:text-bk-orange transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input type="text" name="username" placeholder="Masukkan username Anda"
                                    class="w-full pl-14 pr-6 py-5 bg-white/5 border-2 border-transparent rounded-2xl focus:outline-none focus:border-bk-orange/30 focus:bg-white/10 transition-all text-sm font-bold text-white placeholder:text-white/10">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-bk-orange uppercase tracking-widest ml-1">Password</label>
                            <div class="relative group">
                                <div class="absolute left-6 top-1/2 -translate-y-1/2 text-white/20 group-focus-within:text-bk-orange transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input type="password" name="password" placeholder="••••••••"
                                    class="w-full pl-14 pr-6 py-5 bg-white/5 border-2 border-transparent rounded-2xl focus:outline-none focus:border-bk-orange/30 focus:bg-white/10 transition-all text-sm font-bold text-white placeholder:text-white/10">
                            </div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="w-full py-5 bg-bk-orange text-white rounded-2xl font-black text-sm uppercase tracking-widest transition-all hover:bg-bk-orange/90 hover:scale-[1.02] active:scale-95 shadow-xl shadow-bk-orange/20 flex items-center justify-center gap-2">
                        Masuk
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- <div class="mt-8 text-center flex items-center justify-center gap-2 opacity-30 hover:opacity-100 transition-opacity">
            <a href="{{ route('home') }}" class="text-[10px] text-white font-black uppercase tracking-widest flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Beranda
            </a>
        </div> -->
    </div>
</body>

</html>