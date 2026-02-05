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

</head>

<body class="bg-ultra-black text-white font-sans">
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
            <!-- Left Side: Preview & Form -->
            <div class="lg:col-span-8 space-y-8">
                <!-- LIVE PREVIEW -->
                <div class="space-y-4">
                    <div class="flex items-center justify-between px-2">
                        <label class="block text-[10px] font-bold text-white/50 uppercase tracking-[0.2em]">Real-time Preview (Stacked Layout)</label>
                        <span class="text-[9px] font-bold text-bk-orange px-2 py-1 bg-bk-orange/10 rounded-full">Interactive View</span>
                    </div>

                    <div class="relative bg-[#0a0a0b] overflow-hidden rounded-[32px] aspect-video w-full border border-white/5 shadow-2xl">
                        <!-- BG Wrapper -->
                        <div class="absolute inset-0 z-0 bg-black">
                            @if($hero->background_image)
                            <img id="bg-preview-img" src="{{ Storage::url($hero->background_image) }}" class="w-full h-full object-cover opacity-60 grayscale-[0.1]">
                            @else
                            <div class="w-full h-full bg-mesh opacity-60"></div>
                            @endif
                        </div>

                        <!-- BG Text Decor -->
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-10 overflow-hidden">
                            <h2 id="bg-visual-text" class="text-[15vw] font-heading font-black whitespace-nowrap opacity-[0.04] transform -rotate-12 translate-y-12">
                                @if($hero->page_name == 'home') BALIKKUCING STUDIO
                                @elseif($hero->page_name == 'layanan') OUR SERVICES
                                @elseif($hero->page_name == 'about') OUR STORY
                                @elseif($hero->page_name == 'merchandise') MERCHANDISE
                                @else CONTACT @endif
                            </h2>
                        </div>

                        <!-- Content Preview -->
                        <div class="relative z-20 h-full flex flex-col justify-center p-[8%] items-center">
                            <div class="max-w-3xl space-y-6 text-center w-full">
                                <!-- Banner Badge -->
                                <div class="flex justify-center">
                                    <span class="inline-flex items-center gap-2 px-4 py-2 glass rounded-full text-[10px] font-black tracking-[0.2em] uppercase text-white shadow-xl">
                                        <span class="relative flex h-2 w-2">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-bk-orange opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-bk-orange"></span>
                                        </span>
                                        <span id="preview-badge">{{ $hero->title }}</span>
                                    </span>
                                </div>
                                <!-- Heading -->
                                <h2 id="preview-heading" class="text-4xl md:text-5xl lg:text-7xl font-heading font-black leading-[0.9] tracking-tighter text-white drop-shadow-2xl">
                                    {!! $hero->heading !!}
                                </h2>
                                <!-- Desc -->
                                <p id="preview-desc" class="text-xs md:text-sm lg:text-lg opacity-70 font-medium leading-relaxed text-white max-w-2xl mx-auto drop-shadow-lg">
                                    {!! $hero->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORM -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8">
                    <form action="{{ route('admin.hero.update', $hero->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-2 gap-8">
                            <!-- Title (Badge) -->
                            <div class="col-span-2">
                                <label class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-3">Title (Small Badge)</label>
                                <input type="text" name="title" id="input-title" value="{{ old('title', $hero->title) }}" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white text-sm focus:border-bk-orange focus:outline-none transition-colors" placeholder="e.g. Tentang Kami">
                                @error('title')
                                <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Heading (Main Text) -->
                            <div class="col-span-2 space-y-3">
                                <div class="flex items-center justify-between">
                                    <label class="block text-[10px] font-bold text-white/50 uppercase tracking-wider">Heading (Main Text)</label>
                                    <div class="flex flex-wrap items-center gap-2">
                                        <div class="p-0.5 bg-white/5 border border-white/10 rounded-xl shadow-lg hover:border-white/20 transition-colors">
                                            <button type="button" onclick="insertTag('input-heading', 'orange')" class="flex items-center justify-center gap-2 px-4 py-2 rounded-[10px] text-[8px] font-bold uppercase tracking-wider transition-all duration-300 active:scale-95 cursor-pointer bg-bk-orange text-white shadow-lg shadow-bk-orange/20 hover:brightness-110 border-none outline-none whitespace-nowrap">
                                                Orange
                                            </button>
                                        </div>
                                        <div class="p-0.5 bg-white/5 border border-white/10 rounded-xl shadow-lg hover:border-white/20 transition-colors">
                                            <button type="button" onclick="insertTag('input-heading', 'br-orange')" class="flex items-center justify-center gap-2 px-4 py-2 rounded-[10px] text-[8px] font-bold uppercase tracking-wider transition-all duration-300 active:scale-95 cursor-pointer bg-white/5 text-bk-orange border border-bk-orange/20 hover:bg-white/10 outline-none whitespace-nowrap">
                                                New Line dan Orange
                                            </button>
                                        </div>
                                        <div class="p-0.5 bg-white/5 border border-white/10 rounded-xl shadow-lg hover:border-white/20 transition-colors">
                                            <button type="button" onclick="insertTag('input-heading', 'underline')" class="flex items-center justify-center gap-2 px-4 py-2 rounded-[10px] text-[8px] font-bold uppercase tracking-wider transition-all duration-300 active:scale-95 cursor-pointer bg-indigo-600/90 text-white shadow-lg shadow-indigo-600/20 hover:bg-indigo-600 outline-none whitespace-nowrap">
                                                Special Underline
                                            </button>
                                        </div>
                                        <div class="p-0.5 bg-white/5 border border-white/10 rounded-xl shadow-lg hover:border-white/20 transition-colors">
                                            <button type="button" onclick="insertTag('input-heading', 'br')" class="flex items-center justify-center gap-2 px-4 py-2 rounded-[10px] text-[8px] font-bold uppercase tracking-wider transition-all duration-300 active:scale-95 cursor-pointer bg-white/10 text-white/70 hover:bg-white/20 border-none outline-none whitespace-nowrap">
                                                New Line
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <textarea name="heading" id="input-heading" rows="3" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white text-sm focus:border-bk-orange focus:outline-none transition-colors font-bold leading-relaxed">{{ old('heading', $hero->heading) }}</textarea>
                                @error('heading')
                                <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-span-2 space-y-3">
                                <div class="flex items-center justify-between">
                                    <label class="block text-[10px] font-bold text-white/50 uppercase tracking-wider">Description</label>
                                    <div class="flex flex-wrap items-center gap-2">
                                        <div class="p-0.5 bg-white/5 border border-white/10 rounded-xl shadow-lg hover:border-white/20 transition-colors">
                                            <button type="button" onclick="insertTag('input-desc', 'orange')" class="flex items-center justify-center gap-2 px-4 py-2 rounded-[10px] text-[8px] font-bold uppercase tracking-wider transition-all duration-300 active:scale-95 cursor-pointer bg-bk-orange text-white shadow-lg shadow-bk-orange/20 hover:brightness-110 border-none outline-none whitespace-nowrap">
                                                Orange
                                            </button>
                                        </div>
                                        <div class="p-0.5 bg-white/5 border border-white/10 rounded-xl shadow-lg hover:border-white/20 transition-colors">
                                            <button type="button" onclick="insertTag('input-desc', 'br-orange')" class="flex items-center justify-center gap-2 px-4 py-2 rounded-[10px] text-[8px] font-bold uppercase tracking-wider transition-all duration-300 active:scale-95 cursor-pointer bg-white/5 text-bk-orange border border-bk-orange/20 hover:bg-white/10 outline-none whitespace-nowrap">
                                                New Line dan Orange
                                            </button>
                                        </div>
                                        <div class="p-0.5 bg-white/5 border border-white/10 rounded-xl shadow-lg hover:border-white/20 transition-colors">
                                            <button type="button" onclick="insertTag('input-desc', 'underline')" class="flex items-center justify-center gap-2 px-4 py-2 rounded-[10px] text-[8px] font-bold uppercase tracking-wider transition-all duration-300 active:scale-95 cursor-pointer bg-indigo-600/90 text-white shadow-lg shadow-indigo-600/20 hover:bg-indigo-600 outline-none whitespace-nowrap">
                                                Special Underline
                                            </button>
                                        </div>
                                        <div class="p-0.5 bg-white/5 border border-white/10 rounded-xl shadow-lg hover:border-white/20 transition-colors">
                                            <button type="button" onclick="insertTag('input-desc', 'br')" class="flex items-center justify-center gap-2 px-4 py-2 rounded-[10px] text-[8px] font-bold uppercase tracking-wider transition-all duration-300 active:scale-95 cursor-pointer bg-white/10 text-white/70 hover:bg-white/20 border-none outline-none whitespace-nowrap">
                                                New Line
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <textarea name="description" id="input-desc" rows="4" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white text-sm focus:border-bk-orange focus:outline-none transition-colors leading-relaxed">{{ old('description', $hero->description) }}</textarea>
                                @error('description')
                                <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Background Image -->
                        <div class="pt-6 border-t border-white/10">
                            <label class="block text-[10px] font-bold text-white/50 uppercase tracking-wider mb-4">Background Image</label>

                            <div class="flex items-center gap-6">
                                <input type="file" name="background_image" id="input-bg" onchange="previewFile(this)" class="block w-full text-xs text-white/40
                                    file:mr-4 file:py-2.5 file:px-6
                                    file:rounded-xl file:border-0
                                    file:text-[10px] file:font-black file:uppercase
                                    file:bg-white/10 file:text-white
                                    hover:file:bg-bk-orange hover:file:shadow-lg hover:file:shadow-bk-orange/20
                                    cursor-pointer transition-all
                                ">
                                <p class="text-[10px] text-white/30 italic whitespace-nowrap">JPG/PNG, Max 2MB.</p>
                            </div>
                            @error('background_image')
                            <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pt-8 border-t border-white/10 flex items-center justify-end gap-6">
                            <a href="{{ route('admin.hero.index') }}" class="px-6 py-3 text-white/40 hover:text-white text-[10px] font-black uppercase tracking-widest transition-colors">Batal</a>
                            <button type="submit" class="px-12 py-5 bg-bk-orange text-white rounded-2xl font-black text-sm uppercase tracking-[0.2em] transition-all hover:scale-105 active:scale-95 shadow-2xl shadow-bk-orange/30">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Side: Documentation -->
            <div class="lg:col-span-4 space-y-6">
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                    <h4 class="text-bk-orange text-[10px] font-black uppercase tracking-[0.2em] mb-4">Pro Tips</h4>
                    <ul class="space-y-4">
                        <li class="flex gap-3">
                            <div class="w-5 h-5 bg-bk-orange/20 rounded flex items-center justify-center text-bk-orange shrink-0">
                                <span class="text-[10px] font-black">1</span>
                            </div>
                            <p class="text-[10px] text-white/60 leading-relaxed">Gunakan tombol <b>Orange</b> untuk mewarnai teks secara instan.</p>
                        </li>
                        <li class="flex gap-3">
                            <div class="w-5 h-5 bg-bk-orange/20 rounded flex items-center justify-center text-bk-orange shrink-0">
                                <span class="text-[10px] font-black">2</span>
                            </div>
                            <p class="text-[10px] text-white/60 leading-relaxed">Gunakan <b>New Line</b> untuk merapikan teks ke baris baru.</p>
                        </li>
                        <li class="flex gap-3">
                            <div class="w-5 h-5 bg-bk-orange/20 rounded flex items-center justify-center text-bk-orange shrink-0">
                                <span class="text-[10px] font-black">3</span>
                            </div>
                            <p class="text-[10px] text-white/60 leading-relaxed">Perubahan bisa langsung dilihat pada **Real-time Preview** di sebelah kiri.</p>
                        </li>
                    </ul>
                </div>

                <div class="bg-ultra-black border border-white/10 rounded-2xl p-6 relative overflow-hidden group">
                    <div class="absolute -top-12 -right-12 w-24 h-24 bg-bk-orange/5 rounded-full blur-2xl group-hover:bg-bk-orange/10 transition-all duration-700"></div>
                    <p class="text-[10px] font-bold text-white/40 uppercase mb-2">Shortcuts</p>
                    <p class="text-[9px] text-white/20 leading-relaxed">Gunakan huruf besar pada heading untuk daya tarik visual yang kuat. Desain akan otomatis menyesuaikan lebar layar.</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        // SYNC INPUTS TO PREVIEW
        const inputTitle = document.getElementById('input-title');
        const inputHeading = document.getElementById('input-heading');
        const inputDesc = document.getElementById('input-desc');

        const previewBadge = document.getElementById('preview-badge');
        const previewHeading = document.getElementById('preview-heading');
        const previewDesc = document.getElementById('preview-desc');

        inputTitle.addEventListener('input', () => previewBadge.textContent = inputTitle.value);
        inputHeading.addEventListener('input', () => previewHeading.innerHTML = inputHeading.value);
        inputDesc.addEventListener('input', () => previewDesc.innerHTML = inputDesc.value);

        // INSERT TAGS HELPER
        function insertTag(fieldId, tagType) {
            const textarea = document.getElementById(fieldId);
            const start = textarea.selectionStart;
            const end = textarea.selectionEnd;
            const text = textarea.value;
            const selectedText = text.substring(start, end);

            let replacement = "";
            if (tagType === 'orange') {
                replacement = `<span class="text-bk-orange">${selectedText || 'Teks'}</span>`;
            } else if (tagType === 'br') {
                replacement = `<br>${selectedText}`;
            } else if (tagType === 'br-orange') {
                replacement = `<br><span class="text-bk-orange">${selectedText || 'Teks'}</span>`;
            } else if (tagType === 'underline') {
                replacement = `<span class="text-bk-orange italic underline decoration-bk-orange/50 underline-offset-8">"${selectedText || 'Teks'}"</span>`;
            }

            textarea.value = text.substring(0, start) + replacement + text.substring(end);

            // Sync preview
            if (fieldId === 'input-heading') previewHeading.innerHTML = textarea.value;
            if (fieldId === 'input-desc') previewDesc.innerHTML = textarea.value;

            textarea.focus();
        }

        // PREVIEW BACKGROUND IMAGE
        function previewFile(input) {
            const imgPreview = document.getElementById('bg-preview-img');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    if (imgPreview) {
                        imgPreview.src = e.target.result;
                    } else {
                        // Handle case where no initial image exists
                        const container = document.querySelector('.preview-bg');
                        container.innerHTML = `<img id="bg-preview-img" src="${e.target.result}" class="w-full h-full object-cover opacity-60 grayscale-[0.1]">`;
                    }
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>