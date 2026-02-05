<?php

namespace App\Http\Controllers;

use App\Models\MerchandiseOrder;
use App\Models\MerchandiseProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MerchandiseOrderController extends Controller
{
    public function index($status = 'all')
    {
        $query = MerchandiseOrder::with('product')->latest();

        if (in_array($status, ['pending', 'done', 'cancel'])) {
            $query->where('status', $status);
        } else {
            $status = 'all';
        }

        $orders = $query->get();

        return view('admin.merchandise.orders.index', compact('orders', 'status'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'buyer_name' => 'required|string|max:255',
            'buyer_location' => 'required|string',
            'merchandise_product_id' => 'required|exists:merchandise_products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = MerchandiseProduct::findOrFail($request->merchandise_product_id);

        $order = MerchandiseOrder::create([
            'buyer_name' => $request->buyer_name,
            'buyer_location' => $request->buyer_location,
            'merchandise_product_id' => $request->merchandise_product_id,
            'quantity' => $request->quantity,
            'total_price' => $product->price * $request->quantity,
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pesanan berhasil dicatat',
            'order' => $order
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,done,cancel'
        ]);

        $order = MerchandiseOrder::findOrFail($id);
        $oldStatus = $order->status;
        $newStatus = $request->status;

        DB::transaction(function () use ($order, $oldStatus, $newStatus) {
            // If changing to 'done', reduce stock
            if ($newStatus === 'done' && $oldStatus !== 'done') {
                $product = $order->product;
                if ($product->stock < $order->quantity) {
                    throw new \Exception("Stok tidak mencukupi untuk pesanan ini.");
                }
                $product->decrement('stock', $order->quantity);
            }

            // If changing FROM 'done' to something else (e.g., cancel), restore stock
            if ($oldStatus === 'done' && $newStatus !== 'done') {
                $product = $order->product;
                $product->increment('stock', $order->quantity);
            }

            $order->update(['status' => $newStatus]);
        });

        return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui!');
    }
}
