@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<!-- Hero Section -->
<section class="relative pt-48 pb-24 px-6 overflow-hidden {{ isset($hero) && $hero->background_image ? '' : 'bg-mesh' }}">
    @if(isset($hero) && $hero->background_image)
    <div class="absolute inset-0 z-0">
        <img src="{{ Storage::url($hero->background_image) }}" alt="Hero Background" class="w-full h-full object-cover opacity-20 dark:opacity-10">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-background/50 to-background"></div>
    </div>
    @endif

    <!-- Big Animated Background Text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none overflow-hidden">
        <h2 class="text-[20vw] font-heading font-black opacity-[0.03] dark:opacity-[0.05] whitespace-nowrap leading-none transform -rotate-12 translate-y-12">
            OUR STORY
        </h2>
    </div>

    <!-- Decorative Gradients -->
    <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-bk-orange/10 rounded-full blur-[120px] -ml-64 -mt-32"></div>
    <div class="absolute bottom-0 right-0 w-[300px] h-[300px] bg-bk-orange/5 rounded-full blur-[100px] -mr-40 -mb-20"></div>

    <div class="max-w-7xl mx-auto relative reveal-group z-10">
        <div class="grid lg:grid-cols-2 gap-24 items-center">
            <div class="reveal-item">
                <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full text-xs font-black tracking-[0.2em] uppercase mb-8">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                    </span>
                    {{ $hero->title ?? 'Tentang Kami' }}
                </div>
                <h1 class="text-6xl md:text-8xl font-heading font-black leading-[0.9] tracking-tighter">
                    {!! $hero->heading ?? 'STUDIO <br>DENGAN <br><span class="text-bk-orange uppercase">KARAKTER.</span>' !!}
                </h1>
            </div>
            <div class="reveal-item space-y-6">
                @if(isset($hero) && $hero->description)
                <p class="text-2xl opacity-70 leading-relaxed font-medium">
                    {{ $hero->description }}
                </p>
                @else
                <p class="text-2xl opacity-70 leading-relaxed font-medium">
                    Balik Kucing Studio bukan sekadar agensi desain. Kami adalah kolektif kreatif yang percaya bahwa
                    estetika dan fungsi harus berjalan beriringan.
                </p>
                <div class="h-px bg-foreground/10 dark:bg-white/10"></div>
                <p class="text-xl opacity-60 leading-relaxed">
                    Dimulai dari sebuah garasi kecil (dan banyak kopi ☕), kini kami telah membantu ratusan brand menemukan
                    suara visual mereka melalui desain yang <span class="text-bk-orange font-bold italic">fresssh</span> dan berani.
                </p>
                @endif
            </div>
        </div>
    </div>
</section>



<!-- Stats Section -->
<section class="py-20 bg-background">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 reveal-group">
            <div class="reveal-item text-center glass p-8 rounded-[32px] hover:border-bk-orange/30 transition-all">
                <div class="text-5xl md:text-6xl font-heading font-black text-bk-orange mb-2">500+</div>
                <p class="text-xs font-bold text-white/40 uppercase tracking-wider">Project Selesai</p>
            </div>
            <div class="reveal-item text-center glass p-8 rounded-[32px] hover:border-bk-orange/30 transition-all">
                <div class="text-5xl md:text-6xl font-heading font-black text-bk-orange mb-2">100%</div>
                <p class="text-xs font-bold text-white/40 uppercase tracking-wider">Rasa Jeruk</p>
            </div>
            <div class="reveal-item text-center glass p-8 rounded-[32px] hover:border-bk-orange/30 transition-all">
                <div class="text-5xl md:text-6xl font-heading font-black text-bk-orange mb-2">24/7</div>
                <p class="text-xs font-bold text-white/40 uppercase tracking-wider">Support</p>
            </div>
            <div class="reveal-item text-center glass p-8 rounded-[32px] hover:border-bk-orange/30 transition-all">
                <div class="text-5xl md:text-6xl font-heading font-black text-bk-orange mb-2">∞</div>
                <p class="text-xs font-bold text-white/40 uppercase tracking-wider">Revisi*</p>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="relative py-32 bg-background overflow-hidden">
    <!-- Big Section Background Text -->
    <div class="absolute bottom-0 right-1/2 translate-x-1/2 pointer-events-none select-none">
        <h2 class="text-[30vw] font-heading font-black opacity-[0.02] dark:opacity-[0.03] leading-none tracking-tighter">
            ABOUT
        </h2>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative reveal-group">
        <div class="grid lg:grid-cols-2 gap-24 items-center">
            <div class="relative order-2 lg:order-1 reveal-item">
                <div class="absolute -inset-10 bg-bk-orange/10 blur-[100px] rounded-full"></div>

                <div class="relative grid grid-cols-2 gap-6 scale-90 md:scale-100">
                    <div class="space-y-6 pt-12">
                        <div class="aspect-[4/5] glass rounded-[40px] p-8 flex flex-col justify-between group transition-all duration-500 hover:bg-bk-orange hover:border-transparent cursor-pointer">
                            <h5 class="text-4xl font-heading font-black group-hover:text-white transition-colors">SIAPA</h5>
                            <p class="text-sm font-bold opacity-60 group-hover:text-white/80 transition-colors">Team
                                kreatif yang berdedikasi tinggi demi visual terbaik.</p>
                        </div>
                        <div class="aspect-square bg-ultra-black dark:bg-bk-orange rounded-[40px] p-8 flex items-center justify-center text-white">
                            <span class="text-6xl font-heading font-black">BK</span>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="aspect-square glass rounded-[40px] p-8 flex items-center justify-center">
                            <div class="w-20 h-2 bg-bk-orange rounded-full animate-pulse"></div>
                        </div>
                        <div class="aspect-[4/5] glass border-2 border-bk-orange/30 rounded-[40px] p-8 flex flex-col justify-between group transition-all duration-500 hover:bg-bk-orange hover:border-transparent cursor-pointer">
                            <h5 class="text-4xl font-heading font-black group-hover:text-white transition-colors uppercase">
                                VISI</h5>
                            <p class="text-sm font-bold opacity-60 group-hover:text-white/80 transition-colors">
                                Memanusiakan brand melalui visual yang berkarakter.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-12 order-1 lg:order-2 reveal-item">
                <div class="space-y-6">
                    <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs">Cerita Kami</h2>
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

                    <div class="h-px bg-foreground/10 dark:bg-white/10"></div>

                    <p class="text-xl opacity-60 leading-relaxed">
                        Kami percaya bahwa setiap ide hebat berhak mendapatkan representasi visual yang kuat. Kami
                        menggabungkan estetika desain grafis tradisional dengan tren modern untuk hasil yang <span
                            class="text-bk-orange font-bold italic">fresssh!</span>
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-4">
                        <div class="flex items-center gap-2 px-4 py-2 bg-bk-orange/10 rounded-full">
                            <svg class="w-5 h-5 text-bk-orange" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-sm font-bold">Award Winning</span>
                        </div>
                        <div class="flex items-center gap-2 px-4 py-2 bg-bk-orange/10 rounded-full">
                            <svg class="w-5 h-5 text-bk-orange" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-bold">Certified</span>
                        </div>
                        <div class="flex items-center gap-2 px-4 py-2 bg-bk-orange/10 rounded-full">
                            <svg class="w-5 h-5 text-bk-orange" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                            <span class="text-sm font-bold">500+ Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-32 bg-foreground/5 dark:bg-black/20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 reveal-group">
        <div class="text-center mb-20 reveal-item">
            <h2 class="text-bk-orange font-black tracking-[0.3em] uppercase text-xs mb-6">Prinsip Kami</h2>
            <h3 class="text-5xl md:text-7xl font-heading font-black leading-none tracking-tighter">
                NILAI-NILAI <span class="text-bk-orange">KAMI.</span>
            </h3>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="reveal-item glass p-10 rounded-[40px] space-y-6 hover:border-bk-orange/30 transition-all group">
                <div class="w-16 h-16 bg-bk-orange/10 rounded-2xl flex items-center justify-center group-hover:bg-bk-orange group-hover:scale-110 transition-all">
                    <span class="text-bk-orange text-3xl font-heading font-black group-hover:text-white">01</span>
                </div>
                <h4 class="text-2xl font-heading font-black italic">Authenticity</h4>
                <p class="opacity-60 leading-relaxed">Tidak ada copy-paste. Setiap garis digambar manual dengan dedikasi penuh untuk
                    keunikan brand Anda.</p>
            </div>

            <div class="reveal-item glass p-10 rounded-[40px] space-y-6 hover:border-bk-orange/30 transition-all group">
                <div class="w-16 h-16 bg-bk-orange/10 rounded-2xl flex items-center justify-center group-hover:bg-bk-orange group-hover:scale-110 transition-all">
                    <span class="text-bk-orange text-3xl font-heading font-black group-hover:text-white">02</span>
                </div>
                <h4 class="text-2xl font-heading font-black italic">Simplicity</h4>
                <p class="opacity-60 leading-relaxed">Desain yang bagus adalah desain yang bisa dimengerti tanpa perlu banyak kata-kata.
                    Padat dan jelas.</p>
            </div>

            <div class="reveal-item glass p-10 rounded-[40px] space-y-6 hover:border-bk-orange/30 transition-all group">
                <div class="w-16 h-16 bg-bk-orange/10 rounded-2xl flex items-center justify-center group-hover:bg-bk-orange group-hover:scale-110 transition-all">
                    <span class="text-bk-orange text-3xl font-heading font-black group-hover:text-white">03</span>
                </div>
                <h4 class="text-2xl font-heading font-black italic">Affordability</h4>
                <p class="opacity-60 leading-relaxed">Kreativitas tingkat tinggi adalah hak semua orang. Kami memposisikan diri sebagai
                    partner yang ramah di kantong.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-background">
    <div class="max-w-4xl mx-auto px-6 reveal-item">
        <div class="glass p-12 rounded-[48px] border-bk-orange/20 text-center relative overflow-hidden">
            <div class="absolute -top-20 -right-20 w-40 h-40 bg-bk-orange/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-bk-orange/10 rounded-full blur-3xl"></div>

            <div class="relative z-10">
                <h4 class="text-3xl md:text-4xl font-heading font-black mb-4">Siap Berkolaborasi?</h4>
                <p class="text-lg opacity-60 mb-8 max-w-2xl mx-auto">Mari wujudkan visi kreatif Anda bersama tim yang passionate dan berpengalaman!</p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <button class="px-10 py-5 bg-bk-orange text-white rounded-2xl font-black text-lg shadow-xl shadow-bk-orange/20 hover:scale-105 active:scale-95 transition-all">
                        HUBUNGI KAMI 🚀
                    </button>
                    <button class="px-10 py-5 glass border-bk-orange/20 text-foreground dark:text-white rounded-2xl font-black text-lg hover:bg-white/10 transition-all">
                        LIHAT PORTFOLIO
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection