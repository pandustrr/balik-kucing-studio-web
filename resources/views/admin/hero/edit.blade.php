<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hero - BK Admin</title>

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

<body class="bg-ultra-black text-white">
    @include('admin.partials.sidebar')

    <!-- Main Content -->
    <main id="main-content" class="ml-56 min-h-screen p-8 transition-all duration-500">
        <!-- Header -->
        <div class="mb-8 flex items-center justify-between">
            <div>
                <a href="{{ route('admin.hero.index') }}" class="text-white/40 hover:text-white text-xs font-bold uppercase tracking-wider mb-2 inline-flex items-center gap-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                    Kembali
                </a>
                <h1 class="text-3xl font-heading font-black uppercase tracking-tight">Edit Hero: <span class="text-bk-orange">{{ ucfirst($hero->page_name) }}</span></h1>
            </div>
        </div>

        <div class="grid lg:grid-cols-12 gap-8 items-start">
            <!-- Left Side: Form -->
            <div class="lg:col-span-8">
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8">
                    <form action="{{ route('admin.hero.update', $hero->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-2 gap-6">
                            <!-- Title (Badge) -->
                            <div class="col-span-2">
                                <label class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-2">Title (Small Badge)</label>
                                <input type="text" name="title" value="{{ old('title', $hero->title) }}" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white text-sm focus:border-bk-orange focus:outline-none transition-colors" placeholder="e.g. Tentang Kami">
                                @error('title')
                                <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Heading (Main Text) -->
                            <div class="col-span-2">
                                <label class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-2">Heading (Main Text)</label>
                                <textarea name="heading" rows="3" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white text-sm focus:border-bk-orange focus:outline-none transition-colors font-bold">{{ old('heading', $hero->heading) }}</textarea>
                                @error('heading')
                                <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-span-2">
                                <label class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-2">Description</label>
                                <textarea name="description" rows="4" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white text-sm focus:border-bk-orange focus:outline-none transition-colors">{{ old('description', $hero->description) }}</textarea>
                                @error('description')
                                <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Background Image -->
                        <div class="pt-4 mt-4 border-t border-white/10">
                            <label class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-4">Background Image</label>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-end">
                                <div>
                                    @if($hero->background_image)
                                    <div class="relative h-40 rounded-xl overflow-hidden border border-white/10 group">
                                        <img src="{{ Storage::url($hero->background_image) }}" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                            <span class="text-xs font-bold text-white uppercase tracking-widest">Current Image</span>
                                        </div>
                                    </div>
                                    @else
                                    <div class="h-40 p-4 rounded-xl bg-white/5 border border-dashed border-white/20 flex flex-col items-center justify-center text-center text-white/30 text-[10px] uppercase font-bold tracking-widest">
                                        <svg class="w-8 h-8 mb-2 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        No image (Mesh UI)
                                    </div>
                                    @endif
                                </div>

                                <div class="space-y-4">
                                    <input type="file" name="background_image" class="block w-full text-xs text-white/40
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-lg file:border-0
                                        file:text-[10px] file:font-black file:uppercase
                                        file:bg-bk-orange file:text-white
                                        hover:file:bg-bk-orange/80
                                        cursor-pointer
                                    ">
                                    <p class="text-[10px] text-white/30 italic">Recommended: 1920x1080px, JPG/PNG (Max 2MB).</p>
                                </div>
                            </div>
                            @error('background_image')
                            <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pt-8 border-t border-white/10 flex items-center justify-end gap-6">
                            <a href="{{ route('admin.hero.index') }}" class="px-6 py-3 text-white/40 hover:text-white text-[10px] font-black uppercase tracking-widest transition-colors">Batal</a>
                            <button type="submit" class="px-10 py-4 bg-bk-orange text-white rounded-xl font-black text-xs uppercase tracking-[0.2em] transition-all hover:scale-105 active:scale-95 shadow-xl shadow-bk-orange/30">
                                Update Hero Section
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Side: Guidelines -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Guide: Orange Text -->
                <div class="bg-bk-orange/10 border border-bk-orange/20 rounded-2xl p-6">
                    <h4 class="text-bk-orange text-[10px] font-black uppercase tracking-[0.2em] mb-4 flex items-center gap-2">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.047a1 1 0 01.897.487l1.735 3.23a1 1 0 00.612.453l3.633.39a1 1 0 01.56 1.777l-2.73 2.39a1 1 0 00-.315.973l.791 3.57a1 1 0 01-1.488 1.08l-3.21-1.834a1 1 0 00-.98 0l-3.21 1.834a1 1 0 01-1.488-1.08l.791-3.57a1 1 0 00-.315-.973L1.986 7.378a1 1 0 01.56-1.777l3.633-.39a1 1 0 00.612-.453l1.734-3.23a1 1 0 01.897-.487z" clip-rule="evenodd" />
                        </svg>
                        Warna Oranye
                    </h4>
                    <p class="text-xs text-white/60 leading-relaxed mb-4">
                        Gunakan kode ini untuk membuat teks menjadi <span class="text-bk-orange font-bold">Oranye</span>:
                    </p>
                    <div class="bg-black/40 rounded-lg p-3 font-mono text-[10px] text-bk-orange/80 mb-4 select-all">
                        &lt;span class="text-bk-orange"&gt;Teks Anda&lt;/span&gt;
                    </div>
                    <p class="text-[10px] text-white/40 italic">Klik kode di atas untuk menyalin.</p>
                </div>

                <!-- Guide: Line Break -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                    <h4 class="text-white/40 text-[10px] font-black uppercase tracking-[0.2em] mb-4 flex items-center gap-2">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                        Baris Baru
                    </h4>
                    <p class="text-xs text-white/60 leading-relaxed mb-4">
                        Gunakan kode ini untuk pindah ke baris baru:
                    </p>
                    <div class="bg-black/40 rounded-lg p-3 font-mono text-[10px] text-white/40 mb-4 select-all">
                        &lt;br&gt;
                    </div>
                </div>

                <!-- Guide: Underline Special -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                    <h4 class="text-white/40 text-[10px] font-black uppercase tracking-[0.2em] mb-4">
                        Garis Bawah (Spesial)
                    </h4>
                    <div class="bg-black/40 rounded-lg p-3 font-mono text-[9px] text-white/30 select-all mb-4">
                        &lt;span class="text-bk-orange italic underline decoration-bk-orange/50 underline-offset-8"&gt;"Teks"&lt;/span&gt;
                    </div>
                    <p class="text-[10px] text-white/40 leading-relaxed">
                        Hanya gunakan kode ini pada bagian akhir deskripsi untuk efek garis bawah oranye yang elegan.
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>