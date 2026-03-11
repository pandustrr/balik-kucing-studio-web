<!-- Footer -->
<footer id="contact"
    class="relative mt-20 pt-24 pb-12 bg-background dark:bg-ultra-black text-foreground dark:text-white transition-colors duration-500 border-t border-foreground/5 dark:border-white/5">
    <!-- Background Decor -->
    <div
        class="absolute top-0 right-0 w-[500px] h-[500px] bg-bk-orange/5 rounded-full blur-[120px] pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-8 md:px-16 lg:px-24 relative z-10">
        <div class="grid lg:grid-cols-12 gap-16 pb-20 border-b border-foreground/10 dark:border-white/10">
            <!-- Brand Column -->
            <div class="lg:col-span-5 space-y-8">
                <div class="flex items-center gap-3">
                    <div
                        class="w-10 h-10 bg-bk-orange rounded-xl flex items-center justify-center text-white font-black text-xl shadow-lg shadow-bk-orange/30">
                        BK</div>
                    <span class="text-2xl font-heading font-black tracking-tighter">BALIKKUCING <span
                            class="text-bk-orange">STUDIO.</span></span>
                </div>
                <p class="text-lg opacity-60 leading-relaxed font-medium max-w-sm">
                    Kolektif kreatif yang mengubah ide hebat Anda menjadi visual yang berkarakter dan fresssh!
                </p>
                <div class="flex gap-4">
                    <a href="#"
                        class="w-12 h-12 rounded-2xl bg-foreground/5 dark:bg-white/5 flex items-center justify-center hover:bg-bk-orange hover:text-white transition-all group border border-foreground/5 dark:border-white/5">
                        <span class="font-black text-xs">IG</span>
                    </a>
                    <a href="#"
                        class="w-12 h-12 rounded-2xl bg-foreground/5 dark:bg-white/5 flex items-center justify-center hover:bg-bk-orange hover:text-white transition-all group border border-foreground/5 dark:border-white/5">
                        <span class="font-black text-xs">BE</span>
                    </a>
                    <a href="#"
                        class="w-12 h-12 rounded-2xl bg-foreground/5 dark:bg-white/5 flex items-center justify-center hover:bg-bk-orange hover:text-white transition-all group border border-foreground/5 dark:border-white/5">
                        <span class="font-black text-xs">TW</span>
                    </a>
                </div>
            </div>

            <!-- Links Columns -->
            <div class="lg:col-span-7 grid grid-cols-2 md:grid-cols-3 gap-12">
                <div class="space-y-6">
                    <h5 class="text-xs font-black uppercase tracking-[0.3em] text-bk-orange">Sitemap</h5>
                    <ul class="space-y-4 font-bold opacity-60">
                        <li><a href="{{ route('home') }}" class="hover:text-bk-orange transition-colors">Utama</a></li>
                        <li><a href="{{ route('layanan') }}" class="hover:text-bk-orange transition-colors">Layanan</a>
                        </li>
                        <li><a href="{{ route('about') }}" class="hover:text-bk-orange transition-colors">Studio</a>
                        </li>
                        <li><a href="{{ route('contact') }}" class="hover:text-bk-orange transition-colors">Hiring</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-6">
                    <h5 class="text-xs font-black uppercase tracking-[0.3em] text-bk-orange">Studio</h5>
                    <div class="space-y-4 text-sm font-bold opacity-60">
                        <p>Perumahan Taman Gading LO-9<br>Kel. Tegal Besar, Kec. Kaliwates<br>Jember, Jawa Timur</p>
                        <p>+62 812 3456 7890<br>halo@balikkucing.id</p>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1 space-y-6">
                    <h5 class="text-xs font-black uppercase tracking-[0.3em] text-bk-orange">Fast Response</h5>
                    <a href="https://wa.me/6281234567890"
                        class="block p-6 bg-bk-orange text-white rounded-[32px] font-black group transition-all hover:scale-105 active:scale-95 shadow-xl shadow-bk-orange/30">
                        <p class="text-[10px] opacity-70 mb-1 text-white">Mulai Project</p>
                        <p class="text-xl text-white">Chat WhatsApp</p>
                    </a>
                </div>
            </div>
        </div>

        <div
            class="pt-12 flex flex-col md:flex-row justify-between items-center gap-6 text-[10px] font-black uppercase tracking-widest opacity-40">
            <p>© 2024 BALIKKUCING STUDIO. ALL RIGHTS RESERVED.</p>
            <div class="flex gap-8">
                <a href="#" class="hover:text-bk-orange transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-bk-orange transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>