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
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none overflow-hidden z-1">
        <h2 class="text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform -rotate-12 translate-y-12 uppercase">
            MERCHANDISE
        </h2>
    </div>

    <!-- Decorative Gradients -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-bk-orange/15 rounded-full blur-[120px] -mr-64 -mt-32"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-bk-orange/5 rounded-full blur-[100px] -ml-40 -mb-20"></div>

    <div class="max-w-7xl mx-auto relative w-full reveal-group z-10 text-center">
        <div class="max-w-4xl mx-auto space-y-8">
            <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full text-xs font-black tracking-[0.2em] uppercase reveal-item">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                </span>
                {{ $hero->title ?? 'Official Store' }}
            </div>

            <h1 class="text-6xl md:text-8xl lg:text-9xl font-heading font-black leading-none tracking-tighter reveal-item text-white drop-shadow-xl">
                {!! $hero->heading ?? 'KOLEKSI <br><span class="text-bk-orange">EKSKLUSIF.</span>' !!}
            </h1>

            <p class="text-xl md:text-2xl opacity-80 mt-8 leading-relaxed reveal-item max-w-2xl mx-auto font-medium text-white/90">
                {{ $hero->description ?? 'Bawa pulang semangat kreatif kami. Merchandise berkualitas tinggi dengan sentuhan desain rasa jeruk yang khas.' }}
            </p>
        </div>
    </div>
</section>

<!-- Scroll Indicator -->
<div class="relative py-12 bg-background border-b border-foreground/5 dark:border-white/5">
    <div class="flex justify-center animate-bounce">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-bk-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </div>
</div>

<!-- Catalog Section -->
<section id="catalog" class="relative py-32 bg-background overflow-hidden">
    <!-- Section Title Background -->
    <div class="absolute top-[10%] left-1/2 -translate-x-1/2 pointer-events-none select-none">
        <h2 class="text-[25vw] font-heading font-black opacity-[0.02] dark:opacity-[0.03] leading-none tracking-tighter">
            CATALOG
        </h2>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative reveal-group">

        <!-- Filter / Introduction -->
        <div class="flex flex-col md:flex-row justify-between items-end gap-12 mb-20 reveal-item">
            <div class="space-y-4">
                <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs">New Arrays</h2>
                <h3 class="text-5xl md:text-6xl font-heading font-black leading-none tracking-tighter">
                    PILIHAN <span class="text-bk-orange">ITEM.</span>
                </h3>
            </div>
            <div class="flex gap-4 overflow-x-auto pb-4 md:pb-0 scrollbar-hide">
                <button class="px-6 py-3 rounded-full bg-bk-orange text-white text-xs font-black tracking-widest uppercase shadow-lg shadow-bk-orange/20 whitespace-nowrap">All Items</button>
                @foreach($categories as $category)
                <button class="px-6 py-3 rounded-full bg-foreground/5 dark:bg-white/5 hover:bg-foreground/10 text-xs font-black tracking-widest uppercase transition-colors whitespace-nowrap">
                    {{ $category->name }}
                </button>
                @endforeach
            </div>
        </div>

        <!-- Grid Products -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 reveal-group">

            <!-- Product 1 -->
            <div class="group relative bg-foreground/5 dark:bg-white/5 rounded-[40px] overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 reveal-item border border-foreground/5 dark:border-white/5">
                <div class="aspect-square relative overflow-hidden bg-white/5">
                    <div class="absolute inset-0 bg-gradient-to-tr from-bk-orange/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                    <!-- Placeholder Image -->
                    <div class="absolute inset-0 flex items-center justify-center text-foreground/20 dark:text-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.38 3.46L16 5a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-2.62 2.25l2.43 14.23a2 2 0 0 0 2 1.66h9.14a2 2 0 0 0 2-1.66l2.43-14.23a2 2 0 0 0-2.62-2.25z" />
                        </svg>
                        <span class="absolute text-xs font-black uppercase tracking-widest opacity-50 mt-24">T-Shirt Mockup</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-[10px] font-black tracking-[0.2em] text-bk-orange uppercase mb-2">Limited Edition</p>
                            <h4 class="text-2xl font-heading font-black leading-tight">BK Essential Tee</h4>
                        </div>
                        <span class="px-3 py-1 bg-foreground text-background dark:bg-white dark:text-black rounded-lg text-xs font-black">IDR 149K</span>
                    </div>
                    <p class="text-sm opacity-60 mb-6 line-clamp-2">Kaos katun bambu premium dengan sablon plastisol. Nyaman dipakai seharian.</p>

                    <button class="w-full py-4 rounded-xl border-2 border-bk-orange text-bk-orange font-black text-xs tracking-widest uppercase hover:bg-bk-orange hover:text-white transition-all group-hover:shadow-[0_10px_20px_-5px_rgba(244,124,32,0.3)]">
                        Pre-Order Now
                    </button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="group relative bg-foreground/5 dark:bg-white/5 rounded-[40px] overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 reveal-item border border-foreground/5 dark:border-white/5">
                <div class="aspect-square relative overflow-hidden bg-white/5">
                    <div class="absolute inset-0 bg-gradient-to-tr from-bk-orange/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                    <!-- Placeholder Image -->
                    <div class="absolute inset-0 flex items-center justify-center text-foreground/20 dark:text-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                        <span class="absolute text-xs font-black uppercase tracking-widest opacity-50 mt-24">Sticker Pack</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-[10px] font-black tracking-[0.2em] text-bk-orange uppercase mb-2">Best Seller</p>
                            <h4 class="text-2xl font-heading font-black leading-tight">Sticker Pack Vol. 1</h4>
                        </div>
                        <span class="px-3 py-1 bg-foreground text-background dark:bg-white dark:text-black rounded-lg text-xs font-black">IDR 45K</span>
                    </div>
                    <p class="text-sm opacity-60 mb-6 line-clamp-2">Kumpulan stiker vinyl waterproof dengan desain karakter ikonik Balik Kucing.</p>

                    <button class="w-full py-4 rounded-xl border-2 border-bk-orange text-bk-orange font-black text-xs tracking-widest uppercase hover:bg-bk-orange hover:text-white transition-all group-hover:shadow-[0_10px_20px_-5px_rgba(244,124,32,0.3)]">
                        Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="group relative bg-foreground/5 dark:bg-white/5 rounded-[40px] overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 reveal-item border border-foreground/5 dark:border-white/5">
                <div class="aspect-square relative overflow-hidden bg-white/5">
                    <div class="absolute inset-0 bg-gradient-to-tr from-bk-orange/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                    <!-- Placeholder Image -->
                    <div class="absolute inset-0 flex items-center justify-center text-foreground/20 dark:text-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg>
                        <span class="absolute text-xs font-black uppercase tracking-widest opacity-50 mt-24">Bundle Kit</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-[10px] font-black tracking-[0.2em] text-bk-orange uppercase mb-2">Bundle</p>
                            <h4 class="text-2xl font-heading font-black leading-tight">Starter Kit Designer</h4>
                        </div>
                        <span class="px-3 py-1 bg-foreground text-background dark:bg-white dark:text-black rounded-lg text-xs font-black">IDR 199K</span>
                    </div>
                    <p class="text-sm opacity-60 mb-6 line-clamp-2">Paket lengkap berisi Sketchbook, Tote Bag, dan Pencil Case eksklusif.</p>

                    <button class="w-full py-4 rounded-xl border-2 border-bk-orange text-bk-orange font-black text-xs tracking-widest uppercase hover:bg-bk-orange hover:text-white transition-all group-hover:shadow-[0_10px_20px_-5px_rgba(244,124,32,0.3)]">
                        Pre-Order Now
                    </button>
                </div>
            </div>

        </div>

        <div class="mt-20 text-center reveal-item">
            <p class="text-sm font-bold opacity-40 mb-4 animate-pulse">More items coming very soon...</p>
        </div>
    </div>
</section>

<!-- Custom Request CTA -->
<section class="py-24 bg-foreground/5 dark:bg-ultra-black border-t border-foreground/5 dark:border-white/5">
    <div class="max-w-4xl mx-auto px-6 reveal-item">
        <div class="glass p-12 rounded-[48px] border-bk-orange/20 text-center relative overflow-hidden">
            <!-- Decor -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-bk-orange/10 rounded-full blur-[80px] -mr-20 -mt-20 pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-bk-orange/10 rounded-full blur-[80px] -ml-20 -mb-20 pointer-events-none"></div>

            <div class="relative z-10">
                <h4 class="text-3xl md:text-5xl font-heading font-black mb-6">Mau Bikin Merchandise Custom?</h4>
                <p class="text-lg opacity-60 mb-10 max-w-2xl mx-auto">
                    Kami juga melayani pembuatan merchandise custom untuk brand, komunitas, atau event Anda dengan standar kualitas Balik Kucing.
                </p>

                <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 px-10 py-5 bg-bk-orange text-white rounded-2xl font-black text-lg shadow-xl shadow-bk-orange/30 hover:scale-105 active:scale-95 transition-all">
                    <span>HUBUNGI KAMI</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection