<!-- Hero Section -->
<section class="relative min-h-[80vh] md:min-h-screen flex items-center pt-24 md:pt-32 pb-16 md:pb-20 px-6 overflow-hidden">
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
        <h2 class="text-[30vw] md:text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform -rotate-12 translate-y-12 uppercase">
            MERCH
        </h2>
    </div>

    <!-- Decorative Gradients -->
    <div class="absolute top-0 right-0 w-[300px] md:w-[500px] h-[300px] md:h-[500px] bg-bk-orange/15 rounded-full blur-[100px] md:blur-[120px] -mr-32 md:-mr-64 -mt-16 md:-mt-32"></div>

    <div class="max-w-7xl mx-auto relative w-full reveal-group z-10 text-center">
        <div class="max-w-4xl mx-auto space-y-6 md:space-y-8">
            <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full text-[10px] md:text-xs font-black tracking-[0.2em] uppercase reveal-item">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                </span>
                {{ $hero->title ?? 'Official Store' }}
            </div>

            <h1 class="text-5xl md:text-8xl lg:text-9xl font-heading font-black leading-none tracking-tighter reveal-item text-white drop-shadow-xl">
                {!! $hero->heading ?? 'KOLEKSI <br><span class="text-bk-orange">EKSKLUSIF.</span>' !!}
            </h1>

            <p class="text-lg md:text-2xl opacity-80 mt-6 md:mt-8 leading-relaxed reveal-item max-w-2xl mx-auto font-medium text-white/90 px-4">
                {{ $hero->description ?? 'Bawa pulang semangat kreatif kami. Merchandise berkualitas tinggi dengan sentuhan desain rasa jeruk yang khas.' }}
            </p>
        </div>
    </div>
</section>