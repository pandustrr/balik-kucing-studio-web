<!-- Order Detail Modal -->
<div id="show-order-modal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4">
    <!-- Semi-transparent background without blur -->
    <div class="fixed inset-0 bg-black/60" onclick="closeShowOrderModal()"></div>

    <!-- Modal Container with strong shadow and no blur -->
    <div class="relative w-full max-w-lg bg-[#111111] rounded-[32px] overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.8)] border border-white/10 animate-reveal">
        <div class="p-8 md:p-10">
            <!-- Header -->
            <div class="flex justify-between items-start mb-8">
                <div>
                    <h3 class="text-xl md:text-2xl font-heading font-black uppercase tracking-tight text-white leading-tight">Detail <span class="text-bk-orange">Pesanan.</span></h3>
                    <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em] mt-1">Informasi lengkap transaksi</p>
                </div>
                <button onclick="closeShowOrderModal()" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/5 text-white/40 hover:text-bk-orange transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Content -->
            <div class="space-y-8">
                <!-- Product Info -->
                <div class="flex gap-6 items-center p-4 bg-white/5 rounded-2xl border border-white/5">
                    <div class="w-20 h-20 bg-white/5 rounded-xl overflow-hidden shrink-0 border border-white/10">
                        <img id="show-product-image" src="" class="w-full h-full object-cover" alt="">
                    </div>
                    <div>
                        <p id="show-product-category" class="text-[8px] font-black text-bk-orange uppercase tracking-widest mb-1"></p>
                        <h4 id="show-product-name" class="text-base font-black text-white uppercase tracking-tight"></h4>
                        <p id="show-product-price" class="text-xs font-bold text-white/40 mt-1"></p>
                    </div>
                </div>

                <!-- Order Details -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="space-y-1.5">
                        <p class="text-[9px] font-black uppercase tracking-widest text-white/20">Pemesan</p>
                        <p id="show-buyer-name" class="text-sm font-bold text-white"></p>
                    </div>
                    <div class="space-y-1.5">
                        <p class="text-[9px] font-black uppercase tracking-widest text-white/20">Jumlah (Qty)</p>
                        <p id="show-order-qty" class="text-sm font-bold text-white"></p>
                    </div>
                    <div class="col-span-2 space-y-1.5">
                        <p class="text-[9px] font-black uppercase tracking-widest text-white/20">Lokasi / Alamat</p>
                        <p id="show-buyer-location" class="text-sm font-bold text-white leading-relaxed"></p>
                    </div>
                    <div class="col-span-2 pt-4 border-t border-white/5 flex justify-between items-end">
                        <div class="space-y-1.5">
                            <p class="text-[9px] font-black uppercase tracking-widest text-white/20">Total Pembayaran</p>
                            <p id="show-total-price" class="text-xl font-black text-bk-orange"></p>
                        </div>
                        <div id="show-status-badge" class="mb-1"></div>
                    </div>
                </div>
            </div>

            <div class="mt-10">
                <button onclick="closeShowOrderModal()" class="w-full py-4 bg-white/5 hover:bg-white/10 text-white text-[10px] font-black uppercase tracking-[0.2em] rounded-xl transition-all border border-white/5">
                    Close Details
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openShowOrderModal(button) {
        const data = {
            product_name: button.dataset.productName,
            product_category: button.dataset.productCategory,
            product_image: button.dataset.productImage,
            product_price: button.dataset.productPrice,
            buyer_name: button.dataset.buyerName,
            buyer_location: button.dataset.buyerLocation,
            quantity: button.dataset.quantity,
            total_price: button.dataset.totalPrice,
            status: button.dataset.status
        };

        document.getElementById('show-product-name').innerText = data.product_name;
        document.getElementById('show-product-category').innerText = data.product_category;
        document.getElementById('show-product-price').innerText = 'IDR ' + new Number(data.product_price).toLocaleString('id-ID');
        document.getElementById('show-product-image').src = data.product_image;
        document.getElementById('show-buyer-name').innerText = data.buyer_name;
        document.getElementById('show-buyer-location').innerText = data.buyer_location;
        document.getElementById('show-order-qty').innerText = data.quantity + ' Pcs';
        document.getElementById('show-total-price').innerText = 'Rp ' + new Number(data.total_price).toLocaleString('id-ID');

        // Status Badge Logic
        const badgeContainer = document.getElementById('show-status-badge');
        let badgeHtml = '';
        if (data.status === 'pending') {
            badgeHtml = `<span class="px-3 py-1 bg-yellow-500/10 text-yellow-500 rounded-full text-[8px] font-black uppercase tracking-widest border border-yellow-500/20">Pending</span>`;
        } else if (data.status === 'done') {
            badgeHtml = `<span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[8px] font-black uppercase tracking-widest border border-green-500/20">Done</span>`;
        } else {
            badgeHtml = `<span class="px-3 py-1 bg-red-500/10 text-red-500 rounded-full text-[8px] font-black uppercase tracking-widest border border-red-500/20">Cancel</span>`;
        }
        badgeContainer.innerHTML = badgeHtml;

        document.getElementById('show-order-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeShowOrderModal() {
        document.getElementById('show-order-modal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
</script>