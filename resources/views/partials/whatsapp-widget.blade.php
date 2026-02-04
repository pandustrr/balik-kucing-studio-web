<!-- Floating WhatsApp Widget -->
<div class="fixed bottom-8 right-8 z-[999]">
    <!-- Simple WhatsApp Form -->
    <div id="wa-window" class="absolute bottom-20 right-0 w-[300px] bg-white dark:bg-ultra-black rounded-3xl overflow-hidden opacity-0 scale-90 pointer-events-none transition-all duration-300 shadow-2xl border border-foreground/5">
        <!-- Compact Header -->
        <div class="bg-[#25D366] p-4 text-white flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="{{ asset('Logogram_BKStd.ico') }}" alt="BK" class="w-8 h-8 object-contain brightness-0 invert">
                <span class="font-black text-sm uppercase tracking-tight">Chat Admin</span>
            </div>
            <button id="close-wa" class="opacity-70 hover:opacity-100 transition-opacity p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Small Form -->
        <div class="p-5 space-y-4">
            <div class="space-y-3">
                <input type="text" id="wa-name" placeholder="Nama..."
                    class="w-full px-4 py-3 bg-foreground/5 border-0 rounded-xl focus:ring-2 focus:ring-[#25D366]/30 transition-all font-bold text-xs">
                <textarea id="wa-message" rows="2" placeholder="Ada yang bisa dibantu?"
                    class="w-full px-4 py-3 bg-foreground/5 border-0 rounded-xl focus:ring-2 focus:ring-[#25D366]/30 transition-all font-bold text-xs resize-none"></textarea>
            </div>
            <button id="send-wa" class="w-full py-4 bg-[#25D366] text-white rounded-xl font-black text-xs uppercase tracking-widest transition-all active:scale-95 shadow-lg shadow-[#25D366]/20 flex items-center justify-center gap-2">
                <span>Kirim</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M1.101 21.757L23.8 12.028 1.101 2.3l.011 7.912 13.623 1.816-13.623 1.817-.011 7.912z" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Main Toggle Button -->
    <button id="wa-toggle"
        class="flex items-center justify-center p-4 bg-[#25D366] text-white rounded-2xl shadow-xl transition-all duration-300 hover:scale-105 active:scale-90">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
        </svg>
    </button>
</div>

@push('scripts')
<script>
    const waToggle = document.getElementById('wa-toggle');
    const waWindow = document.getElementById('wa-window');
    const closeWa = document.getElementById('close-wa');
    const sendWa = document.getElementById('send-wa');

    function toggleWa() {
        const isOpen = !waWindow.classList.contains('opacity-0');
        if (isOpen) {
            waWindow.classList.add('opacity-0', 'scale-90', 'pointer-events-none');
        } else {
            waWindow.classList.remove('opacity-0', 'scale-90', 'pointer-events-none');
        }
    }

    waToggle.addEventListener('click', toggleWa);
    closeWa.addEventListener('click', toggleWa);

    sendWa.addEventListener('click', () => {
        const name = document.getElementById('wa-name').value;
        const message = document.getElementById('wa-message').value;

        if (!name) {
            alert('Tolong isi nama kamu ya! 😊');
            return;
        }

        const phone = '{{ $whatsappNumber }}';
        const text = `Halo Balikkucing Studio! 👋\n\nNama: *${name}*\nPesan: ${message}`;
        window.open(`https://wa.me/${phone}?text=${encodeURIComponent(text)}`, '_blank');
        toggleWa();
    });
</script>
@endpush