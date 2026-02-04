<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk - BK Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .font-heading {
            font-family: 'Instrument Sans', sans-serif;
        }

        @keyframes reveal {
            from {
                opacity: 0;
                transform: translateY(10px) scale(0.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .animate-reveal {
            animation: reveal 0.4s cubic-bezier(0.2, 1, 0.2, 1) forwards;
        }
    </style>
</head>

<body class="bg-ultra-black text-white font-sans">
    @include('admin.partials.sidebar')

    <!-- Main Content -->
    <main id="main-content" class="ml-56 min-h-screen p-8 transition-all duration-500">
        <!-- Header -->
        <div class="mb-8 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-heading font-black uppercase tracking-tight mb-2">Data Produk</h1>
                <p class="text-white/40 text-sm">Kelola katalog merchandise Balik Kucing Studio</p>
            </div>
            <button onclick="openModal()" class="px-6 py-3 bg-bk-orange text-white rounded-xl font-black text-xs uppercase tracking-widest transition-all hover:scale-105 active:scale-95 shadow-xl shadow-bk-orange/20 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Produk
            </button>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 bg-green-500/10 border border-green-500/20 rounded-2xl text-green-500 text-xs font-bold uppercase tracking-widest animate-reveal">
            {{ session('success') }}
        </div>
        @endif

        <!-- Category Filter -->
        <div class="flex gap-2 mb-8 bg-white/5 p-1.5 rounded-2xl border border-white/10 w-fit flex-wrap">
            <a href="{{ route('admin.merchandise.products.index', ['category' => 'all']) }}"
                class="px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all {{ (!isset($categoryId) || $categoryId === 'all') ? 'bg-bk-orange text-white shadow-lg' : 'text-white/30 hover:text-white hover:bg-white/5' }}">
                Semua
            </a>
            @foreach($categories as $category)
            <a href="{{ route('admin.merchandise.products.index', ['category' => $category->id]) }}"
                class="px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all {{ isset($categoryId) && $categoryId == $category->id ? 'bg-bk-orange text-white shadow-lg' : 'text-white/30 hover:text-white hover:bg-white/5' }}">
                {{ $category->name }}
            </a>
            @endforeach
        </div>

        <!-- Products Table -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-[32px] overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-white/5">
                        <th class="px-8 py-6 text-[10px] font-black uppercase tracking-widest text-white/20">Produk</th>
                        <th class="px-8 py-6 text-[10px] font-black uppercase tracking-widest text-white/20">Kategori</th>
                        <th class="px-8 py-6 text-[10px] font-black uppercase tracking-widest text-white/20">Harga</th>
                        <th class="px-8 py-6 text-[10px] font-black uppercase tracking-widest text-white/20">Stok</th>
                        <th class="px-8 py-6 text-[10px] font-black uppercase tracking-widest text-white/20 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @forelse($products as $product)
                    <tr class="group hover:bg-white/2 transition-colors">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-white/5 overflow-hidden border border-white/10 shrink-0">
                                    @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-full object-cover">
                                    @else
                                    <div class="w-full h-full flex items-center justify-center text-white/10">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    <p class="text-sm font-black uppercase tracking-tight">{{ $product->name }}</p>
                                    <p class="text-[10px] text-white/30 truncate max-w-[200px]">{{ $product->description ?: 'Tidak ada deskripsi' }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[9px] font-black uppercase tracking-widest text-white/60">
                                {{ $product->category->name }}
                            </span>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-sm font-black text-bk-orange">
                                {{ $product->price ? 'Rp ' . number_format($product->price, 0, ',', '.') : '-' }}
                            </p>
                        </td>
                        <td class="px-8 py-6">
                            @if($product->stock > 0)
                            <div class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                                <span class="text-sm font-bold">{{ $product->stock }} <span class="text-[10px] text-white/20 uppercase ml-1">Pcs</span></span>
                            </div>
                            @else
                            <div class="flex items-center gap-2 text-red-500/50">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span>
                                <span class="text-sm font-bold uppercase tracking-widest text-[10px]">Habis</span>
                            </div>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <button
                                    data-id="{{ $product->id }}"
                                    data-name="{{ $product->name }}"
                                    data-category="{{ $product->category->name }}"
                                    data-price="{{ $product->price }}"
                                    data-stock="{{ $product->stock }}"
                                    data-description="{{ $product->description }}"
                                    data-image="{{ $product->image ? asset('storage/' . $product->image) : '' }}"
                                    data-qris="{{ $product->qris_image ? asset('storage/' . $product->qris_image) : '' }}"
                                    onclick="openViewModal(this)"
                                    class="p-2 hover:bg-bk-orange/10 hover:text-bk-orange text-white/20 rounded-lg transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <button
                                    data-id="{{ $product->id }}"
                                    data-name="{{ $product->name }}"
                                    data-category="{{ $product->merchandise_category_id }}"
                                    data-price="{{ $product->price }}"
                                    data-stock="{{ $product->stock }}"
                                    data-description="{{ $product->description }}"
                                    data-image="{{ $product->image ? asset('storage/' . $product->image) : '' }}"
                                    data-qris="{{ $product->qris_image ? asset('storage/' . $product->qris_image) : '' }}"
                                    onclick="openEditModal(this)"
                                    class="p-2 hover:bg-blue-500/10 hover:text-blue-400 text-white/20 rounded-lg transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button
                                    type="button"
                                    data-url="{{ route('admin.merchandise.products.destroy', $product->id) }}"
                                    onclick="openDeleteModal(this)"
                                    class="p-2 hover:bg-red-500/10 hover:text-red-400 text-white/20 rounded-lg transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-20 text-center">
                            <div class="w-16 h-16 bg-white/5 rounded-2xl flex items-center justify-center mx-auto mb-4 border border-white/10 text-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                            </div>
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-white/20">
                                @if(isset($categoryId) && $categoryId !== 'all')
                                Belum ada produk untuk kategori ini
                                @else
                                Belum ada produk merchandise
                                @endif
                            </p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    @include('admin.merchandise.products.modal-create')
    @include('admin.merchandise.products.modal-edit')
    @include('admin.merchandise.products.modal-show')
    @include('partials.modal-delete')

    <script>
        function formatRupiah(angka, prefix) {
            if (!angka) return '';

            if (typeof angka === 'number' || !isNaN(parseFloat(angka)) && !String(angka).includes('Rp')) {
                angka = Math.floor(parseFloat(angka)).toString();
            }

            var number_string = angka.toString().replace(/[^0-9]/g, ''),
                sisa = number_string.length % 3,
                rupiah = number_string.substr(0, sisa),
                ribuan = number_string.substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
        }

        function previewImage(input, previewId, containerId) {
            const preview = document.getElementById(previewId);
            const container = document.getElementById(containerId);

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    if (container) container.classList.remove('hidden');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Auto format for Create Modal
        const priceInput = document.getElementById('price-input');
        const priceRaw = document.getElementById('price-raw');

        if (priceInput) {
            priceInput.addEventListener('input', function(e) {
                this.value = formatRupiah(this.value, 'Rp ');
                priceRaw.value = this.value.replace(/[^0-9]/g, '');
            });
        }

        // Auto format for Edit Modal
        const editPriceInput = document.getElementById('edit-price-input');
        const editPriceRaw = document.getElementById('edit-price-raw');

        if (editPriceInput) {
            editPriceInput.addEventListener('input', function(e) {
                this.value = formatRupiah(this.value, 'Rp ');
                editPriceRaw.value = this.value.replace(/[^0-9]/g, '');
            });
        }

        function openModal() {
            const modal = document.getElementById('modal-product');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            // Reset form on open
            if (priceInput) priceInput.value = '';
            if (priceRaw) priceRaw.value = '';

            // Reset Create Previews
            const createImgPreview = document.getElementById('create-image-preview-container');
            const createQrisPreview = document.getElementById('create-qris-preview-container');
            if (createImgPreview) createImgPreview.classList.add('hidden');
            if (createQrisPreview) createQrisPreview.classList.add('hidden');
        }

        function closeModal() {
            const modal = document.getElementById('modal-product');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openViewModal(btn) {
            const name = btn.getAttribute('data-name');
            const category = btn.getAttribute('data-category');
            const price = btn.getAttribute('data-price');
            const stock = btn.getAttribute('data-stock');
            const description = btn.getAttribute('data-description');
            const image = btn.getAttribute('data-image');
            const qris = btn.getAttribute('data-qris');

            const modal = document.getElementById('modal-view-product');

            document.getElementById('view-name').innerText = name;
            document.getElementById('view-category').innerText = category;
            document.getElementById('view-price').innerText = price && price !== 'null' ? formatRupiah(price, 'Rp ') : '-';
            document.getElementById('view-stock').innerText = stock || '0';
            document.getElementById('view-description').innerText = description === 'null' || !description ? 'Tidak ada deskripsi' : description;

            const viewImg = document.getElementById('view-image');
            const noImg = document.getElementById('view-no-image');
            if (image) {
                viewImg.src = image;
                viewImg.classList.remove('hidden');
                noImg.classList.add('hidden');
            } else {
                viewImg.classList.add('hidden');
                noImg.classList.remove('hidden');
            }

            const qrisContainer = document.getElementById('view-qris-container');
            if (qris) {
                document.getElementById('view-qris-image').src = qris;
                qrisContainer.classList.remove('hidden');
            } else {
                qrisContainer.classList.add('hidden');
            }

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeViewModal() {
            const modal = document.getElementById('modal-view-product');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openEditModal(btn) {
            const id = btn.getAttribute('data-id');
            const name = btn.getAttribute('data-name');
            const category = btn.getAttribute('data-category');
            const price = btn.getAttribute('data-price');
            const stock = btn.getAttribute('data-stock');
            const description = btn.getAttribute('data-description');
            const image = btn.getAttribute('data-image');
            const qris = btn.getAttribute('data-qris');

            const modal = document.getElementById('modal-edit-product');
            const form = document.getElementById('form-edit-product');

            form.action = `/admin/merchandise/products/${id}`;
            document.getElementById('edit-name').value = name;
            document.getElementById('edit-category').value = category;
            document.getElementById('edit-stock').value = stock || '0';
            document.getElementById('edit-description').value = description === 'null' ? '' : description;

            // Handle price formatting on open
            if (editPriceInput) {
                if (price && price !== 'null') {
                    editPriceInput.value = formatRupiah(price, 'Rp ');
                    editPriceRaw.value = price;
                } else {
                    editPriceInput.value = '';
                    editPriceRaw.value = '';
                }
            }

            // Handle Preview in Edit Modal
            const editImgPreview = document.getElementById('edit-image-preview');
            const editImgContainer = document.getElementById('edit-image-preview-container');
            const deleteImgCheckbox = document.getElementById('delete-image-checkbox');

            if (image) {
                editImgPreview.src = image;
                editImgContainer.classList.remove('hidden');
            } else {
                editImgContainer.classList.add('hidden');
            }
            if (deleteImgCheckbox) deleteImgCheckbox.checked = false;

            const editQrisPreview = document.getElementById('edit-qris-preview');
            const editQrisContainer = document.getElementById('edit-qris-preview-container');
            const deleteQrisCheckbox = document.getElementById('delete-qris-image-checkbox');

            if (qris) {
                editQrisPreview.src = qris;
                editQrisContainer.classList.remove('hidden');
            } else {
                editQrisContainer.classList.add('hidden');
            }
            if (deleteQrisCheckbox) deleteQrisCheckbox.checked = false;

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeEditModal() {
            const modal = document.getElementById('modal-edit-product');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function removeImage(type) {
            if (type === 'image') {
                document.getElementById('edit-image-preview-container').classList.add('hidden');
                document.getElementById('delete-image-checkbox').checked = true;
            } else if (type === 'qris') {
                document.getElementById('edit-qris-preview-container').classList.add('hidden');
                document.getElementById('delete-qris-image-checkbox').checked = true;
            }
        }

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeModal();
                closeEditModal();
                closeViewModal();
                if (typeof closeDeleteModal === 'function') closeDeleteModal();
            }
        });
    </script>
</body>

</html>