<!-- Modal Edit Product -->
<div id="modal-edit-product" class="fixed inset-0 z-60 hidden overflow-y-auto">
    <div class="fixed inset-0 bg-ultra-black/60 transition-opacity" onclick="closeEditModal()"></div>

    <div class="flex min-h-full items-center justify-center p-4">
        <div class="relative w-full max-w-4xl bg-ultra-black border border-white/10 rounded-[40px] shadow-[0_32px_64px_-16px_rgba(0,0,0,0.6)] overflow-hidden animate-reveal text-white">
            <div class="p-8 md:p-10">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-2xl font-heading font-black uppercase tracking-tight mb-1">Edit Produk</h2>
                        <p class="text-white/40 text-[10px] uppercase tracking-widest font-bold">Perbarui informasi produk merchandise</p>
                    </div>
                    <button onclick="closeEditModal()" class="p-2 hover:bg-white/5 rounded-xl transition-colors text-white/20 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form id="form-edit-product" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-col lg:flex-row gap-10">
                        <!-- Left Side: Basic Info -->
                        <div class="flex-1 space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Category -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Kategori</label>
                                    <select id="edit-category" name="merchandise_category_id" required class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}" class="bg-ultra-black">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Name -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Nama Produk</label>
                                    <input type="text" id="edit-name" name="name" required placeholder="Nama Produk"
                                        class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Price -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Harga (Opsional)</label>
                                    <input type="text" id="edit-price-input" placeholder="Rp 0"
                                        class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all">
                                    <input type="hidden" name="price" id="edit-price-raw">
                                </div>

                                <!-- Stock -->
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Stok</label>
                                    <input type="number" id="edit-stock" name="stock" value="0" min="0" required
                                        class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all">
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Deskripsi</label>
                                <textarea id="edit-description" name="description" rows="6" placeholder="Deskripsi produk..."
                                    class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all placeholder:text-white/10 leading-relaxed"></textarea>
                            </div>
                        </div>

                        <!-- Right Side: Visual Assets -->
                        <div class="w-full lg:w-[350px] space-y-8">
                            <!-- Image -->
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Foto Produk</label>
                                    <input type="file" name="image" onchange="previewImage(this, 'edit-image-preview', 'edit-image-preview-container')"
                                        class="w-full text-xs text-white/40 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-black file:uppercase file:tracking-widest file:bg-white/10 file:text-white hover:file:bg-white/20 transition-all">
                                </div>
                                <div id="edit-image-preview-container" class="hidden relative w-32 h-32 rounded-2xl overflow-hidden bg-white/5 border border-white/10 group/img">
                                    <img id="edit-image-preview" src="" class="w-full h-full object-contain">
                                    <button type="button" onclick="removeImage('image')"
                                        class="absolute top-2 right-2 p-1.5 bg-red-500 text-white rounded-lg transform scale-90 opacity-0 group-hover/img:opacity-100 group-hover/img:scale-100 transition-all shadow-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                    <input type="checkbox" name="delete_image" id="delete-image-checkbox" class="hidden" value="1">
                                </div>
                            </div>

                            <!-- QRIS Image -->
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Scan Preview (QRIS)</label>
                                    <input type="file" name="qris_image" onchange="previewImage(this, 'edit-qris-preview', 'edit-qris-preview-container')"
                                        class="w-full text-xs text-white/40 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-black file:uppercase file:tracking-widest file:bg-white/10 file:text-white hover:file:bg-white/20 transition-all">
                                </div>
                                <div id="edit-qris-preview-container" class="hidden relative w-32 h-32 rounded-2xl overflow-hidden bg-white/5 border border-white/10 p-4 group/qris">
                                    <img id="edit-qris-preview" src="" class="w-full h-full object-contain">
                                    <button type="button" onclick="removeImage('qris')"
                                        class="absolute top-2 right-2 p-1.5 bg-red-500 text-white rounded-xl transform scale-90 opacity-0 group-hover/qris:opacity-100 group-hover/qris:scale-100 transition-all shadow-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                    <input type="checkbox" name="delete_qris_image" id="delete-qris-image-checkbox" class="hidden" value="1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-3 mt-10 pt-8 border-t border-white/5">
                        <button type="button" onclick="closeEditModal()" class="px-6 py-4 text-[10px] font-black uppercase tracking-widest text-white/40 hover:text-white transition-colors">Batal</button>
                        <button type="submit" class="flex-1 md:flex-none px-10 py-4 bg-bk-orange text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all hover:scale-105 active:scale-95 shadow-xl shadow-bk-orange/30">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>