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
            <a href="#home" class="hover:text-bk-orange transition-colors">Home</a>
            <a href="#layanan" class="hover:text-bk-orange transition-colors">Layanan</a>
            <a href="#about" class="hover:text-bk-orange transition-colors">About Us</a>
            <a href="#contact" class="hover:text-bk-orange transition-colors">Contact Us</a>
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