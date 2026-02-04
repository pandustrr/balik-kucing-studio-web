@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center pt-32 pb-20 px-6 overflow-hidden">
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
        <h2 class="text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform -rotate-12 translate-y-12 uppercase">
            OUR SERVICES
        </h2>
    </div>

    <!-- Section Title Background -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none select-none">
        <h2 class="text-[25vw] font-heading font-black opacity-[0.02] dark:opacity-[0.03] leading-none tracking-tighter uppercase">
            LAYANAN
        </h2>
    </div>

    <div class="max-w-7xl mx-auto relative reveal-group z-10 text-center">
        <div class="max-w-3xl mx-auto space-y-8">
            <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full text-xs font-black tracking-[0.2em] uppercase reveal-item">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                </span>
                {{ $hero->title ?? 'Apa yang Kami Lakukan' }}
            </div>
            <h1 class="text-6xl md:text-8xl font-heading font-black leading-none tracking-tighter reveal-item">
                {!! $hero->heading ?? 'KATALOG <br><span class="text-bk-orange uppercase">KREATIF.</span>' !!}
            </h1>
            <p class="text-xl opacity-60 mt-8 leading-relaxed reveal-item max-w-2xl mx-auto">
                {{ $hero->description ?? 'Dari sketsa kasar hingga produk siap pakai. Kami memberikan sentuhan magis di setiap piksel dan garis yang kami buat.' }}
            </p>
        </div>
    </div>
</section>



<!-- Services Section -->
<section id="layanan" class="relative py-32 bg-background overflow-hidden">
    <!-- Section Title Background -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 lg:-translate-x-1/3 pointer-events-none select-none">
        <h2 class="text-[25vw] font-heading font-black opacity-[0.02] dark:opacity-[0.03] leading-none tracking-tighter">
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
            <!-- Card 1 - Ya Desain -->
            <div class="group relative p-12 glass rounded-[48px] reveal-item transition-all duration-700 hover:-translate-y-4 hover:shadow-[0_40px_80px_-20px_rgba(244,124,32,0.15)] overflow-hidden">
                <div class="absolute -right-8 -top-8 w-32 h-32 bg-bk-orange/5 rounded-full blur-3xl group-hover:bg-bk-orange/20 transition-all duration-700"></div>

                <div class="relative z-10 space-y-8">
                    <div class="w-16 h-16 bg-foreground/5 dark:bg-white/5 rounded-2xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all duration-500 transform group-hover:rotate-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                            <line x1="8" y1="21" x2="16" y2="21" />
                            <line x1="12" y1="17" x2="12" y2="21" />
                        </svg>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-3xl font-heading font-black tracking-tight">YA DESAIN</h4>
                        <p class="opacity-60 leading-relaxed font-medium">
                            Solusi identitas visual, UI/UX, dan kebutuhan branding digital yang <span class="italic text-bk-orange">affordable</span> namun tetap berkualitas tinggi.
                        </p>

                        <!-- Service List -->
                        <ul class="space-y-2 pt-4 border-t border-foreground/5 dark:border-white/5">
                            <li class="flex items-center gap-2 text-sm opacity-70">
                                <svg class="w-4 h-4 text-bk-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Logo & Brand Identity
                            </li>
                            <li class="flex items-center gap-2 text-sm opacity-70">
                                <svg class="w-4 h-4 text-bk-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                UI/UX Design
                            </li>
                            <li class="flex items-center gap-2 text-sm opacity-70">
                                <svg class="w-4 h-4 text-bk-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Social Media Design
                            </li>
                        </ul>
                    </div>

                    <div class="inline-flex items-center gap-2 font-black text-xs tracking-widest uppercase text-bk-orange group-hover:gap-4 transition-all cursor-pointer">
                        Pelajari Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14m-7-7 7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 2 - Ya Ngegambar -->
            <div class="group relative p-12 glass rounded-[48px] reveal-item transition-all duration-700 hover:-translate-y-4 hover:shadow-[0_40px_80px_-20px_rgba(244,124,32,0.15)] overflow-hidden">
                <div class="absolute -right-8 -top-8 w-32 h-32 bg-bk-orange/5 rounded-full blur-3xl group-hover:bg-bk-orange/20 transition-all duration-700"></div>

                <div class="relative z-10 space-y-8">
                    <div class="w-16 h-16 bg-foreground/5 dark:bg-white/5 rounded-2xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all duration-500 transform group-hover:rotate-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
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
                            Ilustrasi kustom, karakter desain, dan karya seni digital yang unik dan memiliki karakter yang kuat.
                        </p>

                        <!-- Service List -->
                        <ul class="space-y-2 pt-4 border-t border-foreground/5 dark:border-white/5">
                            <li class="flex items-center gap-2 text-sm opacity-70">
                                <svg class="w-4 h-4 text-bk-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Character Design
                            </li>
                            <li class="flex items-center gap-2 text-sm opacity-70">
                                <svg class="w-4 h-4 text-bk-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Digital Illustration
                            </li>
                            <li class="flex items-center gap-2 text-sm opacity-70">
                                <svg class="w-4 h-4 text-bk-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Custom Artwork
                            </li>
                        </ul>
                    </div>

                    <div class="inline-flex items-center gap-2 font-black text-xs tracking-widest uppercase text-bk-orange group-hover:gap-4 transition-all cursor-pointer">
                        Order Ilustrasi
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14m-7-7 7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 3 - Ya Merch -->
            <div class="group relative p-12 glass rounded-[48px] reveal-item transition-all duration-700 hover:-translate-y-4 hover:shadow-[0_40px_80px_-20px_rgba(244,124,32,0.15)] overflow-hidden">
                <div class="absolute -right-8 -top-8 w-32 h-32 bg-bk-orange/5 rounded-full blur-3xl group-hover:bg-bk-orange/20 transition-all duration-700"></div>

                <div class="relative z-10 space-y-8">
                    <div class="w-16 h-16 bg-foreground/5 dark:bg-white/5 rounded-2xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all duration-500 transform group-hover:rotate-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.38 3.46L16 5a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-2.62 2.25l2.43 14.23a2 2 0 0 0 2 1.66h9.14a2 2 0 0 0 2-1.66l2.43-14.23a2 2 0 0 0-2.62-2.25z" />
                        </svg>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-3xl font-heading font-black tracking-tight">YA MERCH</h4>
                        <p class="opacity-60 leading-relaxed font-medium">
                            Transformasi karya seni menjadi produk nyata seperti stiker, kaos, gantungan kunci, dan banyak lagi.
                        </p>

                        <!-- Service List -->
                        <ul class="space-y-2 pt-4 border-t border-foreground/5 dark:border-white/5">
                            <li class="flex items-center gap-2 text-sm opacity-70">
                                <svg class="w-4 h-4 text-bk-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Custom Stickers
                            </li>
                            <li class="flex items-center gap-2 text-sm opacity-70">
                                <svg class="w-4 h-4 text-bk-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                T-Shirt Design
                            </li>
                            <li class="flex items-center gap-2 text-sm opacity-70">
                                <svg class="w-4 h-4 text-bk-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Keychains & More
                            </li>
                        </ul>
                    </div>

                    <div class="inline-flex items-center gap-2 font-black text-xs tracking-widest uppercase text-bk-orange group-hover:gap-4 transition-all cursor-pointer">
                        Buka Katalog
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14m-7-7 7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-32 bg-foreground/5 dark:bg-black/20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 reveal-group">
        <div class="text-center mb-20 reveal-item">
            <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs mb-6">Keunggulan Kami</h2>
            <h3 class="text-5xl md:text-7xl font-heading font-black leading-none tracking-tighter">
                Kenapa Harus <br><span class="text-bk-orange">Rasa Jeruk?</span>
            </h3>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 reveal-group">
            <!-- Feature 1 -->
            <div class="reveal-item glass p-8 rounded-[32px] border-bk-orange/10 hover:border-bk-orange/30 transition-all duration-500 group">
                <div class="w-14 h-14 bg-bk-orange/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-bk-orange group-hover:scale-110 transition-all duration-500">
                    <span class="text-bk-orange font-heading font-black text-2xl group-hover:text-white">01</span>
                </div>
                <h5 class="font-heading font-black text-xl mb-3">Kualitas Premium, Harga Ramah</h5>
                <p class="opacity-60 leading-relaxed">Kami percaya desain bagus tidak harus selalu mahal. Kami menawarkan paket yang fleksibel untuk UMKM hingga Startup.</p>
            </div>

            <!-- Feature 2 -->
            <div class="reveal-item glass p-8 rounded-[32px] border-bk-orange/10 hover:border-bk-orange/30 transition-all duration-500 group">
                <div class="w-14 h-14 bg-bk-orange/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-bk-orange group-hover:scale-110 transition-all duration-500">
                    <span class="text-bk-orange font-heading font-black text-2xl group-hover:text-white">02</span>
                </div>
                <h5 class="font-heading font-black text-xl mb-3">Proses Kreatif yang Terbuka</h5>
                <p class="opacity-60 leading-relaxed">Anda dilibatkan dalam setiap tahap, dari brainstorming ide hingga revisi akhir.</p>
            </div>

            <!-- Feature 3 -->
            <div class="reveal-item glass p-8 rounded-[32px] border-bk-orange/10 hover:border-bk-orange/30 transition-all duration-500 group">
                <div class="w-14 h-14 bg-bk-orange/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-bk-orange group-hover:scale-110 transition-all duration-500">
                    <span class="text-bk-orange font-heading font-black text-2xl group-hover:text-white">03</span>
                </div>
                <h5 class="font-heading font-black text-xl mb-3">Turnaround Time Cepat</h5>
                <p class="opacity-60 leading-relaxed">Kami memahami deadline Anda. Proses kerja yang efisien tanpa mengorbankan kualitas.</p>
            </div>

            <!-- Feature 4 -->
            <div class="reveal-item glass p-8 rounded-[32px] border-bk-orange/10 hover:border-bk-orange/30 transition-all duration-500 group">
                <div class="w-14 h-14 bg-bk-orange/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-bk-orange group-hover:scale-110 transition-all duration-500">
                    <span class="text-bk-orange font-heading font-black text-2xl group-hover:text-white">04</span>
                </div>
                <h5 class="font-heading font-black text-xl mb-3">Revisi Unlimited*</h5>
                <p class="opacity-60 leading-relaxed">Kepuasan Anda adalah prioritas. Kami siap merevisi hingga Anda puas dengan hasilnya.</p>
            </div>

            <!-- Feature 5 -->
            <div class="reveal-item glass p-8 rounded-[32px] border-bk-orange/10 hover:border-bk-orange/30 transition-all duration-500 group">
                <div class="w-14 h-14 bg-bk-orange/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-bk-orange group-hover:scale-110 transition-all duration-500">
                    <span class="text-bk-orange font-heading font-black text-2xl group-hover:text-white">05</span>
                </div>
                <h5 class="font-heading font-black text-xl mb-3">Tim Kreatif Berpengalaman</h5>
                <p class="opacity-60 leading-relaxed">Didukung oleh desainer dan ilustrator yang passionate dan berpengalaman di bidangnya.</p>
            </div>

            <!-- Feature 6 -->
            <div class="reveal-item glass p-8 rounded-[32px] border-bk-orange/10 hover:border-bk-orange/30 transition-all duration-500 group">
                <div class="w-14 h-14 bg-bk-orange/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-bk-orange group-hover:scale-110 transition-all duration-500">
                    <span class="text-bk-orange font-heading font-black text-2xl group-hover:text-white">06</span>
                </div>
                <h5 class="font-heading font-black text-xl mb-3">File Siap Produksi</h5>
                <p class="opacity-60 leading-relaxed">Semua file diberikan dalam format yang siap untuk print maupun digital.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-background">
    <div class="max-w-4xl mx-auto px-6 reveal-item">
        <div class="glass p-12 rounded-[48px] border-bk-orange/20 text-center">
            <h4 class="text-3xl md:text-4xl font-heading font-black mb-4">Siap Memulai Proyek Anda?</h4>
            <p class="text-lg opacity-60 mb-8 max-w-2xl mx-auto">Konsultasikan ide Anda dengan kami secara gratis. Mari wujudkan visi kreatif Anda bersama!</p>

            <form class="space-y-4 max-w-md mx-auto">
                <input type="text" placeholder="Nama Anda" class="w-full bg-foreground/5 dark:bg-white/5 border border-foreground/10 dark:border-white/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-bk-orange transition-colors">
                <input type="email" placeholder="Email Anda" class="w-full bg-foreground/5 dark:bg-white/5 border border-foreground/10 dark:border-white/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-bk-orange transition-colors">
                <!-- <select class="w-full bg-foreground/5 dark:bg-white/5 border border-foreground/10 dark:border-white/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-bk-orange appearance-none transition-colors">
                    <option>Pilih Layanan</option>
                    <option>Ya Desain</option>
                    <option>Ya Ngegambar</option>
                    <option>Ya Merch</option>
                </select> -->
                <button type="button" class="w-full bg-bk-orange text-white py-5 rounded-2xl font-black text-lg shadow-xl shadow-bk-orange/20 hover:scale-[1.02] active:scale-95 transition-all">
                    KONSULTASI GRATIS 🚀
                </button>
            </form>
        </div>
    </div>
</section>
@endsection