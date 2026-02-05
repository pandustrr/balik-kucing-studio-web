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
            <!-- Card 1: YA DESAIN -->
            <a href="{{ route('layanan') }}"
                class="group relative p-12 glass rounded-[48px] reveal-item transition-all duration-700 hover:-translate-y-4 hover:shadow-[0_40px_80px_-20px_rgba(244,124,32,0.15)] overflow-hidden block">
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
            </a>

            <!-- Card 2: YA NGEGAMBAR -->
            <a href="{{ route('layanan') }}"
                class="group relative p-12 glass rounded-[48px] reveal-item transition-all duration-700 hover:-translate-y-4 hover:shadow-[0_40px_80px_-20px_rgba(244,124,32,0.15)] overflow-hidden block">
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
            </a>

            <!-- Card 3: YA MERCH -->
            <a href="{{ route('merchandise') }}"
                class="group relative p-12 glass rounded-[48px] reveal-item transition-all duration-700 hover:-translate-y-4 hover:shadow-[0_40px_80px_-20px_rgba(244,124,32,0.15)] overflow-hidden block">
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
            </a>
        </div>
    </div>
</section>