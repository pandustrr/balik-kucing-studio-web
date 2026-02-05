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
        <h2 class="text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform -rotate-12 translate-y-12">
            OUR STORY
        </h2>
    </div>

    <!-- Section Title Background -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 pointer-events-none select-none">
        <h2 class="text-[25vw] font-heading font-black opacity-[0.02] dark:opacity-[0.03] leading-none tracking-tighter uppercase">
            ABOUT
        </h2>
    </div>

    <div class="max-w-7xl mx-auto relative reveal-group z-10 text-center">
        <div class="max-w-3xl mx-auto space-y-8">
            <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full text-xs font-black tracking-[0.2em] uppercase reveal-item">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                </span>
                {{ $hero->title ?? 'Tentang Kami' }}
            </div>
            <h1 class="text-6xl md:text-8xl font-heading font-black leading-none tracking-tighter reveal-item">
                {!! $hero->heading ?? 'STUDIO <br>DENGAN <br><span class="text-bk-orange uppercase">KARAKTER.</span>' !!}
            </h1>
            <p class="text-xl opacity-60 mt-8 leading-relaxed reveal-item max-w-2xl mx-auto">
                {{ $hero->description ?? 'Balik Kucing Studio bukan sekadar agensi desain. Kami adalah kolektif kreatif yang percaya bahwa estetika dan fungsi harus berjalan beriringan.' }}
            </p>
        </div>
    </div>
</section>