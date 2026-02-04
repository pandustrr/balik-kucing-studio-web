<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pesanan - {{ ucfirst($status) }} - BK Admin</title>

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
    @include('admin.merchandise.orders.modal-show')

    <!-- Main Content -->
    <main id="main-content" class="ml-56 min-h-screen p-8 transition-all duration-500">
        <!-- Header -->
        <div class="mb-8 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-heading font-black uppercase tracking-tight mb-2">Manajemen <span class="text-bk-orange">Pesanan.</span></h1>
                <p class="text-white/40 text-sm">Kelola seluruh transaksi merchandise Balik Kucing Studio</p>
            </div>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 bg-green-500/10 border border-green-500/20 rounded-2xl text-green-500 text-xs font-bold uppercase tracking-widest animate-reveal">
            {{ session('success') }}
        </div>
        @endif

        <!-- Filter Tabs -->
        <div class="flex gap-2 mb-8 bg-white/5 p-1.5 rounded-2xl border border-white/5 w-fit">
            <a href="{{ route('admin.merchandise.orders.index', 'all') }}" class="px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all {{ $status === 'all' ? 'bg-bk-orange text-white shadow-lg' : 'text-white/30 hover:text-white hover:bg-white/5' }}">
                Semua
            </a>
            <a href="{{ route('admin.merchandise.orders.index', 'pending') }}" class="px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all {{ $status === 'pending' ? 'bg-bk-orange text-white shadow-lg' : 'text-white/30 hover:text-white hover:bg-white/5' }}">
                Pending
            </a>
            <a href="{{ route('admin.merchandise.orders.index', 'done') }}" class="px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all {{ $status === 'done' ? 'bg-bk-orange text-white shadow-lg' : 'text-white/30 hover:text-white hover:bg-white/5' }}">
                Done
            </a>
            <a href="{{ route('admin.merchandise.orders.index', 'cancel') }}" class="px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all {{ $status === 'cancel' ? 'bg-bk-orange text-white shadow-lg' : 'text-white/30 hover:text-white hover:bg-white/5' }}">
                Cancel
            </a>
        </div>

        <!-- Orders Table -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-[32px] overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-white/5 text-[10px] font-black uppercase tracking-widest text-white/20">
                        <th class="px-8 py-6">Produk</th>
                        <th class="px-8 py-6">Pemesan</th>
                        <th class="px-8 py-6">Status</th>
                        <th class="px-8 py-6">Qty</th>
                        <th class="px-8 py-6">Total</th>
                        <th class="px-8 py-6 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @forelse($orders as $order)
                    <tr class="group hover:bg-white/2 transition-colors">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                @if($order->product->image)
                                <img src="{{ asset('storage/' . $order->product->image) }}" class="w-10 h-10 rounded-lg object-cover border border-white/10">
                                @else
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-white/20 border border-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                @endif
                                <div>
                                    <p class="text-sm font-black uppercase tracking-tight">{{ $order->product->name }}</p>
                                    <p class="text-[9px] text-white/30 font-bold uppercase tracking-widest">{{ $order->product->category->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-xs font-bold">{{ $order->buyer_name }}</p>
                            <p class="text-[9px] text-white/30 truncate max-w-[150px]" title="{{ $order->buyer_location }}">{{ $order->buyer_location }}</p>
                            <p class="text-[8px] text-bk-orange/60 font-black mt-0.5">{{ $order->created_at->format('d M Y, H:i') }}</p>
                        </td>
                        <td class="px-8 py-6">
                            @if($order->status === 'pending')
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-yellow-500/10 text-yellow-500 rounded-full text-[8px] font-black uppercase tracking-widest border border-yellow-500/20">
                                <span class="w-1 h-1 rounded-full bg-yellow-500 animate-pulse"></span>
                                Pending
                            </span>
                            @elseif($order->status === 'done')
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[8px] font-black uppercase tracking-widest border border-green-500/20">
                                <span class="w-1 h-1 rounded-full bg-green-500"></span>
                                Done
                            </span>
                            @else
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-red-500/10 text-red-500 rounded-full text-[8px] font-black uppercase tracking-widest border border-red-500/20">
                                <span class="w-1 h-1 rounded-full bg-red-500"></span>
                                Cancel
                            </span>
                            @endif
                        </td>
                        <td class="px-8 py-6">
                            <span class="text-xs font-black">{{ $order->quantity }}</span>
                        </td>
                        <td class="px-8 py-6">
                            <span class="text-xs font-black text-white">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center justify-end gap-2">
                                <button type="button"
                                    data-product-name="{{ $order->product->name }}"
                                    data-product-category="{{ $order->product->category->name }}"
                                    data-product-image="{{ $order->product->image ? asset('storage/' . $order->product->image) : '' }}"
                                    data-product-price="{{ $order->product->price }}"
                                    data-buyer-name="{{ $order->buyer_name }}"
                                    data-buyer-location="{{ $order->buyer_location }}"
                                    data-quantity="{{ $order->quantity }}"
                                    data-total-price="{{ $order->total_price }}"
                                    data-status="{{ $order->status }}"
                                    onclick="openShowOrderModal(this)"
                                    class="p-2 bg-white/5 hover:bg-bk-orange text-white/40 hover:text-white rounded-lg transition-all group" title="Lihat Detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                @if($order->status === 'pending')
                                <form action="{{ route('admin.merchandise.orders.update-status', $order->id) }}" method="POST" class="inline">
                                    @csrf @method('PUT')
                                    <input type="hidden" name="status" value="done">
                                    <button type="submit" class="px-4 py-2 bg-green-500/10 hover:bg-green-500 text-green-500 hover:text-white rounded-lg text-[9px] font-black uppercase tracking-widest transition-all">
                                        Done
                                    </button>
                                </form>
                                <form action="{{ route('admin.merchandise.orders.update-status', $order->id) }}" method="POST" class="inline">
                                    @csrf @method('PUT')
                                    <input type="hidden" name="status" value="cancel">
                                    <button type="submit" class="px-4 py-2 bg-red-500/10 hover:bg-red-500 text-red-500 hover:text-white rounded-lg text-[9px] font-black uppercase tracking-widest transition-all">
                                        Cancel
                                    </button>
                                </form>
                                @else
                                <form action="{{ route('admin.merchandise.orders.update-status', $order->id) }}" method="POST" class="inline">
                                    @csrf @method('PUT')
                                    <input type="hidden" name="status" value="pending">
                                    <button type="submit" class="px-4 py-2 bg-white/5 hover:bg-white/20 text-white/40 hover:text-white rounded-lg text-[9px] font-black uppercase tracking-widest transition-all">
                                        Revert
                                    </button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-8 py-20 text-center">
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-white/20">Tidak ada pesanan {{ $status !== 'all' ? 'berstatus ' . $status : '' }}</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>