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
                <h3 class="text-4xl md:text-6xl font-heading font-black leading-none tracking-tighter uppercase">
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
                            <h4 class="text-sm md:text-2xl font-heading font-black leading-tight text-ultra-black dark:text-white line-clamp-2 uppercase italic">{{ $product->name }}</h4>
                        </div>
                        <span class="inline-block self-start px-2 py-1 bg-ultra-black text-white dark:bg-white dark:text-ultra-black rounded-lg text-[8px] md:text-xs font-black shrink-0 shadow-sm">
                            {{ $product->price ? 'IDR ' . number_format($product->price / 1000, 0, ',', '.') . 'K' : '-' }}
                        </span>
                    </div>
                    <div class="text-[10px] md:text-md text-ultra-black/70 dark:text-white/60 mb-4 md:mb-6 leading-relaxed line-clamp-3 font-medium">
                        {!! nl2br(e($product->description ?: '-')) !!}
                    </div>


                    <div class="space-y-2 mb-4 md:mb-6">
                        <div class="flex items-center justify-between p-1.5 md:p-2.5 bg-foreground/5 dark:bg-white/5 rounded-xl border border-foreground/10 dark:border-white/10">
                            <span class="text-[7px] md:text-[10px] font-black uppercase tracking-widest text-foreground/40 dark:text-white/40 px-1 md:px-2 italic">Qty</span>
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
            <p class="text-xs md:text-sm font-bold opacity-40 mb-4 animate-pulse italic">More items coming very soon...</p>
        </div>
    </div>
</section>