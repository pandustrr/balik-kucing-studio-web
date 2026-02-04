<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Manager - BK Admin</title>

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
        <div class="mb-8">
            <h1 class="text-3xl font-heading font-black uppercase tracking-tight mb-2">Hero Manager</h1>
            <p class="text-white/40 text-sm">Kelola tampilan hero section di setiap halaman</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="mb-6 p-4 bg-green-500/20 border border-green-500/30 rounded-xl text-green-400 text-sm font-medium flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            {{ session('success') }}
        </div>
        @endif

        <!-- Heroes Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($heroes as $hero)
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:border-bk-orange/30 transition-all">
                <!-- Preview Image -->
                <div class="h-40 bg-black/50 relative overflow-hidden">
                    @if($hero->background_image)
                    <img src="{{ Storage::url($hero->background_image) }}" alt="{{ $hero->page_name }}" class="w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500">
                    @else
                    <div class="w-full h-full bg-mesh opacity-50"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-white/20 text-xs font-bold uppercase tracking-widest">No Image</div>
                    @endif

                    <div class="absolute top-4 left-4 px-3 py-1 bg-bk-orange text-white text-[10px] font-black uppercase tracking-wider rounded-full">
                        {{ ucfirst($hero->page_name) }}
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-heading font-black mb-2 truncate">{{ $hero->heading ?? $hero->title }}</h3>
                    <p class="text-white/40 text-sm line-clamp-2 mb-6 h-10">{{ $hero->description }}</p>

                    <a href="{{ route('admin.hero.edit', $hero->id) }}" class="block w-full py-2.5 bg-white/5 hover:bg-bk-orange text-white text-center rounded-lg font-black text-xs uppercase tracking-wider transition-all">
                        Edit Hero
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</body>

</html>