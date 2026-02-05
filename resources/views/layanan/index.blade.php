@extends('layouts.app')

@section('content')

@include('layanan.partials.hero')

<!-- Services Section -->
<section id="layanan" class="relative py-32 bg-background overflow-hidden">
    <!-- Section Title Background -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 lg:-translate-x-1/3 pointer-events-none select-none">
        <h2 class="text-[25vw] font-heading font-black opacity-[0.02] dark:opacity-[0.03] leading-none tracking-tighter uppercase">
            LAYANAN
        </h2>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative reveal-group">
        <div class="flex flex-col lg:flex-row justify-between items-end gap-12 mb-24 reveal-item">
            <div class="max-w-2xl space-y-6">
                <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs">Spesialisasi Kami</h2>
                <h3 class="text-5xl md:text-7xl font-heading font-black leading-none tracking-tighter">
                    EKSPLORASI <br>
                    <span class="text-bk-orange uppercase">Katalog</span> Kreatif.
                </h3>
            </div>
            <p class="max-w-md text-xl opacity-60 italic font-medium">
                Desain yang memanjakan mata, digambar dengan hati, dan dicetak menjadi kebanggaan.
            </p>
        </div>

        <!-- Selection Grid -->
        <div class="grid md:grid-cols-3 gap-8 items-stretch reveal-group">
            @forelse($categories as $index => $category)
            @include('layanan.partials.category-card', ['category' => $category, 'index' => $index])
            @empty
            @include('layanan.partials.fallback-cards')
            @endforelse
        </div>

        <!-- Dynamic Details Area -->
        <div id="details-showroom" class="mt-24 space-y-12 hidden">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 border-b border-foreground/10 dark:border-white/10 pb-8">
                <div>
                    <h4 class="text-2xl font-heading font-black uppercase tracking-tight text-bk-orange">Detail Layanan</h4>
                    <p class="text-sm opacity-50 mt-1">Anda dapat membuka beberapa layanan sekaligus untuk membandingkan paket.</p>
                </div>
                <button onclick="closeAllServices()" class="px-6 py-3 glass rounded-full text-[10px] font-black uppercase tracking-widest hover:bg-red-500 hover:text-white transition-all">
                    Tutup Semua Detail
                </button>
            </div>

            <div id="active-services-grid" class="grid gap-12 items-start transition-all duration-700 ease-in-out">
                @foreach($categories as $category)
                @include('layanan.partials.category-detail', ['category' => $category])
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('layanan.partials.features')

@include('layanan.partials.cta')

@endsection

@push('scripts')
<script>
    let activeServices = new Set();

    function toggleServiceDetail(slug) {
        const showroom = document.getElementById('details-showroom');
        const grid = document.getElementById('active-services-grid');
        const detailSection = document.getElementById('detail-section-' + slug);
        const card = document.getElementById('card-' + slug);
        const btnText = document.querySelector(`#btn-${slug} .btn-text`);
        const icon = document.querySelector(`#btn-${slug} .icon-arrow`);

        if (activeServices.has(slug)) {
            // Remove service
            activeServices.delete(slug);
            detailSection.classList.add('hidden');
            detailSection.classList.remove('flex');

            // Visual Update for Card
            card.classList.remove('border-bk-orange/30', 'shadow-[0_40px_80px_-20px_rgba(244,124,32,0.2)]', 'ring-2', 'ring-bk-orange/20');
            btnText.textContent = 'Lihat Detail';
            icon.style.transform = 'rotate(0deg)';
        } else {
            // Add service
            activeServices.add(slug);
            detailSection.classList.remove('hidden');
            detailSection.classList.add('flex');

            // Visual Update for Card
            card.classList.add('border-bk-orange/30', 'shadow-[0_40px_80px_-20px_rgba(244,124,32,0.2)]', 'ring-2', 'ring-bk-orange/20');
            btnText.textContent = 'Detail Terbuka';
            icon.style.transform = 'rotate(90deg)';
        }

        // Show/Hide Showroom with Smooth Scroll
        if (activeServices.size > 0) {
            showroom.classList.remove('hidden');
            // Update Grid Columns based on size
            grid.className = `grid gap-12 items-start transition-all duration-700 ease-in-out grid-cols-1 md:grid-cols-${Math.min(activeServices.size, 3)}`;

            // Auto scroll to detail area if first service opened
            if (activeServices.size === 1) {
                setTimeout(() => {
                    showroom.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }, 100);
            }
        } else {
            showroom.classList.add('hidden');
        }
    }

    function closeAllServices() {
        activeServices.forEach(slug => toggleServiceDetail(slug));
        window.scrollTo({
            top: document.getElementById('layanan').offsetTop - 100,
            behavior: 'smooth'
        });
    }
</script>
@endpush