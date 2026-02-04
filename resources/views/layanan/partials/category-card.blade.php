@props(['category', 'index'])

<div class="group relative p-8 md:p-10 glass rounded-[40px] md:rounded-[48px] reveal-item transition-all duration-700 hover:shadow-[0_40px_80px_-20px_rgba(244,124,32,0.15)] overflow-hidden flex flex-col category-card h-full"
    id="card-{{ $category->slug }}">

    <div class="absolute -right-8 -top-8 w-32 h-32 bg-bk-orange/5 rounded-full blur-3xl group-hover:bg-bk-orange/10 transition-all duration-700"></div>

    <div class="relative z-10 flex flex-col h-full space-y-8">
        <!-- Icon & Tag -->
        <div class="flex items-center justify-between">
            <div class="w-16 h-16 bg-foreground/5 dark:bg-white/5 rounded-2xl flex items-center justify-center text-bk-orange group-hover:bg-bk-orange group-hover:text-white transition-all duration-500 transform group-hover:rotate-12">
                @if($index == 0)
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                    <line x1="8" y1="21" x2="16" y2="21" />
                    <line x1="12" y1="17" x2="12" y2="21" />
                </svg>
                @elseif($index == 1)
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 19l7-7 3 3-7 7-3-3z" />
                    <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.38 3.46L16 5a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-2.62 2.25l2.43 14.23a2 2 0 0 0 2 1.66h9.14a2 2 0 0 0 2-1.66l2.43-14.23a2 2 0 0 0-2.62-2.25z" />
                </svg>
                @endif
            </div>

            <div class="flex flex-col items-end">
                <span class="px-3 py-1 bg-bk-orange/10 text-bk-orange rounded-full text-[10px] font-black uppercase tracking-widest">
                    {{ $category->pricelists->count() }} Paket
                </span>
            </div>
        </div>

        <!-- Title & Description -->
        <div class="space-y-4 grow">
            <h4 class="text-3xl font-heading font-black tracking-tight uppercase leading-none">{{ $category->name }}</h4>
            <p class="opacity-60 leading-relaxed font-medium text-sm">
                {{ $category->description ?? 'Layanan profesional dengan kualitas terbaik untuk kebutuhan Anda.' }}
            </p>
        </div>

        <!-- Action Button -->
        <button onclick="toggleServiceDetail('{{ $category->slug }}')"
            id="btn-{{ $category->slug }}"
            class="w-full flex items-center justify-between p-5 bg-foreground/10 dark:bg-white/5 hover:bg-bk-orange group/btn rounded-[24px] transition-all duration-500 group-hover:shadow-lg group-hover:shadow-bk-orange/20">
            <span
                class="btn-text font-black text-xs tracking-widest uppercase
         text-ui
         group-hover/btn:text-white
         transition-colors">
                Lihat Detail
            </span>
            <div class="w-8 h-8 rounded-full bg-bk-orange text-white flex items-center justify-center group-hover/btn:bg-white group-hover/btn:text-bk-orange transition-all duration-500 btn-icon-container">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 transition-transform duration-500 icon-arrow"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14m-7-7 7 7-7 7" />
                </svg>
            </div>
        </button>
    </div>
</div>