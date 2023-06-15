<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_detail;

class Order_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_details = Order_detail::latest()->paginate(5);
        return view('order_details.index', compact('order_details'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order_details.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_order' => 'required',
            'id_produk' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'file'  => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Order_detail::create($request->all());
        // return redirect()->route('order_details.index')
        //                 ->with('success','Order Detail created successfully.');
        $input = $request->all();

        if ($file = $request->file('file')) {
            $detinationPath = 'gambar/';
            $profileFile = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move(public_path($detinationPath), $profileFile);
            $input['file'] = "$profileFile";
        }


        Order_detail::create($input);
        return redirect()->route('order_details.index')
            ->with('success', 'Order Detail created susccesfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order_detail $order_detail)
    {
        return view('order_details.show', compact('order_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order_detail $order_detail)
    {
        return view('order_details.edit', compact('order_detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order_detail $order_detail)
    {
        $request->validate([
            'id_order' => 'required',
            'id_produk' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'file'  => 'required',
        ]);

        // $order_detail->update($request->all());
        // return redirect()->route('order_details.index')
        //                         ->with('success', 'Order Detail Updated successfully');
        $input = $request->all();

        if ($file = $request->file('file')) {
            $detinationPath = 'gambar/';
            $profileFile = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move(public_path($detinationPath), $profileFile);
            $input['file'] = "$profileFile";
        }


        Order_detail::create($input);
        return redirect()->route('order_details.index')
            ->with('success', 'Order Detail created susccesfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order_detail $order_detail)
    {
        $order_detail->delete();
        return redirect()->route('order_details.index')
            ->with('success', 'Order Detail Produk deleted susccesfully');
    }
}
