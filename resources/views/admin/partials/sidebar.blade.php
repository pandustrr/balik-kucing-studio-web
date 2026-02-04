<aside id="admin-sidebar" class="fixed top-0 left-0 bottom-0 w-56 bg-ultra-black border-r border-white/5 z-50 transition-all duration-500 overflow-y-auto">
    <div class="p-6 flex flex-col h-full">
        <!-- Logo -->
        <div class="flex items-center gap-3 mb-8 px-1">
            <div class="w-9 h-9 bg-bk-orange rounded-xl flex items-center justify-center shadow-[0_10px_20px_-5px_rgba(244,124,32,0.4)]">
                <img src="{{ asset('Logogram_BKStd.ico') }}" class="w-5 h-5 object-contain brightness-0 invert" alt="BK">
            </div>
            <div>
                <h1 class="font-black text-base uppercase tracking-tighter leading-none">BK <span class="text-bk-orange">Admin</span></h1>
                <p class="text-[7px] font-bold text-white/30 uppercase tracking-[0.2em] mt-1">Dashboard v1.0</p>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 space-y-1.5">
            <p class="text-[8px] font-black text-white/20 uppercase tracking-[0.3em] px-3 mb-3">Main Menu</p>

            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-bk-orange text-white shadow-xl shadow-bk-orange/20' : 'text-white/40 hover:bg-white/5 hover:text-white' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="text-[11px] font-black uppercase tracking-wider">Dashboard</span>
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/40 hover:bg-white/5 hover:text-white transition-all group">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:text-bk-orange transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="text-[11px] font-black uppercase tracking-wider">Portfolio</span>
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/40 hover:bg-white/5 hover:text-white transition-all group">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:text-bk-orange transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <span class="text-[11px] font-black uppercase tracking-wider">Merch</span>
            </a>

            <p class="text-[8px] font-black text-white/20 uppercase tracking-[0.3em] px-3 pt-6 mb-3">Account</p>

            <a href="{{ route('admin.settings') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.settings') ? 'bg-bk-orange text-white shadow-xl shadow-bk-orange/20' : 'text-white/40 hover:bg-white/5 hover:text-white' }} group">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:text-bk-orange transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-[11px] font-black uppercase tracking-wider">Settings</span>
            </a>
        </nav>

        <!-- Profile / Logout Section -->
        <div class="pt-6 border-t border-white/5 mt-auto">
            <div class="flex items-center gap-3 px-3 mb-4">
                <div class="w-9 h-9 rounded-xl bg-bk-orange flex items-center justify-center font-black text-white text-xs">
                    {{ substr(auth()->user()->name, 0, 1) }}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-[11px] font-black text-white truncate uppercase tracking-tight">{{ auth()->user()->name }}</p>
                    <p class="text-[8px] text-white/30 truncate font-bold uppercase tracking-wider">Super Admin</p>
                </div>
            </div>

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-red-500 hover:bg-red-500/10 transition-all group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="text-[9px] font-black uppercase tracking-wider">Logout</span>
                </button>
            </form>
        </div>
    </div>
</aside>