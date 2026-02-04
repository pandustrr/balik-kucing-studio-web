<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Merchandise - BK Admin</title>

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
    </style>
</head>

<body class="bg-ultra-black text-white font-sans">
    @include('admin.partials.sidebar')

    <!-- Main Content -->
    <main id="main-content" class="ml-56 min-h-screen p-8 transition-all duration-500">
        <!-- Header -->
        <div class="mb-8 flex items-center justify-between">
            <div>
                <div class="flex items-center gap-2 text-white/40 text-xs uppercase tracking-[0.2em] mb-2">
                    <a href="{{ route('admin.merchandise.index') }}" class="hover:text-bk-orange transition-colors">Merchandise</a>
                    <span>/</span>
                    <span class="text-white/60">Kategori</span>
                </div>
                <h1 class="text-3xl font-heading font-black uppercase tracking-tight mb-2">Kategori Merchandise</h1>
                <p class="text-white/40 text-sm">Kelola pengelompokan produk merchandise</p>
            </div>
            <button onclick="openModal()" class="px-6 py-3 bg-bk-orange text-white rounded-xl font-black text-xs uppercase tracking-widest transition-all hover:scale-105 active:scale-95 shadow-xl shadow-bk-orange/20 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Kategori
            </button>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 bg-green-500/10 border border-green-500/20 rounded-2xl flex items-center gap-3 text-green-400 text-sm animate-reveal">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            {{ session('success') }}
        </div>
        @endif

        <!-- Table Card -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-[32px] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-white/5">
                            <th class="px-8 py-6 text-[10px] font-black text-white/30 uppercase tracking-[0.2em]">Nama Kategori</th>
                            <th class="px-8 py-6 text-[10px] font-black text-white/30 uppercase tracking-[0.2em]">Slug</th>
                            <th class="px-8 py-6 text-[10px] font-black text-white/30 uppercase tracking-[0.2em]">Deskripsi</th>
                            <th class="px-8 py-6 text-[10px] font-black text-white/30 uppercase tracking-[0.2em] text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        @forelse($categories as $category)
                        <tr class="group hover:bg-white/5 transition-colors">
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-bk-orange/10 rounded-xl flex items-center justify-center text-bk-orange">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                        </svg>
                                    </div>
                                    <span class="font-bold text-white tracking-tight">{{ $category->name }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <span class="text-xs font-mono text-white/40 bg-white/5 px-2 py-1 rounded-md">{{ $category->slug }}</span>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-sm text-white/40 max-w-xs truncate">{{ $category->description ?? '-' }}</p>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        data-id="{{ $category->id }}"
                                        data-name="{{ $category->name }}"
                                        data-description="{{ $category->description }}"
                                        onclick="openEditModal(this)"
                                        class="p-2 hover:bg-blue-500/10 hover:text-blue-400 text-white/20 rounded-lg transition-all">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    <button
                                        type="button"
                                        data-url="{{ route('admin.merchandise.categories.destroy', $category->id) }}"
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
                            <td colspan="4" class="px-8 py-20 text-center">
                                <div class="w-16 h-16 bg-white/5 rounded-2xl flex items-center justify-center mx-auto mb-4 border border-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white/10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                </div>
                                <p class="text-white/20 text-sm font-bold uppercase tracking-widest">Belum ada kategori</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    </main>

    @include('admin.merchandise.categories.modal-create')
    @include('admin.merchandise.categories.modal-edit')
    @include('partials.modal-delete')

    <script>
        function openModal() {
            const modal = document.getElementById('modal-category');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('modal-category');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openEditModal(btn) {
            const id = btn.getAttribute('data-id');
            const name = btn.getAttribute('data-name');
            const description = btn.getAttribute('data-description');

            const modal = document.getElementById('modal-edit-category');
            const form = document.getElementById('form-edit-category');
            const nameInput = document.getElementById('edit-name');
            const descInput = document.getElementById('edit-description');

            // Set Form Action
            form.action = `/admin/merchandise/categories/${id}`;

            // Set Values
            nameInput.value = name;
            descInput.value = description;

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeEditModal() {
            const modal = document.getElementById('modal-edit-category');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeModal();
                closeEditModal();
                if (typeof closeDeleteModal === 'function') closeDeleteModal();
            }
        });
    </script>
</body>

</html>