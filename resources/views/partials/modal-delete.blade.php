<!-- Modal Delete Confirmation -->
<div id="modal-delete" class="fixed inset-0 z-60 hidden overflow-y-auto">
    <!-- Backdrop (No Blur) -->
    <div class="fixed inset-0 bg-ultra-black/60 transition-opacity" onclick="closeDeleteModal()"></div>

    <!-- Modal Content -->
    <div class="flex min-h-full items-center justify-center p-4">
        <div class="relative w-full max-w-[340px] bg-[#0f0f0f] border border-white/10 rounded-[32px] shadow-[0_32px_64px_-16px_rgba(0,0,0,0.8)] overflow-hidden animate-reveal">
            <div class="p-6 text-white">
                <!-- Header: Icon Left, Text Right -->
                <div class="flex items-start gap-5 mb-8 text-left">
                    <div class="shrink-0 w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center border border-red-500/10 text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-heading font-black uppercase tracking-tight mb-1">Hapus Data?</h2>
                        <p class="text-[10px] text-white/40 leading-relaxed uppercase tracking-widest font-bold">
                            Data yang dihapus tidak dapat dipulihkan kembali.
                        </p>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-2 mt-4">
                    <button type="button" onclick="closeDeleteModal()" class="px-5 py-3 text-[9px] font-black uppercase tracking-widest text-white/20 hover:text-white transition-colors">
                        Batal
                    </button>
                    <form id="form-delete-global" action="" method="POST" class="flex-1 md:flex-none">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full px-6 py-3 bg-red-500 text-white rounded-xl font-black text-[10px] uppercase tracking-widest transition-all hover:brightness-110 active:scale-95 shadow-lg shadow-red-500/20">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openDeleteModal(btn) {
        const modal = document.getElementById('modal-delete');
        const form = document.getElementById('form-delete-global');
        const actionUrl = btn.getAttribute('data-url');

        form.action = actionUrl;

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeDeleteModal() {
        const modal = document.getElementById('modal-delete');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Close on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (typeof closeDeleteModal === 'function') closeDeleteModal();
        }
    });
</script>