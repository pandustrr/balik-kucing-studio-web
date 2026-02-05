<!-- Image Preview Modal (Lightbox) -->
<div id="image-preview-modal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4">
    <div class="fixed inset-0 bg-black/90" onclick="closeImagePreview()"></div>
    <div class="relative max-w-4xl w-full max-h-[85vh] flex flex-col items-center animate-reveal z-10 p-2">
        <button onclick="closeImagePreview()" class="absolute -top-12 right-0 md:right-0 p-3 text-white/40 hover:text-white transition-all hover:rotate-90">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <img id="preview-image" src="" class="max-w-full max-h-[70vh] md:max-h-[75vh] object-contain rounded-2xl shadow-[0_20px_60px_-15px_rgba(0,0,0,0.7)] border border-white/10" alt="Product Preview">
        <div class="mt-6 text-center">
            <h3 id="preview-title" class="text-lg md:text-2xl font-heading font-black text-white uppercase tracking-tight drop-shadow-lg italic"></h3>
        </div>
    </div>
</div>

<!-- QRIS Modal -->
<div id="qris-modal" class="fixed inset-0 z-[110] hidden flex items-center justify-center p-6">
    <div class="fixed inset-0 bg-black/80" onclick="closeQrisModal()"></div>
    <div class="relative max-w-sm w-full bg-white rounded-[32px] overflow-hidden shadow-2xl animate-reveal p-1 z-10">
        <div class="bg-ultra-black rounded-[31px] p-8 text-center border border-white/5">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-white text-[10px] font-black uppercase tracking-widest opacity-40">Scan Preview</h3>
                <button onclick="closeQrisModal()" class="text-white/20 hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="bg-white p-4 rounded-2xl mb-6 aspect-square flex items-center justify-center overflow-hidden">
                <img id="qris-image" src="" class="w-full h-full object-contain" alt="QRIS Preview">
            </div>
            <p class="text-white/30 text-[9px] font-bold uppercase tracking-widest leading-relaxed italic">
                Silakan scan kode di atas untuk melihat detail atau preview produk.
            </p>
        </div>
    </div>
</div>


<!-- Order Details Modal -->
<div id="order-modal" class="fixed inset-0 z-[110] hidden flex items-center justify-center p-4 md:p-6">
    <div class="fixed inset-0 bg-black/80" onclick="closeOrderModal()"></div>
    <div class="relative max-w-lg w-full bg-white dark:bg-ultra-black rounded-[32px] md:rounded-[40px] overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.5)] animate-reveal border border-white/10 flex flex-col max-h-[90vh]">
        <div class="p-6 md:p-10 overflow-y-auto">
            <!-- Header -->
            <div class="flex justify-between items-start mb-6 md:mb-8">
                <div>
                    <h3 class="text-lg md:text-2xl font-heading font-black uppercase tracking-tight text-ultra-black dark:text-white leading-tight">Detail <span class="text-bk-orange">Pesanan.</span></h3>
                    <p class="text-[9px] md:text-[10px] font-bold text-bk-orange uppercase tracking-[0.2em] mt-1">Lengkapi data diri kamu</p>
                </div>
                <button onclick="closeOrderModal()" class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-foreground/5 dark:bg-white/5 text-foreground/40 dark:text-white/40 hover:text-bk-orange transition-all shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Product Summary Card -->
            <div class="bg-foreground/5 dark:bg-white/5 rounded-2xl md:rounded-3xl p-4 md:p-6 mb-6 md:mb-8 border border-foreground/5 dark:border-white/5">
                <div class="flex gap-4 md:gap-5">
                    <div id="modal-product-image-container" class="w-16 h-16 md:w-20 md:h-20 bg-white dark:bg-white/5 rounded-xl md:rounded-2xl overflow-hidden shrink-0 border border-white/10">
                        <img id="modal-product-image" src="" class="w-full h-full object-contain p-1.5 md:p-2" alt="">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p id="modal-product-category" class="text-[7px] md:text-[8px] font-black text-bk-orange uppercase tracking-widest mb-1"></p>
                        <h4 id="modal-product-name" class="text-sm md:text-base font-black text-ultra-black dark:text-white truncate mb-1 uppercase"></h4>
                        <div id="modal-product-desc" class="text-[9px] md:text-[11px] text-foreground/40 dark:text-white/40 line-clamp-2 leading-relaxed mb-2 font-medium italic"></div>
                        <div class="flex items-center justify-between">
                            <span id="modal-product-price" class="text-[10px] md:text-xs font-black text-foreground/60 dark:text-white/60"></span>
                            <span id="modal-product-qty" class="px-2 py-0.5 md:px-3 md:py-1 bg-bk-orange text-white rounded-lg text-[8px] md:text-[10px] font-black uppercase tracking-widest">Qty: 0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <form id="order-form" onsubmit="submitOrder(event)" class="space-y-4 md:space-y-5">
                <div class="space-y-1.5 md:space-y-2">
                    <label class="block text-[9px] md:text-[10px] font-black uppercase tracking-widest text-foreground/40 dark:text-white/40 ml-3 md:ml-4 italic">Nama Lengkap</label>
                    <input type="text" id="buyer-name" required
                        class="w-full px-5 py-3.5 md:px-6 md:py-4 bg-foreground/5 dark:bg-white/5 border-2 border-transparent rounded-xl md:rounded-2xl focus:border-bk-orange focus:bg-transparent transition-all outline-none font-bold text-xs md:text-sm text-foreground dark:text-white"
                        placeholder="Masukkan nama kamu...">
                </div>
                <div class="space-y-1.5 md:space-y-2">
                    <label class="block text-[9px] md:text-[10px] font-black uppercase tracking-widest text-foreground/40 dark:text-white/40 ml-3 md:ml-4 italic">Alamat / Lokasi</label>
                    <textarea id="buyer-location" required rows="2"
                        class="w-full px-5 py-3.5 md:px-6 md:py-4 bg-foreground/5 dark:bg-white/5 border-2 border-transparent rounded-xl md:rounded-2xl focus:border-bk-orange focus:bg-transparent transition-all outline-none font-bold text-xs md:text-sm text-foreground dark:text-white resize-none"
                        placeholder="Contoh: Jember, Jawa Timur"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-4 md:py-5 bg-bk-orange text-white rounded-xl md:rounded-2xl font-black text-xs md:text-sm uppercase tracking-[0.2em] shadow-xl shadow-bk-orange/30 hover:scale-[1.02] active:scale-95 transition-all flex items-center justify-center gap-2 md:gap-3">
                        <span>Konfirmasi & Chat WA</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-5 md:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>