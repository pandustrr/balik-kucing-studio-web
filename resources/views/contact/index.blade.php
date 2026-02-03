@extends('layouts.app')

@section('content')
<section class="relative pt-48 pb-24 px-6 overflow-hidden bg-mesh min-h-screen flex items-center">
    <div class="max-w-7xl mx-auto relative w-full reveal-group">
        <div class="grid lg:grid-cols-12 gap-24 items-start">
            <div class="lg:col-span-5 reveal-item space-y-12">
                <div class="space-y-6">
                    <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs">Hubungi Kami</h2>
                    <h1 class="text-6xl md:text-8xl font-heading font-black leading-[0.9] tracking-tighter">
                        MARI <br>KOLABORASI.
                    </h1>
                </div>

                <div class="space-y-8">
                    <div class="group flex items-center gap-6">
                        <div class="w-16 h-16 glass rounded-2xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm opacity-50 uppercase font-bold tracking-widest">WhatsApp</p>
                            <p class="text-xl font-bold">+62 812-3456-7890</p>
                        </div>
                    </div>

                    <div class="group flex items-center gap-6">
                        <div class="w-16 h-16 glass rounded-2xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm opacity-50 uppercase font-bold tracking-widest">Email</p>
                            <p class="text-xl font-bold">halo@balikkucing.id</p>
                        </div>
                    </div>

                    <div class="group flex items-center gap-6">
                        <div class="w-16 h-16 glass rounded-2xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm opacity-50 uppercase font-bold tracking-widest">Lokasi</p>
                            <p class="text-xl font-bold">Yogyakarta, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 reveal-item glass p-12 rounded-[48px] border-white/5 relative overflow-hidden">
                <div class="absolute -top-24 -right-24 w-96 h-96 bg-bk-orange/5 rounded-full blur-[100px]"></div>

                <h3 class="text-3xl font-heading font-black mb-8 relative z-10">Katakan <span class="text-bk-orange uppercase">Halo!</span></h3>

                <form class="grid md:grid-cols-2 gap-6 relative z-10">
                    <div class="space-y-4">
                        <label class="text-xs font-bold uppercase tracking-widest opacity-50">Nama Lengkap</label>
                        <input type="text" class="w-full bg-foreground/5 border border-foreground/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-bk-orange" placeholder="Jaki San">
                    </div>
                    <div class="space-y-4">
                        <label class="text-xs font-bold uppercase tracking-widest opacity-50">Email</label>
                        <input type="email" class="w-full bg-foreground/5 border border-foreground/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-bk-orange" placeholder="jaki@mail.id">
                    </div>
                    <div class="md:col-span-2 space-y-4">
                        <label class="text-xs font-bold uppercase tracking-widest opacity-50">Pesan Anda</label>
                        <textarea rows="4" class="w-full bg-foreground/5 border border-foreground/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-bk-orange" placeholder="Ceritakan ide hebat Anda..."></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button class="w-full bg-bk-orange text-white py-5 rounded-2xl font-black text-lg transition-all hover:scale-[1.02] shadow-2xl shadow-bk-orange/30">
                            KIRIM PESAN SEKARANG
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection