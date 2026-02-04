@extends('layouts.app')

@section('content')
<!-- Herbukano Section -->
<section id="home" class="relative min-h-screen flex items-center pt-32 pb-20 px-6 overflow-hidden">
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
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none overflow-hidden z-1">
        <h2
            class="text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform -rotate-12 translate-y-12">
            BALIKKUCING STUDIO
        </h2>
    </div>

    <!-- Decorative Gradients -->
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-bk-orange/15 rounded-full blur-[100px] -mr-64 -mt-32">
    </div>
    <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-bk-orange/5 rounded-full blur-[80px] -ml-40 -mb-20">
    </div>

    <div class="max-w-7xl mx-auto relative w-full reveal-group">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-8 space-y-12 text-center lg:text-left">
                <div
                    class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full text-xs font-black tracking-[0.2em] uppercase reveal-item">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                    </span>
                    {{ $hero->title ?? 'Creative Design Agency' }}
                </div>

                <div class="space-y-4 reveal-item">
                    <h1
                        class="text-6xl md:text-8xl lg:text-[100px] font-heading font-black leading-[0.9] tracking-tighter text-white drop-shadow-[0_10px_30px_rgba(0,0,0,0.5)]">
                        {!! $hero->heading ?? 'YA <span class="text-bk-orange">DESAIN,</span><br>YA <span class="text-bk-orange uppercase">NGEGAMBAR,</span><br>YA <span class="text-bk-orange">MERCH.</span>' !!}
                    </h1>
                </div>

                <div class="max-w-2xl mx-auto lg:mx-0 space-y-8 reveal-item">
                    <p class="text-xl md:text-2xl leading-relaxed font-bold text-white/90 drop-shadow-md">
                        {!! $hero->description ?? 'Affordable design agency for your design needs. <br><span class="text-bk-orange italic underline decoration-bk-orange/50 underline-offset-8">"Desain rasa jeruk."</span>' !!}
                    </p>

                    <div class="flex flex-col sm:flex-row items-center gap-6 justify-center lg:justify-start pt-4">
                        <button
                            class="group relative w-full sm:w-auto px-12 py-5 bg-bk-orange text-white rounded-2xl font-black text-xl transition-all hover:scale-105 active:scale-95 shadow-[0_20px_50px_rgba(244,124,32,0.4)] flex items-center justify-center gap-3">
                            <span>LIHAT PROJECT</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m12 5 7 7-7 7" />
                                <path d="M5 12h14" />
                            </svg>
                        </button>
                        <button
                            class="w-full sm:w-auto px-12 py-5 glass border-white/20 text-white rounded-2xl font-black text-xl transition-all hover:bg-white hover:text-ultra-black hover:scale-105 active:scale-95">
                            CEK MERCH
                        </button>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 hidden lg:block reveal-item">
                <div class="glass p-12 rounded-[48px] space-y-12 border-bk-orange/20 relative overflow-hidden group shadow-xl">
                    <div class="absolute -top-12 -right-12 w-32 h-32 bg-bk-orange/10 rounded-full blur-3xl group-hover:bg-bk-orange/30 transition-all duration-700"></div>

                    <div class="space-y-2 relative z-10">
                        <p class="text-6xl font-black font-heading text-bk-orange">500+</p>
                        <p class="text-xs font-black tracking-[0.3em] text-white/50 uppercase">Project Selesai</p>
                    </div>
                    <div class="h-px bg-white/10"></div>
                    <div class="space-y-2 relative z-10">
                        <p class="text-6xl font-black font-heading text-white italic">100%</p>
                        <p class="text-xs font-black tracking-[0.3em] text-white/50 uppercase">Rasa Jeruk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div
        class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-4 animate-bounce opacity-30">
        <span class="text-[10px] font-black tracking-[0.3em] uppercase vertical-rl text-white">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-white to-transparent"></div>
    </div>
</section>
<!-- Marquee Section -->
<div class="relative py-8 bg-foreground dark:bg-ultra-black overflow-hidden border-y border-foreground/5 dark:border-white/5 shadow-inner">
    <div class="flex whitespace-nowrap animate-marquee">
        @for ($i = 0; $i < 4; $i++)
            <div class="flex items-center gap-12 px-6">
            <span class="text-4xl md:text-6xl font-heading font-black text-bk-orange">BALIKKUCING STUDIO</span>
            <span class="w-4 h-4 md:w-6 md:h-6 rounded-full bg-foreground/20 dark:bg-white/20"></span>
            <span class="text-4xl md:text-6xl font-heading font-black text-foreground/30 dark:text-white/30">RASA JERUK</span>
            <span class="w-4 h-4 md:w-6 md:h-6 rounded-full bg-bk-orange"></span>
            <span class="text-4xl md:text-6xl font-heading font-black text-foreground dark:text-white">EST. 2024</span>
            <span class="w-4 h-4 md:w-6 md:h-6 rounded-full bg-foreground/20 dark:bg-white/20"></span>
    </div>
    @endfor
</div>
</div>
<!-- Services Section -->
<section id="layanan" class="relative py-32 bg-background overflow-hidden">
    <!-- Section Title Background -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 lg:-translate-x-1/3 pointer-events-none select-none">
        <h2
            class="text-[25vw] font-heading font-black opacity-[0.02] dark:opacity-[0.03] leading-none tracking-tighter">
            LAYANAN
        </h2>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative reveal-group">
        <div class="flex flex-col lg:flex-row justify-between items-end gap-12 mb-24 reveal-item">
            <div class="max-w-2xl space-y-6">
                <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs">Spesialisasi Kami</h2>
                <h3 class="text-5xl md:text-7xl font-heading font-black leading-none tracking-tighter">
                    EKSPLORASI <br>
                    <span class="text-bk-orange uppercase">Katalog</span> Kreatif.
                </h3>
            </div>
            <p class="max-w-md text-xl opacity-60 italic font-medium">
                Desain yang memanjakan mata, digambar dengan hati, dan dicetak menjadi kebanggaan.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 reveal-group">
            <!-- Card 1 -->
            <div
                class="group relative p-12 glass rounded-[48px] reveal-item transition-all duration-700 hover:-translate-y-4 hover:shadow-[0_40px_80px_-20px_rgba(244,124,32,0.15)] overflow-hidden">
                <div
                    class="absolute -right-8 -top-8 w-32 h-32 bg-bk-orange/5 rounded-full blur-3xl group-hover:bg-bk-orange/20 transition-all duration-700">
                </div>

                <div class="relative z-10 space-y-8">
                    <div
                        class="w-16 h-16 bg-foreground/5 dark:bg-white/5 rounded-2xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all duration-500 transform group-hover:rotate-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                            <line x1="8" y1="21" x2="16" y2="21" />
                            <line x1="12" y1="17" x2="12" y2="21" />
                        </svg>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-3xl font-heading font-black tracking-tight">YA DESAIN</h4>
                        <p class="opacity-60 leading-relaxed font-medium">
                            Solusi identitas visual, UI/UX, dan kebutuhan branding digital yang *affordable* namun tetap
                            berkualitas tinggi.
                        </p>
                    </div>

                    <div
                        class="inline-flex items-center gap-2 font-black text-xs tracking-widest uppercase text-bk-orange group-hover:gap-4 transition-all">
                        Pelajari Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14m-7-7 7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="group relative p-12 glass rounded-[48px] reveal-item transition-all duration-700 hover:-translate-y-4 hover:shadow-[0_40px_80px_-20px_rgba(244,124,32,0.15)] overflow-hidden">
                <div
                    class="absolute -right-8 -top-8 w-32 h-32 bg-bk-orange/5 rounded-full blur-3xl group-hover:bg-bk-orange/20 transition-all duration-700">
                </div>

                <div class="relative z-10 space-y-8">
                    <div
                        class="w-16 h-16 bg-foreground/5 dark:bg-white/5 rounded-2xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all duration-500 transform group-hover:rotate-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 19l7-7 3 3-7 7-3-3z" />
                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                            <path d="M2 2l7.5 1.5" />
                            <path d="M7.08 4.76L4.76 7.08" />
                            <path d="M11 7.33l-2.33 2.33" />
                        </svg>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-3xl font-heading font-black tracking-tight">YA NGEGAMBAR</h4>
                        <p class="opacity-60 leading-relaxed font-medium">
                            Ilustrasi kustom, karakter desain, dan karya seni digital yang unik dan memiliki karakter
                            yang kuat.
                        </p>
                    </div>

                    <div
                        class="inline-flex items-center gap-2 font-black text-xs tracking-widest uppercase text-bk-orange group-hover:gap-4 transition-all">
                        Order Ilustrasi
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14m-7-7 7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="group relative p-12 glass rounded-[48px] reveal-item transition-all duration-700 hover:-translate-y-4 hover:shadow-[0_40px_80px_-20px_rgba(244,124,32,0.15)] overflow-hidden">
                <div
                    class="absolute -right-8 -top-8 w-32 h-32 bg-bk-orange/5 rounded-full blur-3xl group-hover:bg-bk-orange/20 transition-all duration-700">
                </div>

                <div class="relative z-10 space-y-8">
                    <div
                        class="w-16 h-16 bg-foreground/5 dark:bg-white/5 rounded-2xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all duration-500 transform group-hover:rotate-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M20.38 3.46L16 5a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-2.62 2.25l2.43 14.23a2 2 0 0 0 2 1.66h9.14a2 2 0 0 0 2-1.66l2.43-14.23a2 2 0 0 0-2.62-2.25z" />
                        </svg>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-3xl font-heading font-black tracking-tight">YA MERCH</h4>
                        <p class="opacity-60 leading-relaxed font-medium">
                            Transformasi karya seni menjadi produk nyata seperti stiker, kaos, gantungan kunci, dan
                            banyak lagi.
                        </p>
                    </div>

                    <div
                        class="inline-flex items-center gap-2 font-black text-xs tracking-widest uppercase text-bk-orange group-hover:gap-4 transition-all">
                        Buka Katalog
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14m-7-7 7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="relative py-32 bg-background overflow-hidden">
    <!-- Big Section Background Text -->
    <div class="absolute bottom-0 right-1/2 translate-x-1/2 pointer-events-none select-none">
        <h2
            class="text-[30vw] font-heading font-black opacity-[0.02] dark:opacity-[0.03] leading-none tracking-tighter">
            ABOUT
        </h2>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative reveal-group">
        <div class="grid lg:grid-cols-2 gap-24 items-center">
            <div class="relative order-2 lg:order-1 reveal-item">
                <div class="absolute -inset-10 bg-bk-orange/10 blur-[100px] rounded-full"></div>

                <div class="relative grid grid-cols-2 gap-6 scale-90 md:scale-100">
                    <div class="space-y-6 pt-12">
                        <div
                            class="aspect-[4/5] glass rounded-[40px] p-8 flex flex-col justify-between group transition-all duration-500 hover:bg-bk-orange hover:border-transparent">
                            <h5 class="text-4xl font-heading font-black group-hover:text-white transition-colors">SIAPA
                            </h5>
                            <p class="text-sm font-bold opacity-60 group-hover:text-white/80 transition-colors">Team
                                kreatif yang berdedikasi tinggi demi visual terbaik.</p>
                        </div>
                        <div
                            class="aspect-square bg-ultra-black dark:bg-bk-orange rounded-[40px] p-8 flex items-center justify-center text-white">
                            <span class="text-6xl font-heading font-black">BK</span>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="aspect-square glass rounded-[40px] p-8 flex items-center justify-center">
                            <div class="w-20 h-2 bg-bk-orange rounded-full animate-pulse"></div>
                        </div>
                        <div
                            class="aspect-[4/5] glass border-2 border-bk-orange/30 rounded-[40px] p-8 flex flex-col justify-between group transition-all duration-500 hover:bg-bk-orange hover:border-transparent">
                            <h5
                                class="text-4xl font-heading font-black group-hover:text-white transition-colors uppercase">
                                VISI</h5>
                            <p class="text-sm font-bold opacity-60 group-hover:text-white/80 transition-colors">
                                Memanusiakan brand melalui visual yang berkarakter.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-12 order-1 lg:order-2 reveal-item">
                <div class="space-y-6">
                    <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs">Tentang Kami</h2>
                    <h3 class="text-6xl md:text-8xl font-heading font-black leading-[0.9] tracking-tighter">
                        LEBIH DARI <br>
                        <span class="text-bk-orange uppercase">SEKADAR</span> <br>
                        DESAIN.
                    </h3>
                </div>

                <div class="space-y-8">
                    <p class="text-2xl opacity-70 leading-relaxed font-medium">
                        Balik Kucing Studio lahir dari semangat untuk memberikan solusi visual yang tidak hanya cantik
                        secara estetika, tapi juga fungsional dan terjangkau.
                    </p>

                    <div class="h-px bg-foreground/10"></div>

                    <p class="text-xl opacity-60 leading-relaxed">
                        Kami percaya bahwa setiap ide hebat berhak mendapatkan representasi visual yang kuat. Kami
                        menggabungkan estetika desain grafis tradisional dengan tren modern untuk hasil yang <span
                            class="text-bk-orange font-bold italic">fresssh!</span>
                    </p>
                </div>

                <div class="flex items-center gap-8">
                    <button
                        class="px-10 py-5 bg-foreground text-background dark:bg-white dark:text-black rounded-2xl font-black text-lg transition-all hover:bg-bk-orange hover:text-white hover:scale-105 active:scale-95">
                        KENALI KAMI
                    </button>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 rounded-2xl bg-foreground/5 dark:bg-white/5 flex items-center justify-center hover:bg-bk-orange hover:text-white transition-all group border border-foreground/5 dark:border-white/5">
                            <span class="font-black text-xs">IG</span>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-2xl bg-foreground/5 dark:bg-white/5 flex items-center justify-center hover:bg-bk-orange hover:text-white transition-all group border border-foreground/5 dark:border-white/5">
                            <span class="font-black text-xs">BE</span>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-2xl bg-foreground/5 dark:bg-white/5 flex items-center justify-center hover:bg-bk-orange hover:text-white transition-all group border border-foreground/5 dark:border-white/5">
                            <span class="font-black text-xs">TW</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio-highlight" class="relative py-32 bg-background text-foreground transition-colors duration-500 overflow-hidden">
    <!-- Section Title Background -->
    <div class="absolute top-1/2 left-0 -translate-y-1/2 pointer-events-none select-none">
        <h2
            class="text-[25vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] leading-none tracking-tighter transform -rotate-90 origin-left">
            WORKS
        </h2>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative reveal-group">
        <div class="grid lg:grid-cols-12 gap-12 items-start mb-24 reveal-item">
            <div class="lg:col-span-8 space-y-6">
                <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs">Portofolio</h2>
                <h3 class="text-6xl md:text-8xl font-heading font-black leading-[0.9] tracking-tighter">
                    HASIL KARYA <br>
                    <span class="text-bk-orange uppercase">RASA JERUK.</span>
                </h3>
            </div>
            <div class="lg:col-span-4 lg:pt-12">
                <p class="text-xl opacity-60 leading-relaxed font-medium pt-8 border-t border-foreground/10">
                    Setiap proyek adalah buah dari kreativitas yang segar. Kami menggabungkan estetika desain grafis
                    tradisional dengan tren modern.
                </p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 reveal-group">
            <!-- Project Card 1 -->
            <a href="#"
                class="group relative block aspect-[4/5] rounded-[48px] overflow-hidden bg-foreground/5 border border-foreground/5 transition-all duration-700 hover:scale-[0.98] reveal-item">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-60 transition-all duration-700">
                </div>
                <!-- Placeholder for Image -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <span
                        class="text-foreground/10 font-heading font-black text-8xl transition-all duration-700 group-hover:scale-110 group-hover:text-bk-orange/20">01</span>
                </div>
                <!-- Content Overlay -->
                <div
                    class="absolute inset-0 p-12 flex flex-col justify-end gap-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-700">
                    <p class="text-bk-orange font-black tracking-widest text-xs uppercase opacity-0 group-hover:opacity-100 transition-opacity">Branding & Identity</p>
                    <h4 class="text-4xl font-heading font-black text-foreground group-hover:text-white transition-colors">Orange Soda Rebrand</h4>
                    <div class="h-px w-0 group-hover:w-full bg-white/20 transition-all duration-700 delay-100"></div>
                </div>
            </a>

            <!-- Project Card 2 -->
            <a href="#"
                class="group relative block aspect-[4/5] rounded-[48px] overflow-hidden bg-foreground/5 border border-foreground/5 transition-all duration-700 hover:scale-[0.98] md:translate-y-20 reveal-item">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-60 transition-all duration-700">
                </div>
                <!-- Placeholder for Image -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <span
                        class="text-foreground/10 font-heading font-black text-8xl transition-all duration-700 group-hover:scale-110 group-hover:text-bk-orange/20">02</span>
                </div>
                <!-- Content Overlay -->
                <div
                    class="absolute inset-0 p-12 flex flex-col justify-end gap-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-700">
                    <p class="text-bk-orange font-black tracking-widest text-xs uppercase opacity-0 group-hover:opacity-100 transition-opacity">Digital Illustration</p>
                    <h4 class="text-4xl font-heading font-black text-foreground group-hover:text-white transition-colors">Cyberpunk Series</h4>
                    <div class="h-px w-0 group-hover:w-full bg-white/20 transition-all duration-700 delay-100"></div>
                </div>
            </a>

            <!-- Project Card 3 -->
            <a href="#"
                class="group relative block aspect-[4/5] rounded-[48px] overflow-hidden bg-foreground/5 border border-foreground/5 transition-all duration-700 hover:scale-[0.98] reveal-item">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-60 transition-all duration-700">
                </div>
                <!-- Placeholder for Image -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <span
                        class="text-foreground/10 font-heading font-black text-8xl transition-all duration-700 group-hover:scale-110 group-hover:text-bk-orange/20">03</span>
                </div>
                <!-- Content Overlay -->
                <div
                    class="absolute inset-0 p-12 flex flex-col justify-end gap-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-700">
                    <p class="text-bk-orange font-black tracking-widest text-xs uppercase opacity-0 group-hover:opacity-100 transition-opacity">Merchandise Design</p>
                    <h4 class="text-4xl font-heading font-black text-foreground group-hover:text-white transition-colors">Sticker Pack Vol.1</h4>
                    <div class="h-px w-0 group-hover:w-full bg-white/20 transition-all duration-700 delay-100"></div>
                </div>
            </a>
        </div>

        <div class="mt-48 text-center reveal-item">
            <button
                class="group relative px-12 py-6 bg-foreground text-background dark:bg-white dark:text-ultra-black rounded-3xl font-black text-xl transition-all hover:bg-bk-orange hover:text-white hover:scale-105 active:scale-95 shadow-xl">
                EKSPLORASI SEMUA KARYA
                <div
                    class="absolute -inset-1 bg-bk-orange blur-2xl opacity-0 group-hover:opacity-30 transition-opacity">
                </div>
            </button>
        </div>
    </div>
</section>
@endsection