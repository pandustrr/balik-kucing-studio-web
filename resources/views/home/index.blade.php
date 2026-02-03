@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 px-6 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-bk-orange/10 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 -left-24 w-64 h-64 bg-bk-orange/5 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto relative">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-bk-orange/10 text-bk-orange rounded-full text-sm font-bold tracking-wide uppercase">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                    </span>
                    will be in @cupkets 🔜 10-11 Jan26
                </div>

                <h1 class="text-5xl lg:text-7xl font-heading font-extrabold leading-[1.1]">
                    Ya Desain, Ya <br>Nge-gambar, <span class="text-bk-orange">Ya Merchandise.</span>
                </h1>

                <p class="text-lg lg:text-xl opacity-70 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    Affordable design agency for your design needs. <br><span class="italic font-semibold">"Desain rasa jeruk."</span>
                </p>

                <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start">
                    <button class="w-full sm:w-auto bg-ultra-black text-white dark:bg-bk-orange px-8 py-4 rounded-2xl font-bold flex items-center justify-center gap-2 hover:scale-105 transition-all shadow-2xl">
                        Lihat Portfolio
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14m-7-7 7 7-7 7" />
                        </svg>
                    </button>
                    <button class="w-full sm:w-auto bg-white dark:bg-white/5 border border-ultra-black/10 dark:border-white/10 px-8 py-4 rounded-2xl font-bold hover:scale-105 transition-all shadow-sm">
                        Cek Merchandise
                    </button>
                </div>

                <!-- Stats -->
                <div class="pt-8 flex items-center gap-8 justify-center lg:justify-start border-t border-ultra-black/5 dark:border-white/5">
                    <div>
                        <span class="block text-2xl font-bold font-heading">500+</span>
                        <span class="text-sm opacity-50">Proyek Selesai</span>
                    </div>
                    <div class="w-px h-8 bg-ultra-black/10 dark:bg-white/10"></div>
                    <div>
                        <span class="block text-2xl font-bold font-heading">100%</span>
                        <span class="text-sm opacity-50">Rasa Jeruk</span>
                    </div>
                </div>
            </div>

            <!-- Floating Image Mockup -->
            <div class="relative group">
                <div class="absolute inset-0 bg-bk-orange/30 rounded-[40px] rotate-3 blur-2xl group-hover:rotate-6 transition-transform duration-700"></div>
                <div class="relative aspect-square md:aspect-[4/5] bg-ultra-black rounded-[40px] overflow-hidden shadow-2xl transition-transform duration-700 group-hover:-translate-y-4">
                    <div class="absolute inset-0 flex items-center justify-center p-8 bg-gradient-to-br from-bk-orange to-[#d66e1b]">
                        <!-- Branding -->
                        <div class="text-center space-y-6">
                            <div class="w-32 h-32 bg-white rounded-3xl mx-auto shadow-2xl flex items-center justify-center text-bk-orange font-bold text-6xl transform -rotate-12 group-hover:rotate-0 transition-transform duration-500">B</div>
                            <div class="space-y-2">
                                <p class="text-white font-heading text-2xl font-bold italic">Balikkucing Studio</p>
                                <div class="h-1 w-12 bg-white/40 mx-auto rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative Glass Element -->
                    <div class="absolute bottom-8 left-8 right-8 glass-card p-6 rounded-3xl">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-white backdrop-blur-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 19l7-7 3 3-7 7-3-3z" />
                                    <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                                    <path d="M2 2l7.5 1.5" />
                                    <path d="M7.08 4.76L4.76 7.08" />
                                    <path d="M11 7.33l-2.33 2.33" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold">Creative Agency</h4>
                                <p class="text-xs opacity-60">Crafting Visual Wonders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="layanan" class="py-24 bg-white dark:bg-ultra-black/20 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center space-y-4 mb-20">
            <h2 class="text-bk-orange font-bold tracking-widest uppercase text-sm">Spesialisasi Kami</h2>
            <h3 class="text-4xl lg:text-5xl font-heading font-extrabold">Eksplorasi Katalog Kreatif</h3>
            <p class="opacity-60 max-w-2xl mx-auto italic">Desain yang memanjakan mata, digambar dengan hati, dan dicetak menjadi kebanggaan.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="group p-10 bg-white-cloud dark:bg-white/5 rounded-[32px] hover:bg-ultra-black dark:hover:bg-bk-orange transition-colors duration-500">
                <div class="w-14 h-14 bg-bk-orange/10 group-hover:bg-bk-orange group-hover:dark:bg-white rounded-2xl flex items-center justify-center mb-8 transition-colors duration-500 text-bk-orange group-hover:text-white group-hover:dark:text-bk-orange">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                        <line x1="8" y1="21" x2="16" y2="21" />
                        <line x1="12" y1="17" x2="12" y2="21" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold mb-4 group-hover:text-white transition-colors duration-500">Ya Desain</h4>
                <p class="opacity-60 group-hover:text-white transition-colors duration-500 leading-relaxed">
                    Solusi identitas visual, UI/UX, dan kebutuhan branding digital yang *affordable* namun tetap berkualitas tinggi.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="group p-10 bg-white-cloud dark:bg-white/5 rounded-[32px] hover:bg-ultra-black dark:hover:bg-bk-orange transition-colors duration-500">
                <div class="w-14 h-14 bg-bk-orange/10 group-hover:bg-bk-orange group-hover:dark:bg-white rounded-2xl flex items-center justify-center mb-8 transition-colors duration-500 text-bk-orange group-hover:text-white group-hover:dark:text-bk-orange">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 19l7-7 3 3-7 7-3-3z" />
                        <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                        <path d="M2 2l7.5 1.5" />
                        <path d="M7.08 4.76L4.76 7.08" />
                        <path d="M11 7.33l-2.33 2.33" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold mb-4 group-hover:text-white transition-colors duration-500">Ya Nge-gambar</h4>
                <p class="opacity-60 group-hover:text-white transition-colors duration-500 leading-relaxed">
                    Ilustrasi kustom, karakter desain, dan karya seni digital yang unik dan memiliki karakter yang kuat.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="group p-10 bg-white-cloud dark:bg-white/5 rounded-[32px] hover:bg-ultra-black dark:hover:bg-bk-orange transition-colors duration-500">
                <div class="w-14 h-14 bg-bk-orange/10 group-hover:bg-bk-orange group-hover:dark:bg-white rounded-2xl flex items-center justify-center mb-8 transition-colors duration-500 text-bk-orange group-hover:text-white group-hover:dark:text-bk-orange">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.38 3.46L16 5a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-2.62 2.25l2.43 14.23a2 2 0 0 0 2 1.66h9.14a2 2 0 0 0 2-1.66l2.43-14.23a2 2 0 0 0-2.62-2.25z" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold mb-4 group-hover:text-white transition-colors duration-500">Ya Merchandise</h4>
                <p class="opacity-60 group-hover:text-white transition-colors duration-500 leading-relaxed">
                    Transformasi karya seni menjadi produk nyata seperti stiker, kaos, gantungan kunci, dan banyak lagi.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Project Highlight -->
<section id="portfolio" class="py-24 bg-ultra-black text-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-1/2 h-full bg-bk-orange/5 blur-3xl rounded-full"></div>
    <div class="max-w-7xl mx-auto px-6 relative">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="aspect-square bg-white/5 rounded-2xl border border-white/10 flex items-center justify-center">
                            <span class="text-white/20 font-bold">Project A</span>
                        </div>
                        <div class="aspect-[3/4] bg-bk-orange/20 rounded-2xl border border-bk-orange/20 flex items-center justify-center">
                            <span class="text-bk-orange font-bold">Project B</span>
                        </div>
                    </div>
                    <div class="space-y-4 pt-8">
                        <div class="aspect-[3/4] bg-white/10 rounded-2xl border border-white/10 flex items-center justify-center">
                            <span class="text-white/30 font-bold">Project C</span>
                        </div>
                        <div class="aspect-square bg-white/5 rounded-2xl border border-white/10 flex items-center justify-center">
                            <span class="text-white/20 font-bold">Project D</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2 space-y-8">
                <h3 class="text-4xl lg:text-5xl font-heading font-extrabold leading-tight">Portofolio <br><span class="text-bk-orange">Rasa Jeruk.</span></h3>
                <p class="text-white/60 text-lg leading-relaxed">
                    Setiap proyek adalah buah dari kreativitas yang segar. Kami menggabungkan estetika desain grafis tradisional dengan tren modern.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-bk-orange rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                        <span>Identity Design</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-bk-orange rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                        <span>Custom Illustration</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-bk-orange rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                        <span>High Quality Merchandise</span>
                    </li>
                </ul>
                <button class="bg-white text-ultra-black px-8 py-4 rounded-2xl font-bold hover:scale-105 transition-all shadow-xl">
                    Lihat Semua Karya
                </button>
            </div>
        </div>
    </div>
</section>
@endsection