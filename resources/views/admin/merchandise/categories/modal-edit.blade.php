<!-- Modal Edit Category -->
<div id="modal-edit-category" class="fixed inset-0 z-60 hidden overflow-y-auto">
    <!-- Backdrop (No Blur) -->
    <div class="fixed inset-0 bg-ultra-black/60 transition-opacity" onclick="closeEditModal()"></div>

    <!-- Modal Content -->
    <div class="flex min-h-full items-center justify-center p-4">
        <div class="relative w-full max-w-lg bg-[#0a0a0a] border border-white/10 rounded-[40px] shadow-[0_32px_64px_-16px_rgba(0,0,0,0.6)] overflow-hidden animate-reveal">
            <div class="p-8 md:p-10">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-2xl font-heading font-black uppercase tracking-tight mb-1">Edit Kategori</h2>
                        <p class="text-white/40 text-[10px] uppercase tracking-widest font-bold">Perbarui informasi kategori</p>
                    </div>
                    <button onclick="closeEditModal()" class="p-2 hover:bg-white/5 rounded-xl transition-colors text-white/20 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form id="form-edit-category" action="" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="space-y-2">
                        <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Nama Kategori</label>
                        <input type="text" id="edit-name" name="name" required placeholder="Contoh: T-Shirts, Accessories"
                            class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all placeholder:text-white/10">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] px-1">Deskripsi (Opsional)</label>
                        <textarea id="edit-description" name="description" rows="4" placeholder="Jelaskan kategori ini..."
                            class="w-full px-5 py-4 bg-white/5 border border-white/10 rounded-2xl text-white text-sm focus:border-bk-orange focus:outline-none transition-all placeholder:text-white/10 leading-relaxed"></textarea>
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-4">
                        <button type="button" onclick="closeEditModal()" class="px-6 py-4 text-[10px] font-black uppercase tracking-widest text-white/40 hover:text-white transition-colors">Batal</button>
                        <button type="submit" class="flex-1 md:flex-none px-8 py-4 bg-bk-orange text-white rounded-2xl font-black text-xs uppercase tracking-widest transition-all hover:scale-105 active:scale-95 shadow-xl shadow-bk-orange/30">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>