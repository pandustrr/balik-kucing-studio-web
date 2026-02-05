@push('scripts')
<script>
    function filterProducts(categoryId) {
        const cards = document.querySelectorAll('.product-card');
        const buttons = document.querySelectorAll('.category-btn');
        const btnAll = document.getElementById('btn-all');

        if (categoryId === 'all') {
            btnAll.classList.add('bg-bk-orange', 'text-white', 'shadow-lg', 'shadow-bk-orange/20');
            btnAll.classList.remove('bg-foreground/5', 'dark:bg-white/5');
            buttons.forEach(btn => {
                btn.classList.remove('bg-bk-orange', 'text-white', 'shadow-lg', 'shadow-bk-orange/20');
                btn.classList.add('bg-foreground/5', 'dark:bg-white/5');
            });
        } else {
            btnAll.classList.remove('bg-bk-orange', 'text-white', 'shadow-lg', 'shadow-bk-orange/20');
            btnAll.classList.add('bg-foreground/5', 'dark:bg-white/5');
            buttons.forEach(btn => {
                const targetId = `btn-${categoryId}`;
                if (btn.id === targetId) {
                    btn.classList.add('bg-bk-orange', 'text-white', 'shadow-lg', 'shadow-bk-orange/20');
                    btn.classList.remove('bg-foreground/5', 'dark:bg-white/5');
                } else {
                    btn.classList.remove('bg-bk-orange', 'text-white', 'shadow-lg', 'shadow-bk-orange/20');
                    btn.classList.add('bg-foreground/5', 'dark:bg-white/5');
                }
            });
        }

        cards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            if (categoryId === 'all' || cardCategory === categoryId) {
                card.style.display = 'block';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0) scale(1)';
                }, 50);
            } else {
                card.style.opacity = '0';
                card.style.transform = 'translateY(10px) scale(0.95)';
                setTimeout(() => {
                    card.style.display = 'none';
                }, 300);
            }
        });
    }

    function openImagePreview(url, title) {
        const modal = document.getElementById('image-preview-modal');
        const img = document.getElementById('preview-image');
        const titleElem = document.getElementById('preview-title');

        img.src = url;
        titleElem.innerText = title;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeImagePreview() {
        const modal = document.getElementById('image-preview-modal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    function openQrisModal(btn) {
        const modal = document.getElementById('qris-modal');
        const img = document.getElementById('qris-image');
        const imageUrl = btn.getAttribute('data-url');
        img.src = imageUrl;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeQrisModal() {
        const modal = document.getElementById('qris-modal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    function handleQty(btn, delta) {
        const productId = btn.dataset.id;
        const maxStock = parseInt(btn.dataset.stock);
        const input = document.getElementById(`qty-${productId}`);
        let current = parseInt(input.value);
        current += delta;
        if (current < 1 && maxStock > 0) current = 1;
        if (current > maxStock) current = maxStock;
        if (maxStock === 0) current = 0;
        input.value = current;
    }

    let currentOrderData = null;

    function orderViaWhatsApp(btn) {
        const {
            phone,
            id,
            name,
            category,
            price,
            stock
        } = btn.dataset;
        const qty = document.getElementById(`qty-${id}`).value;
        const formattedPrice = price && price !== 'null' ?
            'Rp ' + new Number(price).toLocaleString('id-ID') :
            'Hubungi Admin';

        // Get product card and description
        const productCard = btn.closest('.product-card');
        const descElement = productCard.querySelector('.line-clamp-3');
        const productDesc = descElement ? descElement.innerText.trim() : '-';

        // Set current order data
        currentOrderData = {
            phone,
            id,
            name,
            category,
            price,
            stock,
            qty,
            formattedPrice,
            productDesc
        };

        // Populate Modal
        document.getElementById('modal-product-name').innerText = name;
        document.getElementById('modal-product-category').innerText = category;
        document.getElementById('modal-product-price').innerText = formattedPrice;
        document.getElementById('modal-product-qty').innerText = `Qty: ${qty}`;
        document.getElementById('modal-product-desc').innerText = productDesc;

        // Get product image
        const productImg = productCard.querySelector('img');
        if (productImg) {
            document.getElementById('modal-product-image').src = productImg.src;
            document.getElementById('modal-product-image').alt = name;
            document.getElementById('modal-product-image-container').classList.remove('hidden');
        } else {
            document.getElementById('modal-product-image-container').classList.add('hidden');
        }

        // Open Modal
        document.getElementById('order-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeOrderModal() {
        const modal = document.getElementById('order-modal');
        if (modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
            currentOrderData = null;
            document.getElementById('buyer-name').value = '';
            document.getElementById('buyer-location').value = '';
        }
    }

    async function submitOrder(event) {
        event.preventDefault();
        if (!currentOrderData) return;

        const buyerName = document.getElementById('buyer-name').value;
        const buyerLocation = document.getElementById('buyer-location').value;

        const {
            phone,
            id,
            name,
            category,
            formattedPrice,
            qty,
            productDesc
        } = currentOrderData;

        // Save order to database via AJAX
        try {
            const orderUrl = "{{ route('merchandise.order.store') }}";
            const response = await fetch(orderUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    buyer_name: buyerName,
                    buyer_location: buyerLocation,
                    merchandise_product_id: id,
                    quantity: qty
                })
            });

            if (!response.ok) {
                console.error('Failed to save order record');
            }
        } catch (error) {
            console.error('Error saving order:', error);
        }

        const message = `Halo Balik Kucing Studio! \n\nSaya ingin memesan produk merchandise berikut:\n\n*DATA PEMESAN:* \n- Nama: *${buyerName}*\n- Lokasi: *${buyerLocation}*\n\n*DETAIL PRODUK:* \n- Produk: *${name}*\n- Kategori: ${category}\n- Deskripsi: ${productDesc}\n- Harga Satuan: ${formattedPrice}\n- Jumlah Pesanan: *${qty} Pcs*\n\nMohon informasi lebih lanjut mengenai ketersediaan stok dan cara pembayarannya. Terima kasih!`;

        const encodedMessage = encodeURIComponent(message);
        window.open(`https://wa.me/${phone}?text=${encodedMessage}`, '_blank');

        closeOrderModal();
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeQrisModal();
            closeImagePreview();
            closeOrderModal();
        }
    });
</script>
@endpush