<!-- Modal Create Product -->
<div id="modal-product" class="fixed inset-0 z-60 hidden overflow-y-auto">
    <div class="fixed inset-0 bg-ultra-black/60 transition-opacity" onclick="closeModal()"></div>

    <div class="flex min-h-full items-center justify-center p-4">
        <div class="relative w-full max-w-4xl bg-ultra-black border border-white/10 rounded-[40px] shadow-[0_32px_64px_-16px_rgba(0,0,0,0.6)] overflow-hidden animate-reveal text-white">
            <div class="p-8 md:p-10">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-2xl font-heading font-black uppercase tracking-tight mb-1">Tambah Produk</h2>
                        <p class="text-white/40 text-[10px] uppercase tracking-widest font-bold">Lengkapi informasi produk merchandise</p>
                    </div>
                    <button onclick="closeModal()" class="p-2 hover:bg-white/5 rounded-xl transition-colors text-white/20 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form action="{{ route('admin.merchandise.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="flex flex-col lg:flex-row gap-10">
                        <!-- Left Side: Basic Info -->
                        <div class="flex-1 space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Category -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Kategori</label>
                                    <select name="merchandise_category_id" required class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all">
                                        <option value="" class="bg-ultra-black">Pilih Kategori</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}" class="bg-ultra-black">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Name -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Nama Produk</label>
                                    <input type="text" name="name" required placeholder="Contoh: BK Signature T-Shirt"
                                        class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Price -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Harga (Opsional)</label>
                                    <input type="text" id="price-input" placeholder="Rp 0"
                                        class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all">
                                    <input type="hidden" name="price" id="price-raw">
                                </div>

                                <!-- Stock -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Stok</label>
                                    <input type="number" name="stock" value="0" min="0" required
                                        class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all">
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Deskripsi</label>
                                <textarea name="description" rows="6" placeholder="Jelaskan detail produk..."
                                    class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all placeholder:text-white/10 leading-relaxed"></textarea>
                            </div>
                        </div>

                        <!-- Right Side: Visual Assets -->
                        <div class="w-full lg:w-[350px] space-y-8">
                            <!-- Image -->
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Foto Produk</label>
                                    <input type="file" name="image" onchange="previewImage(this, 'create-image-preview', 'create-image-preview-container')"
                                        class="w-full text-xs text-white/40 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-black file:uppercase file:tracking-widest file:bg-white/10 file:text-white hover:file:bg-white/20 transition-all">
                                </div>
                                <!-- Image Preview Container -->
                                <div id="create-image-preview-container" class="hidden relative w-32 h-32 rounded-2xl overflow-hidden bg-white/5 border border-white/10 group/img">
                                    <img id="create-image-preview" src="" class="w-full h-full object-contain">
                                </div>
                            </div>

                            <!-- QRIS Image -->
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Scan Preview (QRIS)</label>
                                    <input type="file" name="qris_image" onchange="previewImage(this, 'create-qris-preview', 'create-qris-preview-container')"
                                        class="w-full text-xs text-white/40 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-black file:uppercase file:tracking-widest file:bg-white/10 file:text-white hover:file:bg-white/20 transition-all">
                                </div>
                                <!-- QRIS Preview Container -->
                                <div id="create-qris-preview-container" class="hidden relative w-32 h-32 rounded-2xl overflow-hidden bg-white/5 border border-white/10 p-4 group/qris">
                                    <img id="create-qris-preview" src="" class="w-full h-full object-contain">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-3 mt-10 pt-8 border-t border-white/5">
                        <button type="button" onclick="closeModal()" class="px-6 py-4 text-[10px] font-black uppercase tracking-widest text-white/40 hover:text-white transition-colors">Batal</button>
                        <button type="submit" class="flex-1 md:flex-none px-10 py-4 bg-bk-orange text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all hover:scale-105 active:scale-95 shadow-xl shadow-bk-orange/30">
                            Simpan Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>