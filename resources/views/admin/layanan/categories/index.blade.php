<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Pricelist - BK Admin</title>

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
                <h1 class="text-3xl font-heading font-black uppercase tracking-tight mb-2">Kategori <span class="text-bk-orange">Pricelist.</span></h1>
                <p class="text-white/40 text-sm">Kelola kategori layanan untuk pricelist Balik Kucing Studio</p>
            </div>
            <button onclick="openCreateModal()" class="px-6 py-3 bg-bk-orange text-white rounded-xl text-xs font-black uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-xl shadow-bk-orange/20">
                + Tambah Kategori
            </button>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 bg-green-500/10 border border-green-500/20 rounded-2xl text-green-500 text-xs font-bold uppercase tracking-widest animate-reveal">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 rounded-2xl text-red-500 text-xs font-bold uppercase tracking-widest animate-reveal">
            {{ session('error') }}
        </div>
        @endif

        <!-- Categories Table -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-[32px] overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-white/5 text-[10px] font-black uppercase tracking-widest text-white/20">
                        <th class="px-8 py-6">Nama Kategori</th>
                        <th class="px-8 py-6">Slug</th>
                        <th class="px-8 py-6">Deskripsi</th>
                        <th class="px-8 py-6 text-center">Jumlah Item</th>
                        <th class="px-8 py-6 text-center">Urutan</th>
                        <th class="px-8 py-6 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @forelse($categories as $category)
                    <tr class="group hover:bg-white/2 transition-colors">
                        <td class="px-8 py-6">
                            <p class="text-sm font-black uppercase tracking-tight">{{ $category->name }}</p>
                        </td>
                        <td class="px-8 py-6">
                            <code class="text-xs text-bk-orange/60 font-mono">{{ $category->slug }}</code>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-[10px] text-white/40 max-w-[300px] truncate">{{ $category->description ?? '-' }}</p>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <span class="inline-flex items-center justify-center w-8 h-8 bg-white/5 rounded-lg text-xs font-black">{{ $category->pricelists_count }}</span>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <span class="text-xs font-black">{{ $category->order }}</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center justify-end gap-2">
                                <button type="button"
                                    data-id="{{ $category->id }}"
                                    data-name="{{ $category->name }}"
                                    data-description="{{ $category->description }}"
                                    data-order="{{ $category->order }}"
                                    onclick="openEditModal(this)"
                                    class="p-2 bg-white/5 hover:bg-bk-orange text-white/40 hover:text-white rounded-lg transition-all" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <form action="{{ route('admin.layanan.categories.destroy', $category->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-2 bg-white/5 hover:bg-red-500 text-white/40 hover:text-white rounded-lg transition-all" title="Hapus">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-8 py-20 text-center">
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-white/20">Belum ada kategori pricelist</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <!-- Create Modal -->
    <div id="create-modal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4">
        <div class="fixed inset-0 bg-black/60" onclick="closeCreateModal()"></div>
        <div class="relative w-full max-w-lg bg-[#111111] rounded-[32px] overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.8)] border border-white/10 animate-reveal">
            <div class="p-8">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h3 class="text-xl font-heading font-black uppercase tracking-tight text-white">Tambah <span class="text-bk-orange">Kategori.</span></h3>
                        <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em] mt-1">Buat kategori baru</p>
                    </div>
                    <button onclick="closeCreateModal()" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/5 text-white/40 hover:text-bk-orange transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form action="{{ route('admin.layanan.categories.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Nama Kategori</label>
                        <input type="text" name="name" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Deskripsi</label>
                        <textarea name="description" rows="3" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all resize-none"></textarea>
                    </div>
                    <div>
                        <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Urutan</label>
                        <input type="number" name="order" value="0" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                    </div>
                    <div class="flex gap-3 pt-4">
                        <button type="button" onclick="closeCreateModal()" class="flex-1 py-3 bg-white/5 hover:bg-white/10 text-white text-xs font-black uppercase tracking-widest rounded-xl transition-all">
                            Batal
                        </button>
                        <button type="submit" class="flex-1 py-3 bg-bk-orange hover:bg-bk-orange/90 text-white text-xs font-black uppercase tracking-widest rounded-xl transition-all shadow-lg shadow-bk-orange/20">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="edit-modal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4">
        <div class="fixed inset-0 bg-black/60" onclick="closeEditModal()"></div>
        <div class="relative w-full max-w-lg bg-[#111111] rounded-[32px] overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.8)] border border-white/10 animate-reveal">
            <div class="p-8">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h3 class="text-xl font-heading font-black uppercase tracking-tight text-white">Edit <span class="text-bk-orange">Kategori.</span></h3>
                        <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em] mt-1">Perbarui kategori</p>
                    </div>
                    <button onclick="closeEditModal()" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/5 text-white/40 hover:text-bk-orange transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form id="edit-form" method="POST" class="space-y-4">
                    @csrf @method('PUT')
                    <div>
                        <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Nama Kategori</label>
                        <input type="text" id="edit-name" name="name" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Deskripsi</label>
                        <textarea id="edit-description" name="description" rows="3" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all resize-none"></textarea>
                    </div>
                    <div>
                        <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Urutan</label>
                        <input type="number" id="edit-order" name="order" value="0" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                    </div>
                    <div class="flex gap-3 pt-4">
                        <button type="button" onclick="closeEditModal()" class="flex-1 py-3 bg-white/5 hover:bg-white/10 text-white text-xs font-black uppercase tracking-widest rounded-xl transition-all">
                            Batal
                        </button>
                        <button type="submit" class="flex-1 py-3 bg-bk-orange hover:bg-bk-orange/90 text-white text-xs font-black uppercase tracking-widest rounded-xl transition-all shadow-lg shadow-bk-orange/20">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openCreateModal() {
            document.getElementById('create-modal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeCreateModal() {
            document.getElementById('create-modal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openEditModal(button) {
            const categoryId = button.dataset.id;
            const categoryName = button.dataset.name;
            const categoryDescription = button.dataset.description;
            const categoryOrder = button.dataset.order;

            document.getElementById('edit-form').action = `/admin/layanan/categories/${categoryId}`;
            document.getElementById('edit-name').value = categoryName;
            document.getElementById('edit-description').value = categoryDescription || '';
            document.getElementById('edit-order').value = categoryOrder;
            document.getElementById('edit-modal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeEditModal() {
            document.getElementById('edit-modal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>
</body>

</html>