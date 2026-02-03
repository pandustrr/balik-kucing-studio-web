<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        // Check for dark mode preference
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <title>@yield('title', 'Balikkucing Studio | Graphic Design Agency')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--background);
            color: var(--foreground);
        }

        .font-heading {
            font-family: 'Instrument Sans', sans-serif;
        }

        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
        }

        nav {
            background-color: var(--nav-bg);
            border-color: var(--border-color);
        }
    </style>
    @stack('styles')
</head>

<body class="antialiased overflow-x-hidden">
    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 backdrop-blur-md border-b">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-bk-orange rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-bk-orange/20">
                    B
                </div>
                <span class="text-xl font-bold tracking-tight font-heading">Balikkucing Studio</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8 font-medium">
                <a href="#portfolio" class="hover:text-bk-orange transition-colors">Portfolio</a>
                <a href="#layanan" class="hover:text-bk-orange transition-colors">Layanan</a>
                <a href="#merchandise" class="hover:text-bk-orange transition-colors">Merchandise</a>
                <a href="#kontak" class="hover:text-bk-orange transition-colors">Kontak</a>
            </div>

            <div class="flex items-center gap-4">
                <!-- Theme Toggle -->
                <button id="theme-toggle" class="p-2 rounded-xl bg-ultra-black/5 dark:bg-white/5 hover:bg-bk-orange/10 transition-colors group">
                    <!-- Sun Icon (shown in dark mode) -->
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 text-bk-orange" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                    <!-- Moon Icon (shown in light mode) -->
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-ultra-black" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </button>

                <a href="#" class="hidden sm:block text-sm font-semibold hover:text-bk-orange transition-colors">Masuk</a>
                <button class="bg-bk-orange text-white px-6 py-2.5 rounded-full font-semibold shadow-xl shadow-bk-orange/30 hover:scale-105 transition-transform active:scale-95">
                    Order Desain
                </button>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="kontak" class="bg-ultra-black text-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 border-b border-white/10 pb-12">
                <div class="space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-bk-orange rounded-lg flex items-center justify-center text-white font-bold tracking-tighter">B</div>
                        <span class="text-xl font-bold tracking-tight font-heading">Balikkucing Studio</span>
                    </div>
                    <p class="text-white/50 text-sm leading-relaxed">
                        Affordable design agency for your design needs. Desain rasa jeruk.
                    </p>
                </div>

                <div>
                    <h5 class="font-bold mb-6 italic">Navigasi</h5>
                    <ul class="space-y-4 text-white/50 text-sm">
                        <li><a href="#" class="hover:text-bk-orange transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-bk-orange transition-colors">Kontributor</a></li>
                        <li><a href="#" class="hover:text-bk-orange transition-colors">Syarat & Ketentuan</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="font-bold mb-6 italic">Komunitas</h5>
                    <ul class="space-y-4 text-white/50 text-sm">
                        <li><a href="#" class="hover:text-bk-orange transition-colors">Grup Membaca</a></li>
                        <li><a href="#" class="hover:text-bk-orange transition-colors">Acara Literasi</a></li>
                        <li><a href="#" class="hover:text-bk-orange transition-colors">Blog</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="font-bold mb-6 italic">Hubungi Kami</h5>
                    <p class="text-white/50 text-sm mb-4">Mendapatkan berita terbaru dari kami.</p>
                    <div class="flex gap-2">
                        <input type="email" placeholder="Email Anda" class="bg-white/5 border border-white/10 rounded-xl px-4 py-2 text-sm w-full focus:outline-none focus:border-bk-orange">
                        <button class="bg-bk-orange p-2 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m22 2-7 20-4-9-9-4Z" />
                                <path d="M22 2 11 13" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="pt-12 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-white/30 text-xs">© 2024 Balikkucing Studio. All rights reserved.</p>
                <div class="flex gap-6">
                    <!-- Social icons (simplified) -->
                    <a href="#" class="text-white/30 hover:text-bk-orange transition-colors">Instagram</a>
                    <a href="#" class="text-white/30 hover:text-bk-orange transition-colors">LinkedIn</a>
                    <a href="#" class="text-white/30 hover:text-bk-orange transition-colors">Twitter</a>
                </div>
            </div>
        </div>
    </footer>
    @stack('scripts')
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {
            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('theme')) {
                if (localStorage.getItem('theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
            }
        });
    </script>
</body>

</html>