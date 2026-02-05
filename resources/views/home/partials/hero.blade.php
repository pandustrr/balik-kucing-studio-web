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
                        <a href="{{ route('layanan') }}"
                            class="group relative w-full sm:w-auto px-12 py-5 bg-bk-orange text-white rounded-2xl font-black text-xl transition-all hover:scale-105 active:scale-95 shadow-[0_20px_50px_rgba(244,124,32,0.4)] flex items-center justify-center gap-3">
                            <span>LIHAT PROJECT</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m12 5 7 7-7 7" />
                                <path d="M5 12h14" />
                            </svg>
                        </a>
                        <a href="{{ route('merchandise') }}"
                            class="w-full sm:w-auto px-12 py-5 glass border-white/20 text-white rounded-2xl font-black text-xl transition-all hover:bg-white hover:text-ultra-black hover:scale-105 active:scale-95 flex items-center justify-center">
                            CEK MERCH
                        </a>
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