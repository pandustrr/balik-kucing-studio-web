@extends('layouts.app')

@section('content')
<section class="relative pt-48 pb-24 px-6 overflow-hidden bg-mesh">
    <!-- Big Animated Background Text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none overflow-hidden">
        <h2
            class="text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform -rotate-12 translate-y-12">
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
                    Balik Kucing Studio bukan sekadar agensi desain. Kami adalah kolektif kreatif yang percaya bahwa
                    estetika dan fungsi harus berjalan beriringan.
                </p>
                <p class="text-xl opacity-60 mt-8 leading-relaxed">
                    Dimulai dari sebuah garasi kecil (dan banyak kopi), kini kami telah membantu ratusan brand menemukan
                    suara visual mereka melalui desain yang "fresssh" dan berani.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="relative py-32 bg-background overflow-hidden">
    <!-- Big Section Background Text -->
    <div class="absolute bottom-0 right-1/2 translate-x-1/2 pointer-events-none select-none">
        <h2
            class="text-[30vw] font-heading font-black opacity-[0.02] dark:opacity-[0.03] leading-none tracking-tighter">
            ABOUT
        </h2>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative reveal-group">
        <div class="grid lg:grid-cols-2 gap-24 items-center">
            <div class="relative order-2 lg:order-1 reveal-item">
                <div class="absolute -inset-10 bg-bk-orange/10 blur-[100px] rounded-full"></div>

                <div class="relative grid grid-cols-2 gap-6 scale-90 md:scale-100">
                    <div class="space-y-6 pt-12">
                        <div
                            class="aspect-[4/5] glass rounded-[40px] p-8 flex flex-col justify-between group transition-all duration-500 hover:bg-bk-orange hover:border-transparent">
                            <h5 class="text-4xl font-heading font-black group-hover:text-white transition-colors">SIAPA
                            </h5>
                            <p class="text-sm font-bold opacity-60 group-hover:text-white/80 transition-colors">Team
                                kreatif yang berdedikasi tinggi demi visual terbaik.</p>
                        </div>
                        <div
                            class="aspect-square bg-ultra-black dark:bg-bk-orange rounded-[40px] p-8 flex items-center justify-center text-white">
                            <span class="text-6xl font-heading font-black">BK</span>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="aspect-square glass rounded-[40px] p-8 flex items-center justify-center">
                            <div class="w-20 h-2 bg-bk-orange rounded-full animate-pulse"></div>
                        </div>
                        <div
                            class="aspect-[4/5] glass border-2 border-bk-orange/30 rounded-[40px] p-8 flex flex-col justify-between group transition-all duration-500 hover:bg-bk-orange hover:border-transparent">
                            <h5
                                class="text-4xl font-heading font-black group-hover:text-white transition-colors uppercase">
                                VISI</h5>
                            <p class="text-sm font-bold opacity-60 group-hover:text-white/80 transition-colors">
                                Memanusiakan brand melalui visual yang berkarakter.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-12 order-1 lg:order-2 reveal-item">
                <div class="space-y-6">
                    <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs">Tentang Kami</h2>
                    <h3 class="text-6xl md:text-8xl font-heading font-black leading-[0.9] tracking-tighter">
                        LEBIH DARI <br>
                        <span class="text-bk-orange uppercase">SEKADAR</span> <br>
                        DESAIN.
                    </h3>
                </div>

                <div class="space-y-8">
                    <p class="text-2xl opacity-70 leading-relaxed font-medium">
                        Balik Kucing Studio lahir dari semangat untuk memberikan solusi visual yang tidak hanya cantik
                        secara estetika, tapi juga fungsional dan terjangkau.
                    </p>

                    <div class="h-px bg-foreground/10"></div>

                    <p class="text-xl opacity-60 leading-relaxed">
                        Kami percaya bahwa setiap ide hebat berhak mendapatkan representasi visual yang kuat. Kami
                        menggabungkan estetika desain grafis tradisional dengan tren modern untuk hasil yang <span
                            class="text-bk-orange font-bold italic">fresssh!</span>
                    </p>
                </div>

                <div class="flex items-center gap-8">
                    <button
                        class="px-10 py-5 bg-foreground text-background dark:bg-white dark:text-black rounded-2xl font-black text-lg transition-all hover:bg-bk-orange hover:text-white hover:scale-105 active:scale-95">
                        KENALI KAMI
                    </button>
                    <div class="flex -space-x-4">
                        <div
                            class="w-12 h-12 rounded-full border-4 border-background bg-bk-orange flex items-center justify-center text-white text-xs font-bold">
                            1</div>
                        <div
                            class="w-12 h-12 rounded-full border-4 border-background bg-ultra-black flex items-center justify-center text-white text-xs font-bold">
                            2</div>
                        <div
                            class="w-12 h-12 rounded-full border-4 border-background bg-zinc-400 flex items-center justify-center text-white text-xs font-bold">
                            3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-background relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 reveal-group">
        <div class="text-center mb-20 reveal-item">
            <h3 class="text-5xl font-heading font-black">NILAI-NILAI <span class="text-outline">KAMI.</span></h3>
        </div>

        <div class="grid md:grid-cols-3 gap-12">
            <div class="reveal-item space-y-4">
                <div class="text-bk-orange text-6xl font-black opacity-20">01</div>
                <h4 class="text-2xl font-bold italic">Authenticity</h4>
                <p class="opacity-60">Tidak ada copy-paste. Setiap garis digambar manual dengan dedikasi penuh untuk
                    keunikan brand Anda.</p>
            </div>
            <div class="reveal-item space-y-4">
                <div class="text-bk-orange text-6xl font-black opacity-20">02</div>
                <h4 class="text-2xl font-bold italic">Simplicity</h4>
                <p class="opacity-60">Desain yang bagus adalah desain yang bisa dimengerti tanpa perlu banyak kata-kata.
                    Padat dan jelas.</p>
            </div>
            <div class="reveal-item space-y-4">
                <div class="text-bk-orange text-6xl font-black opacity-20">03</div>
                <h4 class="text-2xl font-bold italic">Affordability</h4>
                <p class="opacity-60">Kreativitas tingkat tinggi adalah hak semua orang. Kami memposisikan diri sebagai
                    partner yang ramah di kantong.</p>
            </div>
        </div>
    </div>
</section>
@endsection