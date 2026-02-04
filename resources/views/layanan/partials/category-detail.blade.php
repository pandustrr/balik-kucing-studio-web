@props(['category'])

<div id="detail-section-{{ $category->slug }}"
    class="hidden flex-col space-y-8 animate-reveal"
    style="animation-duration: 0.5s">

    <!-- Detail Header (Mini version of card) -->
    <div class="flex items-center gap-6 p-6 glass rounded-3xl border-bk-orange/20 bg-bk-orange/10">
        <div class="w-12 h-12 bg-bk-orange text-white rounded-xl flex items-center justify-center shrink-0">
            @if($category->slug == 'ya-desain')
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                <line x1="8" y1="21" x2="16" y2="21" />
                <line x1="12" y1="17" x2="12" y2="21" />
            </svg>
            @elseif($category->slug == 'ya-ngegambar')
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 19l7-7 3 3-7 7-3-3z" />
                <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
            </svg>
            @else
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.38 3.46L16 5a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-2.62 2.25l2.43 14.23a2 2 0 0 0 2 1.66h9.14a2 2 0 0 0 2-1.66l2.43-14.23a2 2 0 0 0-2.62-2.25z" />
            </svg>
            @endif
        </div>
        <div>
            <h4 class="text-xl font-heading font-black uppercase tracking-tight">{{ $category->name }}</h4>
            <p class="text-xs opacity-50 uppercase font-bold tracking-widest">{{ $category->pricelists->count() }} Paket Tersedia</p>
        </div>
    </div>

    <!-- Pricelist Items -->
    <div class="grid gap-4">
        @forelse($category->pricelists as $pricelist)
        @include('layanan.partials.pricelist-item', ['pricelist' => $pricelist, 'categoryName' => $category->name])
        @empty
        <div class="py-10 text-center glass rounded-3xl opacity-40 italic text-sm">
            Belum ada paket tersedia.
        </div>
        @endforelse
    </div>
</div>