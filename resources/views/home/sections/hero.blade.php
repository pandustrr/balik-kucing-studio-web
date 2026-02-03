<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center pt-32 pb-20 px-6 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero_bg.png') }}" alt="Background" class="w-full h-full object-cover opacity-30 dark:opacity-50">
        <div class="absolute inset-0 bg-gradient-to-b from-background via-background/80 to-background dark:from-background dark:via-transparent dark:to-background"></div>
    </div>

    <!-- Big Animated Background Text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none overflow-hidden z-1">
        <h2 class="text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform -rotate-12 translate-y-12">
            BALIKKUCING STUDIO
        </h2>
    </div>

    <!-- Decorative Gradients -->
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-bk-orange/15 rounded-full blur-[100px] -mr-64 -mt-32"></div>
    <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-bk-orange/5 rounded-full blur-[80px] -ml-40 -mb-20"></div>

    <div class="max-w-7xl mx-auto relative w-full reveal-group">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-8 space-y-12 text-center lg:text-left">
                <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full text-xs font-black tracking-[0.2em] uppercase reveal-item">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                    </span>
                    Creative Design Agency
                </div>

                <div class="space-y-4 reveal-item">
                    <h1 class="text-6xl md:text-8xl lg:text-[100px] font-heading font-black leading-[0.9] tracking-tighter">
                        YA <span class="text-bk-orange">DESAIN,</span><br>
                        YA <span class="text-bk-orange uppercase">NGGAMBAR,</span><br>
                        YA <span class="text-bk-orange">MERCH.</span>
                    </h1>
                </div>

                <div class="max-w-2xl mx-auto lg:mx-0 space-y-8 reveal-item">
                    <p class="text-xl md:text-2xl opacity-70 leading-relaxed font-medium">
                        Affordable design agency for your design needs. <br>
                        <span class="text-bk-orange italic font-bold">"Desain rasa jeruk."</span>
                    </p>

                    <div class="flex flex-col sm:flex-row items-center gap-6 justify-center lg:justify-start pt-4">
                        <button class="group relative w-full sm:w-auto px-10 py-5 bg-ultra-black dark:bg-bk-orange text-white rounded-2xl font-black text-lg transition-all hover:scale-105 active:scale-95 shadow-2xl">
                            LIHAT PROJECT
                            <div class="absolute inset-0 rounded-2xl bg-white/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </button>
                        <button class="w-full sm:w-auto px-10 py-5 glass border-white/10 text-foreground rounded-2xl font-black text-lg transition-all hover:bg-white-cloud dark:hover:bg-white/5 hover:scale-105 active:scale-95">
                            CEK MERCH
                        </button>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 hidden lg:block reveal-item">
                <div class="glass p-10 rounded-[40px] space-y-12">
                    <div class="space-y-2">
                        <p class="text-4xl font-black font-heading text-bk-orange line-clamp-1">500+</p>
                        <p class="text-xs font-bold tracking-widest opacity-50 uppercase">Project Selesai</p>
                    </div>
                    <div class="h-px bg-foreground/10"></div>
                    <div class="space-y-2">
                        <p class="text-4xl font-black font-heading line-clamp-1 italic">100%</p>
                        <p class="text-xs font-bold tracking-widest opacity-50 uppercase">Rasa Jeruk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-4 animate-bounce opacity-30">
        <span class="text-[10px] font-black tracking-[0.3em] uppercase vertical-rl">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-foreground to-transparent"></div>
    </div>
</section>