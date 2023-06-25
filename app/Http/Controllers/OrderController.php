<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest()->paginate(5);
        return view('orders.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('orders.create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_customer' => 'required',
            'status'     => 'required',
            'status_pengambilan'  => 'required',
            'alamat_kirim'=> 'required',
            'ongkir'=>'required',
            'status_bayar'=> 'required',
        ]);

        Order::create([
            'id_customer'=>$request->id_customer,
            'status'=>$request->status,
            'status_pengambilan'  => $request->status_pengambilan,
            'alamat_kirim'=> $request->alamat_kirim,
            'ongkir'=>$request->ongkir,
            'status_bayar'=> $request->status_bayar,
            'catatan'=>$request->catatan
        ]);
        return redirect()->route('orders.index')
                        ->with('success','Orders created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'id_customer'     => 'required',
            'catatan'      => 'required',
            'status'     => 'required',
            'status_pengambilan'  => 'required',
            'alamat_kirim'=> 'required',
            'ongkir'=>'required',
            'status_bayar'=> 'required',
        ]);

        $order->update($request->all());
        return redirect()->route('orders.index')
                        ->with('success','Order Produk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')
            ->with('success', 'Order Produk deleted susccesfully');
    }
}
