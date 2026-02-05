@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative pt-48 pb-24 px-6 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0 bg-ultra-black">
        @if(isset($hero) && $hero->background_image)
        <img src="{{ Storage::url($hero->background_image) }}" alt="Background"
            class="w-full h-full object-cover opacity-60 dark:opacity-40 grayscale-[0.1] dark:grayscale-0"
            fetchpriority="high"
            decoding="async">
        @else
        <img src="{{ asset('default-bg.png') }}" alt="Background"
            class="w-full h-full object-cover opacity-60 dark:opacity-40 grayscale-[0.1] dark:grayscale-0"
            fetchpriority="high"
            decoding="async">
        @endif
    </div>

    <!-- Big Animated Background Text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none overflow-hidden">
        <h2 class="text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform -rotate-12 translate-y-12">
            HELLO
        </h2>
    </div>

    <!-- Decorative Gradients -->
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-bk-orange/10 rounded-full blur-[120px] -mr-64 -mt-32"></div>
    <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-bk-orange/5 rounded-full blur-[100px] -ml-40 -mb-20"></div>

    <div class="max-w-7xl mx-auto relative w-full reveal-group z-10">
        <div class="grid lg:grid-cols-12 gap-16 lg:gap-24 items-start">
            <!-- Left Side: Info -->
            <div class="lg:col-span-6 space-y-10">
                <div class="space-y-6 reveal-item">
                    <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full text-xs font-black tracking-[0.2em] uppercase">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                        </span>
                        {{ $hero->title ?? "Let's Talk" }}
                    </div>
                    <h1 class="text-5xl md:text-7xl font-heading font-black leading-[0.9] tracking-tighter">
                        {!! $hero->heading ?? 'MARI <br><span class="text-bk-orange uppercase">KOLABORASI.</span>' !!}
                    </h1>
                    <p class="text-lg opacity-60 font-medium max-w-sm leading-relaxed">
                        {{ $hero->description ?? 'Punya ide gila atau sekadar ingin menyapa? Pintu kami selalu terbuka untuk diskusi yang hangat. ☕' }}
                    </p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-1 gap-4 reveal-item">
                    <!-- Contact Card 1 -->
                    <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" class="group flex items-center gap-4 p-5 glass rounded-2xl transition-all hover:scale-105 hover:border-bk-orange/30 active:scale-95">
                        <div class="w-14 h-14 bg-bk-orange/10 rounded-xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-[9px] opacity-50 uppercase font-black tracking-widest">WhatsApp</p>
                            <p class="text-base font-bold">+{{ $whatsappNumber }}</p>
                        </div>
                        <svg class="w-5 h-5 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                    <!-- Contact Card 2 -->
                    <a href="mailto:halo@balikkucing.id" class="group flex items-center gap-4 p-5 glass rounded-2xl transition-all hover:scale-105 hover:border-bk-orange/30 active:scale-95">
                        <div class="w-14 h-14 bg-bk-orange/10 rounded-xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-[9px] opacity-50 uppercase font-black tracking-widest">Email</p>
                            <p class="text-base font-bold">halo@balikkucing.id</p>
                        </div>
                        <svg class="w-5 h-5 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                    <!-- Contact Card 3 (Location) -->
                    <div class="group flex items-center gap-4 p-5 glass rounded-2xl transition-all">
                        <div class="w-14 h-14 bg-bk-orange/10 rounded-xl flex items-center justify-center text-bk-orange">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[9px] opacity-50 uppercase font-black tracking-widest">Our Studio</p>
                            <p class="text-base font-bold">Yogyakarta, Indonesia 🇮🇩</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="reveal-item">
                    <p class="text-xs font-bold opacity-40 uppercase tracking-wider mb-4">Follow Us</p>
                    <div class="flex items-center gap-3">
                        <a href="#" class="w-12 h-12 glass rounded-xl flex items-center justify-center text-xs font-bold hover:bg-bk-orange hover:text-white hover:scale-110 transition-all">IG</a>
                        <a href="#" class="w-12 h-12 glass rounded-xl flex items-center justify-center text-xs font-bold hover:bg-bk-orange hover:text-white hover:scale-110 transition-all">BE</a>
                        <a href="#" class="w-12 h-12 glass rounded-xl flex items-center justify-center text-xs font-bold hover:bg-bk-orange hover:text-white hover:scale-110 transition-all">TW</a>
                        <a href="#" class="w-12 h-12 glass rounded-xl flex items-center justify-center text-xs font-bold hover:bg-bk-orange hover:text-white hover:scale-110 transition-all">FB</a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="lg:col-span-6 reveal-item">
                <div class="relative group">
                    <div class="absolute -inset-1 
                        bg-[linear-gradient(to_right,var(--tw-color-bk-orange)/10,transparent)] 
                        blur-xl opacity-0 
                        group-hover:opacity-100 
                        transition-opacity duration-500">
                    </div>

                    <div class="relative glass p-8 md:p-10 rounded-[40px] border-white/5 overflow-hidden">
                        <div class="mb-8">
                            <h3 class="text-2xl font-heading font-black">Kirim Pesan <span class="text-bk-orange uppercase">Sekarang.</span></h3>
                            <p class="text-sm opacity-60 mt-2">Kami akan merespons dalam 24 jam ⚡</p>
                        </div>

                        <form class="space-y-5 relative z-10">
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
                                <label class="text-[9px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">No. WhatsApp</label>
                                <input type="tel" class="w-full bg-foreground/5 dark:bg-white/5 border border-foreground/10 dark:border-white/10 rounded-xl px-5 py-3.5 focus:outline-none focus:border-bk-orange transition-all text-sm" placeholder="+62 812-3456-7890">
                            </div>

                            <!-- <div class="space-y-2">
                                <label class="text-[9px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">Layanan</label>
                                <select class="w-full bg-foreground/5 dark:bg-white/5 border border-foreground/10 dark:border-white/10 rounded-xl px-4 py-3.5 focus:outline-none focus:border-bk-orange transition-all text-sm appearance-none cursor-pointer">
                                    <option>Pilih Layanan...</option>
                                    <option>Ya Desain</option>
                                    <option>Ya Ngegambar</option>
                                    <option>Ya Merch</option>
                                    <option>Konsultasi Umum</option>
                                </select>
                            </div> -->

                            <div class="space-y-2">
                                <label class="text-[9px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">Pesan</label>
                                <textarea rows="4" class="w-full bg-foreground/5 dark:bg-white/5 border border-foreground/10 dark:border-white/10 rounded-xl px-5 py-3.5 focus:outline-none focus:border-bk-orange transition-all text-sm resize-none" placeholder="Ceritakan ide Anda..."></textarea>
                            </div>

                            <button type="button" class="w-full bg-bk-orange text-white py-4 rounded-xl font-black transition-all hover:scale-[1.02] active:scale-95 shadow-lg shadow-bk-orange/20 flex items-center justify-center gap-2">
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



<!-- FAQ Section -->
<section class="py-32 bg-background">
    <div class="max-w-4xl mx-auto px-6 reveal-group">
        <div class="text-center mb-16 reveal-item">
            <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs mb-6">FAQ</h2>
            <h3 class="text-5xl md:text-6xl font-heading font-black leading-none tracking-tighter">
                Pertanyaan <span class="text-bk-orange">Umum</span>
            </h3>
        </div>

        <div class="space-y-4 reveal-group">
            <!-- FAQ Item 1 -->
            <details class="reveal-item glass p-6 rounded-2xl group cursor-pointer hover:border-bk-orange/30 transition-all">
                <summary class="font-heading font-black text-lg flex items-center justify-between cursor-pointer">
                    <span>Berapa lama waktu pengerjaan proyek?</span>
                    <svg class="w-5 h-5 text-bk-orange transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>
                <p class="mt-4 opacity-60 leading-relaxed">Waktu pengerjaan bervariasi tergantung kompleksitas proyek. Untuk logo design biasanya 3-5 hari kerja, UI/UX 1-2 minggu, dan ilustrasi custom 5-7 hari kerja. Kami selalu berusaha memenuhi deadline Anda!</p>
            </details>

            <!-- FAQ Item 2 -->
            <details class="reveal-item glass p-6 rounded-2xl group cursor-pointer hover:border-bk-orange/30 transition-all">
                <summary class="font-heading font-black text-lg flex items-center justify-between cursor-pointer">
                    <span>Apakah ada batasan revisi?</span>
                    <svg class="w-5 h-5 text-bk-orange transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>
                <p class="mt-4 opacity-60 leading-relaxed">Kami menawarkan unlimited revisi* untuk memastikan Anda 100% puas dengan hasil akhir. *Selama masih dalam scope proyek yang disepakati di awal.</p>
            </details>

            <!-- FAQ Item 3 -->
            <details class="reveal-item glass p-6 rounded-2xl group cursor-pointer hover:border-bk-orange/30 transition-all">
                <summary class="font-heading font-black text-lg flex items-center justify-between cursor-pointer">
                    <span>Bagaimana sistem pembayaran?</span>
                    <svg class="w-5 h-5 text-bk-orange transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>
                <p class="mt-4 opacity-60 leading-relaxed">Kami menggunakan sistem DP 50% di awal dan pelunasan 50% setelah proyek selesai. Pembayaran dapat dilakukan via transfer bank atau e-wallet.</p>
            </details>

            <!-- FAQ Item 4 -->
            <details class="reveal-item glass p-6 rounded-2xl group cursor-pointer hover:border-bk-orange/30 transition-all">
                <summary class="font-heading font-black text-lg flex items-center justify-between cursor-pointer">
                    <span>Format file apa yang akan saya terima?</span>
                    <svg class="w-5 h-5 text-bk-orange transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>
                <p class="mt-4 opacity-60 leading-relaxed">Anda akan menerima file dalam berbagai format: AI, EPS, PDF, PNG, JPG, dan SVG. Semua file siap untuk print maupun digital use!</p>
            </details>

            <!-- FAQ Item 5 -->
            <details class="reveal-item glass p-6 rounded-2xl group cursor-pointer hover:border-bk-orange/30 transition-all">
                <summary class="font-heading font-black text-lg flex items-center justify-between cursor-pointer">
                    <span>Apakah bisa konsultasi dulu sebelum order?</span>
                    <svg class="w-5 h-5 text-bk-orange transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>
                <p class="mt-4 opacity-60 leading-relaxed">Tentu saja! Konsultasi gratis kok. Hubungi kami via WhatsApp atau email untuk diskusi lebih lanjut tentang kebutuhan Anda. Kami senang membantu! 😊</p>
            </details>
        </div>
    </div>
</section>
@endsection