@extends('layouts.app')

@section('content')
<section class="relative pt-48 pb-24 px-6 overflow-hidden bg-mesh min-h-screen">
    <!-- Big Animated Background Text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none overflow-hidden">
        <h2 class="text-[25vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform rotate-12 -translate-y-24">
            HELLO
        </h2>
    </div>

    <div class="max-w-7xl mx-auto relative w-full reveal-group">
        <div class="grid lg:grid-cols-12 gap-16 lg:gap-24 items-start">
            <!-- Left Side: Info -->
            <div class="lg:col-span-6 space-y-10">
                <div class="space-y-6 reveal-item">
                    <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs">Let's Talk</h2>
                    <h1 class="text-5xl md:text-7xl font-heading font-black leading-[0.9] tracking-tighter">
                        MARI <br><span class="text-bk-orange uppercase">KOLABORASI.</span>
                    </h1>
                    <p class="text-lg opacity-60 font-medium max-w-sm leading-relaxed">
                        Punya ide gila atau sekadar ingin menyapa? Pintu kami selalu terbuka untuk diskusi yang hangat.
                    </p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-1 gap-4 reveal-item">
                    <!-- Contact Card 1 -->
                    <a href="https://wa.me/6281234567890" target="_blank" class="group flex items-center gap-4 p-4 glass rounded-2xl transition-all hover:scale-105 active:scale-95">
                        <div class="w-12 h-12 bg-bk-orange/10 rounded-xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[9px] opacity-50 uppercase font-black tracking-widest">WhatsApp</p>
                            <p class="text-base font-bold">+62 812-3456-7890</p>
                        </div>
                    </a>

                    <!-- Contact Card 2 -->
                    <a href="mailto:halo@balikkucing.id" class="group flex items-center gap-4 p-4 glass rounded-2xl transition-all hover:scale-105 active:scale-95">
                        <div class="w-12 h-12 bg-bk-orange/10 rounded-xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[9px] opacity-50 uppercase font-black tracking-widest">Email</p>
                            <p class="text-base font-bold">halo@balikkucing.id</p>
                        </div>
                    </a>

                    <!-- Contact Card 3 (Location) -->
                    <div class="group flex items-center gap-4 p-4 glass rounded-2xl transition-all">
                        <div class="w-12 h-12 bg-bk-orange/10 rounded-xl flex items-center justify-center text-bk-orange">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[9px] opacity-50 uppercase font-black tracking-widest">Our Studio</p>
                            <p class="text-base font-bold">Yogyakarta, Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="flex items-center gap-3 reveal-item">
                    <a href="#" class="w-10 h-10 glass rounded-lg flex items-center justify-center text-xs font-bold hover:bg-bk-orange hover:text-white transition-all">IG</a>
                    <a href="#" class="w-10 h-10 glass rounded-lg flex items-center justify-center text-xs font-bold hover:bg-bk-orange hover:text-white transition-all">BE</a>
                    <a href="#" class="w-10 h-10 glass rounded-lg flex items-center justify-center text-xs font-bold hover:bg-bk-orange hover:text-white transition-all">TW</a>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="lg:col-span-6 reveal-item">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-bk-orange/10 to-transparent blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="relative glass p-6 md:p-10 rounded-[40px] border-white/5 overflow-hidden">
                        <div class="mb-8">
                            <h3 class="text-2xl font-heading font-black">Kirim Pesan <span class="text-bk-orange uppercase">Sekarang.</span></h3>
                        </div>

                        <form class="space-y-4 relative z-10">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="text-[9px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">Nama</label>
                                    <input type="text" class="w-full bg-foreground/5 dark:bg-white/5 border border-foreground/10 dark:border-white/10 rounded-xl px-5 py-3.5 focus:outline-none focus:border-bk-orange transition-all text-sm" placeholder="Jaki San">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[9px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">Email</label>
                                    <input type="email" class="w-full bg-foreground/5 dark:bg-white/5 border border-foreground/10 dark:border-white/10 rounded-xl px-5 py-3.5 focus:outline-none focus:border-bk-orange transition-all text-sm" placeholder="jaki@mail.com">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[9px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">Layanan</label>
                                <select class="w-full bg-foreground/5 dark:bg-white/5 border border-foreground/10 dark:border-white/10 rounded-xl px-4 py-3.5 focus:outline-none focus:border-bk-orange transition-all text-sm appearance-none cursor-pointer">
                                    <option>Pilih Layanan...</option>
                                    <option>Ya Desain</option>
                                    <option>Ya Nge-gambar</option>
                                    <option>Ya Merch</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[9px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">Pesan</label>
                                <textarea rows="3" class="w-full bg-foreground/5 dark:bg-white/5 border border-foreground/10 dark:border-white/10 rounded-xl px-5 py-3.5 focus:outline-none focus:border-bk-orange transition-all text-sm" placeholder="Ide Anda..."></textarea>
                            </div>

                            <button class="w-full bg-bk-orange text-white py-4 rounded-xl font-black transition-all hover:scale-[1.02] active:scale-95 shadow-lg shadow-bk-orange/20 flex items-center justify-center gap-2">
                                <span>KIRIM SEKARANG</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m12 5 7 7-7 7" />
                                    <path d="M5 12h14" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection