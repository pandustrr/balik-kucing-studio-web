@extends('layouts.app')

@section('content')
<section class="relative pt-48 pb-24 px-6 overflow-hidden bg-mesh">
    <!-- Big Animated Background Text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none overflow-hidden">
        <h2 class="text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform -rotate-12 translate-y-12">
            OUR STORY
        </h2>
    </div>

    <div class="max-w-7xl mx-auto relative reveal-group">
        <div class="grid lg:grid-cols-2 gap-24 items-center">
            <div class="reveal-item">
                <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs">Tentang Kami</h2>
                <h1 class="text-6xl md:text-8xl font-heading font-black leading-[0.9] tracking-tighter mt-6">
                    STUDIO <br>DENGAN <br><span class="text-bk-orange uppercase">KARAKTER.</span>
                </h1>
            </div>
            <div class="reveal-item">
                <p class="text-2xl opacity-70 leading-relaxed font-medium">
                    Balikkucing Studio bukan sekadar agensi desain. Kami adalah kolektif kreatif yang percaya bahwa estetika dan fungsi harus berjalan beriringan.
                </p>
                <p class="text-xl opacity-60 mt-8 leading-relaxed">
                    Dimulai dari sebuah garasi kecil (dan banyak kopi), kini kami telah membantu ratusan brand menemukan suara visual mereka melalui desain yang "fresssh" dan berani.
                </p>
            </div>
        </div>
    </div>
</section>

@include('home.sections.about')

<section class="py-24 bg-background relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 reveal-group">
        <div class="text-center mb-20 reveal-item">
            <h3 class="text-5xl font-heading font-black">NILAI-NILAI <span class="text-outline">KAMI.</span></h3>
        </div>

        <div class="grid md:grid-cols-3 gap-12">
            <div class="reveal-item space-y-4">
                <div class="text-bk-orange text-6xl font-black opacity-20">01</div>
                <h4 class="text-2xl font-bold italic">Authenticity</h4>
                <p class="opacity-60">Tidak ada copy-paste. Setiap garis digambar manual dengan dedikasi penuh untuk keunikan brand Anda.</p>
            </div>
            <div class="reveal-item space-y-4">
                <div class="text-bk-orange text-6xl font-black opacity-20">02</div>
                <h4 class="text-2xl font-bold italic">Simplicity</h4>
                <p class="opacity-60">Desain yang bagus adalah desain yang bisa dimengerti tanpa perlu banyak kata-kata. Padat dan jelas.</p>
            </div>
            <div class="reveal-item space-y-4">
                <div class="text-bk-orange text-6xl font-black opacity-20">03</div>
                <h4 class="text-2xl font-bold italic">Affordability</h4>
                <p class="opacity-60">Kreativitas tingkat tinggi adalah hak semua orang. Kami memposisikan diri sebagai partner yang ramah di kantong.</p>
            </div>
        </div>
    </div>
</section>
@endsection