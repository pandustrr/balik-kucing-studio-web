@extends('layouts.app')

@section('content')
<section class="relative pt-48 pb-24 px-6 overflow-hidden bg-mesh">
    <!-- Big Animated Background Text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none overflow-hidden">
        <h2 class="text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform rotate-12">
            OUR SERVICES
        </h2>
    </div>

    <div class="max-w-7xl mx-auto relative reveal-group text-center">
        <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs reveal-item">Apa yang Kami Lakukan</h2>
        <h1 class="text-6xl md:text-8xl font-heading font-black leading-none tracking-tighter mt-6 reveal-item">
            KATALOG <br><span class="text-bk-orange uppercase">KREATIF.</span>
        </h1>
        <p class="max-w-2xl mx-auto text-xl opacity-60 mt-8 reveal-item">
            Dari sketsa kasar hingga produk siap pakai. Kami memberikan sentuhan magis di setiap piksel dan garis yang kami buat.
        </p>
    </div>
</section>

@include('home.sections.services')

<section class="py-24 bg-white dark:bg-black/20">
    <div class="max-w-7xl mx-auto px-6 reveal-group">
        <div class="grid lg:grid-cols-2 gap-24 items-center">
            <div class="reveal-item">
                <h3 class="text-4xl font-heading font-black mb-6">Kenapa Harus <span class="text-bk-orange">Rasa Jeruk?</span></h3>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-bk-orange/10 rounded-xl flex items-center justify-center shrink-0">
                            <span class="text-bk-orange font-bold">01</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-lg">Kualitas Premium, Harga Ramah</h5>
                            <p class="opacity-60">Kami percaya desain bagus tidak harus selalu mahal. Kami menawarkan paket yang fleksibel untuk UMKM hingga Startup.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-bk-orange/10 rounded-xl flex items-center justify-center shrink-0">
                            <span class="text-bk-orange font-bold">02</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-lg">Proses Kreatif yang Terbuka</h5>
                            <p class="opacity-60">Anda dilibatkan dalam setiap tahap, dari brainstorming ide hingga revisi akhir.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal-item glass p-12 rounded-[40px] border-bk-orange/20">
                <h4 class="text-2xl font-bold mb-8">Siap Memulai Proyek Anda?</h4>
                <form class="space-y-4">
                    <input type="text" placeholder="Nama Anda" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-bk-orange">
                    <select class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-bk-orange appearance-none">
                        <option>Pilih Layanan</option>
                        <option>Ya Desain</option>
                        <option>Ya Nge-gambar</option>
                        <option>Ya Merchandise</option>
                    </select>
                    <button class="w-full bg-bk-orange text-white py-5 rounded-2xl font-black text-lg shadow-xl shadow-bk-orange/20 hover:scale-[1.02] transition-all">
                        KONSULTASI GRATIS
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection