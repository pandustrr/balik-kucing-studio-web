<!-- Modal View Product Detail -->
<div id="modal-view-product" class="fixed inset-0 z-60 hidden overflow-y-auto">
    <div class="fixed inset-0 bg-ultra-black/80 backdrop-blur-sm transition-opacity" onclick="closeViewModal()"></div>

    <div class="flex min-h-full items-center justify-center p-4">
        <div class="relative w-full max-w-2xl bg-ultra-black border border-white/10 rounded-[40px] shadow-[0_32px_64px_-16px_rgba(0,0,0,0.6)] overflow-hidden animate-reveal">

            <!-- Close Button -->
            <button onclick="closeViewModal()" class="absolute top-6 right-6 z-10 p-2 hover:bg-white/5 rounded-xl transition-colors text-white/20 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="flex flex-col md:flex-row h-full">
                <!-- Product Image Section -->
                <div class="w-full md:w-1/2 aspect-square bg-white/5 relative overflow-hidden">
                    <img id="view-image" src="" alt="Product Image" class="w-full h-full object-contain">
                    <div id="view-no-image" class="absolute inset-0 flex flex-col items-center justify-center text-white/10 hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-[10px] uppercase font-black tracking-widest">No Image available</span>
                    </div>
                </div>

                <!-- Info Section -->
                <div class="w-full md:w-1/2 p-10 flex flex-col justify-between">
                    <div>
                        <div class="mb-6">
                            <span id="view-category" class="px-3 py-1 bg-bk-orange/10 border border-bk-orange/20 rounded-full text-[9px] font-black uppercase tracking-widest text-bk-orange"></span>
                        </div>
                        <h2 id="view-name" class="text-3xl font-heading font-black leading-none mb-4 uppercase"></h2>
                        <div class="flex items-center justify-between mb-6">
                            <div class="text-2xl font-black text-bk-orange" id="view-price"></div>
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] font-black text-white/20 uppercase tracking-widest">Stock:</span>
                                <span id="view-stock" class="text-sm font-black text-white"></span>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h4 class="text-[10px] font-black text-white/20 uppercase tracking-widest">Description</h4>
                            <div id="view-description" class="text-sm text-white/60 leading-relaxed font-normal whitespace-pre-wrap max-h-[150px] overflow-y-auto pr-2 custom-scrollbar"></div>
                        </div>
                    </div>

                    <!-- QRIS Preview if available -->
                    <div id="view-qris-container" class="mt-8 p-4 bg-white/3 border border-white/10 rounded-2xl hidden">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center overflow-hidden p-1 shadow-lg">
                                <img id="view-qris-image" src="" alt="QRIS" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h5 class="text-[10px] font-black uppercase tracking-widest text-white/40 mb-1">Payment Method</h5>
                                <p class="text-[11px] font-bold text-bk-orange">QRIS Code Ready</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>