@props(['pricelist', 'categoryName'])

<div class="group/item relative p-6 {{ $pricelist->is_featured ? 'bg-white dark:bg-white/[0.07] ring-2 ring-bk-orange shadow-2xl shadow-bk-orange/10' : 'bg-foreground/3 dark:bg-white/5 hover:bg-white dark:hover:bg-white/10 border border-foreground/10 dark:border-white/5' }} hover:border-bk-orange/30 rounded-3xl transition-all duration-500 hover:-translate-y-1 shadow-sm">
    @if($pricelist->is_featured)
    <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-10 w-max">
        <span class="inline-flex items-center gap-1.5 px-4 py-1.5 bg-linear-to-r from-bk-orange to-[#FF9D4D] text-white text-[9px] font-black uppercase tracking-[0.2em] rounded-full shadow-[0_4px_20px_-4px_rgba(244,124,32,0.5)] border border-white/20 animate-bounce-subtle">
            <svg class="w-3 h-3 fill-white" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            Populer
        </span>
    </div>
    @endif

    <div class="space-y-4">
        <div>
            <h4 class="text-xl font-heading font-black uppercase tracking-tight text-slate-900 dark:text-white">{{ $pricelist->name }}</h4>
            <p class="opacity-50 text-xs mt-1 leading-relaxed line-clamp-2 group-hover/item:line-clamp-none transition-all duration-300 text-slate-700 dark:text-white/60">
                {{ $pricelist->description }}
            </p>
        </div>

        <div class="flex items-baseline gap-1">
            <span class="text-[10px] font-bold text-bk-orange uppercase">Start From</span>
            <span class="text-2xl font-black tracking-tighter text-slate-900 dark:text-white">
                <span class="text-sm font-medium opacity-50">Rp</span> {{ number_format($pricelist->price, 0, ',', '.') }}
            </span>
        </div>

        @if($pricelist->features && count($pricelist->features) > 0)
        <ul class="space-y-2 pt-4 border-t border-foreground/5 dark:border-white/5">
            @foreach($pricelist->features as $feature)
            @php
            $isAvailable = is_array($feature) ? ($feature['is_available'] ?? true) : true;
            $fName = is_array($feature) ? ($feature['name'] ?? '-') : $feature;
            @endphp
            <li class="flex items-start gap-2 text-[11px] text-slate-700 dark:text-white/70">
                @if($isAvailable)
                <svg class="w-3.5 h-3.5 text-bk-orange shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
                @else
                <svg class="w-3.5 h-3.5 text-red-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                @endif
                <span class="leading-tight">{{ $fName }}</span>
            </li>
            @endforeach
        </ul>
        @endif

        <a href="https://wa.me/{{ $whatsappNumber ?? '6281234567890' }}?text=Halo%20Balik%20Kucing%20Studio,%20saya%20tertarik%20dengan%20paket%20{{ urlencode($pricelist->name) }}%20({{ $categoryName }})"
            target="_blank"
            class="flex items-center justify-center gap-2 w-full py-3 bg-foreground/5 dark:bg-white/5 hover:bg-bk-orange text-foreground dark:text-white hover:text-white text-[10px] font-black uppercase tracking-widest rounded-xl transition-all duration-300">
            Pilih Paket
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14m-7-7 7 7-7 7" />
            </svg>
        </a>
    </div>
</div>