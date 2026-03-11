<!-- Navbar -->
<header id="main-nav" class="fixed top-0 left-0 right-0 z-[100] transition-all duration-500 py-6 px-8 md:px-16">
    <div class="max-w-7xl mx-auto">
        <nav
            class="glass rounded-[32px] px-8 py-3 flex justify-between items-center border border-white/10 shadow-[0_20px_50px_-10px_rgba(0,0,0,0.1)]">
            <!-- Logo Section -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div
                    class="relative w-10 h-10 flex items-center justify-center transform group-hover:rotate-[15deg] transition-all duration-500">
                    <img src="{{ asset('Logogram_BKStd.ico') }}" alt="BK Studio Logo"
                        class="w-full h-full object-contain filter drop-shadow-[0_5px_10px_rgba(244,124,32,0.3)]">
                </div>
                <div class="flex flex-col">
                    <span class="text-sm font-black tracking-tighter leading-none">BALIKKUCING</span>
                    <span
                        class="text-[10px] font-bold text-bk-orange tracking-[0.2em] leading-none mt-1 uppercase opacity-80">Studio.</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-1">
                <a href="{{ route('home') }}"
                    class="px-5 py-2 rounded-full text-xs font-black tracking-widest uppercase transition-all duration-300 {{ request()->routeIs('home') ? 'bg-bk-orange text-white shadow-lg shadow-bk-orange/20' : 'hover:bg-foreground/5 opacity-60 hover:opacity-100 hover:text-bk-orange' }}">
                    Home
                </a>
                <a href="{{ route('layanan') }}"
                    class="px-5 py-2 rounded-full text-xs font-black tracking-widest uppercase transition-all duration-300 {{ request()->routeIs('layanan') ? 'bg-bk-orange text-white shadow-lg shadow-bk-orange/20' : 'hover:bg-foreground/5 opacity-60 hover:opacity-100 hover:text-bk-orange' }}">
                    Layanan
                </a>
                <a href="{{ route('about') }}"
                    class="px-5 py-2 rounded-full text-xs font-black tracking-widest uppercase transition-all duration-300 {{ request()->routeIs('about') ? 'bg-bk-orange text-white shadow-lg shadow-bk-orange/20' : 'hover:bg-foreground/5 opacity-60 hover:opacity-100 hover:text-bk-orange' }}">
                    About Us
                </a>
                <a href="{{ route('contact') }}"
                    class="px-5 py-2 rounded-full text-xs font-black tracking-widest uppercase transition-all duration-300 {{ request()->routeIs('contact') ? 'bg-bk-orange text-white shadow-lg shadow-bk-orange/20' : 'hover:bg-foreground/5 opacity-60 hover:opacity-100 hover:text-bk-orange' }}">
                    Contact
                </a>
            </div>

            <!-- Actions -->
            <div class="flex items-center gap-3">
                <!-- Theme Toggle -->
                <button id="theme-toggle"
                    class="p-2.5 rounded-2xl bg-foreground/5 hover:bg-bk-orange/10 transition-all duration-300 group">
                    <!-- Sun Icon (shown in dark mode) -->
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 text-bk-orange" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                    <!-- Moon Icon (shown in light mode) -->
                    <svg id="theme-toggle-dark-icon"
                        class="hidden w-5 h-5 text-foreground opacity-60 group-hover:opacity-100" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </button>

                <!-- CTA Button -->
                <button class="relative group hidden sm:block">
                    <a href="https://lynk.id/balikkucingstudio" target="_blank">
                        <div
                            class="absolute -inset-1 bg-bk-orange rounded-full blur-md opacity-25 group-hover:opacity-50 transition-opacity">
                        </div>
                        <div
                            class="relative bg-foreground dark:bg-bk-orange text-background dark:text-white px-6 py-2.5 rounded-full text-xs font-black tracking-widest uppercase transition-all hover:scale-105 active:scale-95">
                            Order Desain
                        </div>
                    </a>
                </button>

                <!-- Mobile Menu Button (Optional, can be added later) -->
                <button class="md:hidden p-2 text-foreground opacity-60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 8h16M4 16h16" />
                    </svg>
                </button>
            </div>
        </nav>
    </div>
</header>