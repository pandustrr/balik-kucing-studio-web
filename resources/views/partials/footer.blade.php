<!-- Footer -->
<footer id="contact" class="bg-ultra-black text-white py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-12 border-b border-white/10 pb-12">
            <div class="space-y-6">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-bk-orange rounded-lg flex items-center justify-center text-white font-bold tracking-tighter">B</div>
                    <span class="text-xl font-bold tracking-tight font-heading">Balikkucing Studio</span>
                </div>
                <p class="text-white/50 text-sm leading-relaxed">
                    Affordable design agency for your design needs. Desain rasa jeruk.
                </p>
            </div>

            <div>
                <h5 class="font-bold mb-6 italic">Navigasi</h5>
                <ul class="space-y-4 text-white/50 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-bk-orange transition-colors">Home</a></li>
                    <li><a href="{{ route('layanan') }}" class="hover:text-bk-orange transition-colors">Layanan</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-bk-orange transition-colors">Tentang Kami</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-bk-orange transition-colors">Hubungi Kami</a></li>
                </ul>
            </div>

            <div>
                <h5 class="font-bold mb-6 italic">Komunitas</h5>
                <ul class="space-y-4 text-white/50 text-sm">
                    <li><a href="#" class="hover:text-bk-orange transition-colors">Grup Membaca</a></li>
                    <li><a href="#" class="hover:text-bk-orange transition-colors">Acara Literasi</a></li>
                    <li><a href="#" class="hover:text-bk-orange transition-colors">Blog</a></li>
                </ul>
            </div>

            <div>
                <h5 class="font-bold mb-6 italic">Hubungi Kami</h5>
                <p class="text-white/50 text-sm mb-4">Mendapatkan berita terbaru dari kami.</p>
                <div class="flex gap-2">
                    <input type="email" placeholder="Email Anda" class="bg-white/5 border border-white/10 rounded-xl px-4 py-2 text-sm w-full focus:outline-none focus:border-bk-orange">
                    <button class="bg-bk-orange p-2 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m22 2-7 20-4-9-9-4Z" />
                            <path d="M22 2 11 13" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="pt-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-white/30 text-xs">© 2024 Balikkucing Studio. All rights reserved.</p>
            <div class="flex gap-6">
                <!-- Social icons (simplified) -->
                <a href="#" class="text-white/30 hover:text-bk-orange transition-colors">Instagram</a>
                <a href="#" class="text-white/30 hover:text-bk-orange transition-colors">LinkedIn</a>
                <a href="#" class="text-white/30 hover:text-bk-orange transition-colors">Twitter</a>
            </div>
        </div>
    </div>
</footer>