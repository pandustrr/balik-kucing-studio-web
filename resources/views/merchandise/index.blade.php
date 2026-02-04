@extends('layouts.app')

@section('content')
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

<!-- Catalog Section -->
<section id="catalog" class="relative py-20 md:py-32 bg-background overflow-hidden">
    <!-- Section Title Background -->
    <div class="absolute top-[10%] left-1/2 -translate-x-1/2 pointer-events-none select-none">
        <h2 class="text-[25vw] font-heading font-black opacity-[0.02] dark:opacity-[0.03] leading-none tracking-tighter uppercase">
            Catalog
        </h2>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative reveal-group">

        <!-- Filter / Introduction -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-8 md:gap-12 mb-16 md:mb-20 reveal-item">
            <div class="space-y-3 md:space-y-4">
                <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-[10px] md:text-xs">New Arrays</h2>
                <h3 class="text-4xl md:text-6xl font-heading font-black leading-none tracking-tighter">
                    PILIHAN <span class="text-bk-orange">ITEM.</span>
                </h3>
            </div>
            <div class="w-full md:w-auto flex gap-3 overflow-x-auto pb-4 md:pb-0 scrollbar-hide">
                <button onclick="filterProducts('all')" id="btn-all" class="px-5 md:px-6 py-2.5 md:py-3 rounded-full bg-bk-orange text-white text-[10px] md:text-xs font-black tracking-widest uppercase shadow-lg shadow-bk-orange/20 whitespace-nowrap transition-all">All Items</button>
                @foreach($categories as $category)
                <button onclick="filterProducts('{{ $category->id }}')" id="btn-{{ $category->id }}" class="category-btn px-5 md:px-6 py-2.5 md:py-3 rounded-full bg-foreground/5 dark:bg-white/5 hover:bg-foreground/10 text-[10px] md:text-xs font-black tracking-widest uppercase transition-all whitespace-nowrap">
                    {{ $category->name }}
                </button>
                @endforeach
            </div>
        </div>

        <!-- Grid Products -->
        <div id="product-grid" class="grid grid-cols-2 lg:grid-cols-3 gap-3 md:gap-10 reveal-group">
            @forelse($products as $product)
            <!-- Product Card -->
            <div class="product-card group relative bg-white dark:bg-white/[0.03] rounded-[32px] md:rounded-[40px] overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-slate-200/50 dark:hover:shadow-bk-orange/10 transition-all duration-500 reveal-item border border-slate-200/60 dark:border-white/[0.08] hover:border-bk-orange/30 dark:hover:border-bk-orange/30 shadow-sm"
                data-category="{{ $product->merchandise_category_id }}">

                <div class="aspect-square relative overflow-hidden bg-slate-50 dark:bg-white/[0.02] {{ $product->image ? 'cursor-pointer' : '' }}"
                    @if($product->image) onclick="openImagePreview('{{ asset('storage/' . $product->image) }}', '{{ $product->name }}')" @endif>
                    <div class="absolute inset-0 bg-gradient-to-tr from-bk-orange/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>

                    @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-contain transition-transform duration-700 group-hover:scale-105 p-4">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-bk-orange/80 backdrop-blur-sm rounded-full flex items-center justify-center text-white scale-90 group-hover:scale-100 transition-transform duration-500 shadow-xl shadow-bk-orange/20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                            </svg>
                        </div>
                    </div>
                    @else
                    <div class="absolute inset-0 flex items-center justify-center text-slate-200 dark:text-white/10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 md:w-32 md:h-32" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    @endif

                    @if($product->stock > 0)
                    <div class="absolute top-3 left-3 z-20 px-2.5 py-1 bg-bk-orange/80 backdrop-blur-sm rounded-lg text-[10px] md:text-xs font-black text-white shadow-lg border border-white/20">
                        {{ $product->stock }}
                    </div>
                    @else
                    <div class="absolute top-3 left-3 z-20 px-2 py-1 bg-red-600/80 backdrop-blur-sm rounded-lg text-[8px] md:text-[10px] font-black uppercase tracking-widest text-white shadow-lg border border-white/20">
                        EMPTY
                    </div>
                    @endif

                    @if($product->qris_image)
                    <button
                        data-url="{{ asset('storage/' . $product->qris_image) }}"
                        onclick="event.stopPropagation(); openQrisModal(this)"
                        class="absolute bottom-3 md:bottom-6 right-3 md:right-6 z-20 px-2 md:px-4 py-1.5 md:py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl text-[8px] md:text-[10px] font-black uppercase tracking-widest text-white transition-all hover:bg-bk-orange hover:border-bk-orange shadow-lg">
                        Scan Preview
                    </button>
                    @endif
                </div>

                <div class="p-4 md:p-8">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-3 md:mb-4 gap-2">
                        <div class="flex-1 pr-0 md:pr-4">
                            <p class="text-[8px] md:text-[10px] font-black tracking-[0.2em] text-bk-orange uppercase mb-1">{{ $product->category->name }}</p>
                            <h4 class="text-sm md:text-2xl font-heading font-black leading-tight text-ultra-black dark:text-white line-clamp-2">{{ $product->name }}</h4>
                        </div>
                        <span class="inline-block self-start px-2 py-1 bg-ultra-black text-white dark:bg-white dark:text-ultra-black rounded-lg text-[8px] md:text-xs font-black shrink-0 shadow-sm">
                            {{ $product->price ? 'IDR ' . number_format($product->price / 1000, 0, ',', '.') . 'K' : '-' }}
                        </span>
                    </div>
                    <div class="text-[10px] md:text-md text-ultra-black/70 dark:text-white/60 mb-4 md:mb-6 leading-relaxed line-clamp-3">
                        {!! nl2br(e($product->description ?: '-')) !!}
                    </div>


                    <div class="space-y-2 mb-4 md:mb-6">
                        <div class="flex items-center justify-between p-1.5 md:p-2.5 bg-foreground/5 dark:bg-white/5 rounded-xl border border-foreground/10 dark:border-white/10">
                            <span class="text-[7px] md:text-[10px] font-black uppercase tracking-widest text-foreground/40 dark:text-white/40 px-1 md:px-2">Qty</span>
                            <div class="flex items-center gap-1.5 md:gap-4">
                                <button type="button"
                                    data-id="{{ $product->id }}"
                                    data-stock="{{ $product->stock }}"
                                    onclick="handleQty(this, -1)"
                                    class="w-5 h-5 md:w-8 md:h-8 flex items-center justify-center rounded-lg bg-white dark:bg-white/10 hover:bg-bk-orange hover:text-white transition-all shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 md:w-4 md:h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                    </svg>
                                </button>
                                <input type="number" id="qty-{{ $product->id }}" value="{{ $product->stock > 0 ? 1 : 0 }}" min="{{ $product->stock > 0 ? 1 : 0 }}" max="{{ $product->stock }}" readonly
                                    class="w-5 md:w-10 text-center bg-transparent border-none text-[9px] md:text-sm font-black text-foreground dark:text-white focus:ring-0 p-0">
                                <button type="button"
                                    data-id="{{ $product->id }}"
                                    data-stock="{{ $product->stock }}"
                                    onclick="handleQty(this, 1)"
                                    class="w-5 h-5 md:w-8 md:h-8 flex items-center justify-center rounded-lg bg-white dark:bg-white/10 hover:bg-bk-orange hover:text-white transition-all shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 md:w-4 md:h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    @if($product->stock > 0)
                    <button type="button"
                        data-phone="{{ $whatsappNumber }}"
                        data-id="{{ $product->id }}"
                        data-name="{{ $product->name }}"
                        data-category="{{ $product->category->name }}"
                        data-price="{{ $product->price }}"
                        data-stock="{{ $product->stock }}"
                        onclick="orderViaWhatsApp(this)"
                        class="block w-full py-2.5 md:py-4 text-center rounded-xl border-2 border-bk-orange text-bk-orange font-black text-[9px] md:text-xs tracking-widest uppercase hover:bg-bk-orange hover:text-white transition-all shadow-sm hover:shadow-orange-500/20">
                        Order via WhatsApp
                    </button>
                    @else
                    <button disabled
                        class="block w-full py-3.5 md:py-4 text-center rounded-xl border-2 border-white/10 text-white/20 font-black text-[10px] md:text-xs tracking-widest uppercase cursor-not-allowed bg-white/5">
                        Out of Stock
                    </button>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center reveal-item">
                <p class="text-lg md:text-xl font-heading font-black opacity-20 uppercase tracking-widest">Belum ada produk merchandise.</p>
            </div>
            @endforelse
        </div>

        <div class="mt-16 md:mt-20 text-center reveal-item">
            <p class="text-xs md:text-sm font-bold opacity-40 mb-4 animate-pulse">More items coming very soon...</p>
        </div>
    </div>
</section>

<!-- Custom Request CTA -->
<section class="py-16 md:py-24 bg-foreground/5 dark:bg-ultra-black border-t border-foreground/5 dark:border-white/5">
    <div class="max-w-4xl mx-auto px-6 reveal-item">
        <div class="glass p-8 md:p-12 rounded-[32px] md:rounded-[48px] border-bk-orange/20 text-center relative overflow-hidden">
            <div class="relative z-10">
                <h4 class="text-2xl md:text-5xl font-heading font-black mb-4 md:mb-6">Mau Bikin Merchandise Custom?</h4>
                <p class="text-base md:text-lg opacity-60 mb-8 md:mb-10 max-w-2xl mx-auto">
                    Kami melayani pembuatan merchandise custom untuk brand, komunitas, atau event Anda.
                </p>

                <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 px-8 md:px-10 py-4 md:py-5 bg-bk-orange text-white rounded-2xl font-black text-base md:text-lg shadow-xl shadow-bk-orange/30 hover:scale-105 active:scale-95 transition-all">
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

<!-- Image Preview Modal (Lightbox) -->
<div id="image-preview-modal" class="fixed inset-0 z-100 hidden flex items-center justify-center p-4">
    <div class="fixed inset-0 bg-black/90" onclick="closeImagePreview()"></div>
    <div class="relative max-w-4xl w-full max-h-[85vh] flex flex-col items-center animate-reveal z-10 p-2">
        <button onclick="closeImagePreview()" class="absolute -top-12 right-0 md:right-0 p-3 text-white/40 hover:text-white transition-all hover:rotate-90">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <img id="preview-image" src="" class="max-w-full max-h-[70vh] md:max-h-[75vh] object-contain rounded-2xl shadow-[0_20px_60px_-15px_rgba(0,0,0,0.7)] border border-white/10" alt="Product Preview">
        <div class="mt-6 text-center">
            <h3 id="preview-title" class="text-lg md:text-2xl font-heading font-black text-white uppercase tracking-tight drop-shadow-lg"></h3>
        </div>
    </div>
</div>

<!-- Order Details Modal -->
<div id="order-modal" class="fixed inset-0 z-110 hidden flex items-center justify-center p-4 md:p-6">
    <div class="fixed inset-0 bg-black/80" onclick="closeOrderModal()"></div>
    <div class="relative max-w-lg w-full bg-white dark:bg-ultra-black rounded-[32px] md:rounded-[40px] overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.5)] animate-reveal border border-white/10 flex flex-col max-h-[90vh]">
        <div class="p-6 md:p-10 overflow-y-auto">
            <!-- Header -->
            <div class="flex justify-between items-start mb-6 md:mb-8">
                <div>
                    <h3 class="text-lg md:text-2xl font-heading font-black uppercase tracking-tight text-ultra-black dark:text-white leading-tight">Detail <span class="text-bk-orange">Pesanan.</span></h3>
                    <p class="text-[9px] md:text-[10px] font-bold text-bk-orange uppercase tracking-[0.2em] mt-1">Lengkapi data diri kamu</p>
                </div>
                <button onclick="closeOrderModal()" class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-foreground/5 dark:bg-white/5 text-foreground/40 dark:text-white/40 hover:text-bk-orange transition-all shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Product Summary Card -->
            <div class="bg-foreground/5 dark:bg-white/5 rounded-2xl md:rounded-3xl p-4 md:p-6 mb-6 md:mb-8 border border-foreground/5 dark:border-white/5">
                <div class="flex gap-4 md:gap-5">
                    <div id="modal-product-image-container" class="w-16 h-16 md:w-20 md:h-20 bg-white dark:bg-white/5 rounded-xl md:rounded-2xl overflow-hidden shrink-0 border border-white/10">
                        <img id="modal-product-image" src="" class="w-full h-full object-contain p-1.5 md:p-2" alt="">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p id="modal-product-category" class="text-[7px] md:text-[8px] font-black text-bk-orange uppercase tracking-widest mb-1"></p>
                        <h4 id="modal-product-name" class="text-sm md:text-base font-black text-ultra-black dark:text-white truncate mb-1"></h4>
                        <div id="modal-product-desc" class="text-[9px] md:text-[11px] text-foreground/40 dark:text-white/40 line-clamp-2 leading-relaxed mb-2"></div>
                        <div class="flex items-center justify-between">
                            <span id="modal-product-price" class="text-[10px] md:text-xs font-black text-foreground/60 dark:text-white/60"></span>
                            <span id="modal-product-qty" class="px-2 py-0.5 md:px-3 md:py-1 bg-bk-orange text-white rounded-lg text-[8px] md:text-[10px] font-black uppercase tracking-widest">Qty: 0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <form id="order-form" onsubmit="submitOrder(event)" class="space-y-4 md:space-y-5">
                <div class="space-y-1.5 md:space-y-2">
                    <label class="block text-[9px] md:text-[10px] font-black uppercase tracking-widest text-foreground/40 dark:text-white/40 ml-3 md:ml-4 italic">Nama Lengkap</label>
                    <input type="text" id="buyer-name" required
                        class="w-full px-5 py-3.5 md:px-6 md:py-4 bg-foreground/5 dark:bg-white/5 border-2 border-transparent rounded-xl md:rounded-2xl focus:border-bk-orange focus:bg-transparent transition-all outline-none font-bold text-xs md:text-sm text-foreground dark:text-white"
                        placeholder="Masukkan nama kamu...">
                </div>
                <div class="space-y-1.5 md:space-y-2">
                    <label class="block text-[9px] md:text-[10px] font-black uppercase tracking-widest text-foreground/40 dark:text-white/40 ml-3 md:ml-4 italic">Alamat / Lokasi</label>
                    <textarea id="buyer-location" required rows="2"
                        class="w-full px-5 py-3.5 md:px-6 md:py-4 bg-foreground/5 dark:bg-white/5 border-2 border-transparent rounded-xl md:rounded-2xl focus:border-bk-orange focus:bg-transparent transition-all outline-none font-bold text-xs md:text-sm text-foreground dark:text-white resize-none"
                        placeholder="Contoh: Jember, Jawa Timur"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 md:py-5 bg-bk-orange text-white rounded-xl md:rounded-2xl font-black text-xs md:text-sm uppercase tracking-[0.2em] shadow-xl shadow-bk-orange/30 hover:scale-[1.02] active:scale-95 transition-all flex items-center justify-center gap-2 md:gap-3">
                        <span>Konfirmasi & Chat WA</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-5 md:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function filterProducts(categoryId) {
        const cards = document.querySelectorAll('.product-card');
        const buttons = document.querySelectorAll('.category-btn');
        const btnAll = document.getElementById('btn-all');

        if (categoryId === 'all') {
            btnAll.classList.add('bg-bk-orange', 'text-white', 'shadow-lg', 'shadow-bk-orange/20');
            btnAll.classList.remove('bg-foreground/5', 'dark:bg-white/5');
            buttons.forEach(btn => {
                btn.classList.remove('bg-bk-orange', 'text-white', 'shadow-lg', 'shadow-bk-orange/20');
                btn.classList.add('bg-foreground/5', 'dark:bg-white/5');
            });
        } else {
            btnAll.classList.remove('bg-bk-orange', 'text-white', 'shadow-lg', 'shadow-bk-orange/20');
            btnAll.classList.add('bg-foreground/5', 'dark:bg-white/5');
            buttons.forEach(btn => {
                const targetId = `btn-${categoryId}`;
                if (btn.id === targetId) {
                    btn.classList.add('bg-bk-orange', 'text-white', 'shadow-lg', 'shadow-bk-orange/20');
                    btn.classList.remove('bg-foreground/5', 'dark:bg-white/5');
                } else {
                    btn.classList.remove('bg-bk-orange', 'text-white', 'shadow-lg', 'shadow-bk-orange/20');
                    btn.classList.add('bg-foreground/5', 'dark:bg-white/5');
                }
            });
        }

        cards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            if (categoryId === 'all' || cardCategory === categoryId) {
                card.style.display = 'block';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0) scale(1)';
                }, 50);
            } else {
                card.style.opacity = '0';
                card.style.transform = 'translateY(10px) scale(0.95)';
                setTimeout(() => {
                    card.style.display = 'none';
                }, 300);
            }
        });
    }

    function openImagePreview(url, title) {
        const modal = document.getElementById('image-preview-modal');
        const img = document.getElementById('preview-image');
        const titleElem = document.getElementById('preview-title');

        img.src = url;
        titleElem.innerText = title;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeImagePreview() {
        const modal = document.getElementById('image-preview-modal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    function openQrisModal(btn) {
        const modal = document.getElementById('qris-modal');
        const img = document.getElementById('qris-image');
        const imageUrl = btn.getAttribute('data-url');
        img.src = imageUrl;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeQrisModal() {
        const modal = document.getElementById('qris-modal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    function handleQty(btn, delta) {
        const productId = btn.dataset.id;
        const maxStock = parseInt(btn.dataset.stock);
        const input = document.getElementById(`qty-${productId}`);
        let current = parseInt(input.value);
        current += delta;
        if (current < 1 && maxStock > 0) current = 1;
        if (current > maxStock) current = maxStock;
        if (maxStock === 0) current = 0;
        input.value = current;
    }

    let currentOrderData = null;

    function orderViaWhatsApp(btn) {
        const {
            phone,
            id,
            name,
            category,
            price,
            stock
        } = btn.dataset;
        const qty = document.getElementById(`qty-${id}`).value;
        const formattedPrice = price && price !== 'null' ?
            'Rp ' + new Number(price).toLocaleString('id-ID') :
            'Hubungi Admin';

        // Get product card and description
        const productCard = btn.closest('.product-card');
        const descElement = productCard.querySelector('.line-clamp-3');
        const productDesc = descElement ? descElement.innerText.trim() : '-';

        // Set current order data
        currentOrderData = {
            phone,
            id,
            name,
            category,
            price,
            stock,
            qty,
            formattedPrice,
            productDesc
        };

        // Populate Modal
        document.getElementById('modal-product-name').innerText = name;
        document.getElementById('modal-product-category').innerText = category;
        document.getElementById('modal-product-price').innerText = formattedPrice;
        document.getElementById('modal-product-qty').innerText = `Qty: ${qty}`;
        document.getElementById('modal-product-desc').innerText = productDesc;

        // Get product image
        const productImg = productCard.querySelector('img');
        if (productImg) {
            document.getElementById('modal-product-image').src = productImg.src;
            document.getElementById('modal-product-image').alt = name;
            document.getElementById('modal-product-image-container').classList.remove('hidden');
        } else {
            document.getElementById('modal-product-image-container').classList.add('hidden');
        }

        // Open Modal
        document.getElementById('order-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeOrderModal() {
        const modal = document.getElementById('order-modal');
        if (modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
            currentOrderData = null;
            document.getElementById('buyer-name').value = '';
            document.getElementById('buyer-location').value = '';
        }
    }

    function submitOrder(event) {
        event.preventDefault();
        if (!currentOrderData) return;

        const buyerName = document.getElementById('buyer-name').value;
        const buyerLocation = document.getElementById('buyer-location').value;

        const {
            phone,
            name,
            category,
            formattedPrice,
            qty,
            productDesc
        } = currentOrderData;

        const message = `Halo Balik Kucing Studio! 🐱\n\nSaya ingin memesan produk merchandise berikut:\n\n*DATA PEMESAN:* \n- Nama: *${buyerName}*\n- Lokasi: *${buyerLocation}*\n\n*DETAIL PRODUK:* \n- Produk: *${name}*\n- Kategori: ${category}\n- Deskripsi: ${productDesc}\n- Harga Satuan: ${formattedPrice}\n- Jumlah Pesanan: *${qty} Pcs*\n\nMohon informasi lebih lanjut mengenai ketersediaan stok dan cara pembayarannya. Terima kasih!`;

        const encodedMessage = encodeURIComponent(message);
        window.open(`https://wa.me/${phone}?text=${encodedMessage}`, '_blank');

        closeOrderModal();
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeQrisModal();
            closeImagePreview();
            closeOrderModal();
        }
    });
</script>
@endsection