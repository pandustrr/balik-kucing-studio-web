<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Pricelist - BK Admin</title>

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
                <h1 class="text-3xl font-heading font-black uppercase tracking-tight mb-2">Item <span class="text-bk-orange">Pricelist.</span></h1>
                <p class="text-white/40 text-sm">Kelola paket layanan untuk setiap kategori</p>
            </div>
            <button onclick="openCreateModal()" class="px-6 py-3 bg-bk-orange text-white rounded-xl text-xs font-black uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-xl shadow-bk-orange/20">
                + Tambah Item
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

        <!-- Filter Tabs -->
        <div class="flex gap-2 mb-8 bg-white/5 p-1.5 rounded-2xl border border-white/10 w-fit flex-wrap">
            <a href="{{ route('admin.layanan.pricelists.index', ['category' => 'all']) }}"
                class="px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all {{ (!isset($categoryId) || $categoryId === 'all') ? 'bg-bk-orange text-white shadow-lg' : 'text-white/30 hover:text-white hover:bg-white/5' }}">
                Semua
            </a>
            @foreach($categories as $category)
            <a href="{{ route('admin.layanan.pricelists.index', ['category' => $category->id]) }}"
                class="px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all {{ isset($categoryId) && $categoryId == $category->id ? 'bg-bk-orange text-white shadow-lg' : 'text-white/30 hover:text-white hover:bg-white/5' }}">
                {{ $category->name }}
            </a>
            @endforeach
        </div>

        <!-- Pricelists Table -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-[32px] overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-white/5 text-[10px] font-black uppercase tracking-widest text-white/20">
                        <th class="px-8 py-6">Nama Paket</th>
                        <th class="px-8 py-6">Kategori</th>
                        <th class="px-8 py-6">Harga</th>
                        <th class="px-8 py-6">Fitur Paket</th>
                        <th class="px-8 py-6 text-center">Unggulan</th>
                        <th class="px-8 py-6 text-center">Urutan</th>
                        <th class="px-8 py-6 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @forelse($pricelists as $pricelist)
                    <tr class="group hover:bg-white/2 transition-colors {{ $pricelist->is_featured ? 'bg-bk-orange/[0.03]' : '' }}">
                        <td class="px-8 py-6">
                            <p class="text-sm font-black uppercase tracking-tight">{{ $pricelist->name }}</p>
                            @if($pricelist->description)
                            <p class="text-[10px] text-white/40 mt-1">{{ Str::limit($pricelist->description, 50) }}</p>
                            @endif
                        </td>
                        <td class="px-8 py-6">
                            <span class="inline-flex px-3 py-1 bg-bk-orange/10 text-bk-orange rounded-full text-[9px] font-black uppercase tracking-widest">
                                {{ $pricelist->category->name }}
                            </span>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-sm font-black text-bk-orange">Rp {{ number_format($pricelist->price, 0, ',', '.') }}</p>
                        </td>
                        <td class="px-8 py-6">
                            @if($pricelist->features && count($pricelist->features) > 0)
                            <div class="flex flex-wrap gap-1">
                                @foreach(array_slice($pricelist->features, 0, 2) as $feature)
                                @php
                                $fName = is_array($feature) ? ($feature['name'] ?? '-') : $feature;
                                $fAvailable = is_array($feature) ? ($feature['is_available'] ?? true) : true;
                                @endphp
                                <span class="inline-flex items-center gap-1.5 px-2 py-0.5 bg-white/5 rounded text-[8px] text-white/60">
                                    @if($fAvailable)
                                    <svg class="w-2 h-2 text-bk-orange" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                    </svg>
                                    @else
                                    <svg class="w-2 h-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" />
                                    </svg>
                                    @endif
                                    {{ $fName }}
                                </span>
                                @endforeach
                                @if(count($pricelist->features) > 2)
                                <span class="inline-flex px-2 py-0.5 bg-white/5 rounded text-[8px] text-white/40">+{{ count($pricelist->features) - 2 }}</span>
                                @endif
                            </div>
                            @else
                            <span class="text-[10px] text-white/20">-</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-center">
                            @if($pricelist->is_featured)
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-yellow-500/10 text-yellow-500 rounded-full text-[8px] font-black uppercase">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                Yes
                            </span>
                            @else
                            <span class="text-[10px] text-white/20">-</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-center">
                            <span class="text-xs font-black">{{ $pricelist->order }}</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center justify-end gap-2">
                                <button type="button"
                                    data-id="{{ $pricelist->id }}"
                                    data-category-id="{{ $pricelist->pricelist_category_id }}"
                                    data-name="{{ $pricelist->name }}"
                                    data-description="{{ $pricelist->description }}"
                                    data-price="{{ $pricelist->price }}"
                                    data-features='@json($pricelist->features ?: [])'
                                    data-is-featured="{{ $pricelist->is_featured ? '1' : '0' }}"
                                    data-order="{{ $pricelist->order }}"
                                    onclick="openEditModal(this)"
                                    class="p-2 bg-white/5 hover:bg-bk-orange text-white/40 hover:text-white rounded-lg transition-all" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <form action="{{ route('admin.layanan.pricelists.destroy', $pricelist->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus item ini?')">
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
                        <td colspan="7" class="px-8 py-20 text-center">
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-white/20">
                                @if(isset($categoryId) && $categoryId !== 'all')
                                Belum ada item untuk kategori ini
                                @else
                                Belum ada item pricelist
                                @endif
                            </p>
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
        <div class="relative w-full max-w-2xl bg-[#111111] rounded-[32px] overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.8)] border border-white/10 animate-reveal max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h3 class="text-xl font-heading font-black uppercase tracking-tight text-white">Tambah <span class="text-bk-orange">Item.</span></h3>
                        <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em] mt-1">Buat paket layanan baru</p>
                    </div>
                    <button onclick="closeCreateModal()" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/5 text-white/40 hover:text-bk-orange transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form action="{{ route('admin.layanan.pricelists.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Kategori</label>
                            <select name="pricelist_category_id" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                                <option value="">Pilih Kategori</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Nama Paket</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                        </div>
                        <div class="col-span-2">
                            <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Deskripsi</label>
                            <textarea name="description" rows="2" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all resize-none"></textarea>
                        </div>
                        <div>
                            <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Harga (Rp)</label>
                            <input type="number" name="price" required min="0" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Urutan</label>
                            <input type="number" name="order" value="0" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                        </div>
                        <div class="col-span-2">
                            <div class="flex items-center justify-between mb-2">
                                <label class="block text-[9px] font-black uppercase tracking-widest text-white/40">Fitur Paket</label>
                                <button type="button" onclick="addFeatureRow('create-features-list')" class="text-[9px] font-black uppercase tracking-widest text-bk-orange hover:text-white transition-colors">
                                    + Tambah Fitur
                                </button>
                            </div>
                            <div id="create-features-list" class="space-y-2">
                                <div class="flex gap-2 feature-row">
                                    <input type="text" name="features_names[]" placeholder="Nama fitur" class="flex-1 px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                                    <select name="features_available[]" class="w-32 px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-[10px] font-black uppercase text-white focus:border-bk-orange focus:outline-none transition-all">
                                        <option value="1">TERSEDIA (v)</option>
                                        <option value="0">TIDAK (x)</option>
                                    </select>
                                    <button type="button" onclick="this.parentElement.remove()" class="p-3 bg-red-500/10 text-red-500 border border-red-500/20 rounded-xl hover:bg-red-500 hover:text-white transition-all">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" name="is_featured" value="1" class="w-5 h-5 rounded bg-white/5 border-white/10 text-bk-orange focus:ring-bk-orange focus:ring-offset-0 transition-all group-hover:border-bk-orange/50">
                                <span class="text-[9px] font-black uppercase tracking-widest text-white/60 group-hover:text-white transition-colors">Tandai sebagai paket unggulan</span>
                            </label>
                        </div>
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
        <div class="relative w-full max-w-2xl bg-[#111111] rounded-[32px] overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.8)] border border-white/10 animate-reveal max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h3 class="text-xl font-heading font-black uppercase tracking-tight text-white">Edit <span class="text-bk-orange">Item.</span></h3>
                        <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em] mt-1">Perbarui paket layanan</p>
                    </div>
                    <button onclick="closeEditModal()" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/5 text-white/40 hover:text-bk-orange transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form id="edit-form" method="POST" class="space-y-4">
                    @csrf @method('PUT')
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Kategori</label>
                            <select id="edit-category" name="pricelist_category_id" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                                <option value="">Pilih Kategori</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Nama Paket</label>
                            <input type="text" id="edit-name" name="name" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                        </div>
                        <div class="col-span-2">
                            <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Deskripsi</label>
                            <textarea id="edit-description" name="description" rows="2" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all resize-none"></textarea>
                        </div>
                        <div>
                            <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Harga (Rp)</label>
                            <input type="number" id="edit-price" name="price" required min="0" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-[9px] font-black uppercase tracking-widest text-white/40 mb-2">Urutan</label>
                            <input type="number" id="edit-order" name="order" value="0" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                        </div>
                        <div class="col-span-2">
                            <div class="flex items-center justify-between mb-2">
                                <label class="block text-[9px] font-black uppercase tracking-widest text-white/40">Fitur Paket</label>
                                <button type="button" onclick="addFeatureRow('edit-features-list')" class="text-[9px] font-black uppercase tracking-widest text-bk-orange hover:text-white transition-colors">
                                    + Tambah Fitur
                                </button>
                            </div>
                            <div id="edit-features-list" class="space-y-2">
                                <!-- Dynamic rows will be here -->
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" id="edit-featured" name="is_featured" value="1" class="w-5 h-5 rounded bg-white/5 border-white/10 text-bk-orange focus:ring-bk-orange focus:ring-offset-0 transition-all group-hover:border-bk-orange/50">
                                <span class="text-[9px] font-black uppercase tracking-widest text-white/60 group-hover:text-white transition-colors">Tandai sebagai paket unggulan</span>
                            </label>
                        </div>
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
        function addFeatureRow(containerId, data = null) {
            const container = document.getElementById(containerId);
            const div = document.createElement('div');
            div.className = 'flex gap-2 feature-row animate-reveal';

            const isObj = data && typeof data === 'object';
            const name = data ? (isObj ? data.name : data) : '';
            const available = data ? (isObj ? (data.is_available ? '1' : '0') : '1') : '1';

            div.innerHTML = `
                <input type="text" name="features_names[]" value="${name}" placeholder="Nama fitur" class="flex-1 px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-sm text-white focus:border-bk-orange focus:outline-none transition-all">
                <select name="features_available[]" class="w-32 px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-[10px] font-black uppercase text-white focus:border-bk-orange focus:outline-none transition-all">
                    <option value="1" ${available == '1' ? 'selected' : ''}>TERSEDIA (v)</option>
                    <option value="0" ${available == '0' ? 'selected' : ''}>TIDAK (x)</option>
                </select>
                <button type="button" onclick="this.parentElement.remove()" class="p-3 bg-red-500/10 text-red-500 border border-red-500/20 rounded-xl hover:bg-red-500 hover:text-white transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            `;
            container.appendChild(div);
        }

        function openCreateModal() {
            // Reset and add one empty row
            document.getElementById('create-features-list').innerHTML = '';
            addFeatureRow('create-features-list');

            document.getElementById('create-modal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeCreateModal() {
            document.getElementById('create-modal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openEditModal(button) {
            const id = button.dataset.id;
            const categoryId = button.dataset.categoryId;
            const name = button.dataset.name;
            const description = button.dataset.description;
            const price = button.dataset.price;
            const features = JSON.parse(button.dataset.features);
            const isFeatured = button.dataset.isFeatured;
            const order = button.dataset.order;

            document.getElementById('edit-form').action = `/admin/layanan/pricelists/${id}`;
            document.getElementById('edit-category').value = categoryId;
            document.getElementById('edit-name').value = name;
            document.getElementById('edit-description').value = description || '';
            document.getElementById('edit-price').value = price;
            document.getElementById('edit-featured').checked = isFeatured === '1';
            document.getElementById('edit-order').value = order;

            // Fill features
            const featuresList = document.getElementById('edit-features-list');
            featuresList.innerHTML = '';
            if (features && features.length > 0) {
                features.forEach(f => addFeatureRow('edit-features-list', f));
            } else {
                addFeatureRow('edit-features-list');
            }

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